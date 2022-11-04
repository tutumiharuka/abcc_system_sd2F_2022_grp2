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
            <form>
        <!-- メールアドレス -->
                <div class="mb-5 ">
                    <input type="email" class="form-control" id="mail1adress" placeholder="メールアドレス">
                </div>
        <!-- パスワード -->
                <div class="mb-5">
                    <input type="password" class="form-control" id="password" placeholder="パスワード">
                </div>
                <!-- ボタン -->
                <div class="right-aligned">
                    <button type="submit" class="btn btn-light btn-lg rounded-pill">ログイン</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="ms-3 me-3">
    <hr>
</div>
<div class="text-center">
    <p class="mb-3">アカウントをお持ちでない方<p>
    <button type="submit" class="btn btn-light btn-lg rounded-pill">新規登録</button>
</div>
<?php include_once 'GameFooter.php'; ?>