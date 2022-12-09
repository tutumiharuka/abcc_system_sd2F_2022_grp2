<?php session_start(); ?>
<?php 
//もしログインしている、TOPへ
if(isset($_SESSION['member']) == true){
    header('Location: G1-1_Top.php');
}
?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<style>
    /* .right-aligned{
        margin-right: 0;
        margin-left: auto;
        width: 30%;
    } */
    
    .input-group-append > button{
        /* margin-left:10px; */
        margin-top:3px;
        border-radius: 1rem;
        border: none;
    }
    .login-btn{
        height: 50px;
        width: 100%;
    }
</style>

<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="text-center m-5">
        <h1>ログイン</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 col-md-6">
            <form action="LoginCheck.php" method="post">
        <!-- メールアドレス -->
                <div class="row mb-5">
                    <div class="col-12">
                    <input type="email" class="form-control mail" name="mail" placeholder="メールアドレス">
                    </div>
                </div>
        <!-- パスワード -->
                <div class="row mb-5">
                    <div class="col-12">
                    <input type="password" data-toggle="password" class="form-control pass" name="pass" placeholder="パスワード">
                    <div class="text-danger"><?php if(isset($_SESSION['err'])){echo $_SESSION['err'];unset($_SESSION['err']);}?></div>
                    </div>
                </div>
                 <!-- 次のページから戻る、アカウント存在しないやパスワードが違う場合 -->
                <!-- ボタン -->
                <div class="row justify-content-end">
                    <div class="col-12 col-md-5 col-lg-4">
                        <button type="submit" class="btn btn-outline-primary btn-lg rounded-pill login-btn">ログイン</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="ms-3 me-3">
    <hr>
</div>

<div class="text-center">
    <br>
    <p class="mb-3 h4">アカウントをお持ちでない方<p>
    <a type="submit" class="btn btn-outline-primary btn-lg rounded-pill" href="G1-3-1_NewMember.php">新規登録</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
