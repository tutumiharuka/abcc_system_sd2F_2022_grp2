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
$count = $dbmng->getCartCount($member_id);
$sum = $dbmng->getCartSum($member_id);

?>
<?php include_once 'GameNavbar.php'; ?>
<?php include_once 'GameHeader.php'; ?>
<style>
    input[type="checkbox"]{
    transform: scale(1.5);
    }
    .btm-nav{
    z-index: 3;
    height: 80px;
    background-color: #DEF2FF;
    }
    .cart-kara-icon{
        font-size:7vw;
        color:gray;
    }
    .cart-kara-text{
        font-size:2vw;
        color:gray;
    }
    .btn-kara{
        width:300px;
    }
    .kuhaku{
        height:100px;
    }
</style>


<?php if($dbmng->getCartCount($member_id)==false): ?>

    <div class="container">
        <div class="kuhaku"></div>
        <div class="row mt-5">
            <div class="col-12 text-center h4"><i class="typcn typcn-shopping-cart cart-kara-icon"></i></div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center h4 fw-bold cart-kara-text">カートに商品はありません</div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a class="btn btn-outline-primary btn-lg rounded-pill btn-kara" href="G1-1_Top.php">お買い物を続ける</a>
            </div>
        </div>
    </div>

<?php else: ?>


    <!-- カートに商品がある場合 -->
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
                    echo '<hr>
                    <div class="row mt-5">
                        <div class="col-md-4"><img class="img-fluid" src="'.$row['image_small'].'"></div>
                        <div class="col-md-8">
                            <div class="row text-end me-3">
                                <form action="G1-6-1_Cart.php" method="post">
                                    <input type="hidden" name="delcart" value="'.$row['cart_id'].'">
                                    <button type="submit" class="btn btn-outline-light"><h4><i class="bi bi-x-square-fill"></i></h4></button>
                                </form>
                            </div>
                            <div class="row ms-1 h4">'.$row['shohin_name'].'</div>
                            <div class="row text-sm-start mt-5 ms-1 h5">税込:'.$row['price'].'円</div>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <!-- 合計 -->
            <div class="col-md-4">
                <div class="row">
                    <div class="col fw-bold"><span class="h2 fw-bold">合計</span>(税込)</div>
                    <span class="col h3 fw-bold text-end "><?php echo $sum?>円</span>
                </div>
                <hr class="mb-3">
                <div class="row m-3 gx-1">
                    <a class="btn btn-primary btn-lg rounded-pill" href="G1-6-2_BuyCheck.php">レジに進む</a>
                </div>
                <div class="row m-3 gx-1">
                    <a class="btn btn-outline-primary btn-lg rounded-pill" href="G1-1_Top.php">お買い物を続ける</a>
                </div>
            </div>
        </div>
    </div>







    
<?php endif; ?>













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



<?php include_once 'GameFooter.php'; ?>