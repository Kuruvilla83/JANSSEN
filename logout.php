<?php
include("db_open.php");
include("validate.php");

$past = time() - 172800; 
setcookie("user_id", "null", $past);
setcookie("user_pvlg", "null", $past); 
//setcookie('session_id',"null", $past);
setcookie('db_is_logged_in',"null", $past);

header( 'location:index.php' );
?>