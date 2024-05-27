<?php

require_once "../classes/Db.php";

class ButtonAddTheme
{
    private string $pageAddTheme;

    public function __construct($pageAddTheme)
    {
        $this->pageAddTheme = $pageAddTheme;
    }

    public function buttonAddTheme()
    {
        $db = Db::dataBase();
        $button = $db -> query("SELECT login FROM users WHERE login = '$_SESSION[login]'");
        if($button -> rowCount() > 0){
            echo "<a href='/public/{$this->pageAddTheme}.php'><input type='button' value='Новая тема'></a>";
        }
    }
}