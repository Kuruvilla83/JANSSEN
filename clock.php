<html>
<head>


</head>
<span id=tick2>
</span>

<script>
<!--

/*By JavaScript Kit
http://javascriptkit.com
Credit MUST stay intact for use
*/

function show2()
{
if (!document.all&&!document.getElementById)
return
thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
var Digital=new Date()
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
//document.write("Today is " + weekday[Digital.getDay()])
var dates=Digital.getDate()
var yr=Digital.getFullYear()
//var days=Digital.getDay()

  
var curr_month=Digital.getMonth()
curr_month++;
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()

var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
var ctime=weekday[Digital.getDay()]+","+hours+":"+minutes+":"+seconds+" "+dn+","+" "+dates+"-"+curr_month+"-"+yr+" "
thelement.innerHTML="<b style='font-size:8;color:black;'>"+ctime+"</b>"

setTimeout("show2()",1000)
}
window.onload=show2
//-->
</script>


</body>
</html>
