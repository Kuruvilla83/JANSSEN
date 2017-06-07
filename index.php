<!DOCTYPE html>
<?php
//error_reporting(E_ALL);
//echo ($_POST['uid_txt']);
$errorMessage = '';
if (isset($_POST['login']) && isset($_POST['password'])) 
{
	include("db_open.php");
	include("functions/functions.php");

//////////////////////////////////////////USER VALIDATION\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
	$uid = $_POST['login'];
	$pass = $_POST['password'];
	echo $pass;
	//echo $uid;
	$user_valid = "SELECT * FROM user_tbl where usr_id='$uid' and usr_pwd=md5('$pass')";
echo $user_valid;
	$result = mysql_query($user_valid) or die('Query failed. ' . mysql_error()); 
	
	if (mysql_num_rows($result) == 1) 
	{
		$user_array=mysql_fetch_array($result);
		if ($user_array['usr_status']!=0)
		{
		$usr_role =  $user_array['usr_role'];
		$usr_title =$user_array['usr_title'];
		$usr_supid=$user_array['usr_supid'];
		//echo $usr_title;
		//echo $usr_role;
		//exit;
		
		$empid = $user_array['empid'];
		setcookie("db_is_logged_in", true); 
		setcookie("C_USER_ID", $uid);
		setcookie("C_USER_PVLG", $usr_role);
		setcookie("C_USER_TITLE", $usr_title);
		setcookie("C_USER_SUPID", $usr_supid); 
		
		setcookie("C_EMPID", $empid);

//////////////////////////////// INSERT LOGIN TIME ////////////////////////////////
		$time_now=date("Y-m-d H:i:s",strtotime("now"));
		
		mysql_query ("UPDATE user_tbl set usr_logintime='$time_now' where usr_id='$uid'");

		

//////////////////////////////// FIRST TIME USER ////////////////////////////////
/*
		$get_user_data = mysql_query("SELECT count(*) FROM empinfo_tbl where empid=$empid");
		$usr_no=mysql_fetch_row($get_user_data);

		if ($usr_no[0]==0)
		{ 
			header('Location: empinfo_edit.php');
			exit();
		}*/
		header('Location: homepage.php');
		}
		else
		{
			$errorMessage="User Disabled. Contact your supervisor or Administrator";
		}
	}
	else 
	{
		$errorMessage = 'Sorry, wrong user id / password';
	}
}

?>

<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>JACC Application</title>
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<br><br><br><br>
<table width="700" border="0" align="center">
  <tbody>
    <tr>
      <td width="99" height="579"><img src="images/Login-CliffEnright_Sunburst1.png" width="90" height="575" alt=""/></td>
      <td width="498">    
      <div class="login">
      <h1>JAAC - Janssen Accenture Analytics Collaboration</h1>
<form action="index.php" method="POST" name="login_frm" id="login_frm" onSubmit="return check()">
      <p><input type="text" name="login" placeholder="Username or Email" id="login"></p>
        <p><input type="password" name="password" value="" placeholder="Password" id="password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
</td>
      <td width="25"><img src="images/Login-CliffEnright_Sunburst2.png" width="25" height="573" alt=""/></td>
    </tr>
  </tbody>
</table>
</body>
</html>