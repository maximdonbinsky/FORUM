<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

$db = Db::dataBase();

$date = date("Y-m-d");
$time = date("H:i:s");
$timeOut=time();
$user = $db->query("SELECT `login` FROM `online` WHERE `login`='$_SESSION[login]'");
if($user->rowCount()>0){
    $db->query("UPDATE `online` SET time_out= '$time', date_out='$date', `timeOut`='$timeOut' WHERE `login`='$_SESSION[login]'");
}
else{
    $db->query("INSERT INTO `online` VALUES(NULL,'$_SESSION[login]','$time','$date','$timeOut')");
}

$timeout = $timeOut-60*2; 
$query = $db->query("SELECT `login` FROM `online` WHERE `timeOut`>$timeout");
while($row = $query->fetch()){
    $color = ["#8B0000", "#4B0082", "#800080", "#800000", "#800080","#000080","#008000","#000000","#32CD32"];
    $randColor=array_rand($color);
    echo '<span style="color:'.$color[$randColor].';">'.@$row[login].', </span>';   
}