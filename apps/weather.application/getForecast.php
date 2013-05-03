<?php
$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=London,uk&units=metric");
//echo $json;
$data = json_decode($json);
$weather = $data->{'weather'};
echo $weather;
$sky = $weather->{'main'};
echo $sky;


?>