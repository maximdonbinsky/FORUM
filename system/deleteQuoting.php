<?
session_start();

require_once "../classes/DeleteQuoting.php";

if($_GET['key'] == 'newsForum') {
    $delQuoting = new DeleteQuoting('quoting_news_forum');
    $delQuoting -> delQuoting();
}