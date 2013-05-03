<?php
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=London,uk&units=metric");
$data = json_decode($json,true);
$weather = $data['weather'][0];
$sky = $weather['main'];
$description = $weather['description'];
$city = $data['name'];
$temp = $data['main']['temp'];



echo '
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
			<title>Weather</title>
	</head>
	<body>
	<img src="/apps/weather.application/images/rain.png"></img>
	<div class="data">
	<b><p class="temp">';
	echo $city;
	echo " ";
	echo floor($temp);echo '&degC</p><b>
	</div>
	</body>
</html>';
?>