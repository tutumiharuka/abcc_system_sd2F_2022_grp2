<?php session_start(); ?>
<?php 
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$birth = $_POST['birth'];
$pass = $_POST['pass'];

require_once "DBManager.php";
$dbmng = new DBManager();
$results = $dbmng->insertNewMember($name,$mail,$phone,$birth,$pass);

//自動的にログインする
require_once 'LoginManager.php';
$loginmng = new LoginManager();
$loginmng->loginAfterNewMember($mail);

?>

<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>


<style>
    .game-text{
        font-family: 'PixelMplus';
    }
    .kuhaku-form{
        height: 15%;
    }
    .moji{
        height: 150px;
    }
</style>
<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row kuhaku-form"></div>
    <div class="row text-center moji game-text"><h1>会員登録成功しました</h1></div>
    <div class="row text-center moji game-text"><h3>ようこそ、ゲームECサイトへ</h3></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-primary btn-lg rounded-pill text-light" href="G1-1_Top.php">　　TOPへ　　</a>
        </div>
    </div>
</div>

