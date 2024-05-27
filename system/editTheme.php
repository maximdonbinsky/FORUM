<?
session_start();

require_once "../classes/EditTheme.php";

if($_GET['key'] == 'newsForum') {
    $editTheme = new EditTheme('news_forum');
    $editTheme->editTheme();
}

if($_GET['key'] == 'workshop') {
    $editTheme = new EditTheme('workshop');
    $editTheme->editTheme();
}

if($_GET['key'] == 'communication') {
    $editTheme = new EditTheme('communication');
    $editTheme->editTheme();
}

if($_GET['key'] == 'life') {
    $editTheme = new EditTheme('life');
    $editTheme->editTheme();
}

if($_GET['key'] == 'love') {
    $editTheme = new EditTheme('love');
    $editTheme->editTheme();
}

if($_GET['key'] == 'children') {
    $editTheme = new EditTheme('children');
    $editTheme->editTheme();
}

if($_GET['key'] == 'health') {
    $editTheme = new EditTheme('health');
    $editTheme->editTheme();
}

if($_GET['key'] == 'house') {
    $editTheme = new EditTheme('house');
    $editTheme->editTheme();
}

if($_GET['key'] == 'pregnancy') {
    $editTheme = new EditTheme('pregnancy');
    $editTheme->editTheme();
}

if($_GET['key'] == 'hostess') {
    $editTheme = new EditTheme('hostess');
    $editTheme->editTheme();
}

if($_GET['key'] == 'wedding') {
    $editTheme = new EditTheme('wedding');
    $editTheme->editTheme();
}

if($_GET['key'] == 'fashion') {
    $editTheme = new EditTheme('fashion');
    $editTheme->editTheme();
}

if($_GET['key'] == 'travel') {
    $editTheme = new EditTheme('travel');
    $editTheme->editTheme();
}

if($_GET['key'] == 'work') {
    $editTheme = new EditTheme('work');
    $editTheme->editTheme();
}

if($_GET['key'] == 'hobby') {
    $editTheme = new EditTheme('hobby');
    $editTheme->editTheme();
}