<?php session_start(); ?>
<?php 
//ログインしているか
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    $member_id = $_SESSION['member']['member_id'];


    require_once 'DBManager.php';
    $dbmng = new DBManager();
    $results = $dbmng->getMemberInfo($member_id);


    foreach($results as $row){
     $name = $row['name'];
     $phone= $row['phone_number'];
     $mail = $row['mail'];
     $date_of_birth = $row['date_of_birth'];
    }

?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style> 
    .card{
      width: 75%;
    }
    .kuhaku-form{
        height: 10%;
    }
    @media only screen and (max-width: 767px) {       
        .kuhaku-from{
            height: 5%;
        }
        .value-text{
          text-align:center;
        }
        .card{
          width: auto;
        }
    }
</style>
<div class="container">
    <div class="row kuhaku-form">
        
    </div>


    <div class="row text-center">
      <h2>会員情報<h2>
    </div>

    <div class="d-flex justify-content-center mt-2"><!-- 真ん中に寄せる -->
    <!-- カード -->
      <div class="card ms-3">
        <div class="card-header">
          <h2 class="ms-4 mt-2 fw-bold">プロフィール</h2>
        </div>
        <ul class="list-group list-group-flush">

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-12 col-md-5 text-start"><i class="bi bi-diamond-fill h6 me-3"></i>名前</div>
              <div class="col-12 col-md-6 value-text"><?php echo $name ?></div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-12 col-md-5 text-start"><i class="bi bi-diamond-fill h6 me-3"></i>メールアドレス</div>
              <div class="col-12 col-md-6 value-text"><?php echo $mail ?></div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-12 col-md-5 text-start"><i class="bi bi-diamond-fill h6 me-3"></i>電話番号</div>
              <div class="col-12 col-md-6 value-text"><?php echo $phone ?></div>
            </div>
          </li>
      
          <li class="list-group-item">
            <div class="row h5">
              <div class="col-12 col-md-5 text-start"><i class="bi bi-diamond-fill h6 me-3"></i>生年月日</div>
              <div class="col-12 col-md-6 value-text"><?php echo $date_of_birth ?></div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5 d-flex align-items-center">
              <div class="col-12 col-md-5 text-start"><i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
              <div class="col-12 col-md-6 value-text h6">●●●●●●●●●
                <a class="btn btn-outline-primary ms-3" href="G1-9-1_PasswordChange.php">
                  <span class="d-none d-lg-block">パスワード</span>変更
                </a>
            </div>
            </div>
          </li>

        </ul>
      </div><!-- .card -->
      
    </div>
    <div class="row mt-4">
      <div class="col d-flex justify-content-center">
        <a class="btn btn-outline-primary btn-lg mb-3" href="G1-7-3_MemberInfoChange.php">変更する</a>
      </div>
    </div>
</div>
