<?
session_start();

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/PaginationTheme.php";
require_once "$path/classes/TopicForum.php";
require_once "$path/classes/ButtonAddTheme.php";


if (empty($_GET['page'])) {
    header("Location: hostess.php?page=1");
}

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
                        <div>Новости форума</div>
                    </div>
                    <div class="forum-h2">
                        <div style="margin-left:10px;">Темы</div>
                        <div style="text-align:center;">Ответы</div>
                        <div style="text-align:center;">Просмотры</div>
                        <div>Сообщение темы</div>
                    </div>
                    <?
                    $topicForum = new TopicForum('hostess','msgHostess','comments_hostess');
                    $topicForum->topicForum();
                    ?>
                </div>
                <div class="pb">
                    <?
                    $pagTheme = new PaginationTheme('hostess','hostess');
                    $pagTheme->pagTheme();
        
                    $button = new ButtonAddTheme('addThemeHostess');
                    $button->buttonAddTheme();
                    ?>          
                </div>
            </div>
        </main>
       <? include "$path/private/footer.php"?>
    </div>
    <script>
        const views = new Views('hostess');
        views.addViews();
    </script>  
</body>
</html>