<?php

require_once "../classes/Db.php";

class Pagination
{
    public string $commentTable;
    public string $commentPage;

    public function __construct($commentTable, $commentPage)
    {
        $this->commentTable = $commentTable;
        $this->commentPage = $commentPage;
    }

    public function pagination() 
    {
            $db = Db::dataBase();
            $limit = 10;
            $queryRow = $db->query("SELECT * FROM {$this->commentTable} WHERE id_theme = '$_GET[id]'");
            $countComments = $queryRow->rowCount();
            $allPage = ceil($countComments / $limit);
            // var_dump ($allPage);
            $pre = $_GET['page'] - 1;
            $next = $_GET['page'] + 1;
            if($allPage > 1) {
                ?>
                <div class="pagination" id="anchor1">
                <?
                echo "<a class='pagination_a' href={$this->commentPage}.php?id=" . $_GET['id'] . "&page=1> << </a> <a class='pagination_a' href='{$this->commentPage}.php?id=" . $_GET['id'] . "&page=$pre'> < </a> ";
                for ($i = 1; $i <= $allPage; $i++) {
                    if ($i == 1) {
                        if ($i == $_GET['page']) {
                            echo "<a class='activePage' href={$this->commentPage}.php?id=" . $_GET['id'] . "&page=" . $i . "><b> " . $i . " </b></a> ";
                        } else
                            echo "<a class='pagination_a' href={$this->commentPage}.php?id=" . $_GET['id'] . "&page=" . $i . "> " . $i . " </a>";
                    } else if ($i >= $_GET['page'] - 1 && $i <= $_GET['page'] + 1) {

                        if ($i == $_GET['page']) {
                            echo "<a class='activePage' href={$this->commentPage}.php?id=" . $_GET['id'] . "&page=" . $i . "><b> " . $i . " </b></a> ";
                        } else
                            echo "<a class='pagination_a' href={$this->commentPage}.php?id=" . $_GET['id'] . "&page=" . $i . "> " . $i . " </a>";
                    } else if ($i == $allPage) {
                        echo "<a class='pagination_a' href={$this->commentPage}.php?id=" . $_GET['id'] . "&page=" . $i . "> " . $i . " </a>";
                    } else if ($i == $_GET['page'] - 2 || $i == $_GET['page'] + 2) {
                        echo "<span>...</span>";
                    }
                }
                echo "<a class='pagination_a' href='{$this->commentPage}.php?id=" . $_GET['id'] . "&page=$next'> > </a><a class='pagination_a' href={$this->commentPage}.php?id=" . $_GET['id'] . "&page=" . $allPage . "> >> </a> ";
                ?>
                </div>
                <?
            }
    }
}