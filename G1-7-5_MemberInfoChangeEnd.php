<?php session_start(); ?>
<?php 
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $birth = $_POST['birth'];
    $pass = $_POST['pass'];
    
    require_once "DBManager.php";
    $dbmng = new DBManager();
    $results = $dbmng->updateNewMember($name,$mail,$phone,$birth);

    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    // アップデートする
    public function updateNewMember($name,$mail,$phone,$birth){
        $sql = "INSERT INTO members(name,mail,phone_number,date_of_birth) VALUES (?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $name,  PDO::PARAM_STR);
        $ps->bindValue(2, $mail,  PDO::PARAM_STR);
        $ps->bindValue(3, $phone, PDO::PARAM_STR);
        $ps->bindValue(4, $birth, PDO::PARAM_STR);
        $ps->execute();
      }
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
