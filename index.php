<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];
include "$path/system/db.php";

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
                        <div>О работе форума</div>
                    </div>
                    <div class="forum-h2">
                        <div style="margin-left:10px;">Форум</div>
                        <div style="text-align:center;">Темы</div>
                        <div style="text-align:center;">Сообщения</div>
                        <div>Последнее сообщение</div>
                    </div>
                    <div class="forum-content">
                        <img src="/img/2.2.png" alt="">  
                        <div class="forum-top"><a href="/public/news_forum.php">Новости форума</a>
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
                        <img src="/img/2.1.png" alt="">  
                        <div class="forum-top"><a href="/public/workshop.php">Мастерская</a>
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
                </div>
                <div class="forum-info">
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
                    <div class="forum-content">
                        <img src="/img/2.3.png" alt="">  
                        <div class="forum-top"><a href="">Свободное общение</a>
                            <div class="forum-des">Общение на любые темы. Свободное общение без границ! Здесь можно поболтать на любую тематику, задать вопрос, высказать мнение, пофлудить. Разговоры ни о чем и обо всем.</div>
                        </div>
                        <div class="total-top">567</div>
                        <div class="total-msg">735987</div>
                        <div class="last-msg">
                            <div class="last-msg-time"><b>Дата: </b>20.04.1987 20:35</div>
                            <div class="last-msg-top"><b>Тема: </b>Добавлен выбор цвета сообщения</div>
                            <div class="last-msg-author"><b>Автор: </b>admin</div>
                        </div>
                    </div>
                    <div class="forum-content">
                        <img src="/img/2.4.png" alt="">  
                        <div class="forum-top"><a href="">Жизнь, как она есть</a>
                            <div class="forum-des">Размышления на жизненные ситуации, разговоры о наболевшем, психологически поддерживаем друг друга</div>
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
                        <img src="/img/2.5.png" alt="">  
                        <div class="forum-top"><a href="">Личная жизнь</a>
                            <div class="forum-des">Психология отношений, семья, любовь, про это</div>
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
                        <img src="/img/2.6.png" alt="">  
                        <div class="forum-top"><a href="">Детки-конфетки</a>
                            <div class="forum-des">Все о детях, советы мамочкам, воспитание и развитие</div>
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
                        <img src="/img/2.7.png" alt="">  
                        <div class="forum-top"><a href="">Здоровье</a>
                            <div class="forum-des">Диеты и правильное питание, женское здоровье</div>
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
                        <img src="/img/2.8.png" alt="">  
                        <div class="forum-top"><a href="">Мой дом - моя крепость</a>
                            <div class="forum-des">Все о доме и уюте, фен-шуй, ремонт, интерьер, бытовые вопросы</div>
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
                        <img src="/img/2.9.png" alt="">  
                        <div class="forum-top"><a href="">Беременность и роды</a>
                            <div class="forum-des">Планирование беременности, предстоящие роды</div>
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
                        <img src="/img/2.10.png" alt="">  
                        <div class="forum-top"><a href="">Хозяюшка</a>
                            <div class="forum-des">Кулинария, рецепты, вкусные идеи, советы по дому, секреты на кухне</div>
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
                        <img src="/img/2.11.png" alt="">  
                        <div class="forum-top"><a href="">Свадьба</a>
                            <div class="forum-des">Подготовка к свадьбе, свадьба, венчание, суеверия, приметы, свадебный этикет, подарки, тосты, программа</div>
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
                        <img src="/img/2.12.png" alt="">  
                        <div class="forum-top"><a href="">Мода и красота</a>
                            <div class="forum-des">Все о моде, make-up макияж, уход за собой</div>
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
                        <img src="/img/2.13.png" alt="">  
                        <div class="forum-top"><a href="">Отдых и путешествия</a>
                            <div class="forum-des">Отпуск, выходные, активный образ жизни</div>
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
                        <img src="/img/2.14.png" alt="">  
                        <div class="forum-top"><a href="">Учеба и работа</a>
                            <div class="forum-des">Карьера, образование, рабочие отношения</div>
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
                        <img src="/img/2.15.png" alt="">  
                        <div class="forum-top"><a href="">Хобби</a>
                            <div class="forum-des">Рукоделие, цветоводство, танцы, гадание, дача, секреты мастерства</div>
                        </div>
                        <div class="total-top">35</div>
                        <div class="total-msg">564</div>
                        <div class="last-msg">
                            <div class="last-msg-time"><b>Дата: </b>20.04.1987 20:35</div>
                            <div class="last-msg-top"><b>Тема: </b>Когда добавите смайлики и возможность добавлять картинки</div>
                            <div class="last-msg-author"><b>Автор: </b>bankir555</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
       <? include "$path/private/footer.php"?>
    </div>  
</body>
</html>