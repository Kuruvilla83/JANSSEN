<?PHP


/*function user_name($user_id)
{
	$Get_user_details= mysql_query("SELECT usr_name FROM user_tbl where empid ='$user_id'",$conn);
	$user_array = mysql_fetch_array($Get_user_details);
	$user_name=$user_array[0];
	if(!$user_name)
	$user_name=$user_id;
	return ($user_name);
}
function u_id($user_id)
{
	$Get_user_details= mysql_query("SELECT usr_name FROM user_tbl where usr_id ='$user_id'",$conn);
	$user_array = mysql_fetch_array($Get_user_details );
	$user_name=$user_array[0];
	if(!$user_name)
	$user_name=$user_id;
	return ($user_name);
}
function empid($uid)
{
	$Get_user_details= mysql_query("SELECT empid FROM user_tbl where usr_id ='$uid'",$conn);
	$user_array = mysql_fetch_array($Get_user_details );
	$user_name=$user_array[0];
	if(!$user_name)
	$user_name=$uid;
	return ($user_name);
}
 
function prosid($uid)
{
	$Get_user_details= mysql_query("SELECT pros_id FROM user_tbl where usr_id ='$uid'",$conn);
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
		$Get_fld_details= mysql_query("SELECT lst_fldname FROM list_tbl where lst_id =$fld_id",$conn);
		$fld_array = mysql_fetch_array($Get_fld_details );
		$fld_name=$fld_array[0];
		if(!$fld_name)
		$fld_name=$fld_id;
		return ($fld_name);
	}
}

*/
function user_name($user_id)
{
	$Get_user_details= mysql_query("SELECT usr_name FROM user_tbl where empid ='$user_id'");
	$user_array = mysql_fetch_array($Get_user_details);
	$user_name=$user_array[0];
	if(!$user_name)
	$user_name=$user_id;
	return ($user_name);
}
function u_id($user_id)
{
	$Get_user_details= mysql_query("SELECT usr_name FROM user_tbl where usr_id ='$user_id'");
	$user_array = mysql_fetch_array($Get_user_details );
	$user_name=$user_array[0];
	if(!$user_name)
	$user_name=$user_id;
	return ($user_name);
}
function empid($uid)
{
	$Get_user_details= mysql_query("SELECT empid FROM user_tbl where usr_id ='$uid'");
	$user_array = mysql_fetch_array($Get_user_details );
	$user_name=$user_array[0];
	if(!$user_name)
	$user_name=$uid;
	return ($user_name);
}
///Encode PG Function
function encode_pg($str_value)
{
        return pg_escape_string(trim(utf8_encode(htmlentities($str_value,ENT_QUOTES)))) ;
}
function decode_pg($str_value)
{
        return html_entity_decode(trim(utf8_decode($str_value),ENT_QUOTES)) ;
}

function prosid($uid)
{
	$Get_user_details= mysql_query("SELECT pros_id FROM user_tbl where usr_id ='$uid'");
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
		$Get_fld_details= mysql_query("SELECT lst_fldname FROM list_tbl where lst_id =$fld_id");
		$fld_array = mysql_fetch_array($Get_fld_details );
		$fld_name=$fld_array[0];
		if(!$fld_name)
		$fld_name=$fld_id;
		return ($fld_name);
	}
}
 
function sec2hms($num_secs) 
{ 
	$str = ''; 
	if($num_secs>0) 
	{
		$hours = intval(intval($num_secs) / 3600); 
		$str .= $hours.':'; 
		
		$minutes = intval(((intval($num_secs) / 60) % 60)); 
		if ($minutes < 10) $str .= '0'; 
		$str .= $minutes.':'; 
		
		$seconds = intval(intval(($num_secs % 60))); 
		if ($seconds < 10) $str .= '0'; 
		$str .= $seconds; 
	}
	else if($num_secs<0)
	{
		$hours = intval(intval($num_secs) / 3600); 
		$str .= $hours.':'; 
		
		$minutes = intval(((intval(-$num_secs) / 60) % 60)); 
		if ($minutes < 10); 
		$str .= $minutes.':'; 
		
		$seconds = intval(intval((-$num_secs % 60))); 
		if ($seconds < 10); 
		$str .= $seconds; 
	}
	else
		$str=0;
	return($str); 
}

function dirList ($directory)
{
    // create an array to hold directory list
    $results = array();

    // create a handler for the directory
    $handler = opendir($directory);

    // keep going until all files in directory have been read
    while ($file = readdir($handler)) {

        // if $file isn't this directory or its parent, 
        // add it to the results array
		
		if(filetype($directory . $file)=="file")
		{
        if ($file != '.' && $file != '..')
		echo "$file "  . "*";
            $results[] = $file;
		}
		//print_r($result);
		//exit;
    }

    // tidy up: close the handler
    closedir($handler);

    // done!
    return $results;
}
?>