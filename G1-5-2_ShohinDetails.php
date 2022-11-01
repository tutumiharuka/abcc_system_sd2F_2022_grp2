<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    h1 {
        font-family: "MS ゴシック";
    }

    .font {
        font-size: 30px;
    }

    .fontD {
        font-size: 20px
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
            <h1><strong>スプラトューン3</strong></h1>
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
<!-- 商品説明 -->
        <div class="fontD">
            <p>ヒトの姿に変身する不思議なイカたちによる、アクションシューティングがパワーアップして登場<br>
               4対4のチームに分かれて、地面を塗った面積で勝敗を決める基本的なルールはそのままに、<br>新たなブキやスペシャルウェポン、バトルアクションが追加。<br>
               オンラインでフレンドや見知らぬ人と対戦できることはもちろん、本体を持ち寄って仲間と顔を合わせての対戦も可能。<br>
               よりダイナミックになったナワバリバトルで、存分にインクを塗りたくれ!</p>
        </div>
    </div>
<!-- 下の項目たち -->
    <div class="row">
        <div class="col-md-3 m-7 fontD">
            <p>必要な容量:</p>
        </div>
        <div class="col-md-3 font">
            <p><strong>5.2G</strong></p>
        </div>
    </div>  
    <div class="row">
        <div class="col-md-3 fontD">
            <p>対応ハード:</p>
        </div>
        <div class="col-md-3 font">
            <p><strong>Nintendo switch</strong></p>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-3 fontD">
            <p>メーカー:</p>
        </div>
        <div class="col-md-3 font">
            <p><strong>任天堂</strong></p>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-3 fontD">
            <p>配信日:</p>
        </div>
        <div class="col-md-3 font">
            <p><strong>2022年9月9日</strong></p>
        </div>
    </div>  

    <!-- ナビバーの設定かな -->
    <nav class="mt-3 ms-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item h5"><a href="#">Top</a></li>
            <li class="breadcrumb-item h5"><a href="#">アクション</a></li>
            <li class="breadcrumb-item h5 active" aria-current="page">スプラトゥーン3</li>
        </ol>
    </nav>



<?php include_once 'GameFooter.php'; ?>
