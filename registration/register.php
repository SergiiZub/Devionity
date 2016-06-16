<?php
require_once ('RegistrationForm.php');
require_once ('DB.php');
require_once ('Password.php');

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'register';

$msg = '';

$db = new DB($host, $user, $password, $db_name);
$form = new RegistrationForm($_POST);

if ($_POST){
    if ($form->validate()){
        $email = $db->escape($form->getEmail());
        $username = $db->escape($form->getUsername());
        $password = new Password($db->escape($form->getPassword()));

        $res = $db->query("SELECT * FROM user WHERE username = '{$username}'");
        if ($res){
            $msg = 'Such user already exist!';
        } else {
            $db->query("INSERT INTO user (email, username, password) 
                        VALUES ('{$email}', '{$username}', '{$password}')");
            header('Location: index.php?msg=You have been registered');
        }
    } else {
        $msg = $form->passwordsMatch() ? 'Please fill in fields' : 'Passwords don\'t match';
    }
}

?>

<form method="post">
    <label>Username:<br/>
        <input type="text" name="username" value="<?=$form->getUsername();?>">
    </label><br/>
    <label>E-mail:<br/>
        <input type="email" name="email" value="<?=$form->getEmail();?>">
    </label><br/>
    <label>Password:<br/>
        <input type="password" name="password">
    </label><br/>
    <label>Confirm password:<br/>
        <input type="password" name="passwordConfirm">
    </label><br/>
    <input type="submit">
</form> 