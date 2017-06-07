<?PHP
ini_set('display_errors', '0');
$db_host = "localhost";
$db_user = "root";
$db_passwd = "";
$db_name = "jj_db";
mysql_connect($db_host, $db_user, $db_passwd) or
die ("Unable to contact session database server. Try again later. Thanks.");

$conn = mysql_connect("localhost", "root", "") or die("Could not connect");
mysql_select_db($db_name);
/*$db_host = "localhost";
$db_user = "webmaster";
$db_passwd = "password";
$db_name = "nova";
mysql_connect($db_host, $db_user, $db_passwd) or
die ("Unable to contact session database server. Try again later. Thanks.");

$conn = mysql_connect("localhost", "webmaster", "lingo") or die("Could not connect");
mysql_select_db($db_name);*/
?>
