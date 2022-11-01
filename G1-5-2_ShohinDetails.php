<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    h1 {
        font-family: "MS ゴシック";
        font-size:
    }

    .font {
        font-size: 30px;
    }
</style>

<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<!-- 画像 -->
<div class="container">
    <div class="row">
        <img class="col-md-8 mt-3 mx-auto" src="img/ACT/ACT_b01.jpg">
    </div>


<!-- 商品名 -->
    <div class="row">
        <div class="col-md-6 mt-3">
            <h1>スプラトューン3</h1>
        </div>
<!-- 価格 -->
        <div class="col-md-2 mt-4 font">
            <p>1,000円</p>
        </div>
<!-- ♡マーク わからない！ -->
        <a class="col-md-1 mt-4 " href="#"><i class="typcn typcn-heart-outline"></i></a>
<!-- 購入ボタン -->
        <div class="col-md-3 mt-4 font">
            <input type="submit" class="btn-light rounded-pill" value="カートに入れる">
        </div>
    </div>



<?php include_once 'GameFooter.php'; ?>
