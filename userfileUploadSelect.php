<!DOCTYPE html>
<html>
<head>
<LINK href="styles/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="calender/calendar-system.css" title="win2k-cold-1" /> 
 <script type="text/javascript" src="calender/calendar.js"></script>
<script type="text/javascript" src="calender/calendar-en.js"></script>
<script type="text/javascript" src="calender/calendar-setup.js"></script>
<script language="JavaScript" src="calendar2.js"></script>
<script language="JavaScript" src="calendar1.js"></script>
<script language="JavaScript" src="js/cal_time.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function valid()
{
if(document.xls_frm.xls_file.value=="")
{
alert("Browse the File");
return false;
}
}
</script>
<body>
<?PHP
include("db_open.php");
include("validate.php");
//include("links.php");
?>
<form action="userfileUpload.php" method="post" enctype="multipart/form-data" name="xls_frm" id="xls_frm" onSubmit="return valid()">
<table align="center" width="800px">
   
   <br><br>
    <tr>
      <td colspan="2" background="images/title_bar2.gif" class="reporthead"> File Upload</td>
    </tr>
    <tr class="tablelabellt">
      <td align="left">Upload Client Data CSV file</td>
      <td><input name="xls_file" type="file" id="xls_file"></td>
    </tr>
    <tr class="tablelabellt">
<td align="left">Segment Group Name:</td>
<td align="left"><input type="text" name="tick_notxt" id="tick_notxt" maxlength="6">
     </td>

 </tr>
 <tr  class="tablelabellt">
<td align="left">Customer ID Type:</td>
<td align="left">
     <select name="connection_lst" size="1" id="connection_lst">
                  <option value="0" selected><---Select---></option>
                  <OPTION value="New">New</OPTION>
                  <OPTION value="Existing">Existing</OPTION>
				  </select></td>
 </tr>

<tr class="tablelabellt"> 
      <td align="left">Effective Date</td>
      <td align="left"> <input name="callbck_txt" type="text" id="callbck_txt" size="20" maxlength="20" class="textboxes1">
            <a href="javascript:cal1.popup();"> <img src="images/cal.gif" valign="bottom" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a>
	 <script language="JavaScript">
var dt1;
var dt2;
var dt_date1 = new Date();
var dt_date2 = new Date();

var cal1 = new calendar2(document.forms['xls_frm'].elements['callbck_txt']);
cal1.year_scroll = true;
cal1.time_comp = false;


</script>		
</td>
</tr>

<tr class="tablelabellt"> 
      <td align="left">End Date</td>
      <td align="left"> <input name="callbck_txt1" type="text" id="callbck_txt1" size="20" maxlength="20" class="textboxes1">
            <a href="javascript:cal2.popup();"> <img src="images/cal.gif" valign="bottom" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a>
	 <script language="JavaScript">
var dt1;
var dt2;
var dt_date1 = new Date();
var dt_date2 = new Date();

var cal2 = new calendar2(document.forms['xls_frm'].elements['callbck_txt1']);
cal1.year_scroll = true;
cal1.time_comp = false;


</script>		
</td>    </tr>
    <tr>
      <td colspan="2"> <div align="center">
          <input type="hidden" name="uid" value="<?php print($uid)?>">
          <input type="hidden" name="ssid" value="<?php print($ssid)?>">
          <input type="hidden" name="usr_pvlg" value="<?php print($usr_pvlg)?>">
          <input type="submit" name="Submit" value="Submit">
        </div></td>
    </tr>
  </table>
</form>
<p><strong>Instruction on uploading file </strong></p>
<p><strong>1. The file to be uploaded should be in .CSV format.</strong></p>
<p><strong>2. Date field should be in any of the following order</strong></p>
<p><strong>&quot;mm-dd-yyyy&quot; or &quot;m-d-yyyy&quot; or &quot;mm/dd/yyyy&quot; 
  or &quot;m/d/yyyy&quot;</strong></p>
<p><strong>3. Fields should be in the following order :</strong></p>
<table cellspacing="0" cellpadding="0">
    <td width="95">segment_nm</td>
    <td width="71">cust_sid</td>
</table>
<p><strong>Contents of the file will be listed in the next page. If there is any 
  discrepency in the file, use back button on the browser change the file format 
  and upload again. Data will be transfered to database only when the &quot;Insert 
to Database&quot; button is pressed in the bottom of next page.</strong> </p>
</body>
</html>
