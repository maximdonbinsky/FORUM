<?php

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

class Registration
{
    public function reg()
    {
        $db = Db::dataBase();
        $date = date("Y-m-d");
        // $date = date('d.m.Y', strtotime($date1));
        // var_dump($date);
        $status = "Пользователь";
        $avatar = "ava.jpg";
        if(isset($_POST['sendSignup'])) {

            $_POST['login'] = trim($_POST['login']);

            $query = $db -> query("SELECT `login`, email FROM users WHERE `login` = '$_POST[login]' OR email = '$_POST[email]'");
            $rowCount = $query -> rowCount();

            if($rowCount > 0) {
                echo "<div class = 'error'>Пользователь с таким логином или почтой уже есть!</div>";
                header("Refresh: 4");
            }
            else {
                $errors=[];
                if($_POST['email']==""){
                    $errors[]="Введите email!";
                }
                if($_POST['login']==""){
                    $errors[]="Введите логин!";
                }
                if($_POST['password']==""){
                    $errors[]="Введите пароль!";
                }
                if($_POST['password']!=$_POST['password2']){
                    $errors[]="Пароли не совпадают!";
                }

                if(empty($errors)){
                    $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $querySave = $db->prepare("INSERT INTO users (`email`,`login`,`password`,`date_reg`,`status`,`avatar`) VALUES(:email,:login,:password,:date_reg,:status,:avatar)");
                    $querySave -> execute([
                        ":email" => $_POST['email'],
                        ":login" => $_POST['login'],
                        ":password" => $_POST['password'],
                        ":date_reg" => $date,
                        ":status" => $status,
                        ":avatar" => $avatar
                    ]);
                    $_SESSION['header']=true;
                    $_SESSION['auth']=true;
                    $_SESSION['login']=$_POST['login'];
                    $_SESSION['status']=$passwordInDb['status'];

                    echo "<div class = 'error'>Вы успешно зарегистрированны!</div>";

                    header("Refresh: 4");
                    
                }
                else{
                echo "<div class = 'error'>$errors[0]</div>" ;
                }
            }
        }
    }
}

