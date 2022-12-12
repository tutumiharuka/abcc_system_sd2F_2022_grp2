<?php session_start(); ?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<style>
    .moji{
        height: 150px;
    }
    .botan{
        width: 200px;
        height: 50px;
    }
    .game-text{
        font-family: 'PixelMplus';
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
<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row kuhaku-end"></div>
    <div class="row text-center moji game-text"><h1>ログインしました</h1></div>
    <div class="row text-center moji game-text"><h3>おかえりなさい<br><?php echo $_SESSION['member']['name']?> さま</h3></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-outline-primary btn-lg rounded-pill" href="G1-1_Top.php">TOPへ</a>
        </div>
    </div>
</div>

