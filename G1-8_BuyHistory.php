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
        width:280px;
    }
    .kuhaku{
        height:100px;
    }
    .send-btn{
        text-align:center;
    }

    @media only screen and (max-width: 767px) {
        .kara-icon{
            font-size:14vw;
            color:gray;
        }
        .kara-text{
            font-size:4vw;
            color:gray;
        }
        .kuhaku{
            height:50px;
        }
        .send-btn{
            position: relative;
            top: -30px;
            right:0;
            text-align:right;
        }
        .img-thumbnail{
            max-width: 360px;
        }
    }
</style>

<div class="container mt-5">
    <!-- タイトル -->
        <div class="row h1 ms-md-5 d-none d-md-block">購入履歴</div>
        <div class="row h1 text-center d-block d-md-none">購入履歴</div>
    <!-- 購入履歴がない場合 -->
        <?php if(count($results)==0): ?>
            <div class="container">
                <div class="kuhaku"></div>
                <div class="row mt-5">
                    <div class="col-12 text-center h4"><i class="bi bi-cart-check-fill kara-icon"></i></div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center h4 fw-bold kara-text">購入履歴はありません</div>
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
                        echo '  <div class="col-md-3 mt-3 mt-md-5  d-flex justify-content-center">
                                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                    <img class="img-thumbnail img-fluid" src="'.$row['image_small'].'"></a>
                                </div>
                                <div class="col-md-3 mt-md-3">
                                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                    <div class="row h5 mt-4 mt-md-4 ms-2 ms-md-0 ">'.$row['shohin_name'].'</div>
                                    <div class="row h6 mt-2 mt-md-2 ms-2 ms-md-0 text-secondary">購入日:'.$row['buying_date'].'</div></a>
                                    <div class="row mt-2 mt-md-4 send-btn">
                                    <a href="G1-6-4_Send.php?send_game='.$row['shohin_id'].'">
                                    再転送 <i class="bi bi-box-arrow-in-right h2"></i>
                                    </a>
                                    </div>
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
