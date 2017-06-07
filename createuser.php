<html>
<head>
<title>Create A New User</title>
<link rel="stylesheet" href="styles/style.css">
</head>
<body onLoad="fieldfocus()">
<?
include("db_open.php");
include("admin_validate.php");
include("functions/functions.php");
//include("links.php");
include("header.php");


$flag=$_POST['flag_hf'];
if ($flag==1)
{

	$empid=empid($user_id);
	$empno=$_POST['empid_txt'];
	$name=addslashes($_POST['empname_txt']);
	$name =ucwords($name);
	$avaya=$_POST['avaya_txt'];
	$sup_id=$_POST['sup_lst'];
	$pros_id=$_POST['pros_lst'];
	$title=$_POST['desgn_lst'];
	$role=$_POST['role_lst'];
	$Get_empid=mysql_query("SELECT * FROM user_tbl where empid=$empno");
	$df=mysql_num_rows($Get_empid);
	$rt_now=date("Y-m-d H:i:s",strtotime("now"));
	if ($df==0)
	{
		mysql_query ("INSERT INTO `user_tbl` (`usr_id`, `usr_name`, `usr_avayaid`,`usr_pwd`,`empid`, `usr_title`,`usr_supid`,`usr_prosid`,`usr_role`, `created_by`, `created_on`) VALUES ('$empno', '$name', '$avaya',md5('Belkin'), '$empno', '$title','$sup_id','$pros_id','$role',$empid,'$rt_now')");
		//echo("INSERT INTO `user_tbl` (`usr_id`, `usr_name`, `usr_avayaid`,`usr_pwd`,`empid`, `usr_title`,`usr_supid`,`usr_prosid`,`usr_role`, `created_by`, `created_on`) VALUES ('$empno', '$name', '$avaya',md5('Belkin'), '$empno', '$title','$sup_id','$pros_id','$role',$empid,'$rt_now')");
		//exit;
		if(mysql_insert_id)
		echo ('User Created');
	}
	else 
		echo ('User Already exists');
}
?>

  <script language="javascript">
<!--
function valid()
{
if(document.forms['createuser'].empid_txt.value =="")
{
alert("Enter a value for employee number");
document.forms['createuser'].empid_txt.focus();
return false;
}
var a = document.forms['createuser'].empid_txt.value;
if(isNaN(a) == true)
{
alert("Enter a valid employee number");
return false;
}
if(document.forms['createuser'].empname_txt.value =="")
{
alert("Enter a value for employee name");
document.forms['createuser'].empname_txt.focus();
return false;
}
if(document.forms['createuser'].avaya_txt.value =="")
{
alert("Enter a value for Avaya ID");
document.forms['createuser'].avaya_txt.focus();
return false;
}
var a = document.forms['createuser'].avaya_txt.value;
if(isNaN(a) == true)
{
alert("Enter a valid ID");
return false;
}
if(document.forms['createuser'].role_lst.value =="0")
{
	alert("Choose Access Rights");
	document.forms['createuser'].role_lst.focus();
	return false;
}


document.createuser.flag_hf.value=1;
}
function fieldfocus()
{
	document.forms['createuser'].empid_txt.focus();
}

function changecase(name)
{
	word=name.value
	lower = word.toLowerCase();
	upper = word.toUpperCase();
  	normal = upper.substring(0,1) + lower.substring(1,lower.length)
	name.value=	normal;
}

//-->
</script>
<p>&nbsp;</p>
<form name="createuser"  method="POST" action="createuser.php" onSubmit="return valid()">
  <div align="center">
    <center>
     <table border="0" cellpadding="0" cellspacing="1" style="border-collapse: collapse"  width="50%" id="AutoNumber2">
	  <tr> 
          <td height="30" colspan="2" background="images/title_bar1.gif" class="reporthead"> Create New User</td>
          
        </tr>
    
	  <tr class="formlabel"> 
          <td width="48%"> Employee Id</td>
          <td width="52%"><input name="empid_txt" type="text" id="empid_txt" size="15" maxlength="5"></td>
        </tr>
	  <tr class="formlabel"> 
          <td width="48%">Employee Name</td>
          <td width="52%"><input type="text" name="empname_txt" size="20" onChange="changecase(empname_txt)"></td>
        </tr>
		<tr class="formlabel"> 
          <td width="48%">Employee Email ID</td>
          <td width="52%"><input type="text" name="empname_txt" size="20" onChange="changecase(empname_txt)"></td>
        </tr>
		<tr class="formlabel"> 
          <td width="48%">Avaya / Telephone Id</td>
          <td width="52%"><input name="avaya_txt" type="text" id="avaya_txt" size="15" maxlength="5"></td>
        </tr>
	  <tr class="formlabel"> 
          <td width="48%">Select Designation</td>
          <td width="52%"> <select name="desgn_lst" size="1" id="desgn_lst">
              <option value="TSE">BIS User</option>
              <option value="TL">TL</option>
              <option value="TM">TM</option>
              <option value="PM">PM</option>
           </select> </td>
        </tr>
        <?
$Get_sup_details= mysql_query("SELECT * FROM user_tbl where usr_title = 'TL' or usr_title = 'TM'");
?>
	  <tr class="formlabel"> 
          <td width="48%">Select Supervisor Name</td>
          <td width="52%"><select id="sup_lst" size="1" name="sup_lst">
              <option value="NA" selected>NA</option>
              <?
 while ( $thearray = mysql_fetch_array($Get_sup_details ))
                    {   $sup_id = $thearray['empid'];
					$sup_name = $thearray['usr_name'];
					?>
              <option value="<? print $sup_id; ?>"><? echo $sup_name; ?></option>
              <?
		}
		?>
            </select></td>
        </tr>
	  <tr class="formlabel"> 
          <td width="48%">Select Process</td>
          <td width="52%"><select name="pros_lst" size="1" id="pros_lst">
              <option value="NA">Not Available</option>
              <option value="L1">Level1</option>
              <option value="L2">Level2</option>
              <option value="CC">Command Centre</option>
              <option value="KE">Knowledge Engineer</option>
           </select></td>
        </tr>
<tr class="formlabel"> 
          <td width="48%">Access Rights</td>
          <td width="52%"><select name="role_lst" size="1" id="role_lst">
              <option value="0"><---Select One ---></option>
              <option value="TL1">L1 (BIS Tracker user)</option>
              <option value="TL2">L2 (BIS Tracker user)</option>
              <option value="TLL">Both L1 & L2 (BIS Tracker user)</option>
              <option value="RP">Report Puller</option>
              <option value="QL">Quality</option>
              <option value="A">Admin</option>
          </select></td>
        </tr>	  <tr class="formlabel"> 
          <td colspan="2"> <div align="center">
              <input type="submit" value="Submit" name="B1">
              <input name="flag_hf" type="hidden" id="flag_hf" value="0">
            </div></td>
        </tr>
      </table>
    </center>
  </div>
</form>
<?
 include("overall_footer.html");
?>