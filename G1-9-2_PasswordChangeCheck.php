<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style> 
  .kuhaku-form{
    height:15%;
  }

</style>

<?php
  public function getpass($member_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT password FROM members WHERE member_id = ?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$member_id,PDO::PARAM_STR);
    $ps->execute();
    $results = $ps->fetchAll();
    
    if(count($results)==0){
        //存在しない場合
        $_SESSION['err'] = "旧パスワードの入力に誤りがあります。再度入力してください。";
        header('Location: G1-9-1_PasswordChange.php');
      }
    }

    public function passchange($member_id){
      $pdo = $this->dbConnect();
      $sql = "UPDATE members SET password = '$pass' , WHERE member_id = ?";
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1,$member_id,PDO::PARAM_STR);
      $ps->execute();
      $results = $ps->fetchAll();
    }

?>

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