<?php
$servername="localhost";
$sid="root";

$password="";
$dbname="student";
$conn= mysqli_connect($servername,$sid,$password,$dbname);
if ($conn) {
    echo " ";
}
else{
    echo "connection failed!! waps se check kr le";
}
?>
