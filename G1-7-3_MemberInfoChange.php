<?php session_start(); ?>
<?php 
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    // 情報をとってくる
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

    <div class="d-flex justify-content-center mt-2">
    
      <div class="card ms-3" style="width: 60rem;">
        <div class="card-header">
          <h2 class="ms-4 mt-2 fw-bold">プロフィール</h2>
        </div>
        <ul class="list-group list-group-flush">

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>名前</div>
              <div class="col-md-5">
                <input type="text" class="form-control rounded-pill" id="password" value="<?php echo $name ?>">
                </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>メールアドレス</div>
              <div class="col-md-5">
                <input type="text" class="form-control rounded-pill" id="password" value="<?php echo $mail ?>">
                </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>電話番号</div>
              <div class="col-md-5">
                <input type="text" class="form-control rounded-pill" id="password" value="<?php echo $phone ?>">
                </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>生年月日</div>
              <div class="col-md-5">
                <input type="date" class="form-control rounded-pill" id="password" value="<?php echo $date_of_birth ?>">
                </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
              <div class="col-md-5">
                <input type="text" class="form-control rounded-pill" id="password" value="●●●●●●●●●●">
                </div>
            </div>
          </li>

        </ul>
      </div>
      
    </div>
    <div class="row mt-4">
      <div class="col d-flex justify-content-center">
        <a class="btn btn-outline-primary btn-lg mb-3" href="G1-7-4_MemberInfoChangeCheck.php">変更する</a>
      </div>
    </div>
</div>

<!-- 
<div class="container">
    <div class="row text-center">
      <h2>会員情報<h2>
    </div>
    
    <div class="card">
      <div class="card-header">
        <div class="container-fluid alert-danger">
        <h2>プロフィール<h2>
      </div>

      <div class="card-body bg-light">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">

            <div class="text-center">
              <label>おなまえ</label>
              <input type="text">
            </div>
          </li>

          <div class="RegisterForm_signup_label">
            <label class="c-formLabel">生年月日</label>
          </div>
          

          <li class="list-group-item">
            <div class="text-center">
              <label>メールアドレス</label>
              <input type="text">
            </div>
          </li>

          <li class="list-group-item">
            <div class="text-center">
              <label>パスワード</label>
              <input type="text">
            </div>
          </li>

          <li class="list-group-item"><div>
          <div class="text-center">
          <label>電話番号</label>
          <input type="text">
        </div></li>
      </ul>

      <div class="text-center">
      <button type="submit">変更する</button>
    </div>
  </div>
</div>
</div>
</div> -->


