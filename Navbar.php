<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>タイトル</title>
    <!-- bootstrapのcssを利用 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/nicomoji.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c">
    <link rel="stylesheet" href="css/nav.css">
</head>
  <body>
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


  
    <!-- bootstrapのjsを利用 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
