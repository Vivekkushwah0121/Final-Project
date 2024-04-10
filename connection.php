<?php
$servername="localhost";
$username="root";
$password="";
$database="empng";

$conn = new mysqli($servername , $password , $password , $database);
if($connconn->connect_error){
    die("Connection failed :" . $conn->connect_error);
}