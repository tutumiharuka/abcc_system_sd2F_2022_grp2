<?php session_start(); ?>
<?php 
	require_once "DBManager.php";
	$dbmng = new DBManager();
	//転送される番号配列リストを取得
	if(isset($_SESSION['send'])){
		$sendlist = unserialize($_SESSION['send']);
	}
?>
<?php include_once 'GameHeader.php'; ?>
<style>
	 @font-face {
    font-family: 'PixelMplus';
    src: url('font/PixelMplus12-Bold.ttf') format('TrueType');
    }
  .game-text{
      font-family: 'PixelMplus';
  }
	.sendimg{
		height: 270px;
	}

	.modoru{
		width: 40%;	
	}

</style>
<div class="row">
	<div class="col-md-12 bg-info text-dark text-left">
        <h1 class="p-3 ms-5 game-text" id="message">転送が始まります...</h1>
	</div>
</div>
<div class="contianer text-center">	

	<div class="row  d-flex justify-content-center">
		<!-- 一つゲームとき -->
		<?php if(isset($_GET['send_game'])){
			// 
			$results = $dbmng->getGameInfoById($_GET['send_game']);
			foreach($results as $row){
				$name = $row['shohin_name'];
				$img = $row['image_small'];
			}
			echo '<div class="col-md-3">
			<div class="img-center mt-5 rounded"><img class="rounded sendimg" src="'.$img.'"></div>
			<h2 class="m-4 text-center">'.$name.'</h2>
			</div>';
		}else{
			 
			for ($i=0; $i <count($sendlist); $i++){  
				$results = $dbmng->getGameInfoById($sendlist[$i]);
				foreach($results as $row){
					$name = $row['shohin_name'];
					$img = $row['image_small'];
				}
				echo '<div class="col-md-3">
					<div class="img-center mt-5 rounded"><img class="rounded sendimg" src="'.$img.'"></div>
					<h2 class="m-4 text-center">'.$name.'</h2>
				</div>';
			}
		}?>
	</div>
		
		
		
		
		<!-- 転送進度を示すProgress bar -->
		<div class="row d-flex justify-content-center">
			<div class="col-6 m-4">
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="min-width: 20px;" aria-valuemin="0" aria-valuemax="100">
					</div>
				</div>	
			</div>
		</div>


	<div class="d-flex justify-content-center">
		<div class="row">
			<!-- もし、購入履歴からだけ、表示します -->
		<?php if(isset($_GET['send_game'])): ?>
			<div class="col-12 col-md-6">
				<a class="btn btn-outline-primary btn-lg mt-5 mb-4 rounded text-dark rounded-pill text-nowrap" href="G1-8_BuyHistory.php">購入履歴に戻る</a>
			</div>
		<?php endif; ?>	
			<div class="col-12 col-md-6">
				<a class="btn btn-primary btn-lg mt-5 mb-4 rounded text-dark rounded-pill text-nowrap" href="G1-1_Top.php">TOPに戻る</a>
			</div>
		</div>
	</div>
		
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
