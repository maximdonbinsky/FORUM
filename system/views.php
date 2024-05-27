<?
session_start();

require_once "../classes/Views.php";

if($_GET['key'] == 'newsForum') {
    $views = new Views('news_forum');
    $views->addViews();
}

if($_GET['key'] == 'workshop') {
    $views = new Views('workshop');
    $views->addViews();
}

if($_GET['key'] == 'communication') {
    $views = new Views('communication');
    $views->addViews();
}

if($_GET['key'] == 'life') {
    $views = new Views('life');
    $views->addViews();
}

if($_GET['key'] == 'love') {
    $views = new Views('love');
    $views->addViews();
}

if($_GET['key'] == 'children') {
    $views = new Views('children');
    $views->addViews();
}

if($_GET['key'] == 'health') {
    $views = new Views('health');
    $views->addViews();
}

if($_GET['key'] == 'house') {
    $views = new Views('house');
    $views->addViews();
}

if($_GET['key'] == 'pregnancy') {
    $views = new Views('pregnancy');
    $views->addViews();
}

if($_GET['key'] == 'hostess') {
    $views = new Views('hostess');
    $views->addViews();
}

if($_GET['key'] == 'wedding') {
    $views = new Views('wedding');
    $views->addViews();
}

if($_GET['key'] == 'fashion') {
    $views = new Views('fashion');
    $views->addViews();
}

if($_GET['key'] == 'travel') {
    $views = new Views('travel');
    $views->addViews();
}

if($_GET['key'] == 'work') {
    $views = new Views('work');
    $views->addViews();
}

if($_GET['key'] == 'hobby') {
    $views = new Views('hobby');
    $views->addViews();
}

