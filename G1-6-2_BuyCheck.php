<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>


<!-- ここで　PHP　と　BootStarp　を直接書きます -->
<div class="container">
    <div class="row">
		<div class="col-md-12 text-dark text-left mt-3">
            <h1>ご注文内容の確認</h1>
		</div>
	</div>
    <div class="row">
        <div class="col-md-8">
            <p>〇点</p>
            <!-- ↑ここで　何点かを表示（必要がない場合は消しても良い、どっちか分からなかったから一応作ってる） -->
            <div class="row border-top border-dark">
                <div class="col-md-5 mt-5">
                    <img class="rounded" src="img/ACT/ACT_s01.jpg">
                    <!-- ↑ここで　商品の画像を表示 -->
                </div>
                <div class="col-md-7 mt-5">
                    <h3>スプラトゥーン３</h3>
                    <!-- ↑ここで　商品名を表示 -->
                    <h3>〇〇〇〇〇円</h3>
                    <!-- ↑ここで　金額を表示 -->
                </div>
            </div>
            <img class="rounded mt-3 mb-3" src="img/CELO.jpg">
            <p>本製品をプレイするには、ゲーム内に表示されるサービス利用規約に同意する必要があります。<br>
                詳しくはhttps://nanimoiminaiyo.co.jp/cs/aso/eula/をご確認ください。</p>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <h3>合計</h3><p>税込</p>
                </div>
                <div class="col-md-6">
                    <h3>〇〇〇〇〇円</h3>
                    <!-- ↑ここで　金額を表示 -->
                </div>
                <p class="mt-3 border-top border-dark">
                    　　　　　　　　　　　　　　　　　　　　　　　　　
                    未成年者は保護者の同意を得てから購入してください。<br>
                    　　　　　　　　　　　　　　　　　　　　　　　　　
                    商品、権利の代金又は役務の対価の支払の時期及び権利の移転時期又は役務の提供時期については、「特定商取引法に基づく表示」をご参照ください。<br>
                    　　　　　　　　　　　　　　　　　　　　　　　　　
                    注文を確定するにあたっては「特定商取引法に基づく表示」や麻生アカウントの利用規約、プライバシーポリシーにご同意のうえ、注文を確定するボタンを押してください</p>
            </div>
        </div>
        <p class="border-bottom border-dark"></p>
    </div>
    <div  class="text-center">
		<button class="mb-4 G1-6-3_BuyEnd.php rounded bg-primary"><h3>　注文を確定する　</h3></button><br>
        <button class="mb-4 G1-6-1_Cart.php rounded bg-secondary"><h3>　　キャンセル　　</h3></button>
                       <!-- ↑ここ、キャンセルで戻るところが分からなかったので一応カート画面に設定 -->
    </div>
</div>
<!-- カート -->

<?php include_once 'GameFooter.php'; ?>
