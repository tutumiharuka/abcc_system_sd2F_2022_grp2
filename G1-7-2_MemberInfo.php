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

            <div class="text-center">
              <label>おなまえ</label>
              <p>ゲームオタク　太郎</p>
            </div>
          </li>

          <li class="list-group-item">
            <div class="text-center">
              <label>生年月日</label>
              <p>2022年12月31日</p>
            </div>
          </li>

          <li class="list-group-item">
            <div class="text-center">
              <label>メールアドレス</label>
              <p>taro@gameotaku.com</p>
            </div>
          </li>

          <li class="list-group-item">
            <div class="text-center">
              <label>パスワード</label>
              <p>●●●●●●●●●●</p>
            </div>
          </li>
          
          <li class="list-group-item"><div>
          <div class="text-center">
          <label>電話番号</label>
          <p>070 - 0000 - 0000</p>
        </div></li>
      </ul>
      <div class="text-center">
      <button type="submit">変更する</button>
    </div>
  </div>
</div>
</div>
</div>

<?php include_once 'GameFooter.php'; ?>
