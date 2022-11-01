<?php include_once 'GameHeader.php'; ?>
<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
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




/* side-navbar */
a,button{
    cursor: pointer;
}
/* sidenavのポジション */
.side-list{
    position: absolute;
    top: 140px;
    left: 50px;
    width: 250px;
}

.sub-list{
    position: absolute;
    top: 40px;
    left: 50px;
    width: 250px;
}

/* 整個nav區塊 */
.side-nav,.sub-nav{
    position: fixed;
    z-index: 10;
    left: -500px;
    width: 350px;
    height: 100%;
    background-color: #ccc;
    transition: .5s;
}
/* 菜單裡面的項目文字 */
.menu ul li{
    color: #000;
    text-align: left;
    text-transform: uppercase;
    list-style-type: none;
    font-size: 1.2em;
    padding: 10px 10px;
}

.side-nav.active,.sub-nav.active{
    left: 0;
} 

.login-btn{
  height: 70px;
}
</style>
<!-- 左のサイドバー -->
<div class="menu">
  <div class="side-nav">
    <div class="row">
      <div class="col-12"><i class="bi bi-x h1 position-absolute  end-0 me-3 mt-2" onclick="showMenu()"></i></div>
    </div>  
    <div class="row mt-5 ms-5">
      <div class="col-12">
        <button type="button" class="btn btn-primary btn-lg login-btn">ログイン・新規登録</button>
      </div>
    </div>
    <nav class="side-list">
        <ul>
            <li><a>Home</a></li>
            <li><a>About</a></li>
            <li><a>Blog</a></li>
            <li class="sub-btn" onclick="showSubMenu()"><a>カテゴリ</a></li>
        </ul>
    </nav>
  </div>

  <div class="sub-nav">
    <div class="row">
      <i class="bi bi-arrow-left h2 ms-3 mt-2" onclick="showSubMenu()"></i>
    </div>  
    <nav class="sub-list">
        <ul>
            <li><a>sub</a></li>
            <li><a>sub</a></li>
            <li><a>sub</a></li>
            <li><a>sub</a></li>
        </ul>
    </nav>
  </div>
</div>

<!-- 上のNAVBAR -->
<nav class="navbar navbar-light navbar-expand-md py-3 navbar-bg">
      <div class="container">
        <!-- 三 メニューボタン -->
          <span class="d-flex justify-content-center align-items-center me-3 mt-2">
            <div class="hamburger btn" onclick="showMenu()"><h4><i class="typcn typcn-th-menu"></i></h4></div>
          </span>
        <!-- LOGO文字 -->
        <a class="navbar-brand d-flex align-items-center mt-1" href="#">
          <h3 class="wf-nicomoji">ゲームECサイト</h3>
        </a>
        
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

    
    <script>
        function showMenu(){
            document.querySelector('.hamburger').classList.toggle('open')
            document.querySelector('.side-nav').classList.toggle('active')
        }

        function showSubMenu(){
            document.querySelector('.sub-btn').classList.toggle('open')
            document.querySelector('.sub-nav').classList.toggle('active')
        }


    </script>
<?php include_once 'GameFooter.php'; ?>