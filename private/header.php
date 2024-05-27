<?
session_start();

$path = $_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";
require_once "$path/classes/Registration.php";
require_once "$path/classes/Authorization.php";

$db = Db::dataBase();

$reg = new Registration;
$reg->reg();

$auth = new Authorization;
$auth->auth();

?>
<header>
    <a href="/main"><div id="box-logo">
        <img src="/img/logo2.png" alt="logo">
        <span>Женский уголок - форум для женщин</span>
    </div></a>
    <div id="box-header">
        <div id="menu">
            <img src="/img/1.png" alt="">
            <a href="/main"><div class="menu-text"><i class="bi bi-house-door"></i> Главная</div></a>
            <img src="/img/1.1.png" alt="">
        <?
        $profile = $db -> query("SELECT `login` FROM `users` WHERE login = '$_SESSION[login]'");
        if($profile -> rowCount() > 0){
        echo '<img src="/img/1.png" alt="">
                <a href="/profile"><div class="menu-text"><i class="bi bi-file-earmark-person"></i> Профиль</div></a>
                <img src="/img/1.1.png" alt="">
                <img src="/img/1.png" alt="">
                <a href="/rules"><div class="menu-text" id="rules"><i class="bi bi-exclamation-square"></i> Правила форума</div></a>
                <img src="/img/1.1.png" alt="">
                <img src="/img/1.png" alt="">
                <div class="menu-text" id="exit"><i class="bi bi-box-arrow-left"></i> Выйти</div>
                <img src="/img/1.1.png" alt="">';
        }
        else{
        echo '<img src="/img/1.png" alt="">
                <div class="menu-text" id="logIn"><i class="bi bi-box-arrow-in-right"></i> Войти</div>
                <img src="/img/1.1.png" alt="">
                <img src="/img/1.png" alt="">
                <div class="menu-text" id="register"><i class="bi bi-journal-check"></i> Регистрация</div>
                <img src="/img/1.1.png" alt="">
                <img src="/img/1.png" alt="">
                <a href="/rules"><div class="menu-text" id="rules"><i class="bi bi-exclamation-square"></i> Правила форума</div></a>
                <img src="/img/1.1.png" alt="">';
        }   
        ?>
        </div>
        <div class="box-hello">
            <div id="hello">
            <?
            if(isset($_SESSION['auth'])){
                echo "Привет <i class='bi bi-emoji-wink'></i>, <b>$_SESSION[login]</b>";
            }
            else{
                if(isset($_SESSION['login'])){
                    echo "Привет <i class='bi bi-emoji-wink'></i>, <b>$_SESSION[login]</b>";
                }
                else{
                    $rand = mt_rand(1,999);
                    $_SESSION['login'] = "Гость_$rand";
                    echo "Привет <i class='bi bi-emoji-wink'></i>, <b>$_SESSION[login]</b>";
                }
            }
            ?>
            </div>
            <div id="time">
                <?
                if(empty($_SESSION['auth'])) {
                    echo "Пожалуйста, войдите или зарегистрируйтесь, что бы комментировать темы и отвечать на сообщения!";
                }
                ?>
            </div>
        </div>
        <img class="banner" src="../img/baner.gif">
    </div>
</header>

<div id="modalBackSignup">
    <div id="modalSignup">
        <div class="close"><i class="bi bi-x-square"></i></div>
        <h2 id = "infoReg">Регистрация</h2>
        <form action="" method="post" id="formSignup">
            <input type="email" name="email" id="email" placeholder="Email"><br>
            <input type="text" name="login" id="loginSignup" placeholder="Логин"><br>
            <input type="password" name="password" id="passwordSignup" placeholder="Пароль"><br>
            <input type="password" name="password2" id="passwordSignup2" placeholder="Подтвердите пароль"><br>
            <input type="submit" name="sendSignup" value="Отправить">
        </form>
    </div>
</div>
<div id="modalBackLogin">
    <div id="modalLogin">
        <div class="close"><i class="bi bi-x-square"></i></div>
        <h2 id ="infoLog">Авторизация</h2>
        <form action="" method="post" id="formLogin">
            <input type="text" name="login" id="login" placeholder="Логин"><br>
            <input type="password" name="password" id="password" placeholder="Пароль"><br>
            <input type="submit" name="sendLogin" value="Войти">
        </form>
    </div>
</div>

<script>

exit.onclick = ()=> {
    fetch("/system/exit.php")
    window.location.href = '/main';
}

</script>