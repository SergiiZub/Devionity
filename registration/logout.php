<?php
session_start();
require_once 'Session.php';

Session::destroy();

header('Location: index.php?msg=You_had_been_logged_out');