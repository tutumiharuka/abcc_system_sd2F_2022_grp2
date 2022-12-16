<?php session_start(); ?>
<?php 
// ログインしているか、してないとログイン画面転送
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    require_once "DBManager.php";
    $dbmng = new DBManager();
    $member_id = $_SESSION['member']['member_id'];

    //削除のPOSTがあったら、先に削除また表示
    if(isset($_POST['delfav']))  $dbmng->deleteFavoriteById($_POST['delfav']);
    if(isset($_POST['addcart'])) $dbmng->insertNewCart($member_id,$_POST['addcart']);
    if(isset($_POST['delcart'])) $dbmng->deleteFromCart($member_id,$_POST['delcart']);
    //ユーザー
    $results = $dbmng->getFavoriteList($member_id);
    $count = count($results);
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
            top: -70px;
            right:0px
        }
        .cart-btn{
            position: relative;
            top: -90px;
            right:10px
        }
        .col-kuhaku{
            height:30px
        }

        .img-thumbnail{
            max-width: 360px;
        }
    }

</style>
<div class="container">
    <div class="row h1 mt-5 ms-md-5 d-none d-md-block">お気に入り</div>
    <div class="row h1 mt-5 text-center d-block d-md-none">お気に入り</div>

    <!-- お気に入りに商品がない場合 -->
    <?php if($count == 0){
        echo '
        <div class="container">
            <div class="kuhaku"></div>
            <div class="row mt-5">
                <div class="col-12 text-center h4"><i class="typcn typcn-heart-outline kara-icon"></i></div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center h4 fw-bold kara-text">お気に入りに商品はありません</div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a class="btn btn-outline-primary btn-lg rounded-pill kara-btn" href="G1-1_Top.php">お買い物を続ける</a>
                </div>
            </div>
        </div>';
        }else{

        // 商品リスト
        foreach($results as $row){
            $shohin_id = $row['shohin_id'];
            if( $row['price'] == 0){$price= '無料';}else{$price=number_format($row['price']).'円 税込';}
            echo '
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$shohin_id.'">    
                        <img class="img-thumbnail img-fluid" src="'.$row['image_small'].'"></a>
                </div>

                <div class="col-md-4 ms-md-0">
                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$shohin_id.'">
                        <div class="row ms-2 ms-md-0 mt-5 h5">'.$row['shohin_name'].'</div>
                        <div class="row ms-2 ms-md-0 mt-4 h6">'.$price.'</div>
                    </a>
                </div>

                <div class="col-md-2 col-kuhaku">
                    <div class="row text-end x-btn">
                        <form action="G1-4_Favorite.php" method="post">
                            <input type="hidden" name="delfav" value="'.$row['favorite_id'].'">
                            <button type="submit" class="btn"><h4><i class="bi bi-x-square-fill"></i></h4></button>
                        </form>
                    </div>

                    <div class="row text-end cart-btn">';
            if($dbmng->isInBuyHistory($member_id,$shohin_id) ==true){
                echo '<h5 class="text-secondary">購入済み</h5>';
            }elseif($dbmng->isInCart($member_id,$shohin_id) ==false){
                echo '<form action="G1-4_Favorite.php" method="post">
                        <input type="hidden" name="addcart" value="'.$shohin_id.'">
                        <input type="submit" class="btn btn-outline-secondary btn-md rounded-pill" id="addCartBtn" value="カートに入れる">
                      </form>';
            }else{
                echo '<form action="G1-4_Favorite.php" method="post">
                        <input type="hidden" name="delcart" value="'.$shohin_id.'">
                        <input type="submit" class="btn btn-outline-secondary btn-md rounded-pill" id="delCartBtn" value="カートに追加済み">
                      </form>';
            }
                echo '
                    </div>
                </div>
            </div>';
        }
     } ?>

</div>

<br>
<br>
<br>
<br>
