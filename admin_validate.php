<?PHP

if(($_COOKIE['db_is_logged_in'] != true)||(!isset($_COOKIE['C_USER_ID']))||(($_COOKIE['C_USER_PVLG']!='SA')&&($_COOKIE['C_USER_PVLG']!='A')))
{
	header('location:index.php');
}
else
{
$user_id = $_COOKIE['C_USER_ID'];
$user_pvlg=$_COOKIE['C_USER_PVLG'];
//require_once("functions/functions.php");
//$empid=empid($user_id);
}
?>