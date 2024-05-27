<footer>
<div class="box-footer">
    <div class="stat">
        <div class="forum-h1">
            <img src="/img/1.png" alt=""> 
            <div>Статистика форума</div> 
        </div>
        <div class="stat-text">
            <img src="/img/stat.png" alt="">
            <div id="stat-msg"><i class="bi bi-chat-square-text-fill"></i> Всего тем:
                <?
                $sumTop_1 = $db -> query("SELECT * FROM news_forum");
                $sumTop_1 = $sumTop_1 -> rowCount();
                $sumTop_2 = $db -> query("SELECT * FROM workshop");
                $sumTop_2 = $sumTop_2 -> rowCount();
                $sumTop_3 = $db -> query("SELECT * FROM communication");
                $sumTop_3 = $sumTop_3 -> rowCount();
                $sumTop_4 = $db -> query("SELECT * FROM life");
                $sumTop_4 = $sumTop_4 -> rowCount();
                $sumTop_5 = $db -> query("SELECT * FROM love");
                $sumTop_5 = $sumTop_5 -> rowCount();
                $sumTop_6 = $db -> query("SELECT * FROM children");
                $sumTop_6 = $sumTop_6 -> rowCount();
                $sumTop_7 = $db -> query("SELECT * FROM health");
                $sumTop_7 = $sumTop_7 -> rowCount();
                $sumTop_8 = $db -> query("SELECT * FROM house");
                $sumTop_8 = $sumTop_8 -> rowCount();
                $sumTop_9 = $db -> query("SELECT * FROM pregnancy");
                $sumTop_9 = $sumTop_9 -> rowCount();
                $sumTop_10 = $db -> query("SELECT * FROM hostess");
                $sumTop_10 = $sumTop_10 -> rowCount();
                $sumTop_11 = $db -> query("SELECT * FROM wedding");
                $sumTop_11 = $sumTop_11 -> rowCount();
                $sumTop_12 = $db -> query("SELECT * FROM fashion");
                $sumTop_12 = $sumTop_12 -> rowCount();
                $sumTop_13 = $db -> query("SELECT * FROM travel");
                $sumTop_13 = $sumTop_13 -> rowCount();
                $sumTop_14 = $db -> query("SELECT * FROM work");
                $sumTop_14 = $sumTop_14 -> rowCount();
                $sumTop_15 = $db -> query("SELECT * FROM hobby");
                $sumTop_15 = $sumTop_15 -> rowCount();
                $sumTop = ($sumTop_1 + $sumTop_2 + $sumTop_3 + $sumTop_4 + $sumTop_5 + $sumTop_6 + $sumTop_7 + $sumTop_8 + $sumTop_9 + $sumTop_10 + $sumTop_11 + $sumTop_12 + $sumTop_13 + $sumTop_14 + $sumTop_15);
                echo '<b>'.$sumTop.'</b>';
                ?>
            <br><i class="bi bi-chat-dots-fill"></i> Всего сообщений: 
                <?
                $sumMsg_1 = $db -> query("SELECT * FROM comments_news_forum");
                $sumMsg_1 = $sumMsg_1 -> rowCount();
                $sumMsg_2 = $db -> query("SELECT * FROM comments_workshop");
                $sumMsg_2 = $sumMsg_2 -> rowCount();
                $sumMsg_3 = $db -> query("SELECT * FROM comments_communication");
                $sumMsg_3 = $sumMsg_3 -> rowCount();
                $sumMsg_4 = $db -> query("SELECT * FROM comments_life");
                $sumMsg_4 = $sumMsg_4 -> rowCount();
                $sumMsg_5 = $db -> query("SELECT * FROM comments_love");
                $sumMsg_5 = $sumMsg_5 -> rowCount();
                $sumMsg_6 = $db -> query("SELECT * FROM comments_children");
                $sumMsg_6 = $sumMsg_6 -> rowCount();
                $sumMsg_7 = $db -> query("SELECT * FROM comments_health");
                $sumMsg_7 = $sumMsg_7 -> rowCount();
                $sumMsg_8 = $db -> query("SELECT * FROM comments_house");
                $sumMsg_8 = $sumMsg_8 -> rowCount();
                $sumMsg_9 = $db -> query("SELECT * FROM comments_pregnancy");
                $sumMsg_9 = $sumMsg_9 -> rowCount();
                $sumMsg_10 = $db -> query("SELECT * FROM comments_hostess");
                $sumMsg_10 = $sumMsg_10 -> rowCount();
                $sumMsg_11 = $db -> query("SELECT * FROM comments_wedding");
                $sumMsg_11 = $sumMsg_11 -> rowCount();
                $sumMsg_12 = $db -> query("SELECT * FROM comments_fashion");
                $sumMsg_12 = $sumMsg_12 -> rowCount();
                $sumMsg_13 = $db -> query("SELECT * FROM comments_travel");
                $sumMsg_13 = $sumMsg_13 -> rowCount();
                $sumMsg_14 = $db -> query("SELECT * FROM comments_work");
                $sumMsg_14 = $sumMsg_14 -> rowCount();
                $sumMsg_15 = $db -> query("SELECT * FROM comments_hobby");
                $sumMsg_15 = $sumMsg_15 -> rowCount(); 
                $sumMsg = ($sumMsg_1 + $sumMsg_2 + $sumMsg_3 + $sumMsg_4 + $sumMsg_5 + $sumMsg_6 + $sumMsg_7 + $sumMsg_8 + $sumMsg_9 + $sumMsg_10 + $sumMsg_11 + $sumMsg_12 + $sumMsg_13 + $sumMsg_14 + $sumMsg_15);
                echo '<b>' . $sumMsg . '</b>';               
                ?>
            </div>
            <?
            $query = $db -> query("SELECT * FROM `users` ORDER BY `id` DESC LIMIT 1");
            foreach($query as $row){
                echo '<div id="stat-users"><i class="bi bi-people-fill"></i> Зарегистрированных пользователей: <b>'.$row['id'].'</b><br><i class="bi bi-person-check-fill"></i> Последним зарегистрировался: <b>'.$row['login'].'</b></div>';
            }
            ?>
            <div><i class="bi bi-people-fill"></i> Сейчас онлайн: <b><span id="stat_online"></span></b></div>
        </div>
    </div>
    <div class="line"></div>
    <div class="foo">Copyright © 2024 Все права защищены | Форум «Женский уголок» | Полное или частичное копирование материалов разрешено только с указанием прямой ссылки на источник. </div>
</div>
</footer>

<script>

function online(){
    $.ajax({
    url:"/system/online.php",
    success:function(event){
        stat_online.innerHTML = event;
        }
    })
}
online();
setInterval(online,30000);

</script>

