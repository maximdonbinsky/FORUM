<?
session_start();

$path=$_SERVER['DOCUMENT_ROOT'];

include "$path/system/db.php";

// print_r($_POST);

/////////////////////////////////////////////////////////////////////

if(isset($_POST['sendSignup'])){

    $query=$db->query("SELECT `login` FROM users WHERE login='$_POST[login]'");
    $rowCount=$query->num_rows;

    if($rowCount>0){
        echo "Данный пользователь уже есть в базе данных!";
    }
    else{
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
            $passwordHash=password_hash($_POST['password'],PASSWORD_DEFAULT);
            $db->query("INSERT INTO users VALUES(NULL,'$_POST[email]','$_POST[login]','$passwordHash')");
             $_SESSION['header']=true;
             header("Location: ../index.php");
            
        }
        // else{
        //   echo "<div>$errors[0]</div>" ;
        // }
    }
}

///////////////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['sendLogin'])){
    $query=$db->query("SELECT `login`,`password` FROM `users` WHERE `login`='$_POST[login]'");
    if($query->num_rows>0){
        $passwordInDb=$query->fetch_assoc()['password'];
        if(password_verify($_POST['password'],$passwordInDb)){
            $_SESSION['auth']=true;
            $_SESSION['login']=$_POST['login'];
            // header("Location: ../index.php"); 
            echo "УСПЕХ!";      
        }
        else{
            echo "Неверный пароль";
        }
        
    }
    else{
        echo "Данный пользователь не существует, либо неверный пароль";
     }
 }

 //////////////////////////////////////////////////////////////////////////

 
 
?>
        <header>
            <a href="../index.php"><div id="box-logo"></div></a>
            <div id="box-header">
                <div id="menu">
                    <img src="/img/1.png" alt="">
                    <div class="menu-text" id="logIn">Войти</div>
                    <img src="/img/1.1.png" alt="">
                    <img src="/img/1.png" alt="">
                    <div class="menu-text" id="register">Регистрация</div>
                    <img src="/img/1.1.png" alt="">
                    <img src="/img/1.png" alt="">
                    <div class="menu-text" id="rules">Правила форума</div>
                    <img src="/img/1.1.png" alt="">
                    <img src="/img/1.png" alt="">
                    <div class="menu-text" id="search">Поиск</div>
                    <img src="/img/1.1.png" alt="">
                </div>
                <div class="box-hello">
                    <div id="hello">
                    <?
                    if(isset($_SESSION['auth'])){
                        echo "Привет <b>$_SESSION[login]</b>";
                    }
                    else{
                        if(isset($_SESSION['login'])){
                            echo "Привет <b>$_SESSION[login]</b>";
                        }
                        else{
                            $rand=mt_rand(1,999);
                            $_SESSION['login']="Гость_$rand";
                            echo "Привет <b>$_SESSION[login]</b>";
                        }
                    }
                    ?>
                    </div>
                    <div id="time">Ваш последний визит: <b>сегодня в 21:34</b></div>
                </div>
                <div class="adv">Здесь могла быть<br> ваша реклама</div>
            </div>
        </header>

        <div id="modalBackSignup">
            <div id="modalSignup">
                <div class="close">&times;</div>
                <h2>Регистрация</h2>
                <form action="" method="post" id="formSignup">
                    <input type="email" name="email" id="email" placeholder="Email"><br>
                    <input type="text" name="login" id="loginSignup" placeholder="Логин"><br>
                    <input type="password" name="password" id="passwordSignup" placeholder="Пароль"><br>
                    <input type="password" name="password2" id="passwordSignup2" placeholder="Подтвердите пароль"><br>
                    <input type="submit" name="sendSignup" value="Зарегистрировать">
                </form>
            </div>
        </div>
        <div id="modalBackLogin">
            <div id="modalLogin">
                <div class="close">&times;</div>
                <h2>Авторизация</h2>
                <form action="" method="post" id="formLogin">
                    <input type="text" name="login" id="login" placeholder="Логин"><br>
                    <input type="password" name="password" id="password" placeholder="Пароль"><br>
                    <input type="submit" name="sendLogin" value="Войти">
                </form>
            </div>
        </div>