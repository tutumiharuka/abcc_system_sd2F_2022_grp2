<?php session_start(); ?>
<?php 
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();
?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .kuhaku-end{
        height: 20%;
    }
    .moji{
        height: 150px;
    }
 
</style>
<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row kuhaku-end"></div>
    <div class="row text-center moji"><h1>情報変更完了しました</h1></div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-outline-primary btn-lg rounded-pill" href="G1-1_Top.php">TOPへ</a>
        </div>
    </div>
</div>

<?php include_once 'GameFooter.php'; ?>
