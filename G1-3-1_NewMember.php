<?php session_start(); ?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .kuhaku-from{
        height: 15%;
    }
</style>
<div class="container">
    <div class="row kuhaku-from"></div>
    <div class="row text-center">
        <h2>アカウントの作成</h2>
    </div>
<!-- 新規登録のフォーム -->
    <div class="card bg-light mt-3 mb-3">
        <div class="card-body">
            <form id="form" action="#" onsubmit="return on_submit()">
    <!-- 名前 -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆名前</div>
                    <div class="col-md-7"><input type="text" name="name" class="form-control rounded-pill" placeholder="10文字以内" required></div>
                </div>
    <!-- メールアドレス -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆メールアドレス</div>
                    <div class="col-md-7"><input type="mail" name="mail" class="form-control rounded-pill" placeholder="メールを入力してください" required></div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-md-2"></div>
                    <div class="col-md-8">
                        <?php // 次のページから戻る、重複アカウントEmailある場合
                            if(isset($_SESSION['err'])){
                                echo $_SESSION['err'];
                                unset($_SESSION['err']);
                            }
                        ?>
                    </div>
                </div>
    <!-- 電話番号 -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆電話番号</div>
                    <div class="col-md-7"><input type="tel" name="phone" class="form-control rounded-pill" placeholder="携帯電話を11桁で入力してください" pattern="[0-9]{11}" required></div>
                </div>
    <!-- 生年月日 -->
    
    
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆生年月日</div>
                    
        <!-- 年 $y -->
                    <div class="col-md-2">
                        <select class="form-select rounded-pill text-center" name="year" required>
                        <!-- <option selected>選択する</option> -->
                        <?php for ($y = 1950; $y <= date("Y"); $y++) echo '<option value="'.$y.'">'.$y.'</option>';?></select>
                    </div>
                    <div class="col-md-1 d-flex justify-content-start align-items-center">
                        年
                    </div>
        <!-- 月 $m -->
                    <div class="col-md-1">
                        <select class="form-select rounded-pill text-center" name="month" required>
                        <!-- <option selected>選択する</option> -->
                        <?php for ($m = 1; $m <= 12; $m++) echo '<option value="'.$m.'">'.$m.'</option>';?></select>
                    </div>
                    <div class="col-md-1 d-flex justify-content-start align-items-center">
                        月
                    </div>
        <!-- 日 $d -->
                    <div class="col-md-1">
                        <select class="form-select rounded-pill text-center" name="day" required>
                        <!-- <option selected>選択する</option> -->
                        <?php for ($d = 1; $d <= 31; $d++) echo '<option value="'.$d.'">'.$d.'</option>';?></select>
                    </div>
                    <div class="col-md-1 d-flex justify-content-start align-items-center">
                        日
                    </div>
                </div>
<!-- 月と日が転送されないよう、メモする -->
    <!-- パスワード -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆パスワード</div>
                    <div class="col-md-7"><input type="password" name="pass" id="pass" class="form-control rounded-pill" placeholder="半角英数混合8文字以上" required></div>
                </div>
    <!-- パスワード再入力 -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆パスワード再入力</div>
                    <div class="col-md-7"><input type="password" id="repass" class="form-control rounded-pill" placeholder="半角英数混合8文字以上" required></div>
                </div>
                
                <div class="row">
                    <div class="col-md-2 offset-md-2"></div>
                    <div id="err" class="col-md-7 d-none text-danger">入力したパスワードが間違っていますので、確認してください。</div>
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

<script>
    // 入力したパスワードが半角英数混合8文字以上かという確認
    function check(str){
        var reg = new RegExp(/^(?=.*?[a-zA-Z])(?=.*?\d)[a-zA-Z\d]{8,}$/);
        var response = reg.test(str);
        return response;
    }
    //確認ボタンを押す瞬間に確認する動作です。パスワードの確認する。
    //大丈夫だったら、次のページの値を与える
	function on_submit(){
        let form = document.getElementById("form");
		let pass = document.getElementById("pass");
		let repass = document.getElementById("repass");
		let err = document.getElementById("err");

        if(pass.value==repass.value){
            form.action="G1-3-2_NewMemberCheck.php";
            form.method="post";
            frm.encoding="application/x-www-form-urlencoded";
            err.classList.add("d-none");
            return true;
        }else if(pass.value!=repass.value || check(pass.value)!=true){
            err.classList.remove("d-none");
			return false;
        }
      
        
	}
</script>
<?php include_once 'GameFooter.php'; ?>
