<?php
$dbserver='localhost';
$dbusername='root';
$dbpassword='';
$dbname='safetyfirst';

$connect= new mysqli($dbserver,$dbusername,$dbpassword,$dbname);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
    

?>