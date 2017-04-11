<?php
/*
* Mirko Schäfer
* Copyright 2017 
* ALLNET5000 Plugin
*/
$hostname = $_SERVER['argv'][1];
$user = $_SERVER['argv'][2];
$pass = $_SERVER['argv'][3];
$id = $_SERVER['argv'][4];
$warning = $_SERVER['argv'][5];
$critical = $_SERVER['argv'][6];

$buf = file_get_contents ( "http://".$user.":".$pass."@".$hostname."/xml/?mode=sensor&type=list&id=" . $id );
$xml=simplexml_load_string($buf);
$cur =floatval($xml->current);
$perf = " |Value=".$xml->current . "\n";
if ($cur<$warning){
    echo "VALUE OK: Value " . $xml->current . $xml->unit . " " . $xml->name. $perf;
    exit(0);
}
elseif ($cur>$warning && $cur<$critical){
     echo "VALUE WARNING: Value " . $xml->current  . $xml->unit . " " . $xml->name. $perf;
     exit(1);
}
else {
    echo "VALUE CRITICAL: Value" . $xml->current  . $xml->unit . " " . $xml->name. $perf;
    exit(2);
}
?>
