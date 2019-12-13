<?php
$user= "root" ;
$server= "localhost";
$password=  "";
$database= "ujian" ;

$rumah= mysqli_connect($server,$user,$password);
if ($rumah){
   echo 'Berhasil Terhubung<br/>'; 
}else{
   echo'ada yang salah..';
   }
$db= mysqli_select_db($rumah,$database);
if ($db){
echo ' Database Connected...<br/>';
}else {
 echo 'coba dicek lagi !!';
 }
?>