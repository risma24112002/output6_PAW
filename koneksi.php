<?php
$host="localhost";
$user="root";
$password="";
$dbname="output_5";

$koneksi= mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi GAGAL";
}
?>



