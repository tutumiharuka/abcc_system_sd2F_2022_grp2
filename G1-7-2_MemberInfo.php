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
        <h2>プロフィール<h2>
      </div>
<!-- カードの内容 -->
      <div class="card-body">
        <div>
          <label>おなまえ</label>
          <input type="text">
        </div>

        <div>
          <label>生年月日</label>
          <input type="text" >
        </div>

        <div>
          <label>メールアドレス</label>
          <input type="text">
        </div>

        <div>
          <label>パスワード</label>
          <input type="text">
        </div>

        <div>
          <label>電話番号</label>
          <input type="text">
        </div>
        
        <div>
          <button type="submit">変更する</button>
        </div>
      </div>
      </div>
  </div>
   

    <form>
      

    </form>
  </div>

<?php include_once 'GameFooter.php'; ?>
