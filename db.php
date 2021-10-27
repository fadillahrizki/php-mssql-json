<?php

$serverName = "serverName\\sqlexpress, 1542"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

?>