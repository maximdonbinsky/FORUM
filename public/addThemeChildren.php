<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";
require_once "$path/classes/AddTheme.php";

$db = Db::dataBase();

$check = $db -> query("SELECT login FROM users WHERE login = '$_SESSION[login]'");
if($check -> rowCount() > 0){
    
    $addForum = new AddTheme('children','children');
    $addForum -> addTheme();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <? include "$path/private/head.php";?>
    <body>
        <div class="cont">
            <? include "$path/private/header.php"?>
            <main>
                <div class="forum">
                    <div class="forum__info">
                        <div class="forum-h1">
                            <img src="/img/1.png" alt=""> 
                            <div>Новая тема</div>
                        </div>
                        <div class="cont_new_theme">
                        <form action="" method="post" class="create_theme" id = "createTheme">
                                <span>Название темы:</span></br>
                                <input type="text" name="theme" id="themeName"></br>
                                <span>Текст сообщения:</span></br>
                                <textarea name="msg" id="msg" rows="10"></textarea></br>
                                <input type="submit" name="create_theme" value="Создать тему">
                        </form> 
                        </div>
                    </div>
                </div>
            </main>
        <? include "$path/private/footer.php"?>
        </div>  
    </body>
    </html>
<?}
else{
    header("Location: ../public/main.php"); 
}
?>


