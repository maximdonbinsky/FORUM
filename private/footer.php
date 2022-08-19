<footer>
    <?
        $time=time();
        $user=$db->query("SELECT `login` FROM `online` WHERE `login`='$_SESSION[login]'");
        if($user->num_rows>0){
            $db->query("UPDATE `online` SET time_out=$time WHERE `login`='$_SESSION[login]'");
        }
        else{
            $db->query("INSERT INTO `online` VALUES(NULL,'$_SESSION[login]',$time,1)");
        }
    ?>
            <div class="box-footer">
                <div class="stat">
                    <div class="forum-h1">
                        <img src="/img/1.png" alt=""> 
                        <div>Статистика форума</div> 
                    </div>
                    <div class="stat-text">
                        <img src="/img/stat.png" alt="">
                        <div id="stat-msg">Всего тем: <b>12678</b><br>Всего сообщений: <b>157902</b></div>
                        <div id="stat-users">Зарегистрированных пользователей: <b>1245</b><br>Последним зарегистрировался: <b>Alena777</b></div>
                        <div>Сейчас онлайн: <b><span id="stat_online"></span></b></div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="foo">Copyright © 2022 Все права защищены | Форум «Женский уголок» | Полное или частичное копирование материалов разрешено только с указанием прямой ссылки на источник. </div>
            </div>
        </footer>