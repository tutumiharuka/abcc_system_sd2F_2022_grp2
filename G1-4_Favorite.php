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
    .fav-kara-icon{
        font-size:7vw;
        color:gray;
    }
    .fav-kara-text{
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
<div class="container">
    <div class="row h1 ms-5 mt-5">お気に入り</div>

    <!-- お気に入りに商品がない場合 -->
    <?php if($count == 0){
        echo '
        <div class="container">
            <div class="kuhaku"></div>
            <div class="row mt-5">
                <div class="col-12 text-center h4"><i class="typcn typcn-heart-outline fav-kara-icon"></i></div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center h4 fw-bold fav-kara-text">お気に入りに商品はありません</div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a class="btn btn-outline-primary btn-lg rounded-pill btn-kara" href="G1-1_Top.php">お買い物を続ける</a>
                </div>
            </div>
        </div>';
        }else{

        // 商品リスト
        foreach($results as $row){
            $shohin_id = $row['shohin_id'];
            if( $row['price'] == 0){$price= '無料';}else{$price=$row['price'].'円 税込';}
            echo '
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-3">
                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$shohin_id.'">    
                        <img class="img-fluid" src="'.$row['image_small'].'"></a>
                </div>
                <div class="col-md-4">
                    <a href="G1-5-2_ShohinDetails.php?shohin_id='.$shohin_id.'">
                        <div class="row mt-5 h4">'.$row['shohin_name'].'</div>
                        <div class="row text-sm-start mt-4 h5">'.$price.'</div>
                    </a>
                </div>
                <div class="col-md-2">
                    <form action="G1-4_Favorite.php" method="post">
                        <input type="hidden" name="delfav" value="'.$row['favorite_id'].'">
                        <div class="row text-end">
                            <button type="submit" class="btn btn-outline-light"><h4><i class="bi bi-x-square-fill"></i></h4></button>
                        </div>
                    </form>';

            if($dbmng->isInBuyHistory($member_id,$shohin_id) ==true){
                echo '<input class="btn btn-outline-secondary btn-md rounded-pill" value="購入済み" disabled>';
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
            </div>';
        }
     } ?>

</div>

<br>
<br>
<br>
<br>

<?php include_once 'GameFooter.php'; ?>

