<?php session_start(); ?>

<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<?php 
  $member_id = $_SESSION['member']['member_id'];


  require_once 'DBManager.php';
  $dbmng = new DBManager();
  $results = $dbmng->getMemberInfo($member_id);

  foreach($results as $row){
    $pass = $row['password'];
   }
?>
<style> 
  .kuhaku-form{
    height:15%;
  }
  
</style>

<div class="container">
  <div class="row kuhaku-form"></div>
  <!-- タイトル -->
  <div class="row text-center pb-5"><h2>パスワード変更<h2></div>
    <form action="G1-9-2_PasswordChangeCheck.php" method="post">
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
                        <input type="text" class="form-control rounded-pill" name="pass" placeholder="半角英数混合8文字以上">
                      </div>
                    </div>
                  </li>

                  <!-- 新パスワード入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>新パスワード</div>
                      <div class="col-md-5">
                        <input type="text" class="form-control rounded-pill" name="newpass" id="pass" placeholder="半角英数混合8文字以上">
                      </div>
                    </div>
                  </li>

                  <!-- 新パスワード再入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>新パスワード再入力</div>
                      <div class="col-md-5">
                        <input type="text" class="form-control rounded-pill" name="renewpass" id="repass" placeholder="半角英数混合8文字以上">
                      </div>
                    </div>
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