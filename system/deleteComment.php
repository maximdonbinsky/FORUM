<?
session_start();

require_once "../classes/DeleteComment.php";

if($_GET['key'] == 'newsForum') {
    $delComment = new DeleteComment('comments_news_forum');
    $delComment->delComment();
}

if($_GET['key'] == 'workshop') {
    $delComment = new DeleteComment('comments_workshop');
    $delComment->delComment();
}

if($_GET['key'] == 'communication') {
    $delComment = new DeleteComment('comments_communication');
    $delComment->delComment();
}

if($_GET['key'] == 'life') {
    $delComment = new DeleteComment('comments_life');
    $delComment->delComment();
}

if($_GET['key'] == 'love') {
    $delComment = new DeleteComment('comments_love');
    $delComment->delComment();
}

if($_GET['key'] == 'children') {
    $delComment = new DeleteComment('comments_children');
    $delComment->delComment();
}

if($_GET['key'] == 'health') {
    $delComment = new DeleteComment('comments_health');
    $delComment->delComment();
}

if($_GET['key'] == 'house') {
    $delComment = new DeleteComment('comments_house');
    $delComment->delComment();
}

if($_GET['key'] == 'pregnancy') {
    $delComment = new DeleteComment('pregnancy');
    $delComment->delComment();
}

if($_GET['key'] == 'hostess') {
    $delComment = new DeleteComment('comments_hostess');
    $delComment->delComment();
}

if($_GET['key'] == 'wedding') {
    $delComment = new DeleteComment('comments_wedding');
    $delComment->delComment();
}

if($_GET['key'] == 'fashion') {
    $delComment = new DeleteComment('comments_fashion');
    $delComment->delComment();
}

if($_GET['key'] == 'travel') {
    $delComment = new DeleteComment('comments_travel');
    $delComment->delComment();
}

if($_GET['key'] == 'work') {
    $delComment = new DeleteComment('comments_work');
    $delComment->delComment();
}

if($_GET['key'] == 'hobby') {
    $delComment = new DeleteComment('comments_hobby');
    $delComment->delComment();
}





