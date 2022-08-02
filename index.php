<?php

$json = file_get_contents('https://api.mozambiquehe.re/bridge?version=4&platform=PC&player=kazafxu&auth=b1c456b9557ad0a41aa5475155fe41db');
$data = json_decode($json);


echo $data->global->name . '&nbsp';
echo $data->global->rank->rankName . '&nbsp';
echo $data->global->rank->rankDiv . '&nbsp';
echo $data->global->rank->rankScore . '&nbsp';
?>
