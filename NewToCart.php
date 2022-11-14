<?php session_start(); ?>
<?php
require_once "DBManager.php";
$dbmng = new DBManager();

$member_id = $_SESSION['member']['member_id'];//会員ID
$shohin_id = $_POST['shohin_id'];//商品ID    

if($_POST['addcart']){
    $dbmng->insertNewCart($member_id,$shohin_id);
}

if($_POST['delcart']){
    $dbmng->insertNewCart($member_id,$shohin_id);
}

hea

?>