<?php
function connectsql(){
session_start();
$dbuser = "root";
$dbpassword = "linux123";
$dbhost = "localhost";
$dbselected = "db";
$conn = new PDO('mysql:host='.$dbhost.';dbname='.$dbselected,$dbuser,$dbpassword);
$conn->exec("set names utf8");
return $conn;

}
?>