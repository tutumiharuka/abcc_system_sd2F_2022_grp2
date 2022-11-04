<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row text-center">
      <h2>会員情報<h2>
    </div>
    <!-- カード -->
    <div class="card">
      <div class="card-header">
        <div class="container-fluid alert-danger">
        <h2>プロフィール<h2>
      </div>
<!-- カードの内容 -->
      <div class="card-body bg-light">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
<!-- 名前 -->
            <div class="text-center">
              <label>おなまえ</label>
              <input type="text">
            </div>
          </li>
<!-- 生年月日 -->
          <div class="RegisterForm_signup_label">
            <label class="c-formLabel">生年月日</label>
          </div>
          
<!-- メールアドレス -->
          <li class="list-group-item">
            <div class="text-center">
              <label>メールアドレス</label>
              <input type="text">
            </div>
          </li>
<!-- パスワード -->
          <li class="list-group-item">
            <div class="text-center">
              <label>パスワード</label>
              <input type="text">
            </div>
          </li>
<!-- 電話番号 -->
          <li class="list-group-item"><div>
          <div class="text-center">
          <label>電話番号</label>
          <input type="text">
        </div></li>
      </ul>
<!-- 変更する -->
      <div class="text-center">
      <button type="submit">変更する</button>
    </div>
  </div>
</div>
</div>
</div>


