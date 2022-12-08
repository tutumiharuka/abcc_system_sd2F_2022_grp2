<?php session_start(); ?>
<?php 

require_once "DBManager.php";
$dbmng = new DBManager();

/**検索 **/
if(isset($_GET['keyword'])){
    $title = $_GET['keyword'];
    $results = $dbmng->getGameListBySearch($_GET['keyword']);

}else if(isset($_GET['list'])){
    /**ジャンルとテーマ別 **/
    if($_GET['list']=="free"){
        $title = "無料ゲーム";
        $results = $dbmng->getFreeList();
    }else if($_GET['list']=="new"){
        $title = "最新作";
        $results = $dbmng->getNewList();
    }else if($_GET['list']=="ranking"){
        $title = "ランキング";
        $results = $dbmng->getRankingList();
    }else if($_GET['list']=="all"){
        $title = "全てゲーム";
        $results = $dbmng->getAllList();
    }else{// ジャンルで
        $genre_id = $_GET['list'];
        $results = $dbmng->getGameListByGenre($genre_id);
        $title = $dbmng->getJpnGenreName($genre_id);
    }
}else{//パラメタがない=全て表示 
    $title = "全てゲーム";
    $results = $dbmng->getAllList();
}

/** 絞り込み **/
if(isset($_GET['lowlimit'])&&$_GET['lowlimit']!=''){
    $results = array_filter($results,function($row){return $row['price'] >= $_GET['lowlimit'];});
}
if(isset($_GET['highlimit'])&&$_GET['highlimit']!=''){
    $results = array_filter($results,function($row){return $row['price'] <= $_GET['highlimit'];});
}

/** ゲームリスト の数量 **/
$count = count($results);


/** ソート **/
if(isset($_GET['sort'])&&$_GET['sort']!=''){
    $sort = $_GET['sort'];
    if($sort =="newsort")  usort($results,function($a, $b){return ($a['haishin_date'] > $b['haishin_date']) ? -1 : 1;});
    if($sort =="oldsort")  usort($results,function($a, $b){return ($a['haishin_date'] < $b['haishin_date']) ? -1 : 1;});
    if($sort =="lowsort")  usort($results,function($a, $b){return ($a['price'] < $b['price']) ? -1 : 1;});
    if($sort =="highsort") usort($results,function($a, $b){return ($a['price'] > $b['price']) ? -1 : 1;});
}
?>

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
<div class="container">
    <!-- breadcrumb リンク機能  -->
    <nav class="mt-5 ms-3 mb-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php if(isset($_GET['keyword'])): ?>
                <li class="breadcrumb-item h3 fw-bold">検索キーワード</a></li>
            <?php else: ?>
                <li class="breadcrumb-item h3 fw-bold"><a href="G1-1_Top.php">トップ</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item h3 fw-bold active" aria-current="page"><?php echo $title ?></li>
        </ol>
    </nav>

 
    
    <!-- 絞り込み機能 -->
    <div class="row ms-1 me-3 mt-2 mb-3">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">

                <form action="G1-5-1_ShohinList.php" id="sibori" method="get">
                    <div class="row ms-2">
                        <label for="game-genre" class="col-auto col-form-label">ジャンル</label>
                        <div class="col-lg-3">
                            <select class="form-select" id="game-genre" name="list">
                                <option value="all">指定なし</option>
                                <option value="new">最新作</option>
                                <option value="free">無料</option>
                                <option value="rank">ランキング</option>
                                <option value="all">--------------</option>
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
                        
                        <label for="low-price" class="col-auto col-form-label">下限</label>
                        <div class="col">
                            <input type="number" class="form-control" name="lowlimit" id="low-price">
                        </div>
                        <label for="high-price" class="col-auto col-form-label">上限</label>
                        <div class="col">
                            <input type="number" class="form-control" name="highlimit" id="high-price">
                        </div>
                        
                        <div class="col-lg-3">
                            <button type="reset"  class="btn btn-outline-primary siboru-btn">クリア</button>
                            <button type="submit" class="btn btn-primary ms-3 siboru-btn">絞る</button>
                        </div>

                    </div>
                </form>    
            </div>
        </div>
    </div>
    

    <div class="row ms-1 mb-4">
        <!-- 検索結果 -->
        <div class="col-md-3 ">検索結果：<?php echo $count?>件</div>
        
        <!-- ソート機能 -->
        <div class="col-md-2 offset-md-5 d-flex justify-content-end">

        <select id="sort" class="form-select" aria-label="Default select example">
            <option selected>並び替え</option>
            <option value="newsort" <?php if(isset($_GET['sort'])){if($sort=='newsort')  echo 'selected';} ?>>新しい順</option>
            <option value="oldsort" <?php if(isset($_GET['sort'])){if($sort=='oldsort')  echo 'selected';} ?>>古い順</option>
            <option value="lowsort" <?php if(isset($_GET['sort'])){if($sort=='lowsort')  echo 'selected';} ?>>安い順</option>
            <option value="highsort"<?php if(isset($_GET['sort'])){if($sort=='highsort') echo 'selected';} ?>>高い順</option>
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

    
    <!-- ゲームリスト --> 
    <div class="container-fluid">
        <div class="row">
            <?php
                foreach($results as $row){
                    if( $row['price'] == 0){$price = '無料';}else{$price=number_format($row['price']).'円';}
                    echo '<div class="col-md-3">
                            <div class="text-end text-secondary">'.$row['haishin_date'].'</div>
                            <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                <img class="img-thumbnail" src="'.$row['image_small'].'">
                                <div class="card-text">'.$row['shohin_name'].'</div>
                                <h5 class="card-title">'.$price.'</h5>
                            </a>
                          </div>';
                }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>  
    $(document).ready(function(){  
        $('#sort').change(function(){
            let sort=$(this).children('option:selected').val();
            <?php if(isset($_GET['keyword'])): ?>
                window.location.href = "G1-5-1_ShohinList.php?keyword=<?php echo $_GET['keyword']?>&lowlimit=<?php if(isset($_GET['lowlimit'])) echo $_GET['lowlimit'];?>&highlimit=<?php if(isset($_GET['highlimit'])) echo $_GET['highlimit']?>&sort="+sort;
            <?php elseif(isset($_GET['list'])): ?>
                window.location.href = "G1-5-1_ShohinList.php?list=<?php echo $_GET['list']?>&lowlimit=<?php if(isset($_GET['lowlimit'])) echo $_GET['lowlimit']?>&highlimit=<?php if(isset($_GET['highlimit'])) echo $_GET['highlimit']?>&sort="+sort;
            <?php else: ?>
                window.location.href = "G1-5-1_ShohinList.php?lowlimit=<?php if(isset($_GET['lowlimit'])) echo $_GET['lowlimit']?>&highlimit=<?php if(isset($_GET['highlimit'])) echo $_GET['highlimit']?>&sort="+sort;
            <?php endif; ?>
        });  
    })

    </script>  
