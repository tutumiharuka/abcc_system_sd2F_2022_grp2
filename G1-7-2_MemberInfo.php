<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div>
  <div>
    <div>
      会員情報
    </div>
    <form>
      <div>
        <div>
          <label>名前</label>
          <input type="text">
        </div>
        <div>
          <label>ふりがな</label>
          <input type="text">
        </div>
        <div>
          <label>生年月日</label>
          <input type="date" value="2017-10-04">
        </div>
        <div>
          <label>性別</label>
          <div>
            <label>
              <input type="radio" name="optionsRadios">
              男
            </label>
            <label>
              <input type="radio" name="optionsRadios">
              女
            </label>
          </div>
        </div>
        <button type="submit">Sign In</button>
      </div>
    </form>
  </div>
</div>

<?php include_once 'GameFooter.php'; ?>
