<?php 
session_start(); 
echo $_SESSION['member']['member_id'].'<br>';
echo $_SESSION['member']['name'].'<br>';
echo $_SESSION['member']['mail'].'<br>';
echo $_SESSION['member']['phone_number'].'<br>';
echo $_SESSION['member']['date_of_birth'].'<br>';
echo $_SESSION['member']['password'].'<br>';
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
    .botan{
        width: 200px;
        height: 50px;
    }
</style>
<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row kuhaku-end"></div>
    <div class="row text-center moji"><h1>ログインしました</h1></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-outline-primary btn-lg rounded-pill" href="G1-1_Top.php">TOPへ</a>
        </div>
    </div>
</div>

<?php include_once 'GameFooter.php'; ?>
