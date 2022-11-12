<?php
class DBManager{
    //DBに接続
    private function dbConnect(){
        // 本番
        $pdo = new PDO('mysql:host=localhost;dbname=gamedb;charset=utf8','webuser','abccsd2');
        // LolipopのDBを使うabccsd2
        // $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418471-gamedb;charset=utf8','LAA1418471','password');
        return $pdo;
    }


 /*　新規登録 */
//  重複メールの確認
    public function isSameEmail($mail){
        $pdo = $this->dbConnect();
        $sql = "SELECT mail FROM members WHERE mail = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $mail,  PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        if(count($results)!=0){
            return true;
        }else{
            return false;
        }
    }

//  新会員のデータを入れる
    public function insertNewMember($name,$mail,$phone,$birth,$password){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO members(name,mail,phone_number,date_of_birth,password) VALUES (?,?,?,?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $name,  PDO::PARAM_STR);
        $ps->bindValue(2, $mail,  PDO::PARAM_STR);
        $ps->bindValue(3, $phone, PDO::PARAM_STR);
        $ps->bindValue(4, $birth, PDO::PARAM_STR);
        $ps->bindValue(5, password_hash($password,PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps->execute();
    }

/*商品リストやゲーム情報を取得する */
// TOPページのcarouselゲームを表示（固定）
    public function getBigImgById($shohin_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT image_big FROM shohins WHERE shohin_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }

// ジャンル
    public function getGameListByGenre($genre_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT shohin_id,shohin_name,price,image_small FROM shohins WHERE genre_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$genre_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }
// ランキング
    public function getRankingList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT r.ranking_id,r.shohin_id,s.shohin_name,s.price,s.image_small FROM ranking r INNER JOIN shohins s ON r.shohin_id = s.shohin_id";
        $results = $pdo->query($sql);
        return $results;
    }
// 最新作
    public function getNewList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT shohin_id,shohin_name,price,image_small FROM shohins ORDER BY haishin_date DESC LIMIT 20";
        $results = $pdo->query($sql);
        return $results;
    }
// 無料
    public function getFreeList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT shohin_id,shohin_name,price,image_small FROM shohins WHERE price=0";
        $results = $pdo->query($sql);
        return $results;
    }
// 詳細ページ必要情報を得る
    public function getGameById($shohin_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM shohins WHERE shohin_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }

// ジャンル
    public function getGenreList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM genres";
        $list = $pdo->query($sql);
        return $list;
    }

    public function getJpnGenreName($genre_id){
        $genreList = array(
            "ACT"=>"アクション",
            "ADV"=>"アドベンチャー",
            "FIG"=>"格闘",
            "FPS"=>"シューティング",
            "MUS"=>"音楽ゲーム",
            "PAR"=>"パーティ",
            "PZL"=>"パズル",
            "RCG"=>"レース",
            "RPG"=>"ロールプレイング",
            "SPO"=>"スポーツ",
            "TBL"=>"テーブルゲーム");
        return $genreList[$genre_id];
    }
    
}
?>