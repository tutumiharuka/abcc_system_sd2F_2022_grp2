<?php session_start(); ?>
<?php
  require_once 'LoginManager.php';
  $loginMng = new LoginManager(); 
  $loginMng->isLogin();
  
  $member_id = $_SESSION['member']['member_id'];
  
  require_once 'DBManager.php';
  $dbmng = new DBManager();
  $results = $dbmng->getMemberInfo($member_id);

  foreach($results as $row){
    $hashpass = $row['password'];
  }

  //まずは、入力したパスワードをハッシュ値のパスワードを比較し、// 合わないなら、エラーを持ってて、前のページに
  if(password_verify($_POST['pass'],$hashpass) == false){
    $_SESSION['wrong'] = "パスワードの入力に誤りがあるので、再度確認してください。";
    header('Location: G1-9-1_PasswordChange.php');
  }else if($_POST['newpass'] != $_POST['renewpass']){
    //二回入力パスワードを違うなら
    $_SESSION['diff'] = "入力したパスワードが違いますので、再入力してください。";
    header('Location: G1-9-1_PasswordChange.php');
  }else{
    // 当てるなら、パスワードの変更を行う
    $dbmng->updatePassword($member_id,$_POST['renewpass']);
  }
?>


<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .game-text{
        font-family: 'PixelMplus';
    }
    .moji{
        height: 150px;
    }

    .kuhaku-end{
        height: 15%;
    }
    @media only screen and (max-width: 767px) {       
        .kuhaku-end{
            height: 10%;
        }
        .card-body{
            text-align:center;
        }
    }
</style>

<div class="container">
    <div class="row kuhaku-end"></div>
    <div class="row text-center moji game-text"><h1>パスワード変更、成功しました</h1></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-primary btn-lg rounded-pill text-light" href="G1-7-2_MemberInfo.php">会員情報へ</a>
        </div>
    </div>
</div>

</div>