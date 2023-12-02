<?php 
// isi nama host, username mysql, dan password mysql anda
error_reporting(E_ALL ^ E_DEPRECATED and E_NOTICE);
$conn = mysqli_connect("localhost","root","","arion");

if(!$conn){
	echo "gagal konek database menn";
} else {
	
};

?>