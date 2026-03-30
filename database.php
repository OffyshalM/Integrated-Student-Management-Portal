<?php 
session_start();
$host = 'localhost';
$user='root';
$password="";
$db_name = 'School_Management_System';

$connect = mysqli_connect($host,$user,$password,$db_name);
?>