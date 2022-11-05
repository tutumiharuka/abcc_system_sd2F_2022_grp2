<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .kuhaku{
        height: 80px;
    }
</style>

<div class="container">

    <div class="row kuhaku"></div>
    <div class="row text-center mt-3">
        <h2>アカウントの作成</h2>
    </div>
<!-- 新規登録のフォーム -->
    <div class="card bg-light mt-3">
        <div class="card-body">
            <form  action="G1-3-2_NewMemberCheck.php" method="post">
    <!-- 名前 -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆名前</div>
                    <div class="col-md-7"><input type="text" name="name" class="form-control rounded-pill" aria-describedby="Newname" placeholder="10文字以内"></div>
                </div>
    <!-- メールアドレス -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆メールアドレス</div>
                    <div class="col-md-7"><input type="text" name="mail" class="form-control rounded-pill" aria-describedby="Newname" placeholder="メールを入力してください"></div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-md-2"></div>
                </div>
    <!-- 電話番号 -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆電話番号</div>
                    <div class="col-md-7"><input type="text" name="phone" class="form-control rounded-pill" aria-describedby="Newname" placeholder="携帯電話"></div>
                </div>
    <!-- 生年月日 -->
    
    
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆生年月日</div>
        <!-- 年 $y -->
                    <div class="col-md-2">
                        <select class="form-select rounded-pill text-center" name="year">
                        <!-- <option selected>選択する</option> -->
                        <?php for ($y = 1950; $y <= date("Y"); $y++) echo '<option value="'.$y.'">'.$y.'</option>';?></select>
                    </div>
                    <div class="col-md-1 d-flex justify-content-start align-items-center">
                        年
                    </div>
        <!-- 月 $m -->
                    <div class="col-md-1">
                        <select class="form-select rounded-pill text-center" name="month">
                        <!-- <option selected>選択する</option> -->
                        <?php for ($m = 1; $m <= 12; $m++) echo '<option value="'.$m.'">'.$m.'</option>';?></select>
                    </div>
                    <div class="col-md-1 d-flex justify-content-start align-items-center">
                        月
                    </div>
        <!-- 日 $d -->
                    <div class="col-md-1">
                        <select class="form-select rounded-pill text-center" name="day">
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
                    <div class="col-md-7"><input type="password" class="form-control rounded-pill" aria-describedby="Newname" placeholder="半角英数混合8文字以上"></div>
                </div>
    <!-- パスワード再入力 -->
                <div class="row mt-3">
                    <div class="col-md-2 offset-md-2">◆パスワード再入力</div>
                    <div class="col-md-7"><input type="password" name="pass" class="form-control rounded-pill" aria-describedby="Newname" placeholder="半角英数混合8文字以上"></div>
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

<?php include_once 'GameFooter.php'; ?>
