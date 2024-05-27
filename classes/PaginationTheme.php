<?php

require_once "../classes/Db.php";

class PaginationTheme
{
    private string $tableForum;
    private string $pageForum;

    public function __construct($tableForum,$pageForum)
    {
        $this->tableForum = $tableForum;
        $this->pageForum = $pageForum;
    }

    public function pagTheme()
    {
        $db = Db::dataBase();
        $queryRow = $db -> query("SELECT * FROM {$this->tableForum}");
        $countTheme = $queryRow -> rowCount();
        $limit = 10;
        $allPage = ceil($countTheme / $limit);
        // var_dump ($allPage);
        $pre = $_GET['page'] - 1;
        $next = $_GET['page'] + 1;
        if($allPage > 1){
            ?>
            <div class="pagination" id="page">
            <?
            echo "<a class='pagination_a' href={$this->pageForum}.php?page=1> << </a> <a class='pagination_a' href='{$this->pageForum}.php?page=$pre'> < </a> ";
            for ($i = 1; $i <= $allPage; $i++) {
                if ($i == 1) {
                    if ($i == $_GET['page']) {
                        echo "<a class='activePage' href={$this->pageForum}.php?page=" . $i . "><b> " . $i . " </b></a> ";
                    } else
                        echo "<a class='pagination_a' href={$this->pageForum}.php?page=" . $i . "> " . $i . " </a>";
                } else if ($i >= $_GET['page'] - 1 && $i <= $_GET['page'] + 1) {

                    if ($i == $_GET['page']) {
                        echo "<a class='activePage' href={$this->pageForum}.php?page=" . $i . "><b> " . $i . " </b></a> ";
                    } else
                        echo "<a class='pagination_a' href={$this->pageForum}.php?page=" . $i . "> " . $i . " </a>";
                } else if ($i == $allPage) {
                    echo "<a class='pagination_a' href={$this->pageForum}.php?page=" . $i . "> " . $i . " </a>";
                } else if ($i == $_GET['page'] - 2 || $i == $_GET['page'] + 2) {
                    echo "<span>...</span>";
                }
            }
            echo "<a class='pagination_a' href='{$this->pageForum}.php?page=$next'> > </a><a class='pagination_a' href={$this->pageForum}.php?page=" . $allPage . "> >> </a> ";
            ?>
            </div>
            <?
        }                    
    }

}