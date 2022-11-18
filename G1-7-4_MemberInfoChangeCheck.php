<?php session_start(); ?>
<?php 
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();
?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<?php  
    // 前ページの値を取得する
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $date_of_birth = $row['date_of_birth'];
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
      <div class="card ms-3" style="width: 60rem">
        <div class="card-header">
          <h2 class="ms-4 mt-2 fw-bold">プロフィール</h2>
        </div>
       

          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="row h5">
                <div class="col-md-3 offset-md-3 text-start">
                  <i class="bi bi-diamond-fill h6 me-3"></i>名前</div>
                <div class="col-md-6">"<?php echo $name ?>"</div>
              </div>
            </li>

            <li class="list-group-item">
              <div class="row h5">
                <div class="col-md-3 offset-md-3 text-start">
                  <i class="bi bi-diamond-fill h6 me-3"></i>メールアドレス</div>
                <div class="col-md-6">"<?php echo $mail ?>"</div>
              </div>
            </li>

            <li class="list-group-item">
              <div class="row h5">
                <div class="col-md-3 offset-md-3 text-start">
                  <i class="bi bi-diamond-fill h6 me-3"></i>電話番号</div>
                <div class="col-md-6">"<?php echo $phone ?>"</div>
              </div>
            </li>

            <li class="list-group-item">
              <div class="row h5">
                <div class="col-md-3 offset-md-3 text-start">
                  <i class="bi bi-diamond-fill h6 me-3"></i>生年月日</div>
                <div class="col-md-6">"<?php echo $birth ?>"</div>
              </div>
            </li>

            <li class="list-group-item">
              <div class="row h5">
                <div class="col-md-3 offset-md-3 text-start">
                  <i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
                <div class="col-md-6">●●●●●●●●●●</div>
              </div>
            </li>

          </ul>
        
      </div><!-- .card -->
      
    </div>
    <div class="row mt-4">
      <div class="col d-flex justify-content-center ">
        <a class="btn btn-outline-primary btn-lg mt-2 me-5 mb-3" href="G1-7-3_MemberInfoChange.php">修正する</a>
        <button type="submit" class="btn btn-outline-primary btn-lg mt-2 ms-5 mb-3">保存する</button>
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
                <div class=row>
                    <label class=col-md-3>◇おなまえ</label>
                    <p class=col-md-4>ゲームオタク　太郎</p>
                    <p class=col-md-5></p>
                </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="text-center">
                <div class=row>
                    <label class=col-md-3>◇生年月日</label>
                    <p class=col-md-4>2022年12月31日</p>
                    <p class=col-md-5></p>
                </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="text-center">
                <div class=row>
                    <label class=col-md-3>◇メールアドレス</label>
                    <p class=col-md-4>taro@gameotaku.com</p>
                    <p class=col-md-5></p>
                </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="text-center">
                <div class=row>
                    <label class=col-md-3>◇パスワード</label>
                    <p class=col-md-4>●●●●●●●●●●</p>
                    <p class=col-md-5></p>
                </div>
            </div>
          </li>
          
          <li class="list-group-item"><div>
          <div class="text-center">
                <div class=row>
                    <label class=col-md-3>◇電話番号</label>
                    <p class=col-md-4>070 - 0000 - 0000</p>
                    <p class=col-md-5></p>
                </div>
        </div></li>
      </ul>
      <div class="text-center">
        <div class="row">
            <p class="col-md-2"></p>
            <a class="col-md-3 btn btn-primary m-4 rounded text-dark rounded-pill" href="G1-1_Top.php"><h3>　　修正する　　</h3></a>
            <p class="col-md-2"></p>
            <a class="col-md-3 btn btn-primary m-4 rounded text-dark rounded-pill" href="G1-1_Top.php"><h3>　　保存する　　</h3></a>
            <p class="col-md-2"></p>
    </div>
  </div>
</div>
</div>
</div> -->

<?php include_once 'GameFooter.php'; ?>
