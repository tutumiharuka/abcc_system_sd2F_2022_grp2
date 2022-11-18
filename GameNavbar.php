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
    background-color: #DEF2FF;
    height:50px;
  }

  /* icon（文字）の色 */
  i{
    color: #222;
  }

  /* リンクの線を消す */
  a, a:link, a:active, a:visited, a:hover{
      color: inherit;
      text-decoration: none;
  }

  /* ボタンやリンクに小さい手がでる */
  a,button{
      cursor: pointer;
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
    margin-left:9px;
    height: 70px;
    color:white;
    background-color:#156E96;
  }

  /* サイトLOGOを色付ける */
  .game-logo{
    color:#156e96;
  }

  /* 左メニューいらない空白を消す */
  .side-list-ul{
    padding-left: 0px;
  }

</style>

<!-- 左のサイドバー -->
<div class="menu">
  <div class="side-nav">
    <div class="row">
      <div class="col-12"><i class="bi bi-x h1 position-absolute end-0 me-3 mt-2" onclick="showMenu()"></i></div>
    </div>  
    
    <!-- 会員の表示 -->
    <?php if(isset($_SESSION['member'])): ?>
            <div class="row mt-5">
              <nav class="member-list">
                <ul>
                  <li class="fw-bold"><h3><?php echo $_SESSION['member']['name'] ?></h3></li>
                  <li class="fw-bold"><a href="G1-8_BuyHistory.php">購入履歴</a></li>
                  <li class="fw-bold"><a href="G1-4_Favorite.php">お気に入り</a></li>
                  <li class="fw-bold"><a href="G1-6-1_Cart.php">カート</a></li>
                  <li class="fw-bold"><a href="G1-7-2_MemberInfo.php">会員情報</a></li>
                  <li class="fw-bold"><a href="Logout.php">ログアウト</a></li>
                </ul>
              </nav>
            </div>
    <?php else: ?>
            <div class="row mt-5 ms-5">
              <div class="col-12">
                <a href="G1-2-1_Login.php">
                  <button type="button" class="btn btn-lg login-btn fw-bold">ログイン・新規登録</button>
                </a>
              </div>
            </div>
    <?php endif; ?>
    
    <div class="side-list-title mt-3 fw-bold">ゲームを探す</div>

    <nav>
        <ul class="side-list-ul">
          <li class="fw-bold"><a href="G1-5-1_ShohinList.php?genre_id=new"> 最新作ソフト</a></li>
          <li class="fw-bold"><a href="G1-5-1_ShohinList.php?genre_id=ranking"> ランキング</a></li>
          <li class="fw-bold"><a href="G1-5-1_ShohinList.php?genre_id=free"> 無料ソフト</a></li>
          <!-- <li class="fw-bold"><a href="G1-5-1_ShohinList.php?genre_id=recommend"> おすすめソフト</a></li> -->
          <li class="fw-bold sub-btn" onclick="showSubMenu()"><a>カテゴリ一覧</a></li>
        </ul>
    </nav>
  </div>

  <div class="sub-nav">
    <div class="row">
      <i class="bi bi-arrow-left h2 ms-3 mt-2" onclick="showSubMenu()"></i>
    </div>  
    <nav class="sub-list">
        <ul>
          <!-- ジャンルリストを全部取り出す -->
          <?php
            require_once "DBManager.php";
            $dbmng = new DBManager(); 
            $list = $dbmng->getGenreList();
            foreach($list as $row){
              echo '<li class="fw-bold"><a href="G1-5-1_ShohinList.php?genre_id='.$row['genre_id'].'">'.$row['genre_name'].'</a></li>';
            }
          ?>
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
        <a class="navbar-brand d-flex align-items-center mt-2" href="G1-1_Top.php">
          <h2 class="wf-nicomoji"><span class="game-logo">ゲーム</span>ECサイト</h2>
        </a>
        
        <div id="navcol-2" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto"> <!-- ms-auto右寄せ -->
              
              <li class="nav-item mt-3 me-3"><!-- 検索 -->
                <form class="form-inline" role="search" action="G1-5-1_ShohinList.php" method="get" target="_blank">
                  <div class="input-group">
                    <input type="search" class="form-control search" name="keyword" placeholder="ゲームを探す">
                      <button class="input-group-text search" type="submit"><i class="icon ion-search"></i></button>
                  </div>
              </form>
              </li>
              <li class="nav-item d-flex justify-content-center align-items-center"><!-- ハートマークicon -->
                  <a class="nav-link mt-1" href="G1-4_Favorite.php"><i class="typcn typcn-heart-outline h2"></i></a>
              </li>

              <li class="nav-item  d-flex justify-content-center align-items-center"><!-- カートicon -->
                <a class="nav-link mt-1" href="G1-6-1_Cart.php"><i class="typcn typcn-shopping-cart h2"></i></a>
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