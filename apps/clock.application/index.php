<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Clock</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
var d=today.getDate();
var month=new Array();
month[0]="Jan";
month[1]="Feb";
month[2]="Mar";
month[3]="Apr";
month[4]="May";
month[5]="Jun";
month[6]="Jul";
month[7]="Aug";
month[8]="Sep";
month[9]="Oct";
month[10]="Nov";
month[11]="Dec";
var mo=month[today.getMonth()];
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('hours').innerHTML=h+"";
document.getElementById('minutes').innerHTML=m+"";
document.getElementById('day').innerHTML=d+"";
switch (month){
	case 1:
}
document.getElementById('month').innerHTML=mo+"";
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>

</head>
<body onload="startTime()">

	<ul>
		<li><span id="hours"></span></li>
		<li><span id="minutes"></span></li>
		<li><span id="day"></span></li>
		<li><span id="month" class="date"></span></li>
	</ul>
	
	

</body>
</html>