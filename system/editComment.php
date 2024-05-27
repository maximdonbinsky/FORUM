<?
session_start();

require_once "../classes/EditComment.php";

if($_GET['key'] == 'newsForum') {
    $editComment = new EditComment('comments_news_forum');
    $editComment->editComment();
}

if($_GET['key'] == 'workshop') {
    $editComment = new EditComment('comments_workshop');
    $editComment->editComment();
}

if($_GET['key'] == 'communication') {
    $editComment = new EditComment('comments_communication');
    $editComment->editComment();
}

if($_GET['key'] == 'life') {
    $editComment = new EditComment('comments_life');
    $editComment->editComment();
}

if($_GET['key'] == 'love') {
    $editComment = new EditComment('comments_love');
    $editComment->editComment();
}

if($_GET['key'] == 'children') {
    $editComment = new EditComment('comments_children');
    $editComment->editComment();
}

if($_GET['key'] == 'health') {
    $editComment = new EditComment('comments_health');
    $editComment->editComment();
}

if($_GET['key'] == 'house') {
    $editComment = new EditComment('comments_house');
    $editComment->editComment();
}

if($_GET['key'] == 'pregnancy') {
    $editComment = new EditComment('comments_pregnancy');
    $editComment->editComment();
}

if($_GET['key'] == 'hostess') {
    $editComment = new EditComment('comments_hostess');
    $editComment->editComment();
}

if($_GET['key'] == 'wedding') {
    $editComment = new EditComment('comments_wedding');
    $editComment->editComment();
}

if($_GET['key'] == 'fashion') {
    $editComment = new EditComment('comments_fashion');
    $editComment->editComment();
}

if($_GET['key'] == 'travel') {
    $editComment = new EditComment('comments_travel');
    $editComment->editComment();
}

if($_GET['key'] == 'work') {
    $editComment = new EditComment('comments_work');
    $editComment->editComment();
}

if($_GET['key'] == 'hobby') {
    $editComment = new EditComment('comments_hobby');
    $editComment->editComment();
}