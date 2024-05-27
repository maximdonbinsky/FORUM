<?php

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

class Authorization
{
    public function auth()
    {
        $db = Db::dataBase();
        if(isset($_POST['sendLogin'])) {
            $query = $db -> query("SELECT * FROM `users` WHERE `login`='$_POST[login]'");
            if($query->rowCount() > 0){
                $passwordInDb = $query -> fetch();
                if(password_verify($_POST['password'],$passwordInDb['password'])) {
                    $_SESSION['auth'] = true;
                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['status'] = $passwordInDb['status'];
                    // header("Location: ../index.php");   
                }
                else{
                    echo "<div class = 'error'>Неверный пароль!</div>";
                    header("Refresh: 4");
                }
                
            }
            else{
                echo "<div class = 'error'>Пользователь не существует или неверный пароль!</div>";
                header("Refresh: 4");
             }
         }
    }
} 