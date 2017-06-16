<?php
require_once "conectar.php";

$sql = "select * from sedes";
$res = mysql_query($sql, Conectar::con());
$row = mysql_fetch_Assoc($res);
$json = array(
    'id_sede' => $row['id_sede'],
    'nombre_sede' => $row['nombre_sede'],
    'Habilidades' => array()
);


foreach($row as $val){
    $json['Habilidades'][] = $val;
}

$jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);

$fh = fopen($row['username'].".json", 'w');
fwrite($fh, $jsonencoded);
fclose($fh);

?>
