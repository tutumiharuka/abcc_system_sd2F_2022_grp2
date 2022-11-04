<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<!--　頑張ってくれましたありがとう！　ちょっと書き換えますね　by　シン -->

<style> 
  .kuhaku{
    height:80px;
  }

</style>
<div class="container mt-5">
    <div class="row kuhaku">
        
    </div>


    <div class="row text-center">
      <h2>会員情報<h2>
    </div>

    <div class="d-flex justify-content-center mt-2"><!-- 真ん中に寄せる -->
    <!-- カード -->
      <div class="card ms-3" style="width: 60rem;">
        <div class="card-header">
          <h2 class="ms-4 mt-2 fw-bold">プロフィール</h2>
        </div>
        <ul class="list-group list-group-flush">

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>おなまえ</div>
              <div class="col-md-6">ゲームオタク　太郎</div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>生年月日</div>
              <div class="col-md-6">2022年12月31日</div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>メールアドレス</div>
              <div class="col-md-6">taro@gameotaku.com</div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>おなまえ</div>
              <div class="col-md-6">ゲームオタク　太郎</div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>パスワード</div>
              <div class="col-md-6">●●●●●●●●●●</div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="row h5">
              <div class="col-md-3 offset-md-3 text-start">
                <i class="bi bi-diamond-fill h6 me-3"></i>電話番号</div>
              <div class="col-md-6">070 - 0000 - 0000</div>
            </div>
          </li>
        </ul>
      </div><!-- .card -->
      
    </div>
    <div class="row mt-4">
      <div class="col d-flex justify-content-center">
        <a class="btn btn-outline-primary btn-lg" href="G1-7-3_MemberInfoChange.php">変更する</a>
      </div>
    </div>
</div>





  <!-- <div class="container mt-5">
    <div class="row text-center">
      <h2>会員情報<h2>
    </div>
    <div class="card">
      <div class="card-header">
        <div class="container-fluid alert-danger">
        <h2>プロフィール<h2>
      </div>
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
      <a class="btn btn-outline-primary btn-lg" href="G1-7-3_MemberInfoChange.php">変更する</a>
    </div>
  </div>
</div>
</div>
</div> -->

<?php include_once 'GameFooter.php'; ?>
