<?php 
 session_start();
$_SESSION["s_account_no"] = "";
$_SESSION["s_login"] = "";
session_unset();
session_destroy();
?>