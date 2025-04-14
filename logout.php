<?php
require_once __DIR__ . "/classes/Session.php";

use classes\Session;

Session::sessionStart();    
session_unset();
Session::sessionDestroy();
setcookie('remember_me', '', time() - 3600, "/");
header('Location: login.php');
exit;