<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

$db = Db::dataBase();

$ava = $db -> query("SELECT avatar FROM users WHERE login = '$_SESSION[login]'");
foreach($ava as $row) {
    if(file_exists('../img/avatars/'.$row['avatar'])) {
        foreach(glob('../img/avatars/'.$row['avatar']) as $file) {
            unlink($file);
        }
    }
}

if($_FILES["file"]["name"]!=""){
    $rand = rand(1,999999999999);
    move_uploaded_file($_FILES["file"]["tmp_name"],"../img/avatars/$rand.jpg");
    $db -> query("UPDATE `users` SET avatar = '$rand.jpg' WHERE login = '$_SESSION[login]'");
}




        

