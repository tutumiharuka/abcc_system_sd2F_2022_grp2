<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<!-- カート -->
<div>
    <h1><p align="left">カート</p></h1>
    <h5>(合計3点)</h5>
</div>

<!-- 商品 -->
<div >
    <td><input type="checkbox"></td>
    <img src="img/FPS/FPS_s01.jpg" class="card-img-top rounded">
    <div class="card-text">ゲーム名</div>
    <h5 class="card-title">税込:1000円</h5>
    <a href="#">X</a>
</div>


<div >
    <td><input type="checkbox"></td>
    <img src="img/FPS/FPS_s01.jpg" class="card-img-top rounded">
    <div class="card-text">ゲーム名</div>
    <h5 class="card-title">税込:1000円</h5>
    <a href="#">X</a>
</div>

<!-- 選択 -->
    <th>
        <table width="100%" border="2"></table>
        <input id="allCheckBox" type="checkbox" value="全選択"/>全選択
        <td colspan="5" align="right">
            選択済み:<input type="text" value="0" >点
            合計:<input type="text" value="0.00" >円
            <a href="./G1-6-2_BuyCheck">レジに進む</a>
        </td>

        
    </th>
</div>

<?php include_once 'GameFooter.php'; ?>
