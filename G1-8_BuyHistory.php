<?php session_start(); ?>
<?php 
    require_once 'LoginManager.php';
    $loginMng = new LoginManager(); 
    $loginMng->isLogin();

    require_once "DBManager.php";
    $dbmng = new DBManager();
    $member_id = $_SESSION['member']['member_id'];
    //注文したゲームをカートから削除し、履歴に追加する
    $results = $dbmng->getBuyHistroyList($member_id);

?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<div class="container mt-5">
    <!-- タイトル -->
    <div class="row h1 ms-5 mt-5">購入履歴</div>
    <!-- リストの一行 -->
    <div class="row">
        <?php
        foreach($results as $row){
            echo '  <div class="col-lg-3 mt-5">
                        <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                        <img class="img-fluid" src="'.$row['image_small'].'"></a>
                    </div>
                    <div class="col-lg-3 mt-5">
                        <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                        <div class="row h4 mt-5 text-start">'.$row['shohin_name'].'</div>
                        <div class="row h5 ms-5 mt-5">購入日:'.$row['buying_date'].'</div></a>
                        <div class="row text-center me-5 mt-5"><i class="bi bi-box-arrow-in-right h2"></i></div>
                    </div>';
        }
        ?>
    </div>

  
    
</div>

<br>
<br>
<br>
<br>
<?php include_once 'GameFooter.php'; ?>
