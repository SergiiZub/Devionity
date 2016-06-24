<?php
session_start();
require_once 'Session.php';

if (Session::has('user')){
    echo "Hello, " . Session::get('user');
} else {
    echo 'Restricted area! Get out!';
    //header('Location: index.php');
}
?>

<br/><a href="index.php">Go to start page</a>
