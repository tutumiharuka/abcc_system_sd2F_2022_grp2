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
<<<<<<< HEAD
<div class="row m-1 mt-4">
                                <div class="col-md-6">
                          <label  for="lastname"></label>
                              <input  type="text"  class="form-control"  id="lastname" placeholder="メールアドレス">
			     
</div>
</div>
<div class="row m-1 mt-4">
<div class="col-md-6">
                       <label  for="lastname"></label>
                                    <input  type="text"  class="form-control"  id="lastname" placeholder="パスワード">			
                            
                                      </div>
</div>
<div class="d-grid gap-2">
                                                    <button class="btn btn-info" type="button"><div class="container text-black">ログイン</div></button>
                                                  </div>
</div>
=======

<div class="ms-3 me-3">
    <hr>
</div>
<div class="text-center">
    <p class="mb-3">アカウントをお持ちでない方<p>
    <button type="submit" class="btn btn-light btn-lg rounded-pill">新規登録</button>
>>>>>>> e3139aedf1d36590976ebc38ece5a5fd0867183a
</div>

<?php include_once 'GameFooter.php'; ?>
