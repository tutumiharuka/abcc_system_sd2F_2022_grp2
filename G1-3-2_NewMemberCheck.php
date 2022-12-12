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
        $birth = $_POST['birth'];
        $pass = $_POST['pass'];
    }
   
?>

<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .card{
        max-width: 700px;
    }
    .kuhaku-form{
        height: 10%;
    }
    @media only screen and (max-width: 767px) {       
        .kuhaku-from{
            height: 5%;
        }
        .card-body{
            text-align:center;
        }
    }
</style>

<div class="container">

    <div class="row kuhaku-form"></div>
    <div class="row text-center">
        <h2>アカウントの作成</h2>
    </div>
<!-- 新規登録のフォーム（ hidden = 見えないフォームを用意し、次のページに与える ） -->
    <div class="row d-flex justify-content-center">
    <div class="card bg-light mt-3 mb-3">
        <div class="card-body">
            <form  action="?" method="post">
    <!-- 名前 -->
                <div class="row mt-5">
                    <div class="col-md-3 offset-md-1">◆名前</div>
                    <div class="col-md-7"><?php echo $name?></div>
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                </div>
    <!-- メールアドレス -->
                <div class="row mt-5">
                    <div class="col-md-3 offset-md-1">◆メールアドレス</div>
                    <div class="col-md-7"><?php echo $mail?></div>
                    <input type="hidden" name="mail" value="<?php echo $mail ?>">
                </div>
    <!-- 電話番号 -->
                <div class="row mt-5">
                    <div class="col-md-3 offset-md-1">◆電話番号</div>
                    <div class="col-md-7"><?php echo $phone?></div>
                    <input type="hidden" name="phone" value="<?php echo $phone ?>">
                </div>
    <!-- 生年月日 -->
    
                <div class="row mt-5">
                    <div class="col-md-3 offset-md-1">◆生年月日</div>
                    <div class="col-md-7"><?php echo $birth?></div>
                    <input type="hidden" name="birth" value="<?php echo $birth ?>">
                </div>

    <!-- パスワード -->
                <div class="row mt-5">
                    <div class="col-12 col-md-3 offset-md-1">◆パスワード</div>
                    
                    <div class="col col-md-4 offset-3 offset-md-0 " id="nopass">●●●●●●●●●</div>
                    <div class="col col-md-4 offset-3 offset-md-0 d-none" id="seepass"><?php echo $pass?></div>
                    
                    <div class="col col-md-1">
                        <a id="eyebtn"><i class="bi bi-eye-fill"></i></a>
                    </div>
                    <input type="hidden" name="pass" value="<?php echo $pass ?>">
                </div>



                <div class="row mt-5">
                    <div class="col d-flex justify-content-end">
                        <!-- <a class="btn btn-outline-primary btn-lg"  href="javascript:history.back()">修正する</a> -->
                        <button type="submit" formaction="G1-3-1_NewMember.php" class="btn btn-outline-primary btn-lg">修正する</button>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <button type="submit" formaction="G1-3-3_NewMemberEnd.php" class="btn btn-outline-primary btn-lg">登録する</button>
                    </div>
                </div>

                
            </form>
        </div><!-- card-body -->
    </div><!-- card -->
</div>
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

