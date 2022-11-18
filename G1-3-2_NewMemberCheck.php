<?php session_start(); ?>
<?php 
    require_once "DBManager.php";
    $dbmng = new DBManager();
     // 重複データある場合-> 前ページへ、エラーメッセージを送ります。
    if($dbmng->isSameEmail($_POST['mail'])){
        $_SESSION['err']="入力したメールアドレスが既に申し込まれています";
        header('Location: G1-3-1_NewMember.php');
    }else{
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
    }
   
?>

<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .kuhaku-form{
        height: 15%;
    }
</style>

<div class="container">

    <div class="row kuhaku-form"></div>
    <div class="row text-center mt-3">
        <h2>アカウントの作成</h2>
    </div>
<!-- 新規登録のフォーム（ hidden = 見えないフォームを用意し、次のページに与える ） -->
    <div class="card bg-light mt-3 mb-3">
        <div class="card-body">
            <form  action="G1-3-3_NewMemberEnd.php" method="post">
    <!-- 名前 -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆名前</div>
                    <div class="col-md-6"><?php echo $name?></div>
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                </div>
    <!-- メールアドレス -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆メールアドレス</div>
                    <div class="col-md-6"><?php echo $mail?></div>
                    <input type="hidden" name="mail" value="<?php echo $mail ?>">
                </div>
    <!-- 電話番号 -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆電話番号</div>
                    <div class="col-md-6"><?php echo $phone?></div>
                    <input type="hidden" name="phone" value="<?php echo $phone ?>">
                </div>
    <!-- 生年月日 -->
    
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆生年月日</div>
                    <div class="col-md-6"><?php echo $birth?></div>
                    <input type="hidden" name="birth" value="<?php echo $birth ?>">
                </div>

    <!-- パスワード -->
                <div class="row mt-5">
                    <div class="col-md-2 offset-md-2">◆パスワード</div>
                    <div class="col-md-3" id="nopass">●●●●●●●●●●</div>
                    <div class="col-md-3 d-none" id="seepass"><?php echo $pass?></div>
                    <div class="col-md-1 justify-content-start">
                        <a id="eyebtn"><i class="bi bi-eye-fill"></i></a>
                    </div>
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

<script>
    let nopass = document.getElementById("nopass");
    let seepass = document.getElementById("seepass");
    let eyebtn =  document.getElementById("eyebtn");
    eyebtn.addEventListener('click', function(){
        nopass.classList.toggle('d-none');
        seepass.classList.toggle('d-none');
    });
</script>



<?php include_once 'GameFooter.php'; ?>
