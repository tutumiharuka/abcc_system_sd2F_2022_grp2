<?php session_start(); ?>
<?php 
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    require_once "DBManager.php";
    $dbmng = new DBManager();
    $member_id = $_SESSION['member']['member_id'];
    //注文したゲームをカートから削除し、履歴に追加する
    $results = $dbmng->getBuyHistroyList($member_id);

?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<style>
    .kara-icon{
        font-size:7vw;
        color:gray;
    }
    .kara-text{
        font-size:2vw;
        color:gray;
    }
    .kara-btn{
        width:300px;
    }
    .kuhaku{
        height:100px;
    }
</style>

<div class="container mt-5">
    <!-- タイトル -->
        <div class="row h1 ms-5 mt-5">購入履歴</div>
        <?php if($results == 0): ?>
            <div class="container">
                <div class="kuhaku"></div>
                <div class="row mt-5">
                    <div class="col-12 text-center h4"><i class="typcn typcn-shopping-cart kara-icon"></i></div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center h4 fw-bold kara-text">購入履歴ははありません</div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a class="btn btn-outline-primary btn-lg rounded-pill kara-btn" href="G1-1_Top.php">お買い物を続ける</a>
                    </div>
                </div>
            <div>
        </div>

    <!-- 購入履歴がある場合 -->
        <?php else: ?>
    <!-- リストの一行 -->
            <div class="row">
                <?php
                    foreach($results as $row){
                        echo '  <div class="col-lg-3 mt-5">
                                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                    <img class="img-fluid" src="'.$row['image_small'].'"></a>
                                </div>
                                <div class="col-lg-3 mt-5">
                                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                    <div class="row h4 mt-5 text-start">'.$row['shohin_name'].'</div>
                                    <div class="row h5 ms-5 mt-5">購入日:'.$row['buying_date'].'</div></a>
                                    <div class="row text-center me-5 mt-5"><i class="bi bi-box-arrow-in-right h2"></i></div>
                                </div>';
                    }
                ?>
            </div>
        <?php endif; ?>
    </div>
<br>
<br>
<br>
<br>
<?php include_once 'GameFooter.php'; ?>

