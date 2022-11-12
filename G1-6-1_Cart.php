<?php session_start(); ?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
input[type="checkbox"]{
  transform: scale(1.5);
}
.btm-nav{
   z-index: 3;
   height: 80px;
   background-color: #DEF2FF;
}

</style>
<!-- カート -->

<div class="container">
    <div class="row ms-5 mt-5">
        <ul class="list-inline">
            <li class="list-inline-item h1">カート</li>
            <li class="list-inline-item h5">(合計2点)</li>
        </ul>
    </div>

    <!-- 商品リスト -->

    <div class="row mt-5 ms-5">
        <div class="col-md-2 offset-md-1 d-flex justify-content-center align-items-center">
            <input class="form-check-input" type="checkbox">
        </div>
        <div class="col-md-3"><img class="img-fluid" src="img/FPS/FPS_s01.jpg"></div>
        <div class="col-md-2">
            <div class="row mt-5 h4">ゲーム名</div>
            <div class="row text-sm-start mt-4 h5">税込:1,000円</div>
        </div>
        <div class="col me-5"><i class="bi bi-x-square-fill h4"></i></div>
    </div>


    <div class="row mt-5 ms-5">
        <div class="col-md-2 offset-md-1 d-flex justify-content-center align-items-center">
            <input class="form-check-input" type="checkbox">
        </div>
        <div class="col-md-3"><img class="img-fluid" src="img/FPS/FPS_s01.jpg"></div>
        <div class="col-md-2">
            <div class="row mt-5 h4">ゲーム名</div>
            <div class="row text-sm-start mt-4 h5">税込:1,000円</div>
        </div>
        <div class="col me-5"><i class="bi bi-x-square-fill h4"></i></div>
    </div>

<br>
<br>
<br>
<br>
<br>

</div>

<!-- 下のナビゲーションバー -->
<nav class="navbar fixed-bottom btm-nav">
    <div class="container-fluid">
        <span class="navbar-text"></span>
        <span class="navbar-text"></span>
        <span class="navbar-text">
            <ul class="list-inline d-flex justify-content-center align-items-center">
                <li class="list-inline-item mt-1"><input class="form-check-input" type="checkbox"></li>
                <li class="list-inline-item h5 mt-3 ms-3">全選択</li>
            </ul>
        </span>
        <span class="navbar-text h4">選択済み:2点</span>
        <span class="navbar-text"></span>
        <span class="navbar-text">
            <ul class="list-inline">
                <li class="list-inline-item h5">合計:</li>
                <li class="list-inline-item mt-2 h3">2,000</li>
                <li class="list-inline-item h5">円</li>
            </ul>
        </span>
        <span class="navbar-text mb-3">
                <a class="btn btn-outline-primary btn-lg rounded-pill" href="G1-6-2_BuyCheck.php">レジに進む</a>
        </span>
        <span class="navbar-text"></span>
        <span class="navbar-text"></span>
    </div>
  
  </nav>



<?php include_once 'GameFooter.php'; ?>