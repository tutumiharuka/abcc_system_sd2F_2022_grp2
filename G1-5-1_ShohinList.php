<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<style>
    .sibori-btn,.form-select{
        width: 160px;
    }
    .siboru-btn{
        width: 75px;
    }
</style>

<?php 

    $genre_id =  $_GET['genre_id'];
    require_once "DBManager.php";
    $dbmng = new DBManager();
    $results=$dbmng->getGameListByGenre($genre_id);
    $genreList = array(
        "ACT"=>"アクション",
        "ADV"=>"アドベンチャー",
        "FIG"=>"格闘",
        "FPS"=>"シューティング",
        "MUS"=>"音楽ゲーム",
        "PAR"=>"パーティ",
        "PZL"=>"パズル",
        "RCG"=>"レース",
        "RPG"=>"ロールプレイング",
        "SPO"=>"スポーツ",
        "TBL"=>"テーブルゲーム");
    // echo $results;
?>


<div class="container">
    <!-- breadcrumb リンク機能  -->
    <nav class="mt-5 ms-3 mb-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item h3 fw-bold"><a href="#">トップ</a></li>
            <li class="breadcrumb-item h3 fw-bold active" aria-current="page"><?php echo $dbmng->getJpnGenreName($genre_id)?></li>
        </ol>
    </nav>

 
    
    <!-- 絞り込み機能 -->
    <div class="row ms-1 me-3 mt-2 mb-3">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
        
                <form>

                    <div class="row ms-2">
                        <label for="game-genre" class="col-auto col-form-label">ジャンル</label>
                        <div class="col-lg-2">
                            <select class="form-select" id="game-genre">
                                <option selected>指定なし</option>
                                <option value="ACT">アクション</option>
                                <option value="ADV">アドベンチャー</option>
                                <option value="FIG">格闘</option>
                                <option value="FPS">シューティング</option>
                                <option value="MUS">音楽ゲーム</option>
                                <option value="PAR">パーティ</option>
                                <option value="PZL">パズル</option>
                                <option value="RCG">レース</option>
                                <option value="RPG">ロールプレイング</option>
                                <option value="SPO">スポーツ</option>
                                <option value="TBL">テーブルゲーム</option>
                            </select>
                        </div>

                        <label for="game-genre" class="col-auto col-form-label">タイプ</label>
                        <div class="col-lg-2">
                            <select class="form-select" id="game-genre">
                                <option selected>指定なし</option>
                                <option value="1">最新作</option>
                                <option value="2">無料</option>
                                <option value="3">ランキング</option>
                                <option value="4">セール</option>
                            </select>
                        </div>
                        
                        <label for="low-price" class="col-auto col-form-label">価格</label>
                        <div class="col">
                            <input type="text" class="form-control" name="" id="low-price">
                        </div>
                        <label for="high-price" class="col-auto col-form-label">~</label>
                        <div class="col">
                            <input type="text" class="form-control" name="" id="high-price">
                        </div>
                        
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-outline-primary siboru-btn">クリア</button>
                            <button type="submit" class="btn btn-primary ms-3 siboru-btn">絞る</button>
                        </div>

                    </div>
                </form>    
            </div>
        </div>
    </div>
    

    <div class="row ms-1 mb-4">
        <!-- 検索結果 -->
        <div class="col-md-3 ">検索結果：100件</div>
        
        <!-- ソート機能 -->
        <div class="col-md-2 offset-md-5 d-flex justify-content-end">
            
            <select class="form-select" aria-label="Default select example">
                <option selected>並び替え</option>
                <option value="1">人気順</option>
                <option value="2">新しい順</option>
                <option value="3">古い順</option>
                <option value="4">安い順</option>
                <option value="5">高い順</option>
            </select>
            
        </div>

        <!-- 絞り込むボタン -->
        <div class="col-md-2 d-flex justify-content-start">
            <a type="button" class="btn btn-outline-dark sibori-btn " data-bs-toggle="collapse" 
                href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                絞り込み
            </a>
        </div>
    </div>

    


    <!-- ゲームリストx 20 --> 
    <div class="container-fluid">
        <div class="row">
            <?php
                foreach($results as $row){
                    echo '<div class="col-md-3"><a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'"><img class="img-thumbnail" src="'.$row['image_small'].'"><div class="card-text">'.$row['shohin_name'].'</div><h5 class="card-title">'.$row['price'].'円</h5></a></div>';
                }
            ?>
            
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s02.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s03.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s04.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s01.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div> 

        </div>
    </div
    

    <?php include_once 'GameFooter.php'; ?>
    