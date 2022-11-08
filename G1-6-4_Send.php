<?php include_once 'GameHeader.php'; ?>
<div class="row">
	<div class="col-md-12 bg-info text-dark text-left">
        <h1 class="p-3 ms-5" id="message">転送が始まります...</h1>
	</div>
</div>


<div  class="contianer text-center">	
	<div class="img-center mt-5 rounded">
		<img class="rounded" src="img/ACT/ACT_s01.jpg">
    </div>
	<!-- ↑ここで商品画像を表示 -->
	<h2 class="m-4 text-center">スプラトゥーン３</h2>
	
	<!-- 転送進度を示すProgress bar -->
	<div class="row d-flex justify-content-center">
		<div class="col-md-6 m-4">
			<div class="progress">
				<div class="progress-bar progress-bar-striped progress-bar-animated" style="min-width: 20px;" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>	
		</div>
	</div>

	<a class="btn btn-primary btn-lg mt-5 mb-4 rounded text-dark rounded-pill" href="G1-1_Top.php">TOPに戻る</a>
</div>



<!-- JavaScript -->
<script>
	let i = 0;
	let bar = document.querySelector(".progress-bar");
	let message = document.getElementById("message");
	function makeProgress(){
		if(i < 100){
			i++;
			bar.style.width = i + "%";
			// bar.innerText = i + "%";
			if(i>=10){
				message.textContent = "転送中..."
			}
			if(i>=99){
				message.textContent = "転送完了"
				bar.classList.remove("progress-bar-striped");

			}
			
		}
		setTimeout("makeProgress()", 50);
	}
	makeProgress();
</script>



<?php include_once 'GameFooter.php'; ?>
