<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .kuhaku{
        height: 280px;
    }
    .moji{
        height: 150px;
    }
    .botan{
        width: 200px;
        height: 50px;
    }
</style>
<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row kuhaku"></div>
    <div class="row text-center moji"><h1>ログインしました</h1></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-primary botan" href="G1-1_Top.php"><h2>TOPへ</h2></a>
        </div>
    </div>
</div>

<?php include_once 'GameFooter.php'; ?>
