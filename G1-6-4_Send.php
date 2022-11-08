<?php include_once 'GameHeader.php'; ?>
<style>
	/* The animation code */
	@keyframes load {
	0%   {width: 0%;}
	/* 25%  {background-color:yellow; left:200px; top:0px;}
	50%  {background-color:blue; left:200px; top:200px;}
	75%  {background-color:green; left:0px; top:200px;} */
	100% {width: 100%;}
	}

	/* The element to apply the animation to */
	.loading {
		/* width: 100px; */
		/* height: 100px; */
		/* position: relative; */
		/* background-color: red; */
		animation-name: load;
		animation-duration: 4s;
		animation-iteration-count: 1;
	}

</style>
<div class="row">
	<div class="col-md-12 bg-info text-dark text-left">
        <h1 class="p-3">転送が始まります...</h1>
	</div>
</div>
<div  class="text-center">
	
	<!-- <div class="progress">
		<div class="progress-bar progress-bar-striped progress-bar-animated loading" ></div>
	</div> -->


<div class="row">
	<div class="col m-4">
		<!-- Progress bar HTML -->
		<div class="progress">
			<div class="progress-bar progress-bar-striped progress-bar-animated" style="min-width: 20px;"></div>
		</div>	
	</div>
</div>
	
	
	<div class="img-center mt-5 rounded">
		<img class="rounded" src="img/ACT/ACT_s01.jpg">
    </div>
	<h2 class="m-4 text-center">スプラトゥーン３</h2>
	<!-- ↑ここで商品画像を表示 -->
	<a class="btn btn-primary mb-4 rounded text-dark rounded-pill" href="G1-1_Top.php"><h3>TOPに戻る</h3></a>
</div>


<!-- JavaScript -->
<script>
        var i = 0;
      	var bar = document.querySelector(".progress-bar");
        function makeProgress(){
            if(i < 100){
                i++;
              	bar.style.width = i + "%";
              	// bar.innerText = i + "%";
				
            }

            // Wait for sometime before running this script again
            setTimeout("makeProgress()", 50);
        }
        makeProgress();
    </script>



<?php include_once 'GameFooter.php'; ?>
