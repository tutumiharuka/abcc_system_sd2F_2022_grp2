<?php session_start(); ?>
<?php
// ログインしているか、してないとログイン画面転送
require_once 'LoginManager.php';
$loginMng = new LoginManager(); 
$loginMng->isLogin();

require_once "DBManager.php";
$dbmng = new DBManager();
$member_id = $_SESSION['member']['member_id'];

//もし削除があったら、削除します。
if(isset($_POST['delcart'])) $dbmng->deleteFromCartById($_POST['delcart']);
// member_idでカート情報を取り出す
$results = $dbmng->getCartList($member_id);
$count = count($results);
$sum = $dbmng->getCartSum($member_id);

?>
<?php include_once 'GameNavbar.php'; ?>
<?php include_once 'GameHeader.php'; ?>
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
    .x-btn {
        text-align:right;
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
        .x-btn {
            position: relative;
            top: 10%;
            text-align:right;
            /* right: -10%; */
        }
    }
</style>

<!-- カートに商品がない場合 -->
<?php if($count == 0): ?>
    <div class="container mt-5">
        <div class="row h1 ms-5">カート</div>
            <div class="kuhaku"></div>
            <div class="row mt-5">
                <div class="col-12 text-center h4"><i class="typcn typcn-shopping-cart kara-icon"></i></div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center h4 fw-bold kara-text">カートに商品はありません</div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a class="btn btn-outline-primary btn-lg rounded-pill kara-btn" href="G1-1_Top.php">お買い物を続ける</a>
                </div>
            </div>
        <div>
    </div>

<!-- カートに商品がある場合 -->
<?php else: ?>
    <div class="container">
        <div class="row mt-5">
            <ul class="list-inline">
                <li class="list-inline-item fw-bold h1">カート</li>
                <li class="list-inline-item fw-bold h5">(合計<?php echo $count ?>点)</li>
            </ul>
        </div>
        <div class="row">
            <!-- カートリスト -->
            <div class="col-md-8">
                <?php 
                foreach($results as $row){
                    if( $row['price'] == 0){$price= '無料';}else{$price=number_format($row['price']).'円 税込';}
                    echo '
                    <div class="row mt-5">
                        <div class="col-md-5 d-flex justify-content-center">
                            <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                <img class="img-fluid" src="'.$row['image_small'].'">
                            </a>
                        </div>
                        
                        <div class="col-md-7">
                            <div class="row me-3 x-btn">
                                <form action="G1-6-1_Cart.php" method="post">
                                    <input type="hidden" name="delcart" value="'.$row['cart_id'].'">
                                    <button type="submit" class="btn"><h4>
                                        <i class="bi bi-x-square-fill"></i>
                                        </h4></button>
                                </form>
                            </div>
                            <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                            <div class="row ms-4 ms-md-0 h4">'.$row['shohin_name'].'</div>
                            <div class="row ms-4 ms-md-0 mt-3 mt-md-5 h5">'.$price.'</div>
                            </a>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <!-- 合計 -->
            <div class="col-md-4 mt-5  text-nowrap">
                <div class="row">
                    <div class="col-6 fw-bold"><span class="h2 fw-bold">合計</span>(税込)</div>
                    <span class="col-6 h3 fw-bold text-end"><?php echo number_format($sum)?>円</span>
                </div>

                <hr class="mb-5">
                <div class="row m-3 gx-1">
                    <a class="btn btn-primary btn-lg rounded-pill" href="G1-6-2_BuyCheck.php">レジに進む</a>
                </div>
                <div class="row m-3 gx-1">
                    <a class="btn btn-outline-primary btn-lg rounded-pill text-nowrap" href="G1-1_Top.php">お買い物を続ける</a>
                </div>
            </div>
        </div>
    </div>


<?php endif; ?>
<br>
<br>
<br>
<br>
<br>












<!-- 時間があればまた作るね！ -->
<!-- 下のナビゲーションバー -->
<!-- <nav class="navbar fixed-bottom btm-nav">
    <div class="container-fluid">
        <span class="navbar-text"></span>
        <span class="navbar-text"></span>
        <span class="navbar-text">
            <ul class="list-inline d-flex justify-content-center align-items-center">
                <li class="list-inline-item mt-1"><input class="form-check-input" type="checkbox"></li>
                <li class="list-inline-item h5 mt-3 ms-3">全選択</li>
            </ul>
        </span>
        <span class="navbar-text h4">選択済み:2点</span>
        <span class="navbar-text"></span>
        <span class="navbar-text">
            <ul class="list-inline">
                <li class="list-inline-item h5">合計:</li>
                <li class="list-inline-item mt-2 h3">2,000</li>
                <li class="list-inline-item h5">円</li>
            </ul>
        </span>
        <span class="navbar-text mb-3">
                <a class="btn btn-outline-primary btn-lg rounded-pill" href="G1-6-2_BuyCheck.php">レジに進む</a>
        </span>
        <span class="navbar-text"></span>
        <span class="navbar-text"></span>
    </div>
  
  </nav> -->
