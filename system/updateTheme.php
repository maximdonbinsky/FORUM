<?
session_start();

require_once "../classes/EditTheme.php";

if($_GET['key'] == 'newsForum') {
    $upTheme = new EditTheme('news_forum');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'workshop') {
    $upTheme = new EditTheme('workshop');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'communication') {
    $upTheme = new EditTheme('communication');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'life') {
    $upTheme = new EditTheme('life');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'love') {
    $upTheme = new EditTheme('love');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'children') {
    $upTheme = new EditTheme('children');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'health') {
    $upTheme = new EditTheme('health');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'house') {
    $upTheme = new EditTheme('house');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'pregnancy') {
    $upTheme = new EditTheme('pregnancy');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'hostess') {
    $upTheme = new EditTheme('hostess');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'wedding') {
    $upTheme = new EditTheme('wedding');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'fashion') {
    $upTheme = new EditTheme('fashion');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'travel') {
    $upTheme = new EditTheme('travel');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'work') {
    $upTheme = new EditTheme('work');
    $upTheme->updateTheme();
}

if($_GET['key'] == 'hobby') {
    $upTheme = new EditTheme('hobby');
    $upTheme->updateTheme();
}
