<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>



<div class="container">

    <div class="row g-5 align-items-center">
        <div class="col-auto"><label for="inputPassword6" class="col-form-label">パスワード</label></div>
        <div class="col-auto"><input type="password" id="inputPassword6" class="form-control rounded-pill" aria-describedby="passwordHelpInline"></div>
    </div>


    <div class="mt-3 me-3"><!-- 会員登録 -->
        <form class="form-inline" action="G1-3-2_NewMemberCheck.php" method="post">
            <input type="textbox" class="form-control rounded-pill" placeholder="10文字以内">
            <input type="textbox" class="form-control rounded-pill" placeholder="10文字以内">
            <input type="textbox" class="form-control rounded-pill" placeholder="10文字以内">
            <input type="textbox" class="form-control rounded-pill" placeholder="10文字以内">
        </form>
    </div>

</div>

<?php include_once 'GameFooter.php'; ?>
