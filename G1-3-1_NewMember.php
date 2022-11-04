<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>



<div class="container">
    <div class="text-center mt-3">
        <h2>アカウントの作成</h2>
    </div>
<!-- 新規登録のフォーム -->
    <div class="card bg-light mt-3">
        <div class="card-body">
            <form>
<!-- 名前 -->
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label for="name" class="col-form-label">◆名前</label></div>
                <div class="col-auto"><input type="text" id="newname" class="form-control rounded-pill" aria-describedby="Newname" placeholder="10文字以内"></div>
            </div>
<!-- メールアドレス -->
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label for="name" class="col-form-label">◆メールアドレス</label></div>
                <div class="col-auto"><input type="text" id="newname" class="form-control rounded-pill" aria-describedby="Newname" placeholder="xxxxxxx@xxx.xx.xx"></div>
                <p>・パソコンやWEBメールアドレスをおすすめします</p>
            </div>
<!-- 電話番号 -->
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label for="name" class="col-form-label">◆電話番号</label></div>
                <div class="col-auto"><input type="text" id="newname" class="form-control rounded-pill" aria-describedby="Newname" placeholder="携帯電話"></div>
            </div>
<!-- 生年月日 -->
            <div>
                <div class="col-auto"><label for="name" class="col-form-label">◆生年月日</label></div>
                <select class="form-select row">
                    <div class="col-md-6">
                        <option selected>西暦</option>
                        <option value="1">その1</option>
                        <option value="2">その2</option>
                        <option value="3">その3</option>
                    </div>
                </select>
                <select class="form-select">
                    <div class="col-md-3">
                        <option selected>月</option>
                        <option value="1">その1</option>
                        <option value="2">その2</option>
                        <option value="3">その3</option>
                    </div>
                </select>
                <select class="form-select">
                    <div class="col-md-3">
                        <option selected>日</option>
                        <option value="1">その1</option>
                        <option value="2">その2</option>
                        <option value="3">その3</option>
                    </div>
                </select>
            </div>
</div>


<!-- パスワード -->
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label for="name" class="col-form-label">◆パスワード</label></div>
                <div class="col-auto"><input type="text" id="newname" class="form-control rounded-pill" aria-describedby="Newname" placeholder="半角英数混合8文字以上"></div>
            </div>
<!-- パスワード再入力 -->
            <div class="row g-3 align-items-center">
                <div class="col-auto"><label for="name" class="col-form-label">◆パスワード再入力</label></div>
                <div class="col-auto"><input type="text" id="newname" class="form-control rounded-pill" aria-describedby="Newname" placeholder="半角英数混合8文字以上"></div>
            </div>

            </div>
            
            </form>
        </div>
    </div>

</div>

<?php include_once 'GameFooter.php'; ?>
