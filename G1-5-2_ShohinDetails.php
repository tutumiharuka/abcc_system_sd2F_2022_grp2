<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<?php 
    $shohin_id =  $_GET['shohin_id'];
    require_once "DBManager.php";
    $dbmng = new DBManager();
    $results = $dbmng->getGameById($shohin_id);
    foreach($results as $row){
        $genre_id = $row['genre_id'];
        $shohin_name = $row['shohin_name'];
        $price = $row['price'];
        $capacity = $row['capacity'];
        $haishin_date = $row['haishin_date'];
        $image_big = $row['image_big'];
        $shohin_explanation = $row['shohin_explanation'];
    }
?>


<style>
    h1 {
        font-family: "MS ゴシック";
    }
    .navbg{
        background-color:#ccc;
        height: 50px;
        display: flex;
        align-items: center;
    }
    .celo{
        height: 70px ;
        width: 80px;
    }
</style>

<!-- 画像 -->
<div class="container">
    <div class="row">
        <!-- <img class="col-md-8 mt-3 mx-auto" src="img/ACT/ACT_b01.jpg"> -->
        <img class="col-md-8 mt-3 mx-auto" src="<?php echo $image_big?>">
    </div>


<!-- 商品名 -->
    <div class="row mt-3">
        <div class="col-lg-6">
            <!-- <h1><strong>スプラトューン3</strong></h1> -->
            <h1><strong><?php echo $shohin_name?></strong></h1>
        </div>
<!-- 価格 -->
        <div class="col-lg-2 h3 mt-2">
            <p> <!-- ０円なら、無料を表示 -->
                <?php if($price==0){echo "無料";}else{echo "$price 円";}?>
            </p>
        </div>
<!-- ♡マーク -->
        <a class="col-lg-1 mb-2 d-flex align-items-center h2" href="#">
            <i class="typcn typcn-heart-outline"></i>
        </a>
<!-- 購入ボタン -->
        <div class="col-lg-3 h3">
            <input type="submit" class="btn btn-outline-primary btn-lg rounded-pill" value="カートに入れる">
        </div>
<!-- 商品説明 -->
        <div class="mb-4 fs-4">
            <!-- <p>ヒトの姿に変身する不思議なイカたちによる、アクションシューティングがパワーアップして登場!4対4のチームに分かれて、地面を塗った面積で勝敗を決める基本的なルールはそのままに、新たなブキやスペシャルウェポン、バトルアクションが追加。オンラインでフレンドや見知らぬ人と対戦できることはもちろん、本体を持ち寄って仲間と顔を合わせての対戦も可能。よりダイナミックになったナワバリバトルで、存分にインクを塗りたくれ!</p> -->
            <p><?php echo $shohin_explanation?></p>
        </div>
    </div>
<!-- 下の項目たち -->
    <div class="row">
        <div class="col-md-2 m-7 h2">
            <p>必要な容量:</p>
        </div>
        <div class="col-md-3 h2">
            <!-- <p><strong>5.2G</strong></p> -->
            <p><strong><?php echo $capacity?></strong></p>
        </div>
    </div>  
    <div class="row">
        <div class="col-md-2 h2">
            <p>対応ハード:</p>
        </div>
        <div class="col-md-3 h2">
            <p><strong>Nintendo switch</strong></p>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-2 h2">
            <p>メーカー:</p>
        </div>
        <div class="col-md-3 h2">
            <p><strong>任天堂</strong></p>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-2 h2">
            <p>配信日:</p>
        </div>
        <div class="col-md-3 h2">
            <!-- <p><strong>2022年9月9日</strong></p> -->
            <p><strong><?php echo $haishin_date?></strong></p>
        </div>
    </div>  
    
    <div class="row">
        <img class="rounded mt-3 mb-3 celo" src="img/CELO.jpg">
    </div>

</div>

    <!-- ナビバーの設定 -->
    <nav class="mt-3 navbg" aria-label="breadcrumb">
        <ol class="breadcrumb ms-5 mt-4">
            <li class="breadcrumb-item h4 fw-bold"><a href="G1-1_Top.php">Top</a></li>
            <!-- <li class="breadcrumb-item h4 fw-bold"><a href="#">アクション</a></li> -->
            <li class="breadcrumb-item h4 fw-bold"><a href="G1-5-1_ShohinList.php?genre_id=<?php echo $genre_id?>"><?php echo $dbmng->getJpnGenreName($genre_id);?></a></li>
            <!-- <li class="breadcrumb-item h4 fw-bold active" aria-current="page">スプラトゥーン3</li> -->
            <li class="breadcrumb-item h4 fw-bold active" aria-current="page"><?php echo $shohin_name?></li>
        </ol>
    </nav>
<?php include_once 'GameFooter.php'; ?>
