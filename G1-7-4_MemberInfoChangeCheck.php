<?php session_start(); ?>
<?php 
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();
?>

<?php  
    // 前ページの値を取得する
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $birth = $_POST['birth'];
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

    <div class="d-flex justify-content-center mt-2"><!-- 真ん中に寄せる -->
    <!-- カード -->
      <div class="card ms-3" style="width: 60rem">
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
                <div class="col-md-6"><?php echo $birth ?></div>
              </div>
            </li>

            <!-- <li class="list-group-item">
              <div class="row h5">
                <div class="col-md-3 offset-md-3 text-start">
                  <i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
                <div class="col-md-6">●●●●●●●●●●</div>
              </div>
            </li> -->

          </ul>
        
      </div><!-- .card -->
      
    </div>
    <div class="row mt-4">
      <div class="col d-flex justify-content-center ">
        <div class="row">
          <div class="col">
            <a class="btn btn-outline-primary btn-lg mt-2 me-5 mb-3" href="G1-7-3_MemberInfoChange.php">修正する</a>
          </div>
        </div>
        
        <form action="G1-7-5_MemberInfoChangeEnd.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <input type="hidden" name="mail" value="<?php echo $mail ?>">
            <input type="hidden" name="phone" value="<?php echo $phone ?>">
            <input type="hidden" name="birth" value="<?php echo $birth ?>">
          <button type="submit" class="btn btn-outline-primary btn-lg mt-2 ms-5 mb-3">保存する</button>
        </form>
      </div>
    </div>


</div>


