<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

$db = Db::dataBase();

?>
<!DOCTYPE html>
<html lang="en">
<? include "$path/private/head.php";?>
<body>
<div class="heart"></div>
    <div class="cont">
        <? include "$path/private/header.php"?>
        <main>
            <div class="forum">
                <div class="forum__info">
                    <div class="forum-h1">
                        <img src="/img/1.png" alt=""> 
                        <div>О работе форума</div>
                    </div>
                    <div class="forum-h2">
                        <div style="margin-left:10px;">Форум</div>
                        <div style="text-align:center;">Темы</div>
                        <div style="text-align:center;">Сообщения</div>
                        <div>Последнее сообщение</div>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.2.png" alt="">  
                        <div class="forum-top"><a href="/public/newsForum.php">Новости форума</a>
                            <div class="forum-des">В этом форуме администрация сообщает о изменениях и нововведениях в работе форума</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM news_forum");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_news_forum");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $newsForum = $db -> query("SELECT * FROM news_forum ORDER BY id DESC LIMIT 1");
                        foreach($newsForum as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    
                    <div class="forum__content">
                        <img src="/img/2.1.png" alt="">  
                        <div class="forum-top"><a href="/public/workshop.php">Мастерская</a>
                            <div class="forum-des">Здесь Вы можете оставлять свои отзывы, вопросы и предложения по форуму</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM workshop");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_workshop");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $workshop = $db -> query("SELECT * FROM workshop ORDER BY id DESC LIMIT 1");
                        foreach($workshop as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="forum__info">
                    <div class="forum-h1">
                        <img src="/img/1.png" alt=""> 
                        <div>Беседка</div>
                    </div>
                    <div class="forum-h2">
                        <div style="margin-left:10px;">Форум</div>
                        <div style="text-align:center;">Темы</div>
                        <div style="text-align:center;">Сообщения</div>
                        <div>Последнее сообщение</div>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.3.png" alt="">  
                        <div class="forum-top"><a href="/public/communication.php">Свободное общение</a>
                            <div class="forum-des">Общение на любые темы. Свободное общение без границ! Здесь можно поболтать на любую тематику, задать вопрос, высказать мнение, пофлудить. Разговоры ни о чем и обо всем.</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM communication");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_communication");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $communication = $db -> query("SELECT * FROM communication ORDER BY id DESC LIMIT 1");
                        foreach($communication as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.4.png" alt="">  
                        <div class="forum-top"><a href="/public/life.php">Жизнь, как она есть</a>
                            <div class="forum-des">Размышления на жизненные ситуации, разговоры о наболевшем, психологически поддерживаем друг друга</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM life");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_life");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $life = $db -> query("SELECT * FROM life ORDER BY id DESC LIMIT 1");
                        foreach($life as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.5.png" alt="">  
                        <div class="forum-top"><a href="/public/love.php">Личная жизнь</a>
                            <div class="forum-des">Психология отношений, семья, любовь, про это</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM love");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_love");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $love = $db -> query("SELECT * FROM love ORDER BY id DESC LIMIT 1");
                        foreach($love as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.6.png" alt="">  
                        <div class="forum-top"><a href="/public/children.php">Детки-конфетки</a>
                            <div class="forum-des">Все о детях, советы мамочкам, воспитание и развитие</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM children");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_children");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $children = $db -> query("SELECT * FROM children ORDER BY id DESC LIMIT 1");
                        foreach($children as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.7.png" alt="">  
                        <div class="forum-top"><a href="/public/health.php">Здоровье</a>
                            <div class="forum-des">Диеты и правильное питание, женское здоровье</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM health");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_health");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $health = $db -> query("SELECT * FROM health ORDER BY id DESC LIMIT 1");
                        foreach($health as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.8.png" alt="">  
                        <div class="forum-top"><a href="/public/house.php">Мой дом - моя крепость</a>
                            <div class="forum-des">Все о доме и уюте, фен-шуй, ремонт, интерьер, бытовые вопросы</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM house");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_house");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $house = $db -> query("SELECT * FROM house ORDER BY id DESC LIMIT 1");
                        foreach($house as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.9.png" alt="">  
                        <div class="forum-top"><a href="/public/pregnancy.php">Беременность и роды</a>
                            <div class="forum-des">Планирование беременности, предстоящие роды</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM pregnancy");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_pregnancy");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $pregnancy = $db -> query("SELECT * FROM pregnancy ORDER BY id DESC LIMIT 1");
                        foreach($pregnancy as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.10.png" alt="">  
                        <div class="forum-top"><a href="/public/hostess.php">Хозяюшка</a>
                            <div class="forum-des">Кулинария, рецепты, вкусные идеи, советы по дому, секреты на кухне</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM hostess");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_hostess");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $hostess = $db -> query("SELECT * FROM hostess ORDER BY id DESC LIMIT 1");
                        foreach($hostess as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.11.png" alt="">  
                        <div class="forum-top"><a href="/public/wedding.php">Свадьба</a>
                            <div class="forum-des">Подготовка к свадьбе, свадьба, венчание, суеверия, приметы, свадебный этикет, подарки, тосты, программа</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM wedding");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_wedding");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $wedding = $db -> query("SELECT * FROM wedding ORDER BY id DESC LIMIT 1");
                        foreach($wedding as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.12.png" alt="">  
                        <div class="forum-top"><a href="/public/fashion.php">Мода и красота</a>
                            <div class="forum-des">Все о моде, make-up макияж, уход за собой</div>
                        </div>
                        <div class="total-top"><?
                            $totalTop = $db -> query("SELECT * FROM fashion");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_fashion");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?></div>
                        <? 
                        $fashion = $db -> query("SELECT * FROM fashion ORDER BY id DESC LIMIT 1");
                        foreach($fashion as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.13.png" alt="">  
                        <div class="forum-top"><a href="/public/travel.php">Отдых и путешествия</a>
                            <div class="forum-des">Отпуск, выходные, активный образ жизни</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM travel");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_travel");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $trave = $db -> query("SELECT * FROM travel ORDER BY id DESC LIMIT 1");
                        foreach($trave as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.14.png" alt="">  
                        <div class="forum-top"><a href="/public/work.php">Учеба и работа</a>
                            <div class="forum-des">Карьера, образование, рабочие отношения</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM work");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_work");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $work = $db -> query("SELECT * FROM work ORDER BY id DESC LIMIT 1");
                        foreach($work as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="forum__content">
                        <img src="/img/2.15.png" alt="">  
                        <div class="forum-top"><a href="/public/hobby.php">Хобби</a>
                            <div class="forum-des">Рукоделие, цветоводство, танцы, гадание, дача, секреты мастерства</div>
                        </div>
                        <div class="total-top">
                        <?
                            $totalTop = $db -> query("SELECT * FROM hobby");
                            $totalTop = $totalTop -> rowCount();
                            echo $totalTop
                        ?>
                        </div>
                        <div class="total-msg">
                        <?
                            $totalMsg = $db -> query("SELECT * FROM comments_hobby");
                            $totalMsg = $totalMsg -> rowCount();
                            echo $totalMsg
                        ?>
                        </div>
                        <? 
                        $hobby = $db -> query("SELECT * FROM hobby ORDER BY id DESC LIMIT 1");
                        foreach($hobby as $row){
                            echo '<div class="last-msg">
                                <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].' '.$row['time_msg'].'</div>
                                <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Тема: </b>'.$row['theme'].'</div>
                                <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
       <? include "$path/private/footer.php"?>
    </div>  
</body>
</html>