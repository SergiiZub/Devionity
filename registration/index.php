<?php
session_start();
require_once 'Session.php';

?>

<?php if (Session::has('user')) : ?>
    <h3><a href="logout.php">Logout (<?=Session::get('user');?>)</a> </h3><br/>
    <h3><a href="admin.php">Go to admin page</a> </h3><br/>
<?php else:?>
    <h3><a href="login.php">Login</a> </h3><br/>
    <h3><a href="register.php">Register</a> </h3><br/>
<?php endif;?>


<?=isset($_GET['msg']) ? $_GET['msg'] : '';?>