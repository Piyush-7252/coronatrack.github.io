<?php
$data=file_get_contents('https://api.covid19india.org/data.json');


$corona=json_decode($data);
$arr['active']=$corona->statewise['0']->active;
$arr['deaths']=$corona->statewise['0']->deaths;

$arr['recovered']=$corona->statewise['0']->recovered;
echo json_encode($arr);

?>