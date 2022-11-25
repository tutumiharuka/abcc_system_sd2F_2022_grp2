<?php session_start(); ?>
<?php 
 require_once 'LoginManager.php';
 $loginMng = new LoginManager(); 
 $loginMng->isLogin();

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
  <!-- タイトル -->
  <div class="row text-center pb-5"><h2>パスワード変更<h2></div>
    <form action="G1-9-2_PasswordChangeEnd.php" method="post">
      <div class="d-flex justify-content-center mt-2 mb-5">
  <!-- カード -->
        <div class="card ms-3" style="width: 60rem;">
           <div class="card-header"><h2 class="ms-4 mt-2 fw-bold">プロフィール</h2></div>
              <ul class="list-group list-group-flush">

                <!-- 旧パスワード入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>旧パスワード</div>
                      <div class="col-md-5">
                        <input type="password" class="form-control rounded-pill" name="pass" placeholder="半角英数混合8文字以上" required>
                      </div>
                    </div>
                    
                    <!-- もし、パスワードが間違ったら、次のページからのエラー -->
                    <?php if(isset($_SESSION['wrong'])==true){
                      echo '<div class="row">
                              <div class="col-md-5 offset-md-6 text-danger">'.$_SESSION['wrong'].'</div>
                            </div>';
                      unset($_SESSION['wrong']);}
                    ?>
                  </li>

                  <!-- 新パスワード入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>新パスワード</div>
                      <div class="col-md-5">
                        <input type="text" class="form-control rounded-pill" name="newpass" id="pass" placeholder="半角英数混合8文字以上" required>
                      </div>
                    </div>
                  </li>

                  <!-- 新パスワード再入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>新パスワード再入力</div>
                      <div class="col-md-5">
                        <input type="text" class="form-control rounded-pill" name="renewpass" id="repass" placeholder="半角英数混合8文字以上" required>
                      </div>
                    </div>

                    <!-- もし、パスワードが間違ったら、次のページからのエラー -->
                    <?php if(isset($_SESSION['diff'])==true){
                      echo '<div class="row">
                              <div class="col-md-5 offset-md-6 text-danger">'.$_SESSION['diff'].'</div>
                            </div>';
                      unset($_SESSION['diff']);}
                    ?>
                  </li>
                
              </ul>
            </div>
            
        </div>
  <!-- 変更ボタン -->
          <div class="row mt-4">
            <div class="col d-flex justify-content-center">
              <button type="submit" class="btn btn-outline-primary btn-lg mb-3">変更する</button>
            </div>
          </div>
  </form>       
</div>

<?php include_once 'GameFooter.php'; ?>