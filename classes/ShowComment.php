<?php

require_once "../classes/Db.php";

class ShowComment 
{
    private string $commentTable;
    private string $forumTable;
    private string $quotingTable;

    public function __construct($commentTable, $forumTable, $quotingTable)
    {
        $this->commentTable = $commentTable;
        $this->forumTable = $forumTable;
        $this->quotingTable = $quotingTable;
    }
    
    public function showComment() 
    {
       
        $page = $_GET['page'];
        $limit = 10;
        $offset = ($page * $limit) - $limit;
        
        $db = Db::dataBase();
        
        $queryComment = $db -> query("SELECT * FROM (SELECT users.login,users.avatar,users.status,users.date_reg,{$this->commentTable}.id,{$this->commentTable}.id_theme,{$this->commentTable}.comment,{$this->commentTable}.date_comment,{$this->commentTable}.time_comment,{$this->forumTable}.theme FROM users,{$this->commentTable},{$this->forumTable} WHERE users.login = {$this->commentTable}.login AND {$this->forumTable}.id = {$this->commentTable}.id_theme AND {$this->commentTable}.id_theme='$_GET[id]' ORDER BY {$this->commentTable}.id) AS `comments` LIMIT $limit OFFSET $offset");
                    foreach ($queryComment as $row) {
                                echo '<div class="forum__info" data-comment-id = ' . $row['id'] . '>
                                        <div class="forum-h1">
                                            <img src="/img/1.png" alt=""> 
                                            <div>' . $row['theme'] . '</div>
                                        </div>
                                        <div class="cont-message">
                                            <div class="profile">
                                                <div class="user"><i class="bi bi-person-fill"></i> ' . $row['login'] . '</div>
                                                <div class="status"><i class="bi bi-info-circle-fill"></i> ' . $row['status'] . '</div>
                                                <img src="../img/avatars/' . $row['avatar'] . '" alt="">
                                                <div class="info">
                                                <i class="bi bi-calendar-check-fill"></i> Регистрация: ' . $row['date_reg'] . '<br>
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="date-message" data-comment-id = ' . $row['id'] . '><i class="bi bi-calendar3"></i> ' . $row['date_comment'] . ' &bull; <i class="bi bi-watch"></i> ' . $row['time_comment'] . ' </div><br>
                                                <div class="text" data-text-id = ' . $row['id'] . '>
                                                        <pre class="pre">
                                                        ' . $row['comment'] . '
                                                        </pre>
                                                </div>';

                        $queryAnswers = $db -> query("SELECT COUNT(msg) AS sum FROM {$this->quotingTable} WHERE id_theme = '$_GET[id]' AND id_comment = '$row[id]'");
                        $sum = $queryAnswers->fetch(PDO::FETCH_ASSOC);
                        echo '<b><div class="select__text" data-select-text = ' . $row['id'] . '>Ответы (' . $sum['sum'] . ')<span class="modal__quoting"><i class="bi bi-caret-down-fill"></i></span></div></b>';
                                            echo '<div class="box__modal" data-box-modal = ' . $row['id'] . '>';
                                                    $queryQuoting = $db->query("SELECT * FROM {$this->quotingTable} WHERE id_theme = '$_GET[id]' AND id_comment = '$row[id]'");
                                                    foreach ($queryQuoting as $row2) {
                                                        echo '<div class="box__quoting" data-quoting-id = ' . $row2['id'] . '>
                                                                    <div id="quoting111"><b><i class="bi bi-person-fill"></i> ' . $row2['user'] . ':</b> <span> ' . $row2['msg'] . ' </span>';
                                                                    if($_SESSION['status'] == 'Администратор' || $_SESSION['status'] == 'Модератор') {
                                                                        echo '<i class="bi bi-x" data-del-quoting = ' . $row2['id'] . '></i>';
                                                                    }
                                                                    echo '</div>
                                                              </div>';
                                                    }
                                            echo '</div>';
                                                    ?>
                                                  
                                            </div>
                                            <div class="edit">                                  
                                                <?
                                                $editComments = $db->query("SELECT * FROM {$this->commentTable} WHERE login = '$_SESSION[login]' AND id = '$row[id]' OR '$_SESSION[status]' = 'Администратор' OR '$_SESSION[status]' = 'Модератор'");
                                                if ($editComments->rowCount() > 0) {
                                                    echo '<div class="text-edit" data-del-comment = ' . $row['id'] . '>Удалить</div>
                                                <div class="text-edit" data-edit-comment = ' . $row['id'] . '>Редактировать</div>';
                                                }
                                                $quotingComments = $db->query("SELECT * FROM users WHERE login = '$_SESSION[login]'");
                                                if ($quotingComments->rowCount() > 0) {
                                                    echo '<div class="text-edit" name="anchor" data-quoting-comment = ' . $row['id'] . '>Ответить</div>';
                                                }
                                                ?>
                                            </div>   
                                        </div>
                                    </div>

                    <?
                     
                    }
                     
    }
}
?>