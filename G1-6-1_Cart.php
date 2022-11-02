<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>カート</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <style>

    </style>
</head>

<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<!-- カート -->

<body>
    <!-- t -->
    <div class="container-fluid">
        <div class="row ms-5 mt-5">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h1>カート</h1>
                </li>
                <li class="list-inline-item">
                    <h5>(合計2点)</h5>
                </li>
            </ul>
        </div>

        <!-- ｓ -->
        <div class="row mt-5 ms-5">
            <div class="col mt-5 "><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></div>
            <div class="col"><img src="img/FPS/FPS_s01.jpg"></div>
            <div class="col"><u>
                    <h4>ゲーム名</h4>
                </u><br>
                <p class="text-sm-start">税込:1,000円</p>
            </div>
            <div class="col me-5"><i class="bi bi-x-square-fill"></i></div>
        </div>


        <div class="row mt-5 ms-5">
            <div class="col mt-5"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></div>
            <div class="col"><img src="img/FPS/FPS_s02.jpg"></div>
            <div class="col"><u>
                    <h4>ゲーム名</h4>
                </u><br>
                <p class="text-sm-start">税込:1,000円</p>
            </div>
            <div class="col me-5"><i class="bi bi-x-square-fill"></i></div>
        </div>

        <!-- 選択 -->
        <div class="row mt-5 ms-5">
            <div class="col"><input class="form-check-input" type="checkbox"  id="flexCheckDefault"><h6>全選択</h6></div>
            <div class="col"><p class="text-center"><h6>選択済み:2点</h6></p></div>
            <div class="col"><p class="text-center">
                <li class="list-inline-item"><h6>合計:</h6></li>
                <li class="list-inline-item"><h3>2,000</h3></li>
                <li class="list-inline-item"><h6>円</h6></li></p>
            </div>
            <div class="col-md-2"><button type="button" class="btn btn-primary btn-lg">レジに進む</button></div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

<?php include_once 'GameFooter.php'; ?>