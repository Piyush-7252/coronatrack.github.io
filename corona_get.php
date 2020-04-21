<?php
if($_POST['Id']==1){
$data=file_get_contents('https://api.covid19api.com/summary');
$corona=json_decode($data);
$len=count($corona->Countries);
$output = '';
for($i=0;$i<=$len;$i++){
if(isset($corona->Countries[$i])){
$output .= '
   <tr>
   <td>'.$i.'</td>
    <td>'.$corona->Countries[$i]->Country.'</td>
    <td>'.$corona->Countries[$i]->TotalConfirmed.'</td>
    <td>'.$corona->Countries[$i]->TotalDeaths.'</td>
    <td>'.$corona->Countries[$i]->NewRecovered.'</td>
    <td>'.$corona->Countries[$i]->NewDeaths.'</td>

  </tr>';
}
}
}

$data1=file_get_contents('https://api.covid19india.org/data.json');


$corona1=json_decode($data1);
$arr['active']=$corona1->statewise['0']->active;
$arr['deaths']=$corona1->statewise['0']->deaths;
$arr['lastupdatedtime']=$corona1->statewise['0']->lastupdatedtime;
$arr['recovered']=$corona1->statewise['0']->recovered;
$arr['output']=$output;
echo json_encode($arr);


?>