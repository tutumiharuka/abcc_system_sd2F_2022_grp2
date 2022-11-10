<?php session_start(); ?>

<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .right-aligned{
        margin-right: 0;
        margin-left: auto;
        width: 30%;
    }
</style>

<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="text-center m-5">
        <h1>ログイン</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <form action="LoginCheck.php" method="post">
        <!-- メールアドレス -->
                <div class="mb-5">
                    <input type="email" class="form-control" name="mail" placeholder="メールアドレス">
                </div>
        <!-- パスワード -->
                <div class="mb-5">
                    <input type="password" class="form-control" name="pass" placeholder="パスワード">
                </div>
                 <!-- 次のページから戻る、アカウント存在しないやパスワードが違う場合 -->
                 <?php if(isset($_SESSION['err'])){echo $_SESSION['err'];unset($_SESSION['err']);}?>
                <!-- ボタン -->
                <div class="right-aligned">
                    <button type="submit" class="btn btn-outline-primary btn-lg rounded-pill">ログイン</button>
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
<?php include_once 'GameFooter.php'; ?>