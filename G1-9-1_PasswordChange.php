<?php session_start(); ?>
<?php 
 require_once 'LoginManager.php';
 $loginMng = new LoginManager(); 
 $loginMng->isLogin();

?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<style> 
    .kuhaku-form{
        height: 10%;
    }
    @media only screen and (max-width: 770px) {       
        .kuhaku-from{
            height: 5%;
        }
    }
  .input-group-append > button{
    margin-top:3px;
    border-radius: 1rem;
    border: none;
  }
  
</style>

<div class="container">
  <div class="row kuhaku-form"></div>
  <!-- タイトル -->
  <div class="row text-center pb-5"><h2>パスワード変更<h2></div>



    <form id="form" action="#" onsubmit="return on_submit()">
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
                        <input type="password" data-toggle="password" class="form-control rounded-pill" name="pass" placeholder="半角英数混合8文字以上" required>
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
                        <input type="password" data-toggle="password" class="form-control rounded-pill" name="newpass" id="pass" placeholder="半角英数混合8文字以上" required>
                      </div>
                    </div>
                  </li>

                  <!-- 新パスワード再入力 -->
                  <li class="list-group-item">
                    <div class="row h5">
                      <div class="col-md-3 offset-md-3 text-start">
                        <i class="bi bi-diamond-fill h6 me-3"></i>新パスワード再入力</div>
                      <div class="col-md-5">
                        <input type="password" data-toggle="password" class="form-control rounded-pill" name="renewpass" id="repass" placeholder="半角英数混合8文字以上" required>
                      </div>
                    </div>

                    <div class="row">
                      <div id="err" class="col-md-5 offset-md-6 text-danger d-none">入力したパスワードが間違っています。英数8文字以上で入力してください。</div>
                    </div>
                    <!-- もし、パスワードが間違ったら、次のページからのエラー -->
                    <?php 
                    // if(isset($_SESSION['diff'])==true){
                    //   echo '<div class="row">
                    //           <div class="col-md-5 offset-md-6 text-danger">'.$_SESSION['diff'].'</div>
                    //         </div>';
                    //   unset($_SESSION['diff']);
                    // }
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
<script>

  function check(str){
      let reg = new RegExp(/^(?=.*?[a-zA-Z])(?=.*?\d)[a-zA-Z\d]{8,}$/);
      let response = reg.test(str);
      console.log(response);
      return response;
  }
  function on_submit(){
      let form = document.getElementById("form");
  let pass = document.getElementById("pass");
  let repass = document.getElementById("repass");
  let err = document.getElementById("err");

    if(pass.value!=repass.value || check(repass.value)!=true){
          console.log(repass.value);
          err.classList.remove("d-none");
    return false;
      }else if(pass.value==repass.value){
          form.action="G1-9-2_PasswordChangeEnd.php";
          form.method="post";
          frm.encoding="application/x-www-form-urlencoded";
          err.classList.add("d-none");
          return true;
      }  
  }
</script>
