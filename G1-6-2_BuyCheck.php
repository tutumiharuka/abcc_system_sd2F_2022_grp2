<?php session_start(); ?>
<?php 
require_once 'LoginManager.php';
$loginMng = new LoginManager(); 
$loginMng->isLogin();

require_once "DBManager.php";
$dbmng = new DBManager();
$member_id = $_SESSION['member']['member_id'];
$results = $dbmng->getCartList($member_id);
$count = count($results);
$sum = $dbmng->getCartSum($member_id);

?>



<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<style>
    .celo{
        height: 70px ;
        width: 75px;
    }

    .buy-btn{
        width: 200px;
    }
</style>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row">
		<div class="col-md-12 text-dark text-left mt-3">
            <h1>ご注文内容の確認</h1>
		</div>
	</div>
    <div class="row">
        <div class="col-md-8">
            <p><?php echo $count ?>点</p>

            <!-- ゲームデータ -->
            <?php
            foreach($results as $row){

                if( $row['price'] == 0){$price= '無料';}else{$price=number_format($row['price']).'円 <span class="h6">税込</span>';}
                echo '
                <div class="row border-top border-dark">
                        <div class="col-md-4 mt-5">
                            <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                <img class="img-fluid rounded" src="'.$row['image_small'].'">
                            </a>
                        </div>
                        <div class="col-md-8 mt-5">
                            <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                <h3 class="mt-2 ms-3">'.$row['shohin_name'].'</h3>
                                <h3 class="mt-5 ms-3 fw-bold">'.$price.'</h3>
                            </a>
                        </div>
                        <img class="celo mt-3 mb-3" src="img/CELO.jpg">
                </div>';

            }
            ?>
            <p>本製品をプレイするには、ゲーム内に表示されるサービス利用規約に同意する必要があります。<br>
                        詳しくはhttps://nanimoiminaiyo.co.jp/cs/aso/eula/をご確認ください。</p>
        </div>

        
        <div class="col-md-4 mt-5">
            <div class="row border-bottom border-dark">
                <div class="col fw-bold"><span class="h2 fw-bold">合計</span>税込</div>
                <span class="col h3 fw-bold text-end"><?php echo number_format($sum)?>円</span>
            </div>

            <div class="row mt-3">
                    未成年者は保護者の同意を得てから購入してください。<br>
                    商品、権利の代金又は役務の対価の支払の時期及び権利の移転時期又は役務の提供時期については、「特定商取引法に基づく表示」をご参照ください。<br>
                    注文を確定するにあたっては「特定商取引法に基づく表示」や麻生アカウントの利用規約、プライバシーポリシーにご同意のうえ、注文を確定するボタンを押してください
            </div>
        </div>
        <p class="border-bottom border-dark"></p>
    </div>
    <div  class="text-center">
		<a class="btn btn-primary btn-lg mb-4 rounded rounded-pill buy-btn" href="G1-6-3_BuyEnd.php">注文を確定する</a><br>
        <a class="btn btn-secondary btn-lg mb-4 rounded rounded-pill buy-btn" href="javascript:history.back()">キャンセル</a>
    </div>
</div>
<!-- カート -->
