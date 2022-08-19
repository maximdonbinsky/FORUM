<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<? include "$path/private/head.php";?>
<body>
    <div class="cont">
        <? include "$path/private/header.php"?>
        <main>
        <div class="forum">
                <div class="forum-info">
                    <div class="forum-h1">
                        <img src="/img/1.png" alt=""> 
                        <div>Новости форума</div>
                    </div>
                    <div class="forum-h2">
                        <div style="margin-left:10px;">Темы</div>
                        <div style="text-align:center;">Ответы</div>
                        <div style="text-align:center;">Просмотры</div>
                        <div>Последнее сообщение</div>
                    </div>
                    <div class="forum-content">
                        <img src="/img/2.2.png" alt="">  
                        <div class="forum-top"><a href="">На форуме</a>
                        </div>
                        <div class="total-top">10</div>
                        <div class="total-msg">345</div>
                        <div class="last-msg">
                            <div class="last-msg-time"><b>Дата: </b>20.04.1987 20:35</div>
                            <div class="last-msg-top"><b>Тема: </b>Добавлен выбор цвета сообщения</div>
                            <div class="last-msg-author"><b>Автор: </b>admin</div>
                        </div>
                    </div>
                    <div class="forum-content">
                        <img src="/img/2.2.png" alt="">  
                        <div class="forum-top"><a href="">Мастерская</a>
                            <div class="forum-des">Здесь Вы можете оставлять свои отзывы, вопросы и предложения по форуму</div>
                        </div>
                        <div class="total-top">35</div>
                        <div class="total-msg">564</div>
                        <div class="last-msg">
                            <div class="last-msg-time"><b>Дата: </b>20.04.1987 20:35</div>
                            <div class="last-msg-top"><b>Тема: </b>Когда добавите смайлики и возможность добавлять картинки</div>
                            <div class="last-msg-author"><b>Автор: </b>bankir555</div>
                        </div>
                    </div>
                    <div class="forum-content">
                        <img src="/img/2.2.png" alt="">  
                        <div class="forum-top"><a href="">Новости форума</a>
                            <div class="forum-des">В этом форуме администрация сообщает о изменениях и нововведениях в работе форума</div>
                        </div>
                        <div class="total-top">10</div>
                        <div class="total-msg">345</div>
                        <div class="last-msg">
                            <div class="last-msg-time"><b>Дата: </b>20.04.1987 20:35</div>
                            <div class="last-msg-top"><b>Тема: </b>Добавлен выбор цвета сообщения</div>
                            <div class="last-msg-author"><b>Автор: </b>admin</div>
                        </div>
                    </div>
                    <div class="forum-content">
                        <img src="/img/2.2.png" alt="">  
                        <div class="forum-top"><a href="">Новости форума</a>
                            <div class="forum-des">В этом форуме администрация сообщает о изменениях и нововведениях в работе форума</div>
                        </div>
                        <div class="total-top">10</div>
                        <div class="total-msg">345</div>
                        <div class="last-msg">
                            <div class="last-msg-time"><b>Дата: </b>20.04.1987 20:35</div>
                            <div class="last-msg-top"><b>Тема: </b>Добавлен выбор цвета сообщения</div>
                            <div class="last-msg-author"><b>Автор: </b>admin</div>
                        </div>
                    </div>
                </div>
        </main>
       <? include "$path/private/footer.php"?>
    </div>  
</body>
</html>