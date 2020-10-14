<?php
//phpinfo();
$serverName = "BEST-KOMP\\sqlexpress"; 
$connectionInfo = array( "Database"=>"Interview", "UID"=>"Tihhy", "PWD"=>"454215718", "CharacterSet"  => 'UTF-8');
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


$sql = 'insert into [Users] (lastname, firstname, age) values (?, ?, ?)';
$params = array ('Победа', 'победа вместо обеда', 4221);
$result = sqlsrv_query ($conn , $sql, $params);


if( $result === false ) {
     die( print_r( sqlsrv_errors(), true));
}
?>