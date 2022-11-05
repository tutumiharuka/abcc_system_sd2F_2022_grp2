<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<?php
// 前ページの値を取得する
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
        $year = $_POST['year'];
        $month = sprintf("%02d",$_POST['month']);
        $day =  sprintf("%02d",$_POST['day']);
    //birthは3つのstringの組み合わせ
    $birth = $year.'-'.$month.'-'.$day;
    $pass = $_POST['pass'];

?>

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
<!-- 新規登録のフォーム（ hidden = 見えないフォームを用意し、次のページに与える ） -->
    <div class="card bg-light mt-3">
        <div class="card-body">
            <form  action="G1-3-3_NewMemberEnd.php" method="post">
    <!-- 名前 -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆名前</div>
                    <div class="col-md-7"><?php echo $name ?></div>
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                </div>
    <!-- メールアドレス -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆メールアドレス</div>
                    <div class="col-md-7"><?php echo $mail?></div>
                    <input type="hidden" name="mail" value="<?php echo $mail ?>">
                </div>
    <!-- 電話番号 -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆電話番号</div>
                    <div class="col-md-7"><?php echo $phone?></div>
                    <input type="hidden" name="phone" value="<?php echo $phone ?>">
                </div>
    <!-- 生年月日 -->
    
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆生年月日</div>
                    <div class="col-md-7"><?php echo $birth?></div>
                    <input type="hidden" name="birth" value="<?php echo $birth ?>">
                </div>

    <!-- パスワード -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆パスワード</div>
                    <div class="col-md-7"><?php echo $pass?></div>
                    <input type="hidden" name="pass" value="<?php echo $pass ?>">
                </div>

                <div class="row mt-5">
                    <div class="col d-flex justify-content-end">
                        <a class="btn btn-outline-primary btn-lg"  href="javascript:history.back()">修正する</a>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <button type="submit" class="btn btn-outline-primary btn-lg">登録する</button>
                    </div>
                </div>

                
            </form>
        </div><!-- card-body -->
    </div><!-- card -->
</div>




<?php include_once 'GameFooter.php'; ?>
