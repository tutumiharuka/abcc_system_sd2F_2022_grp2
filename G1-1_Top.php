<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<style>
        .carousel-card{
        height: auto;
        }

        .carousel-img{
        height: 380px;
        }
        .card{
        width: 18rem;
        height: auto;
        }

        .all-game{
        height: 30px;
        }

        .carousel{
        visibility: hidden;
        }

        .carousel.slick-initialized{
        visibility: visible;
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
                <img src="'.$row['image_big'].'"class="carousel-img rounded">
                </a>
                </div>';
        }
}
?>
</div>

<div class="container-fluid">
        <div class="row ms-5">
                <div class="col-md-2 h4"><a href="G1-5-1_ShohinList.php?genre_id=new">最新作</a></div>
                <div class="col-md-2 offset-md-8 text-end"><a href="G1-5-1_ShohinList.php?genre_id=new"><img src="img/all_game.png" alt="すべて"></a></div>
        </div>
        <div class="row ms-5 mt-2 game_list">
                <?php
                $results=$dbmng->getNewList();
                foreach($results as $row){
                        if( $row['price'] == 0){$price = '無料';}else{$price=$row['price'].'円';}
                        echo '<div class="card border-0 px-1"><a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'"><img src="'.$row['image_small'].'" class="card-img-top rounded"><div class="card-text">'.$row['shohin_name'].'</div><h5 class="card-title">'.$price.'</h5></a></div>';
                }
                ?>
        </div>

        <div class="row ms-5">
                <div class="col-md-2 h4">
                        <a href="G1-5-1_ShohinList.php?genre_id=ranking">ランキング</a></div>
                <div class="col-md-2 offset-md-8 text-end">
                        <a href="G1-5-1_ShohinList.php?genre_id=ranking"><img src="img/all_game.png" alt="すべて"></a></div>
        </div>
        <div class="row ms-5 mt-2 game_list">
                <?php
                $results=$dbmng->getRankingList();
                foreach($results as $row){
                        if( $row['price'] == 0){$price = '無料';}else{$price=$row['price'].'円';}
                        echo '<div class="card border-0 px-1"><a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'"><img src="'.$row['image_small'].'" class="card-img-top rounded"><div class="card-text">'.$row['shohin_name'].'</div><h5 class="card-title">'.$price.'</h5></a></div>';
                }
                ?>
        </div>

        <div class="row ms-5">
                <div class="col-md-2 h4">
                        <a href="G1-5-1_ShohinList.php?genre_id=free">無料</a></div>
                <div class="col-md-2 offset-md-8 text-end">
                        <a href="G1-5-1_ShohinList.php?genre_id=free"><img src="img/all_game.png" alt="すべて"></a></div>
        </div>
        <div class="row ms-5 mt-2 game_list">
                <?php
                $results=$dbmng->getFreeList();
                foreach($results as $row){
                         if( $row['price'] == 0){$price = '無料';}else{$price=$row['price'].'円';}
                        echo '<div class="card border-0 px-1"><a href="G1-5-2_ShohinDetails.php?shohin_id='.$row['shohin_id'].'"><img src="'.$row['image_small'].'" class="card-img-top rounded"><div class="card-text">'.$row['shohin_name'].'</div><h5 class="card-title">'.$price.'</h5></a></div>';
                }
                ?>
        </div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- <script type="text/javascript" src="js/carousel.js"></script> -->
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
        $('.game_list').slick({
        //   dots: true,
                // infinite: true,
                // adaptiveHeight:true,
                // arrows: true,
                // speed: 300,
                rows: 1,
                slidesPerRow: 20,
                slidesToShow: 1,
                // centerMode: false,
                variableWidth: true
        });
        });
</script>

<?php include_once 'GameFooter.php'; ?>
