<?
session_start();

require_once "../classes/EditComment.php";

if($_GET['key'] == 'newsForum') {
    $editComment = new EditComment('comments_news_forum');
    $editComment->updateComment();
}

if($_GET['key'] == 'workshop') {
    $editComment = new EditComment('comments_workshop');
    $editComment->updateComment();
}

if($_GET['key'] == 'communication') {
    $editComment = new EditComment('comments_communication');
    $editComment->updateComment();
}

if($_GET['key'] == 'life') {
    $editComment = new EditComment('comments_life');
    $editComment->updateComment();
}

if($_GET['key'] == 'love') {
    $editComment = new EditComment('comments_love');
    $editComment->updateComment();
}

if($_GET['key'] == 'children') {
    $editComment = new EditComment('comments_children');
    $editComment->updateComment();
}

if($_GET['key'] == 'health') {
    $editComment = new EditComment('comments_health');
    $editComment->updateComment();
}

if($_GET['key'] == 'house') {
    $editComment = new EditComment('comments_house');
    $editComment->updateComment();
}

if($_GET['key'] == 'pregnancy') {
    $editComment = new EditComment('comments_pregnancy');
    $editComment->updateComment();
}

if($_GET['key'] == 'hostess') {
    $editComment = new EditComment('comments_hostess');
    $editComment->updateComment();
}

if($_GET['key'] == 'wedding') {
    $editComment = new EditComment('comments_wedding');
    $editComment->updateComment();
}

if($_GET['key'] == 'fashion') {
    $editComment = new EditComment('comments_fashion');
    $editComment->updateComment();
}

if($_GET['key'] == 'travel') {
    $editComment = new EditComment('comments_travel');
    $editComment->updateComment();
}

if($_GET['key'] == 'work') {
    $editComment = new EditComment('comments_work');
    $editComment->updateComment();
}

if($_GET['key'] == 'hobby') {
    $editComment = new EditComment('comments_hobby');
    $editComment->updateComment();
}