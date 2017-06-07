<html>
<head>
<title>Upload CSV File</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include("db_open.php");
include("validate.php");
//include("links.php");

$_FILES['xls_file']['tmp_name']; 
	//echo $_FILES['xls_file']['tmp_name'];
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['xls_file']['name']); 
$filename = strtolower($target_path) ; 
$exts = split("[/\\.]", $filename) ; 
$n = count($exts)-1; 
$exts = $exts[$n]; 
	//echo $exts;
if($exts==csv)
{
//move_uploaded_file($_FILES['xls_file']['tmp_name'], $target_path);
	 if(move_uploaded_file($_FILES['xls_file']['tmp_name'], $target_path)) 
	{
    	echo "The file ".  basename( $_FILES['xls_file']['name'])." has been uploaded";
	} 
	else
	{
    	echo "There was an error uploading the file, please try again!";
		exit();
	} 
	$filenam= $target_path;
?>
<table width="66%" border="1" cellspacing="1">
  <tr>
    <td width="19%">SL No</td>
    <td width="19%">segment_gp</td>
    <td width="21%">segment_nm</td>
    <td width="21%">cust_sid</td>
    <td width="24%">cust_sid_type</td>
    <td width="19%">effective_date</td>
    <td width="19%">end_date</td>
  </tr>
  <?
	$row = 1;
	$sl = 0;
	$handle = fopen("$filenam", "r");
	while (($data = fgetcsv($handle, 2500, ",")) != FALSE) 
	{
  		$num = count($data);
		if($row==1)
   		{
		if($data[0]!='segment_nm' || $data[1]!='cust_sid')
		{
			echo "The fields in the file should be (segment_nm, cust_sid)";
			exit();

		}  
		}
		$flag=0;
		if($row > 1 )
	   	{
			
		for($i=0;$i<=2;$i++)
		{
		$data[$i]=trim($data[$i],chr(160)." ");		
		//$data[$i]=htmlentities($data[$i]);
		$data[$i]=addslashes($data[$i]);
		}
			
   ?>
  <tr> 
    <td><? echo $sl; ?></td>
    <td><? echo $data[0] ?></td>
    <td><? echo $data[1] ?></td>
    <td><? echo $_POST['tick_notxt']; ?></td>
    <td><? echo $_POST['connection_lst']; ?></td>
    <td><? echo $_POST['callbck_txt']; ?></td>
    <td><? echo $_POST['callbck_txt1']; ?></td>
    
  </tr>
  <?			
		   
    	}
	   	$row++;
		$sl++;
	}
	?>
</table>
	<?
	fclose($handle);
?>

<form name="hd_frm" method="POST" action="userfileUploadInsert.php" >
  <input type="hidden" name="uid" value="<? print($uid)?>">
   <input type="hidden" name="ssid" value="<? print($ssid)?>">
    <input type="hidden" name="usr_pvlg" value="<? print($usr_pvlg)?>">
	<input name="filename_hf" type="hidden" id="filename_hf" value="<? print($filenam)?>">
   <input type="submit" name="Submit" value="Transfer to Database">
</form>
<?
}
else
	echo "Upload a CSV extension file Try Again";
?>
</body>
</html>