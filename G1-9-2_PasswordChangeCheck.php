<?php session_start(); ?>
<?php
  require_once 'LoginManager.php';
  $loginMng = new LoginManager(); 
  $loginMng->isLogin();
  
  $member_id = $_SESSION['member']['member_id'];
  
  require_once 'DBManager.php';
  $dbmng = new DBManager();
  $results = $dbmng->getMemberInfo($member_id);

  foreach($results as $row){
    $hashpass = $row['password'];
  }

  //まずは、入力したパスワードをハッシュ値のパスワードを比較し、// 合わないなら、エラーを持ってて、前のページに
  if(password_verify($_POST['pass'],$hashpass) == false){
    $_SESSION['wrong'] = "パスワードの入力に誤りがあるので、再度確認してください。";
    header('Location: G1-9-1_PasswordChange.php');
  }else if($_POST['newpass'] != $_POST['renewpass']){//二回入力パスワードを違うなら
    $_SESSION['diff'] = "入力したパスワードが違いますので、再入力してください。";
    header('Location: G1-9-1_PasswordChange.php');
  }else{// 当てるなら、パスワードの変更を行う
    echo "ok";
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
  <div class="row kuhaku-form"></div>
    <div class="row text-center">
      <h2>パスワード<h2>
    </div>

    <div class="d-flex justify-content-center mt-2"><!-- 真ん中に寄せる -->
    <!-- カード -->
      <div class="card ms-3" style="width: 60rem">
        <div class="card-header">
          <h2 class="ms-4 mt-2 fw-bold">プロフィール</h2></div>
              <ul class="list-group list-group-flush">
            
                  <!-- 旧パスワード入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>旧パスワード</div>
                      <div class="col-md-5">
                        <input type="text" class="form-control rounded-pill" name="password" value="<?php echo $password ?>">
                      </div>
                    </div>
                  </li>

                  <!-- 新パスワード入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>新パスワード</div>
                      <div class="col-md-5">
                        <input type="text" class="form-control rounded-pill" name="password" value="<?php echo $password ?>">
                      </div>
                    </div>
                  </li>

                  <!-- 新パスワード再入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>新パスワード再入力</div>
                      <div class="col-md-5">
                        <input type="text" class="form-control rounded-pill" name="password" value="<?php echo $password ?>">
                      </div>
                    </div>
                  </li>
              </ul>
        
        </div>
      
    </div>
    <div class="row mt-4">
      <div class="col d-flex justify-content-center ">
        <a class="btn btn-outline-primary btn-lg mt-2 me-5 mb-3" href="G1-9-1_PasswordChange.php">修正する</a>
        <form action="G1-7-5_MemberInfoChangeEnd.php" method="post">
            <input type="hidden" name="password" value="<?php echo $password ?>">
          <button type="submit" class="btn btn-outline-primary btn-lg mt-2 ms-5 mb-3">保存する</button>
        </form>
      </div>
    </div>


</div>