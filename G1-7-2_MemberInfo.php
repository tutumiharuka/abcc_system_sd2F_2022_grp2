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
     $password = $row['password'];

   
    }

    // echo 

    





?>










<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<?php  
    // // 前ページの値を取得する
    // $name = $_POST['name'];
    // $mail = $_POST['mail'];
    // $phone = $_POST['phone'];
    //     $year = $_POST['year'];
    //     $month = sprintf("%02d",$_POST['month']);
    //     $day =  sprintf("%02d",$_POST['day']);
    // //birthは3つのstringの組み合わせ
    // $birth = $year.'-'.$month.'-'.$day;
    // $pass = $_POST['pass'];
?>

<style> 
  .kuhaku-form{
    height:15%;
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
      <div class="card ms-3" style="width: 60rem;">
        <div class="card-header">
          <h2 class="ms-4 mt-2 fw-bold">プロフィール</h2>
        </div>
        <ul class="list-group list-group-flush">

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>名前</div>
              <div class="col-md-6"><?php echo $name ?></div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>メールアドレス</div>
              <div class="col-md-6"><?php echo $mail ?></div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>電話番号</div>
              <div class="col-md-6"><?php echo $phone ?></div>
            </div>
          </li>
      
          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>生年月日</div>
              <div class="col-md-6"><?php echo $date_of_birth ?></div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
              <div class="col-md-6"><?php echo $password ?></div>
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

<?php include_once 'GameFooter.php'; ?>
