<?php session_start(); ?>
<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<style>
        /* 上の画像carouselに表示 */
        .carousel{
        visibility: hidden;
        }
        .carousel-card{
        height: auto;
        }
        .carousel-card img{
        height: 300px;
        }
 
        .carousel.slick-initialized{
        visibility: visible;
        overflow: hidden;
        }
        /* 下のリスト */
        .scroll {
        white-space: nowrap;
        overflow: hidden;
        overflow-y: hidden;
        }
        .item {
                text-align: center;
                width: 185px;
                height: 240px;
                /* background-color: aqua; */
                /* border-right: 1px solid; */
                white-space: nowrap;
                display: inline-block;
        }
        .item-img{
                height: 180;
        }
</style>

<?php
require_once "DBManager.php";
$dbmng = new DBManager(); 
?>

<div class="carousel mt-3">
<?php
// carouselに表示させる商品番号
$carousels =[1,3,17,101,201,41,81];
foreach($carousels as $id){
        $results = $dbmng->getBigImgById($id);
        foreach($results as $row){
                echo '<div class="px-1 carousel-card">
                <a href="G1-5-2_ShohinDetails.php?shohin_id='.$id.'">
                <img src="'.$row['image_big'].'"class="rounded">
                </a>
                </div>';
        }
}
?>
</div>

<div class="container-fluid">
        <div class="row ms-5">
                <div class="col-md-2 h4"><a href="G1-5-1_ShohinList.php?list=new">最新作</a></div>
                <div class="col-md-2 offset-md-8 text-end"><a href="G1-5-1_ShohinList.php?list=new"><img width="100px" src="img/all_game.png" alt="すべて"></a></div>
        </div>
        <div class="scroll ms-5">
                <?php
                $results=$dbmng->getNewList();
                foreach($results as $row){
                        if( $row['price'] == 0){$price = '無料';}else{$price=number_format($row['price']).'円';}
                        echo '
                        <div class="item">
                                <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                        <img src="'.$row['image_small'].'" class="rounded item-img">
                                        <div class="text-start ms-2 text-truncate">'.$row['shohin_name'].'</div>
                                        <h5 class="text-start ms-2">'.$price.'</h5>
                                </a>
                        </div>';
                }
                ?>
        </div>

        <div class="row ms-5">
                <div class="col-md-2 h4"><a href="G1-5-1_ShohinList.php?list=ranking">ランキング</a></div>
                <div class="col-md-2 offset-md-8 text-end"><a href="G1-5-1_ShohinList.php?list=ranking"><img width="100px" src="img/all_game.png" alt="すべて"></a></div>
        </div>
        <div class="scroll ms-5">
                <?php
                $results=$dbmng->getRankingList();
                foreach($results as $row){
                        if( $row['price'] == 0){$price = '無料';}else{$price=number_format($row['price']).'円';}
                        echo '
                        <div class="item">
                                <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                        <img src="'.$row['image_small'].'" class="rounded item-img">
                                        <div class="text-start ms-2 text-truncate">'.$row['shohin_name'].'</div>
                                        <h5 class="text-start ms-2">'.$price.'</h5>
                                </a>
                        </div>';
                }
                ?>
        </div>

        <div class="row ms-5">
                <div class="col-md-2 h4"><a href="G1-5-1_ShohinList.php?list=free">無料ゲーム</a></div>
                <div class="col-md-2 offset-md-8 text-end"><a href="G1-5-1_ShohinList.php?list=free"><img width="100px" src="img/all_game.png" alt="すべて"></a></div>
        </div>
        <div class="scroll ms-5">
                <?php
                $results=$dbmng->getFreeList();
                foreach($results as $row){
                        if( $row['price'] == 0){$price = '無料';}else{$price=number_format($row['price']).'円';}
                        echo '
                        <div class="item">
                                <a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'">
                                        <img src="'.$row['image_small'].'" class="rounded item-img">
                                        <div class="text-start ms-2 text-truncate">'.$row['shohin_name'].'</div>
                                        <h5 class="text-start ms-2">'.$price.'</h5>
                                </a>
                        </div>';
                }
                ?>
        </div>

        <div class="row mt-5 mb-5 text-center">
                <div class="col">
                        <a class="btn btn-outline-primary btn-lg rounded-pill" href="G1-5-1_ShohinList.php">
                                全ジャンルのゲームをみる
                        </a>
                </div>
        </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
        $(function(){
                $('.carousel').slick({
                        adaptiveHeight:true,
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToShow: 1,
                        centerMode: true,
                        variableWidth: true
                });
        });

        // スクロールのドラッグ有効化
        jQuery.prototype.mousedragscrollable = function () {
        let target;
        $(this).each(function (i, e) {
        $(e).mousedown(function (event) {
        event.preventDefault();
        target = $(e);
        $(e).data({
                down: true,
                move: false,
                x: event.clientX,
                y: event.clientY,
                scrollleft: $(e).scrollLeft(),
                scrolltop: $(e).scrollTop(),
        });
        return false;
        });
        $(e).click(function (event) {
        if ($(e).data("move")) {
                return false;
        }
        });
        });
        $(document)
        .mousemove(function (event) {
        if ($(target).data("down")) {
                event.preventDefault();
                let move_x = $(target).data("x") - event.clientX;
                let move_y = $(target).data("y") - event.clientY;
                if (move_x !== 0 || move_y !== 0) {
                $(target).data("move", true);
                } else {
                return;
                }
                $(target).scrollLeft($(target).data("scrollleft") + move_x);
                $(target).scrollTop($(target).data("scrolltop") + move_y);
                return false;
        }
        })
        .mouseup(function (event) {
        $(target).data("down", false);
        return false;
        });
        };
        $(".scroll").mousedragscrollable();
</script>


<?php include_once 'GameFooter.php'; ?>
