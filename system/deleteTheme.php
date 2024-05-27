<?
session_start();

require_once "../classes/DeleteTheme.php";

if($_GET['key'] == 'newsForum') {
    $delTheme = new DeleteTheme('news_forum');
    $delTheme->delTheme();
}

if($_GET['key'] == 'workshop') {
    $delTheme = new DeleteTheme('workshop');
    $delTheme->delTheme();
}

if($_GET['key'] == 'communication') {
    $delTheme = new DeleteTheme('communication');
    $delTheme->delTheme();
}

if($_GET['key'] == 'life') {
    $delTheme = new DeleteTheme('life');
    $delTheme->delTheme();
}

if($_GET['key'] == 'love') {
    $delTheme = new DeleteTheme('love');
    $delTheme->delTheme();
}

if($_GET['key'] == 'children') {
    $delTheme = new DeleteTheme('children');
    $delTheme->delTheme();
}

if($_GET['key'] == 'health') {
    $delTheme = new DeleteTheme('health');
    $delTheme->delTheme();
}

if($_GET['key'] == 'house') {
    $delTheme = new DeleteTheme('house');
    $delTheme->delTheme();
}

if($_GET['key'] == 'pregnancy') {
    $delTheme = new DeleteTheme('pregnancy');
    $delTheme->delTheme();
}

if($_GET['key'] == 'hostess') {
    $delTheme = new DeleteTheme('hostess');
    $delTheme->delTheme();
}

if($_GET['key'] == 'wedding') {
    $delTheme = new DeleteTheme('wedding');
    $delTheme->delTheme();
}

if($_GET['key'] == 'fashion') {
    $delTheme = new DeleteTheme('fashion');
    $delTheme->delTheme();
}

if($_GET['key'] == 'travel') {
    $delTheme = new DeleteTheme('travel');
    $delTheme->delTheme();
}

if($_GET['key'] == 'work') {
    $delTheme = new DeleteTheme('work');
    $delTheme->delTheme();
}

if($_GET['key'] == 'hobby') {
    $delTheme = new DeleteTheme('hobby');
    $delTheme->delTheme();
}




