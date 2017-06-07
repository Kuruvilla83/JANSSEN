
function caltime()
{
	var dt1;
var dt_date1 = new Date();
<!-- // create calendar object(s) just after form tag closed

// specify form element as the only parameter document.forms['formname'].elements['inputname']);

// note: you can have as many calendar objects as you need for your application
 
var cal1 = new calendar2(document.forms['ct_frm'].elements['callbck_txt']);
cal1.year_scroll = true;
cal1.time_comp = true;

//-->

	var dt_date1 = new Date(document.forms['ct_frm'].elements['callbck_txt'].value);
	var epoch1 = dt_date1.getTime();
    if( document.forms['ct_frm'].elements['tzone'].value == '2')
	{
     	if( epoch1 < 10000000000)
       		epoch1 *= 1000;    // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
         epoch1 = epoch1  - 3600000;   
	}
    if( document.forms['ct_frm'].elements['tzone'].value == '3')
    {
		if( epoch1 < 10000000000)
        	epoch1 *= 1000;    // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
        epoch1 = epoch1  - 7200000;   
    }  
	if( document.forms['ct_frm'].elements['tzone'].value == '4')
    {
		if( epoch1 < 10000000000)
        	epoch1 *= 1000;    // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
        epoch1 = epoch1  - 10800000;   
    }             
	var temp = new Date();
    temp.setTime( epoch1 );
	document.forms['ct_frm'].elements['callbck_txt'].value =  (temp.getMonth() < 9 ? '0' : '') + (temp.getMonth() + 1) +'/'
+  (temp.getDate() < 10 ? '0' : '') + temp.getDate()+ '/'+ temp.getFullYear() +' '+   (temp.getHours() < 10 ? '0' : '') + temp.getHours()+':' + (temp.getMinutes() < 10 ? '0' : '') + (temp.getMinutes()) +':'+ (temp.getSeconds() < 10 ? '0' : '') + (temp.getSeconds()) ;
   //alert("Value is " + document.forms['ct_frm'].elements['callbck_txt'].value);
	return true;
}


/*
function caltime(cb_form)
{
	var dt1;
var dt_date1 = new Date();
<!-- // create calendar object(s) just after form tag closed

// specify form element as the only parameter document.forms['formname'].elements['inputname']);

// note: you can have as many calendar objects as you need for your application
var cal1 = new calendar2(document.forms[cb_form].elements['callbck_txt']);
cal1.year_scroll = true;
cal1.time_comp = true;

//-->
 alert(document.forms[cb_form].elements['callbck_txt']);

	var dt_date1 = new Date(document.forms[cb_form].elements['callbck_txt'].value);
	var epoch1 = dt_date1.getTime();
    if( document.forms[cb_form].elements['tzone'].value == '2')
	{
     	if( epoch1 < 10000000000)
       		epoch1 *= 1000;    // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
         epoch1 = epoch1  - 3600000;   
	}
    if( document.forms[cb_form].elements['tzone'].value == '3')
    {
		if( epoch1 < 10000000000)
        	epoch1 *= 1000;    // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
        epoch1 = epoch1  - 7200000;   
    }  
	if( document.forms[cb_form].elements['tzone'].value == '4')
    {
		if( epoch1 < 10000000000)
        	epoch1 *= 1000;    // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
        epoch1 = epoch1  - 10800000;   
    }             
	var temp = new Date();
    temp.setTime( epoch1 );
	document.forms[cb_form].elements['callbck_txt'].value =  (temp.getMonth() < 9 ? '0' : '') + (temp.getMonth() + 1) +'/'
+  (temp.getDate() < 10 ? '0' : '') + temp.getDate()+ '/'+ temp.getFullYear() +' '+   (temp.getHours() < 10 ? '0' : '') + temp.getHours()+':' + (temp.getMinutes() < 10 ? '0' : '') + (temp.getMinutes()) +':'+ (temp.getSeconds() < 10 ? '0' : '') + (temp.getSeconds()) ;
   //alert("Value is " + document.forms[cb_form].elements['callbck_txt'].value);
	return true;
}
*/