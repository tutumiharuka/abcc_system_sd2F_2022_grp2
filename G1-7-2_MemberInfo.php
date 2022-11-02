<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div>
  <div>
    <div>
      会員情報<br>
      プロフィール
    </div>
    <form>
      <div>
        <div>
          <label>おなまえ</label>
          <input type="text">
        </div>
        <div>
          <label>生年月日</label>
          <input type="text" value="2022年12月31日">
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
        <button type="submit">変更する</button>
      </div>
    </form>
  </div>
</div>

<?php include_once 'GameFooter.php'; ?>
