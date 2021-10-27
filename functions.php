<?php

require_once 'db.php';

function getAllData($table){

    global $conn;

    $sql = "SELECT * FROM $table";
    $stmt = sqlsrv_query( $conn, $sql );

    $rows = array();
    while($r = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
        $rows[] = $r;
    }
    
    return json_encode($rows);
}

?>