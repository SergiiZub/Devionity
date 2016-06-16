<?php
session_start();
require_once 'LoginForm.php';
require_once 'DB.php';
require_once 'Password.php';
require_once 'Session.php';

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'register';

$msg = '';

$db = new DB($host, $user, $password, $db_name);

$form = new LoginForm($_POST);

if ($_POST){
    if ($form->validate()){
        $username = $db->escape($form->getUsername());
        $password = new Password($db->escape($form->getPassword()));
        
        $res = $db->query("
                        SELECT * FROM user 
                        WHERE username = '{$username}' 
                        AND password = '{$password}' LIMIT 1");
        
        if (!$res){
            $msg = 'No such user found';
        } else {
            $user = $res[0]['username'];
            Session::set('user', $user);
            header('Location: index.php?msg=You_have_been_logged_in');
        }
    } else {
        $msg = 'Please fill in fields';
    }
}

?>

<b><?=$msg;?></b>

<form method="post">
    <label>User name:<br/>
        <input type="text" name="username" value="<?=$form->getUsername();?>">
    </label><br/>
    <label>Password:<br/>
        <input type="password" name="password">
    </label><br/>
    <input type="submit">
</form><br/>

<a href="register.php">Registration</a>
