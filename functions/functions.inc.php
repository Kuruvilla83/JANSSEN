<?PHP
 	 function user_name($user_id)
	 {
	 	$Get_user_details= mysql_query("SELECT name FROM user where empid ='$user_id'");
		$user_array = mysql_fetch_array($Get_user_details );
		$user_name=$user_array[0];
		if(!$user_name)
		$user_name=$user_id;
		return ($user_name);
	 }
	 function u_id($user_id)
	 {
	 	$Get_user_details= mysql_query("SELECT name FROM user where uid ='$user_id'");
		$user_array = mysql_fetch_array($Get_user_details );
		$user_name=$user_array[0];
		if(!$user_name)
		$user_name=$user_id;
		return ($user_name);
	 }
	  	 function empid($uid)
	 {
	 	$Get_user_details= mysql_query("SELECT empid FROM user where uid ='$uid'");
		$user_array = mysql_fetch_array($Get_user_details );
		$user_name=$user_array[0];
		if(!$user_name)
		$user_name=$uid;
		return ($user_name);
	 }
	 
	  function prosid($uid)
	 {
	 	$Get_user_details= mysql_query("SELECT pros_id FROM user where uid ='$uid'");
		$user_array = mysql_fetch_array($Get_user_details );
		$user_name=$user_array[0];
		if(!$user_name)
		$user_name=$uid;
		return ($user_name);
	 }
	  	 function fld_name($fld_id)
	 {
	 	if ($fld_id==0)
		{
			$fld_name='';
			return ($fld_name);
		}
		else
		{
	 	$Get_fld_details= mysql_query("SELECT field_name FROM list_tbl where field_id =$fld_id");
		$fld_array = mysql_fetch_array($Get_fld_details );
		$fld_name=$fld_array[0];
		if(!$fld_name)
		$fld_name=$fld_id;
		return ($fld_name);
		}
	 }
	 
	 function train_fld_name($fld_id)
	 {
	 	if ($fld_id==0)
		{
			$fld_name='';
			return ($fld_name);
		}
		else
		{
	 	$Get_fld_details= mysql_query("SELECT cat_desc FROM trainsched_tbl where cat_id =$fld_id");
		$fld_array = mysql_fetch_array($Get_fld_details );
		$fld_name=$fld_array[0];
		if(!$fld_name)
		$fld_name=$fld_id;
		return ($fld_name);
		}
	 }

    function csat_fld_name($fld_name)
	 {
	 	if ($fld_name=='')
		{
			$fld_id=0;
			return ($fld_id);
		}
		else
		{
	 	$Get_fld_details= mysql_query("SELECT field_id FROM list_tbl where field_name ='$fld_name'");
		$fld_array = mysql_fetch_array($Get_fld_details );
		$fld_id=$fld_array[0];
		if(!$fld_id)
		$fld_id=$fld_name;
		return ($fld_id);
		}
	 }
	 	
	function mtr_check($techid,$mtr_by)
	 {
		$tday=date("Y-m-d");
	 	$Get_mtr_details= mysql_query("SELECT count(*) FROM tmfmast_tbl where empid=$techid and mtr_by=$mtr_by and mtr_date='$tday'");
		$mtr_array = mysql_fetch_row($Get_mtr_details );
		$mtr_cnt=$mtr_array[0];
		if($mtr_cnt > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	 }

?>