<?php session_start(); ?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .kuhaku-from{
        height: 15%;
    }
    .card{
        max-width: 900px;
    }
</style>
<div class="container">
    <div class="row kuhaku-from"></div>
    <div class="row text-center">
        <h2>アカウントの作成</h2>
    </div>
<!-- 新規登録のフォーム -->
    <div class="row d-flex justify-content-center">
        <div class="card bg-light mt-3 mb-3">
            <div class="card-body">
                <form id="form" action="#" onsubmit="return on_submit()">
        <!-- 名前 -->
                    <div class="row mt-3">
                        <div class="col-md-3 offset-md-1">◆名前</div>
                        <div class="col-md-7"><input type="text" name="name" class="form-control rounded-pill" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>" placeholder="10文字以内" required></div>
                    </div>
        <!-- メールアドレス -->
                    <div class="row mt-3">
                        <div class="col-md-3 offset-md-1">◆メールアドレス</div>
                        <div class="col-md-7"><input type="mail" name="mail" class="form-control rounded-pill" value="<?php if(isset($_POST['mail'])) echo $_POST['mail'] ?>" placeholder="メールを入力してください" required></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-1"></div>
                        <div class="col-md-7"><span class="text-danger">
                            <!-- 次のページから戻る、重複アカウントEmailある場合 -->
                            <?php if(isset($_SESSION['err'])){echo $_SESSION['err'];unset($_SESSION['err']);}?>
                            </span>
                        </div>
                    </div>
        <!-- 電話番号 -->
                    <div class="row mt-3">
                        <div class="col-md-3 offset-md-1">◆電話番号</div>
                        <div class="col-md-7"><input type="tel" name="phone" class="form-control rounded-pill"  value="<?php if(isset($_POST['phone'])) echo $_POST['phone'] ?>" placeholder="携帯電話を11桁で入力してください" pattern="[0-9]{11}" required></div>
                    </div>
        <!-- 生年月日 -->
                    <div class="row mt-3">
                        <div class="col-md-3 offset-md-1">◆生年月日</div>
                        <div class="col-md-7">
                            <input type="date" class="form-control rounded-pill" name="birth" value="<?php if(isset($_POST['birth'])) echo $_POST['birth'] ?>" required>
                        </div>

                    </div>
    <!-- 月と日が転送されないよう、メモする -->
        <!-- パスワード -->
                    <div class="row mt-3">
                        <div class="col-md-3 offset-md-1">◆パスワード</div>
                        <div class="col-md-7"><input type="password" name="pass" id="pass" class="form-control rounded-pill" placeholder="半角英数混合8文字以上" required></div>
                    </div>
        <!-- パスワード再入力 -->
                    <div class="row mt-3">
                        <div class="col-md-3 offset-md-1">◆パスワード再入力</div>
                        <div class="col-md-7"><input type="password" id="repass" class="form-control rounded-pill" placeholder="半角英数混合8文字以上" required></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3 offset-md-1"></div>
                        <div id="err" class="col-md-7 d-none text-danger">入力したパスワードが間違っています。英数8文字以上で入力してください。</div>
                    </div>

                    <div class="row mt-3">
                        <div class="col d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-primary btn-lg">登録する</button>
                        </div>
                    </div>
                    
                </form>
            </div><!-- card-body -->
        </div><!-- card -->
    </div>
</div>

<script>
    // 入力したパスワードが半角英数混合8文字以上かという確認
    function check(str){
        let reg = new RegExp(/^(?=.*?[a-zA-Z])(?=.*?\d)[a-zA-Z\d]{8,}$/);
        let response = reg.test(str);
        console.log(response);
        return response;
    }
    //確認ボタンを押す瞬間に確認する動作です。パスワードの確認する。
    //大丈夫だったら、次のページの値を与える
	function on_submit(){
        let form = document.getElementById("form");
		let pass = document.getElementById("pass");
		let repass = document.getElementById("repass");
		let err = document.getElementById("err");

        //もし、パスワードが違い、または英数8文字以上じゃないならエラーメッセージ欄でる
        if(pass.value!=repass.value || check(repass.value)!=true){
            console.log(repass.value);
            err.classList.remove("d-none");
			return false;
        }else if(pass.value==repass.value){
            form.action="G1-3-2_NewMemberCheck.php";
            form.method="post";
            frm.encoding="application/x-www-form-urlencoded";
            err.classList.add("d-none");
            return true;
        }  
	}
</script>
<?php include_once 'GameFooter.php'; ?>
