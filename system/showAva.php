<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

$db = Db::dataBase();

$query = $db -> query("SELECT `avatar` FROM `users` WHERE login = '$_SESSION[login]'");
foreach($query as $row){
    static $array = [];
    $array[] = ["avatar"=>$row['avatar']];
}
echo json_encode($array);