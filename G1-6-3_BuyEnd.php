<?php session_start(); ?>
<?php 
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    require_once "DBManager.php";
    $dbmng = new DBManager();
    $member_id = $_SESSION['member']['member_id'];
    //注文したゲームをカートから削除し、履歴に追加し、転送リスト配列を用意
    $sendlist = $dbmng->updateCartAndHistory($member_id);
    $sendsess = serialize($sendlist);
    $_SESSION['send'] = $sendsess;
?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
  @font-face {
    font-family: 'PixelMplus';
    src: url('font/PixelMplus12-Bold.ttf') format('TrueType');
    }
  .game-text{
      font-family: 'PixelMplus';
  }
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

<div class="container">
    <div class="row kuhaku-end"></div>
    <!-- <div class="row text-center moji"><h1>情報変更完了しました</h1></div> -->
    <div class="row text-center moji game-text"><h2>続けて手続きを行います</h2></div>
    <div class="row text-center moji"><h4>お買い上げ内容が書かれたメールを、アソウアカウントのメールアドレスにお送りします。<br>子どもアカウントの場合は保護者（ファミリーの管理者）のメールアドレスにお送りします。</h4></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-primary btn-lg rounded-pill botan fw-bold" href="G1-6-4_Send.php">転送</a>
        </div>
    </div>
</div>

<?php include_once 'GameFooter.php'; ?>
