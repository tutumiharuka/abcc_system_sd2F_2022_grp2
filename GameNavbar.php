<?php include_once 'Header.php'; ?>

<nav class="navbar navbar-light navbar-expand-md py-3 navbar-bg">
      <div class="container">
        <!-- 三みたいなメニューボタン -->
        <span class=" d-flex justify-content-center align-items-center me-3 bs-icon">
          <i class="typcn typcn-th-menu"></i>
        </span>
        <!-- LOGO文字 -->
        <a class="navbar-brand d-flex align-items-center" href="#">
          <span class="wf-nicomoji">ゲームECサイト</span>
        </a>
        
        <!-- <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2">
          <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button> -->
        
        <div id="navcol-2" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto"> <!-- ms-auto右寄せ -->
            
            <li class="nav-item"><!-- 検索 -->
              <form class="form-inline" role="search" action="/Search/SearchList" method="get" target="_blank">
                <div class="input-group mb-3">
                  <input type="search" class="form-control search" placeholder="ゲームを探す">
                  <span class="input-group-text search"><i class="icon ion-search"></i></span>
                </div>
             </form>
            </li>

            <li class="nav-item"><!-- ハートマークicon -->
              <a class="nav-link active" href="#">
                <i class="typcn typcn-heart-outline"></i></a>
            </li>

            <li class="nav-item"><!-- カートicon -->
              <a class="nav-link active" href="#"><i class="typcn typcn-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<?php include_once 'Footer.php'; ?>