<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    @import url("https://fonts.googleapis.com/earlyaccess/nicomoji.css");
    @import url("https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c");
    /* フォント設定 */
    body { font-family: "M PLUS Rounded 1c"; }
    .wf-nicomoji { font-family: "Nico Moji"; }
    .kuhaku{
        height: 100px;
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
    <!-- <div class="row text-center moji"><h1>情報変更完了しました</h1></div> -->
    <div class="row text-center moji"><h1>続けて手続きを行います</h1></div>
    <div class="row text-center moji"><h3>お買い上げ内容が書かれたメールを、アソウアカウントのメールアドレスにお送りします。<br>子どもアカウントの場合は保護者（ファミリーの管理者）のメールアドレスにお送りします。</h3></div>
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="btn btn-primary btn-lg rounded-pill" href="G1-6-4_Send.php"><h2>転送</h2></a>
        </div>
    </div>
</div>

<?php include_once 'GameFooter.php'; ?>
