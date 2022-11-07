<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お気に入り</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <style>

    </style>
</head>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<!-- お気に入り -->

<body>
    <!-- t -->
    <div class="container-fluid">
        <div class="row ms-5 mt-5">
            <p class="fs-1">お気に入り</p>
        </div>

        <!-- ｓ -->
        <div class="row mt-5 ms-5">
            <div class="col"><img src="img/FPS/FPS_s01.jpg" class="rounded mx-auto d-block" alt="FPS_s01"></div>
            <div class="col"><u><h4>ゲーム名</h4></u><br>
                <p class="text-sm-start">税込:1,000円</p>
            </div>
            <div class="col me-5"><p class="text-sm-start">購入済み</p>
                <i class="bi bi-x-square-fill"></i>
            </div>
        </div>


        <div class="row mt-5 ms-5">
            <div class="col"><img src="img/FPS/FPS_s02.jpg" class="rounded mx-auto d-block" alt="FPS_s02"></div>
            <div class="col"><u>
                    <h4>ゲーム名</h4>
                </u><br>
                <p class="text-sm-start">税込:1,800円</p>
            </div>
            <div class="col me-5">
                <p class="text-sm-start">購入済み</p>
                <i class="bi bi-x-square-fill"></i>
            </div>
        </div>

        <div class="row mt-5 ms-5">
            <div class="col"><img src="img/FPS/FPS_s03.jpg" class="rounded mx-auto d-block" alt="FPS_s03"></div>
            <div class="col"><u>
                    <h4>ゲーム名</h4>
                </u><br>
                <p class="text-sm-start">税込:900円</p>
            </div>
            <div class="col me-5">
                <p class="text-sm-start">カートに入れる</p>
                <i class="bi bi-x-square-fill"></i>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

<?php include_once 'GameFooter.php'; ?>

