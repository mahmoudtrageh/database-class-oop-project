<?php

require_once("Database.php");

$db = new Database();

echo $db->isConnected() ? "DB connected <br>" : "DB not connected <br>";

if( !$db->isConnected() ){
    echo $db->getError();
    die('Unable to connect to db');
}

$db->query("SELECT * FROM tbl_oop_test"); 
var_dump( $db->resultSet() );
echo "Row: " . $db->rowCount();
var_dump( $db->single() );

$db->query("SELECT * FROM tbl_oop_test Where id = :id");
$db->bind(':id', 3);
var_dump( $db->single() );