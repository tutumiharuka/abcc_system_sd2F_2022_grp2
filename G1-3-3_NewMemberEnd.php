<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $birth = $_POST['birth'];
    $pass = $_POST['pass'];
    // echo "入力：$name, $mail , $phone , $birth $pass";
    require_once "DBManager.php";
    $dbmng = new DBManager();
    $dbmng->insertNewMember($name,$mail,$phone,$birth,$pass);
?>


<style>
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
    <div class="row text-center moji"><h1>会員登録成功しました</h1></div>
    <div class="row text-center moji"><h3>ようこそ、ゲームECサイトへ</h3></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-primary btn-lg rounded-pill" href="G1-1_Top.php">TOPへ</a>
        </div>
    </div>
</div>


<?php include_once 'GameFooter.php'; ?>
