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
      <h2>パスワード<h2>
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
                  <i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
                <div class="col-md-6"><?php echo $password ?></div>
              </div>
            </li>
          </ul>
        
      </div><!-- .card -->
      
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