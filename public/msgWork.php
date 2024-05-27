<?
session_start();

$path = $_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";
require_once "$path/classes/ShowTopic.php";
require_once "$path/classes/ShowComment.php";
require_once "$path/classes/Pagination.php";
require_once "$path/classes/AddComment.php";

$db = Db::dataBase();

$addComment = new AddComment('comments_work', 'msgWork');
$addComment -> addComment();

?>
<!DOCTYPE html>
<html lang="en">
<? include "$path/private/head.php"; ?>
<body>
    <div class="cont">
        <? include "$path/private/header.php"; ?>
        <main>
            <div class="forum">
                <div class="forum__box">
                <?
                    $showTopic = new ShowTopic('work','msgWork');
                    $showTopic -> showTopic();

                    $showComment = new ShowComment('comments_work','work','quoting_work');
                    $showComment -> showComment();
                ?>
                </div>
                <?
                    $pagination = new Pagination('comments_work','msgWork');
                    $pagination -> pagination();
                
                
                    $answer = $db->query("SELECT login FROM users WHERE login = '$_SESSION[login]'");
                    if ($answer->rowCount() > 0) {
                        echo '<div class="forum__info">
                                <div class="forum-h1">
                                    <img src="/img/1.png" alt=""> 
                                    <div>Быстрый ответ</div>   
                                </div>
                                <div class="answer">
                                    <div>Напишите ваше сообщение и нажмите ответить</div>
                                    <form action="" method="post" id="addComment">
                                        <textarea type="text" name="comment" id="comment"></textarea><br>
                                        <input type="submit" name="addComment" id="btn" value="Ответить">
                                    </form>
                                </div>
                            </div>';
                    } 
                ?>
            </div>
            <div id="delThemeBack">
                <div id="modalDelTheme">
                    <div class="forum__info__edit">
                        <div class="forum-h1 closeH1">  
                            <div><img src="/img/1.png" alt=""> Удаление темы</div>   
                        </div>
                        <div class="answer buttDel">
                            <div>Вы хотите удалить тему и все сообщения в этой теме?</div>
                                <input type="button" id="buttThemeYes" value="Да">
                                <input type="button" id="buttThemeNo" value="Нет">
                        </div>
                    </div>
                </div>
            </div> 
            <div id="delMsgBack">
                <div id="modalDel">
                    <div class="forum__info__edit">
                        <div class="forum-h1 closeH1">  
                            <div><img src="/img/1.png" alt=""> Удаление комментария</div>   
                        </div>
                        <div class="answer buttDel">
                            <div>Вы действительно хотите удалить сообщение?</div>
                                <input type="button" id="buttYes" value="Да">
                                <input type="button" id="buttNo" value="Нет">
                        </div>
                    </div>
                </div>
            </div>       
            <div id="editMsgBack">
                <div id="modalEdit">
                    <div class="forum__info__edit">
                        <div class="forum-h1 closeH1">  
                            <div><img src="/img/1.png" alt=""> Редактирование</div> 
                            <div class="closeEdit"><i class="bi bi-x-square"></i></div>  
                        </div>
                        <div class="answer">
                            <div>Отредактируйте сообщение и нажмите отправить</div>
                            <form action="" method="post" id="formEdit">
                                <textarea name="editText" id="editText"></textarea>
                                <input type="submit" id="sendEdit" name="sendEdit" value="Отправить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="quotingMsgBack">
                <div id="modalQuoting">
                    <div class="forum__info__edit">
                        <div class="forum-h1 closeH1">  
                            <div><img src="/img/1.png" alt=""> Ответ</div> 
                            <div class="closeQuoting"><i class="bi bi-x-square"></i></div>  
                        </div>
                        <div class="answer answerQuoting">
                                <div>Напишите сообщение и нажмите отправить</div>
                                <form action="" method="post" id="formQuoting">
                                    <textarea name="quotingText" id="quotingText"></textarea>
                                    <input type="submit" id="sendQuoting" name="sendQuoting" value="Отправить">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <? include "$path/private/footer.php"?>
    </div>
    <script>
        const eventClick = new EventPageMsg('work');
        eventClick.eventOnclick(); 
    </script> 
</body>
</html>