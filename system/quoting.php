<?
session_start();

require_once "../classes/Answers.php";

if($_GET['key'] == 'newsForum') {
    $addAnswer = new Answers('quoting_news_forum');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'workshop') {
    $addAnswer = new Answers('quoting_workshop');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'communication') {
    $addAnswer = new Answers('quoting_communication');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'life') {
    $addAnswer = new Answers('quoting_life');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'love') {
    $addAnswer = new Answers('quoting_love');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'children') {
    $addAnswer = new Answers('quoting_children');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'health') {
    $addAnswer = new Answers('quoting_health');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'house') {
    $addAnswer = new Answers('quoting_house');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'pregnancy') {
    $addAnswer = new Answers('quoting_pregnancy');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'hostess') {
    $addAnswer = new Answers('quoting_hostess');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'wedding') {
    $addAnswer = new Answers('quoting_wedding');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'fashion') {
    $addAnswer = new Answers('quoting_fashion');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'travel') {
    $addAnswer = new Answers('quoting_travel');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'work') {
    $addAnswer = new Answers('quoting_work');
    $addAnswer->addAnswer();
}

if($_GET['key'] == 'hobby') {
    $addAnswer = new Answers('quoting_hobby');
    $addAnswer->addAnswer();
}

