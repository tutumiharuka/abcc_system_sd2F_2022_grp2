<?php include_once 'GameHeader.php'; ?>
<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
@import url("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css");
@import url("https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css");
@import url("https://fonts.googleapis.com/earlyaccess/nicomoji.css");
@import url("https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c");

/* フォント設定 */
body { font-family: "M PLUS Rounded 1c"; }
.wf-nicomoji { font-family: "Nico Moji"; }

/* 検索テキストボックス */
.search {
  height: 30px;
  background: white;
  border-radius: 1rem;
  border: none;
}

/* Navbar背景の設定 */
.navbar-bg {
  background-color: #98C3D6;
  height:50px;
}

/* icon（文字）の色 */
i{color: #222;}

/* リンクの線を消す */
a, a:link, a:active, a:visited, a:hover{
    color: inherit;
    text-decoration: none;
}

/* ボタンやリンクに小さい手がでる */
a,button{
    cursor: pointer;
}

/* sidenavのポジション */
.member-list{
    /* position: absolute; */
    /* top: 180px; */
    /* left: 50px; */
    /* width: 250px; */
}
.side-list{
    /* position: absolute; */
    /* top: 400px; */
    /* left: 50px; */
    /* width: 250px; */
}

.sub-list{
    /* position: absolute; */
    /* top: 40px; */
    /* left: 50px; */
    /* width: 250px; */
}

/* 隠れられるサイトメニューの設定 */
.side-nav,.sub-nav{
    position: fixed;
    z-index: 10;
    left: -500px;
    width: 350px;
    height: 100%;
    background-color: #ccc;
    transition: .5s;
}
/* ボタン押す瞬間に、↑の-500から0に戻す */
.side-nav.active,.sub-nav.active{
    left: 0;
} 


/* メニューの中身の見た目設定 */
.menu ul li{
    color: #000;
    text-align: center;
    text-transform: uppercase;
    list-style-type: none;
    font-size: 1.2em;
    padding: 10px 10px;
}

/* ゲームを探すのDIV設定 */
.side-list-title{
  color:white;
  background-color: #70A7C5;
  font-size: 1.2em;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
}


/* ログインしてない状況で出すボタン */
.login-btn{
  height: 70px;
  color:white;
  background-color:#156E96;
}

/* サイトLOGOを色付ける */
.game-logo{
  color:#156e96;
}
</style>

<!-- 左側のサイドメニュー -->
<div class="menu">
  <div class="side-nav">
    <div class="row">
      <!-- サイトメニューを閉じるボタン -->
      <div class="col-12"><i class="bi bi-x h1 position-absolute end-0 me-3 mt-2" onclick="showMenu()"></i></div>
    </div>  
    <!-- 会員名を表示 -->
    <div class="row h3">
        ゲーム太郎
    </div>
    
    <div class="row mt-5">
      <nav class="member-list">
          <ul>
            <li class="fw-bold"><a href="#"> 購入履歴</a></li>
            <li class="fw-bold"><a href="#"> お気に入り</a></li>
            <li class="fw-bold"><a href="#"> カート</a></li>
            <li class="fw-bold"><a href="#"> 会員情報</a></li>
          </ul>
      </nav>
    </div>

    <div class="side-list-title mt-3 fw-bold">ゲームを探す</div>

    <nav class="side-list">
        <ul class="">
          <li class="fw-bold"><a href="#"> 最新作ソフト</a></li>
          <li class="fw-bold"><a href="#"> 人気ソフト</a></li>
          <li class="fw-bold"><a href="#"> 無料ソフト</a></li>
          <li class="fw-bold"><a href="#"> おすすめソフト</a></li>
          <li class="fw-bold sub-btn" onclick="showSubMenu()"><a>カテゴリ一覧</a></li>
        </ul>
    </nav>
  </div>

  <div class="sub-nav">
    <div class="row">
      <!-- 戻すボタン -->
      <i class="bi bi-arrow-left h2 ms-3 mt-2" onclick="showSubMenu()"></i>
    </div>  
    <nav class="sub-list">
        <ul>
          <li class="fw-bold"><a href="#">アクション</a></li>
          <li class="fw-bold"><a href="#">アドベンチャー</a></li>
          <li class="fw-bold"><a href="#">格闘</a></li>
          <li class="fw-bold"><a href="#">シューティング</a></li>
          <li class="fw-bold"><a href="#">音楽ゲーム</a></li>
          <li class="fw-bold"><a href="#">パーティ</a></li>
          <li class="fw-bold"><a href="#">パズル</a></li>
          <li class="fw-bold"><a href="#">レース</a></li>
          <li class="fw-bold"><a href="#">ロールプレイング</a></li>
          <li class="fw-bold"><a href="#">スポーツ</a></li>
          <li class="fw-bold"><a href="#">テーブルゲーム</a></li>
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
       <a class="navbar-brand d-flex align-items-center mt-2" href="#">
          <h2 class="wf-nicomoji"><span class="game-logo">ゲーム</span>ECサイト</h2>
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
                <a class="nav-link mt-1" href="#"><i class="typcn typcn-heart-outline h2"></i></a>
            </li>

            <li class="nav-item  d-flex justify-content-center align-items-center"><!-- カートicon -->
              <a class="nav-link mt-1" href="#"><i class="typcn typcn-shopping-cart h2"></i></a>
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