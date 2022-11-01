<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .sibori-btn,.form-select{
        width: 180px;
    }

</style>



<div class="container">


    
    <!-- breadcrumb リンク機能  -->
    <nav class="mt-3 ms-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item h5"><a href="#">Top</a></li>
            <li class="breadcrumb-item h5 active" aria-current="page">アクション</li>
        </ol>
    </nav>

 
    
    <!-- 絞り込み機能 -->
    <div class="row ms-1 me-3 mt-2 mb-3">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                絞り込み機能内容
            </div>
        </div>
    </div>
    

    <div class="row ms-1 mb-4">
        <!-- 検索結果 -->
        <div class="col-md-3">検索結果：100件</div>
        
        <!-- ソート機能 -->
        <div class="col-md-2 offset-md-5">
            
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
        <a type="button" class="col-md-2 btn btn-outline-dark sibori-btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            絞り込み
        </a>
        
        <!-- <div class="col-md-3">
            
        </div> -->
       
    </div>

    

    <!-- ゲームリストx 20 --> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s01.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s02.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s03.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s04.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>
            <div class="col-md-3"><img class="img-thumbnail" src="img/ACT/ACT_s01.jpg"><div class="card-text">ゲーム名</div><h5 class="card-title">1000円</h5></div>

        </div>
    </div
    

    <?php include_once 'GameFooter.php'; ?>
    