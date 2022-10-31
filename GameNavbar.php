<!-- <link rel="stylesheet" href="css/nav.css"> -->
<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css");
@import url("https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css");
@import url("https://fonts.googleapis.com/earlyaccess/nicomoji.css");
@import url("https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c");

body { font-family: "M PLUS Rounded 1c"; }
.wf-nicomoji { font-family: "Nico Moji"; }

.search {
  height: 30px;
  background: white;
  border-radius: 1rem;
  border: none;
}

/* Navbar背景の設定 */

.navbar-bg {
  background-color: gainsboro;
  height:50px;
}
/* icon */
i{
  color: #000000;
}


</style>
<!-- NavBar -->

<nav class="navbar navbar-light navbar-expand-md py-3 navbar-bg">
      <div class="container">
        <!-- 三みたいなメニューボタン -->
        <span class=" d-flex justify-content-center align-items-center me-3 mt-2">
          <h5><i class="typcn typcn-th-menu"></i></h5>
        </span>
        <!-- LOGO文字 -->
        <a class="navbar-brand d-flex align-items-center mt-1" href="#">
          <h3 class="wf-nicomoji">ゲームECサイト</h3>
        </a>
        
        <!-- <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2">
          <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button> -->
        
        <div id="navcol-2" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto"> <!-- ms-auto右寄せ -->
            
            <li class="nav-item mt-3 me-3"><!-- 検索 -->
              <form class="form-inline" role="search" action="/Search/SearchList" method="get" target="_blank">
                <div class="input-group">
                  <input type="search" class="form-control search" placeholder="ゲームを探す">
                  <span class="input-group-text search"><i class="icon ion-search"></i></span>
                </div>
             </form>
            </li>
            
          
        
            <li class="nav-item d-flex justify-content-center align-items-center"><!-- ハートマークicon -->
                <a class="nav-link mt-2" href="#"><h5><i class="typcn typcn-heart-outline"></i></h5></a>
            </li>

            <li class="nav-item  d-flex justify-content-center align-items-center"><!-- カートicon -->
              <a class="nav-link mt-2" href="#"><h5><i class="typcn typcn-shopping-cart"></i><h5></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<?php include_once 'GameFooter.php'; ?>