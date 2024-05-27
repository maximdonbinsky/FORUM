<?
session_start();

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

$db = Db::dataBase();

$check = $db -> query("SELECT login FROM users WHERE login = '$_SESSION[login]'");
if($check -> rowCount() > 0){

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <? include "$path/private/head.php";?>
    <body>
        <div class="cont">
            <? include "$path/private/header.php"?>
            <main>
                <div class="forum">
                    <?
                    $profile = $db -> query("SELECT users.login,users.status,users.avatar,users.date_reg,online.date_out,online.time_out FROM `users`,`online` WHERE users.login=online.login AND users.login = '$_SESSION[login]'");
                    foreach($profile as $row){
                        echo '<div class="forum__info">
                                <div class="forum-h1">
                                    <img src="/img/1.png" alt=""> 
                                    <div>Профиль пользователя <b>'.$row['login'].'</b></div>
                                </div>
                                <div class="profile__user">
                                    <div class="avatar">
                                        <img src="../img/avatars/'.$row['avatar'].'" alt="">
                                    </div>
                                    <form action="" method="post" id="formFile" enctype="multipart/form-data">
                                    <div id="error"></div>
                                        <label class="input__file">
                                            <input type="file" name="file" id="file">
                                            <span>Выберите файл</span>
                                        </label>
                                        <img src="../img/strelka.gif" alt="">
                                        <input type="submit" id="ava" name="send" value="Сменить аватарку">
                                    </form>                               
                                    <div class="profile__info">
                                        <div><i class="bi bi-person-circle"></i> Логин: <b>'.$row['login'].'</b></div>
                                        <div><i class="bi bi-info-circle-fill"></i> Статус: <b>'.$row['status'].'</b></div>
                                        <div><i class="bi bi-calendar-check-fill"></i> Дата регистрации: <b>'.$row['date_reg'].'</b></div>
                                        <div><i class="bi bi-watch"></i> Был(а): <b>'.$row['date_out'].'</b> // <b>'.$row['time_out'].'</b></div>
                                        <div><i class="bi bi-chat-square-text-fill"></i> Тем: <b>';
                                        $theme_1 = $db -> query("SELECT * FROM children WHERE login = '$_SESSION[login]'");
                                        $sumTheme_1 = $theme_1 -> rowCount();
                                        $theme_2 = $db -> query("SELECT * FROM communication WHERE login = '$_SESSION[login]'");
                                        $sumTheme_2 = $theme_2 -> rowCount();
                                        $theme_3 = $db -> query("SELECT * FROM fashion WHERE login = '$_SESSION[login]'");
                                        $sumTheme_3 = $theme_3 -> rowCount();
                                        $theme_4 = $db -> query("SELECT * FROM health WHERE login = '$_SESSION[login]'");
                                        $sumTheme_4 = $theme_4 -> rowCount();
                                        $theme_5 = $db -> query("SELECT * FROM hobby WHERE login = '$_SESSION[login]'");
                                        $sumTheme_5 = $theme_5 -> rowCount();
                                        $theme_6 = $db -> query("SELECT * FROM hostess WHERE login = '$_SESSION[login]'");
                                        $sumTheme_6 = $theme_6 -> rowCount();
                                        $theme_7 = $db -> query("SELECT * FROM life WHERE login = '$_SESSION[login]'");
                                        $sumTheme_7 = $theme_7 -> rowCount();
                                        $theme_8 = $db -> query("SELECT * FROM news_forum WHERE login = '$_SESSION[login]'");
                                        $sumTheme_8 = $theme_8 -> rowCount();
                                        $theme_9 = $db -> query("SELECT * FROM pregnancy WHERE login = '$_SESSION[login]'");
                                        $sumTheme_9 = $theme_9 -> rowCount();
                                        $theme_10 = $db -> query("SELECT * FROM travel WHERE login = '$_SESSION[login]'");
                                        $sumTheme_10 = $theme_10 -> rowCount();
                                        $theme_11 = $db -> query("SELECT * FROM wedding WHERE login = '$_SESSION[login]'");
                                        $sumTheme_11 = $theme_11 -> rowCount();
                                        $theme_12 = $db -> query("SELECT * FROM work WHERE login = '$_SESSION[login]'");
                                        $sumTheme_12 = $theme_12 -> rowCount();
                                        $theme_13 = $db -> query("SELECT * FROM workshop WHERE login = '$_SESSION[login]'");
                                        $sumTheme_13 = $theme_13 -> rowCount();
                                        $theme_14 = $db -> query("SELECT * FROM house WHERE login = '$_SESSION[login]'");
                                        $sumTheme_14 = $theme_14 -> rowCount();
                                        $theme_15 = $db -> query("SELECT * FROM love WHERE login = '$_SESSION[login]'");
                                        $sumTheme_15 = $theme_15 -> rowCount();
                                        $arraySumTheme = array($sumTheme_1, $sumTheme_2, $sumTheme_3, $sumTheme_4, $sumTheme_5, $sumTheme_6, $sumTheme_7, $sumTheme_8, $sumTheme_9, $sumTheme_10, $sumTheme_11, $sumTheme_12, $sumTheme_13, $sumTheme_14, $sumTheme_15);
                                        echo array_sum($arraySumTheme);
                                        echo '</b></div>
                                        <div><i class="bi bi-chat-dots-fill"></i> Сообщений: <b>';
                                        $sumMsg_1 = $db -> query("SELECT * FROM comments_children WHERE login = '$_SESSION[login]'");
                                        $sumMsg_1 = $sumMsg_1 -> rowCount();
                                        $sumMsg_2 = $db -> query("SELECT * FROM comments_communication WHERE login = '$_SESSION[login]'");
                                        $sumMsg_2 = $sumMsg_2 -> rowCount();
                                        $sumMsg_3 = $db -> query("SELECT * FROM comments_fashion WHERE login = '$_SESSION[login]'");
                                        $sumMsg_3 = $sumMsg_3 -> rowCount();
                                        $sumMsg_4 = $db -> query("SELECT * FROM comments_health WHERE login = '$_SESSION[login]'");
                                        $sumMsg_4 = $sumMsg_4 -> rowCount();
                                        $sumMsg_5 = $db -> query("SELECT * FROM comments_hobby WHERE login = '$_SESSION[login]'");
                                        $sumMsg_5 = $sumMsg_5 -> rowCount();
                                        $sumMsg_6 = $db -> query("SELECT * FROM comments_hostess WHERE login = '$_SESSION[login]'");
                                        $sumMsg_6 = $sumMsg_6 -> rowCount();
                                        $sumMsg_7 = $db -> query("SELECT * FROM comments_house WHERE login = '$_SESSION[login]'");
                                        $sumMsg_7 = $sumMsg_7 -> rowCount();
                                        $sumMsg_8 = $db -> query("SELECT * FROM comments_life WHERE login = '$_SESSION[login]'");
                                        $sumMsg_8 = $sumMsg_8 -> rowCount();
                                        $sumMsg_9 = $db -> query("SELECT * FROM comments_love WHERE login = '$_SESSION[login]'");
                                        $sumMsg_9 = $sumMsg_9 -> rowCount();
                                        $sumMsg_10 = $db -> query("SELECT * FROM comments_news_forum WHERE login = '$_SESSION[login]'");
                                        $sumMsg_10 = $sumMsg_10 -> rowCount();
                                        $sumMsg_11 = $db -> query("SELECT * FROM comments_pregnancy WHERE login = '$_SESSION[login]'");
                                        $sumMsg_11 = $sumMsg_11 -> rowCount();
                                        $sumMsg_12 = $db -> query("SELECT * FROM comments_travel WHERE login = '$_SESSION[login]'");
                                        $sumMsg_12 = $sumMsg_12 -> rowCount();
                                        $sumMsg_13 = $db -> query("SELECT * FROM comments_wedding WHERE login = '$_SESSION[login]'");
                                        $sumMsg_13 = $sumMsg_13 -> rowCount();
                                        $sumMsg_14 = $db -> query("SELECT * FROM comments_work WHERE login = '$_SESSION[login]'");
                                        $sumMsg_14 = $sumMsg_14 -> rowCount();
                                        $sumMsg_15 = $db -> query("SELECT * FROM comments_workshop WHERE login = '$_SESSION[login]'");
                                        $sumMsg_15 = $sumMsg_15 -> rowCount();
                                        $sumMsg = array($sumMsg_1, $sumMsg_2, $sumMsg_3, $sumMsg_4, $sumMsg_5, $sumMsg_6, $sumMsg_7, $sumMsg_8, $sumMsg_9, $sumMsg_10, $sumMsg_11, $sumMsg_12, $sumMsg_13, $sumMsg_14, $sumMsg_15);
                                        echo array_sum($sumMsg);                                        
                                        echo '</b></div>
                                    </div>     
                                </div>
                            </div>';
                    }
                    ?>
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

<script>
    
function ava(){
    fetch("/system/showAva.php")
    .then(response => response.json())
    .then(data => {
        for(let row of data){
            let avatar = document.querySelector(".avatar");
            avatar.innerHTML = `<img src="../img/avatars/${row.avatar}" alt="">`;
        }
    })
}

$('.input__file input[type=file]').on('change', function(){
	let file = this.files[0];
	$(this).next().html(file.name);
});
// document.querySelector('.input__file input[type=file]').addEventListener('change', function(){
// 	let file = this.files[0];
// 	document.querySelector(this).nextElementSibling.html(file.name);
// });
formFile.onsubmit = ()=> {
    let valid = /(.jpg|.jpeg|.png)$/i;
    if(file.value.length == ""){
        error.innerHTML = "Файл не выбран";
        setTimeout(()=>{
            error.innerHTML = "";
        },3000);
        return false;
    }
    else if(file.files[0]['size'] > 2097152){
        error.innerHTML = "Выберите файл менее 2 MB";
        setTimeout(()=>{
            error.innerHTML = "";
        },3000);
        return false;
    }
    else if(!valid.exec(file.value)){
        error.innerHTML = "Выберите формат файла: .jpg / .jpeg / .png  ";
        setTimeout(()=>{
            error.innerHTML = "";
        },5000);
        return false;
    }
    else{
        let form = new FormData(formFile);
        fetch('../system/avaProfile.php',{
        method: "post",
        body: form
        }) 
        setTimeout(ava,100);
        return false; 
    }      
}
</script>