<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];
include "$path/system/db.php";


$time=time();
$timeout=$time-60*2;
$query=$db->query("SELECT `login` FROM `online` WHERE `time_out`>$timeout");
while($row=$query->fetch_assoc()){
    $color=["#8B0000", "#4B0082", "#800080", "#800000", "#800080","#000080","#008000","#000000","#32CD32"];
    $randColor=array_rand($color);
    echo '<span style="color:'.$color[$randColor].';">'.$row[login].', </span>';   
}