<?php include_once 'GameHeader.php'; ?>
<style>
  @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
  @import url("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css");
  @import url("https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css");
  @import url("https://fonts.googleapis.com/earlyaccess/nicomoji.css");
  @import url("https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c");
  /* フォント設定 */
  @font-face {
    font-family: 'PixelMplus';
    src: url('font/PixelMplus12-Bold.ttf') format('TrueType');
    }
    .game-text{
        font-family: 'PixelMplus';
    }
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
    background-color: #97daf0;
    height:60px;
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
      left: -300px;
      width: 300px;
      height: 100%;
      background-color: #DEF2FF;
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
      font-size: 1.1em;
      padding: 7px 5px;
  }

  /* ゲームを探すのDIV設定 */
  .side-list-title{
    color:white;
    background-color: #70A7C5;
    font-size: 1.1em;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* ログインしてない状況で出すボタン */
  .login-btn{
    /* margin-left:9px; */
    
    margin-top:15px;
    margin-bottom:15px;
    margin-right:9px;

    height: 60px;
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
  .member-list{
    padding-right:40px ;
  }

   @media only screen and (max-width: 770px) {
    *, ::after, ::before {
      box-sizing: content-box;
    }
    nav.navbar {
      background: #156E96;
      height: 70px;
    }
    .wf-nicomoji{
      color:#FFF;
    }
    .game-logo{
      color:#DEF2FF;
    }
    .conbg{
      z-index: 5;
      border-radius: 20px;
      background: #156E96;
    }
    .nav-link,.typcn{
      color:white;
    }

    /* 携帯版の右の空白を解決 */
    *, ::after, ::before {
        box-sizing: border-box;
    }
  }

</style>
  
<!-- 左のサイドバー -->
<div class="menu">
  <div class="side-nav">
    <!-- X -->
    
    <div class="row">
      <div class="col-12"><i class="bi bi-x h1 position-absolute end-0 me-3 mt-2" onclick="showMenu()"></i></div>
    </div>  
    
    <!-- 会員の表示 -->
    <?php if(isset($_SESSION['member'])): ?>
            <div class="row mt-5">
              <nav class="member-list">
                <ul>
                  <li class="fw-bold"><h3 class="game-text"><?php echo $_SESSION['member']['name'] ?></h3></li>
                  <li class="fw-bold"><a href="G1-8_BuyHistory.php">購入履歴</a></li>
                  <li class="fw-bold"><a href="G1-4_Favorite.php">お気に入り</a></li>
                  <li class="fw-bold"><a href="G1-6-1_Cart.php">カート</a></li>
                  <li class="fw-bold"><a href="G1-7-2_MemberInfo.php">会員情報</a></li>
                  <li class="fw-bold text-secondary"><a href="Logout.php">ログアウト</a></li>
                </ul>
              </nav>
            </div>
    <?php else: ?>
            <div class="row mt-5 ms-1">
              <div class="col-12 d-flex justify-content-center">
                <a href="G1-2-1_Login.php">
                  <button type="button" class="btn btn-lg login-btn fw-bold">ログイン・新規登録</button>
                </a>
              </div>
            </div>
    <?php endif; ?>
    
    <div class="side-list-title mt-3 mb-3 fw-bold">ゲームを探す</div>

    <nav>
        <ul class="side-list-ul">
          <li class="fw-bold"><a href="G1-5-1_ShohinList.php?list=new"> 最新作ソフト</a></li>
          <li class="fw-bold"><a href="G1-5-1_ShohinList.php?list=ranking"> ランキング</a></li>
          <li class="fw-bold"><a href="G1-5-1_ShohinList.php?list=free"> 無料ソフト</a></li>
          <!-- <li class="fw-bold"><a href="G1-5-1_ShohinList.php?list=recommend"> おすすめソフト</a></li> -->
          <li class="fw-bold sub-btn" onclick="showSubMenu()"><a>カテゴリ一覧</a></li>
        </ul>
    </nav>
  </div>

  <div class="sub-nav">
    <div class="row">
      <!-- ← -->
      <div class="col-12"><i class="bi bi-x h1 position-absolute end-0 me-3 mt-2" onclick="showSubMenu()"></i></div>
     
    </div>  
    <nav class="sub-list mt-5">
        <ul>
          <!-- ジャンルリストを全部取り出す -->
          <?php
            require_once "DBManager.php";
            $dbmng = new DBManager(); 
            $list = $dbmng->getGenreList();
            foreach($list as $row){
              echo '<li class="fw-bold"><a href="G1-5-1_ShohinList.php?list='.$row['genre_id'].'">'.$row['genre_name'].'</a></li>';
            }
          ?>
        </ul>
    </nav>
  </div>
</div>

<!-- 上のNAVBAR -->
<nav class="navbar navbar-light navbar-expand-md navbar-bg">
      <div class="container conbg">
        <!-- 三 メニューボタン -->
          <span class="d-flex justify-content-center align-items-center me-3 mt-2">
            <div class="hamburger btn" onclick="showMenu()"><h4><i class="typcn typcn-th-menu"></i></h4></div>
          </span>
        <!-- LOGO文字 -->
        <a class="navbar-brand d-flex align-items-center mt-2" href="G1-1_Top.php">
          <h2 class="wf-nicomoji"><span class="game-logo">ゲーム</span>ECサイト</h2>
        </a>

        <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" data-bs-target="#navDropdown" aria-controls="navDropdown" 
            aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> --><i class="typcn typcn-th-large"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navDropdown">
          <ul class="navbar-nav ms-auto"> <!-- ms-auto右寄せ -->
              
              <li class="nav-item mt-3 me-3"><!-- 検索 -->
                <form class="form-inline" role="search" action="G1-5-1_ShohinList.php" method="get">
                  <div class="input-group">
                    <input type="search" class="form-control search" name="keyword" placeholder="ゲームを探す">
                    <button class="input-group-text search" type="submit"><i class="icon ion-search"></i></button>
                  </div>
              </form>
              </li>
              <li class="nav-item d-flex justify-content-center align-items-center"><!-- ハートマークicon -->
                <a class="nav-link" href="G1-4_Favorite.php">
                  <i class="typcn typcn-heart-outline h3"></i>
                  <span class="fw-bold d-md-none h6 text-white">お気に入り</span>
                </a>
              </li>

              <li class="nav-item  d-flex justify-content-center align-items-center"><!-- カートicon -->
                <a class="nav-link" href="G1-6-1_Cart.php">
                  <i class="typcn typcn-shopping-cart h3"></i>
                  <span class="fw-bold d-md-none h6 text-white">カート</span>
                </a>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      // let isMenuOpen = false;

        function showMenu(){
            document.querySelector('.hamburger').classList.toggle('open')
            document.querySelector('.side-nav').classList.toggle('active')
            // isMenuOpen = !isMenuOpen;
            // console.log(isMenuOpen);
        }

        function showSubMenu(){
          // if(isMenuOpen == false){
            document.querySelector('.sub-btn').classList.toggle('open')
            document.querySelector('.sub-nav').classList.toggle('active')
          // }
        }


    </script>
