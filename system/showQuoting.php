<?
session_start();

require_once "../classes/Answers.php";

if($_GET['key'] == 'newsForum') {
    $showAnswer = new Answers('quoting_news_forum');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'workshop') {
    $showAnswer = new Answers('quoting_workshop');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'communication') {
    $showAnswer = new Answers('quoting_communication');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'life') {
    $showAnswer = new Answers('quoting_life');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'love') {
    $showAnswer = new Answers('quoting_love');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'children') {
    $showAnswer = new Answers('quoting_children');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'health') {
    $showAnswer = new Answers('quoting_health');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'house') {
    $showAnswer = new Answers('quoting_house');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'pregnancy') {
    $showAnswer = new Answers('quoting_pregnancy');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'hostess') {
    $showAnswer = new Answers('quoting_hostess');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'wedding') {
    $showAnswer = new Answers('quoting_wedding');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'fashion') {
    $showAnswer = new Answers('quoting_fashion');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'travel') {
    $showAnswer = new Answers('quoting_travel');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'work') {
    $showAnswer = new Answers('quoting_work');
    $showAnswer->showAnswer();
}

if($_GET['key'] == 'hobby') {
    $showAnswer = new Answers('quoting_hobby');
    $showAnswer->showAnswer();
}