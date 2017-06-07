<html>
<head>
<title>Insert BM Unresolved Data</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?PHP
include("db_open.php");
include("validate.php");
include("links.php");
include("functions/functions.inc.php");
$filenam=$_POST['filename_hf'];
$tday=date("Y-m-d");

$row = 1;
$handle = fopen("$filenam", "r");
while (($data = fgetcsv($handle, 2500, ",")) !== FALSE) {
   $num = count($data);
   if($row > 1 )
   {
   
$date1=trim($data[5],chr(160)." ");
$date2=trim($data[10],chr(160)." ");
$month2=substr($date2,0,2);
			$day2=substr($date2,3,2);
			$year2=substr($date2,6,4);
			$hh2=substr($date2,11,2);
			$mm2=substr($date2,14,2);
			$ss2=substr($date2,17,2);
			$date2=$year2."-".$month2."-".$day2." ".$hh2.":".$mm2.":".$ss2;
$date3=trim($data[24],chr(160)." ");
for($i=0;$i<=54;$i++)
		{
		$data[$i]=trim($data[$i],chr(160)." ");
		$data[$i]=addslashes($data[$i]);
		
		}
		$date1=substr($date1,0,10);
			list($month, $day, $year) = split('[/.-]', $date1);
			if (checkdate($month, $day, $year))
			{
				$date=$year."-".$month."-".$day;
			
		$emp_id=$data[47];
		$Get_user_details= mysql_query("SELECT tm_id,pm_id,sup_id,pros_id FROM user where empid =$emp_id");
		$user_array = mysql_fetch_array($Get_user_details );
		$tl_id=$user_array['sup_id'];
		$tm_id=$user_array['tm_id'];
		$pm_id=$user_array['pm_id'];
		$pros_id=$user_array['pros_id'];
		$call_type=csat_fld_name($data[17]);
		$broad=csat_fld_name($data[18]);
		$sub=csat_fld_name($data[19]);

    mysql_query("insert into bm_table (empid,tlid,tmid,pmid,kana_message_id,customer_email,customer_name,kana_csr_name,complete_date,csr_location,csr_supervisor,csr_manager,insert_date,caseid,assigned_to,account_no,call_type,broad_category,sub_category,country,status,call_date,lob,message_id,q1,q2,q3,q4a,q4b,q4c,q4d,q4e,q4f,q5a,q5b,conn_comment) values ($emp_id,'$tl_id','$tm_id','$pm_id','$data[0]','$data[1]','$data[2]','$data[4]','$date','$data[7]','$data[8]','$data[9]','$date2','$data[11]','$data[15]','$data[16]','$call_type','$broad','$sub','$data[21]','$data[22]','$date3','$data[27]','$data[34]','$data[35]','$data[36]','$data[37]','$data[38]','$data[39]','$data[40]','$data[41]','$data[42]','$data[43]','$data[44]','$data[45]','$data[46]')");

	
	
   }
   }
   $row++;
   	$insid_sur =mysql_insert_id();
}
fclose($handle);
if( $insid_sur)	
echo "<BR>Sucessfully loaded to the database....";
else
echo "<BR> Error Updating Data..";
?>
</body>
</html>