<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
<div class="col-md-12 text-center mt-3 ">
<h1>ログイン</h1><br>
</div>
<div class="row m-1 mt-4">
                                <div class="col-md-6">
                          <label  for="lastname"></label>
                              <input  type="text"  class="form-control"  id="lastname" placeholder="メールアドレス">
			     
</div>
</div>
<div class="row m-1 mt-4">
<div class="col-md-6">
                       <label  for="lastname"></label>
                                    <input  type="text"  class="form-control"  id="lastname" placeholder="パスワード">			
                            
                                      </div>
</div>
<div class="d-grid gap-2">
                                                    <button class="btn btn-info" type="button"><div class="container text-black">ログイン</div></button>
                                                  </div>
</div>
</div>

<?php include_once 'GameFooter.php'; ?>
