<?php

$sname = "locahost";
$urmae = "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($sname, $urmae, $password, $db_name);

if(!$conn) {
    echo "connection failed";
}