<?PHP
if(($_COOKIE['db_is_logged_in'] != true)||(!isset($_COOKIE['C_USER_ID'])))
	{
		header('location:index.php');
	}
else
{
$user_id = $_COOKIE['C_USER_ID'];
//$user_pvlg=$_COOKIE['C_USER_PVLG'];
//$empid=$_COOKIE['C_EMPID'];
//require_once("functions/functions.php");
//$empid=empid($user_id);
}
?>