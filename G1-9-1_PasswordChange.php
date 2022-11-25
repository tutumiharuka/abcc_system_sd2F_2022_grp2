<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style> 
  .kuhaku-form{
    height:15%;
  }
  
</style>

<div class="container">

    <div class="row kuhaku-form"></div>

    <div class="row text-center pb-5"><h2>パスワード変更<h2></div>

    <form action="G1-9-2_PasswordChangeCheck.php" method="post">

          <div class="d-flex justify-content-center mt-2 mb-5">
          
            <div class="card ms-3" style="width: 60rem;">
              <div class="card-header"><h2 class="ms-4 mt-2 fw-bold">プロフィール</h2></div>
              <ul class="list-group list-group-flush">

                <li class="list-group-item">
                  <div class="row h5">
                    <div class="col-md-3 offset-md-3 text-start">
                      <i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
                    <div class="col-md-5">
                      <input type="text" class="form-control rounded-pill" name="password" value="<?php echo $password ?>">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            
          </div>
          <div class="row mt-4">
            <div class="col d-flex justify-content-center">
              <button type="submit" class="btn btn-outline-primary btn-lg mb-3">変更する</button>
            </div>
          </div>
  </form>       
</div>