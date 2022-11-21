<?php session_start(); ?>
<?php 
// ログインしているか、してないとログイン画面転送
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    //ユーザーだれ
    $member_id = $_SESSION['member']['member_id'];
    require_once "DBManager.php";
    $dbmng = new DBManager();
    $results = $dbmng->getFavoriteList($member_id);
    
    // echo $results;
?>

<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<div class="container">
    <div class="row h1 ms-5 mt-5">お気に入り</div>
    <!-- 商品リスト -->
    <?php 
        foreach($results as $row){
            if( $row['price'] == 0){$price= '無料';}else{$price=$row['price'].'円 税込';}
            echo '
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-3"><img class="img-fluid" src="'.$row['image_small'].'"></div>
                <div class="col-md-4">
                    <div class="row mt-5 h4">'.$row['shohin_name'].'</div>
                    <div class="row text-sm-start mt-4 h5">'.$price.'</div>
                </div>
                <div class="col-md-2">
                    <div class="row text-end"><i class="bi bi-x-square-fill h4"></i></div>
                    <div class="row h5 mt-5">カートに入れる</div>
                    <div class="row h5 mt-5">購入済み</div>
                </div>
            </div>';
        }
    ?>
    <!-- <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-3"><img class="img-fluid" src="img/FPS/FPS_s01.jpg"></div>
        <div class="col-md-4">
            <div class="row mt-5 h4">PUBG: BATTLEGROUNDS</div>
            <div class="row text-sm-start mt-4 h5">税込:1,000円</div>
        </div>
        <div class="col-md-2">
            <div class="row text-end"><i class="bi bi-x-square-fill h4"></i></div>
            <div class="row h5 mt-5">カートに入れる</div>
            <div class="row h5 mt-5">購入済み</div>
        </div>
    </div>

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-3"><img class="img-fluid" src="img/FPS/FPS_s01.jpg"></div>
        <div class="col-md-4">
            <div class="row mt-5 h4">PUBG: BATTLEGROUNDS</div>
            <div class="row text-sm-start mt-4 h5">税込:1,000円</div>
        </div>
        <div class="col-md-2">
            <div class="row text-end"><i class="bi bi-x-square-fill h4"></i></div>
            <div class="row h5 mt-5">カートに入れる</div>
            <div class="row h5 mt-5">購入済み</div>
        </div>
    </div> -->

</div>



<br>
<br>
<br>
<br>





<?php include_once 'GameFooter.php'; ?>

