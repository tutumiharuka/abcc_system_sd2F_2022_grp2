<?php
class DBManager{

/* * *　* * *　* * *　* * *　データベース　接続　* * *　* * *　* * *　* * */
    private function dbConnect(){
        // localhostでテスト用
        $pdo = new PDO('mysql:host=localhost;dbname=gamedb;charset=utf8','webuser','abccsd2');
        // LolipopのDBを使うabccsd2
        // $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418471-gamedb;charset=utf8','LAA1418471','password');
        return $pdo;
    }

/* * *　* * *　* * *　* * *　会員登録　操作　* * *　* * *　* * *　* * */
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

    //  会員情報表示
    public function getMemberInfo($member_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT  * FROM members WHERE member_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $member_id, PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }

/* * *　* * *　* * *　* * *　ゲームリスト　表示　* * *　* * *　* * *　* * */
    // TOPページ　表示
    public function getBigImgById($shohin_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT image_big FROM shohins WHERE shohin_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }

    //ゲーム検索機能
    public function getGameListBySearch($keyword){
        $pdo = $this->dbConnect();
        $sql="SELECT shohin_id,image_small,shohin_name,price FROM shohins WHERE shohin_name LIKE ?";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,"%".$keyword."%",PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }

    // ジャンルリストゲット
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
    // ジャンルリスト
    public function getGenreList(){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM genres";
        $list = $pdo->query($sql);
        return $list;
    }
    //ジャンル日本語タイトル
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

 
/* * *　* * *　* * *　* * *　カート　操作　* * *　* * *　* * *　* * */
// ※　SELECT文に　is_purchased = '0'の意味は、まだ購入していない状態を示す
// ※　SELECT文に　is_purchased = '1'の意味は、もう購入した状態を示す

    //カートリストを表示する
    public function getCartList($member_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT c.cart_id,c.member_id,c.shohin_id,s.shohin_name,s.price,s.image_small 
                FROM carts c INNER JOIN shohins s ON c.shohin_id = s.shohin_id 
                WHERE member_id = ? AND is_purchased = '0'";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }

    //カートに入れているか判断
    public function isInCart($member_id,$shohin_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT member_id,shohin_id FROM carts WHERE member_id = ? AND shohin_id = ? AND is_purchased = '0'";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->bindValue(2,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        if(count($results)!=0){
            return true;
        }else{
            return false;
        }
    }
    //カートにゲームを入れる
    public function insertNewCart($member_id,$shohin_id){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO carts(member_id,shohin_id,is_purchased) VALUES (?,?,'0')";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->bindValue(2,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
    }  

    //カートのゲームを削除
    public function deleteFromCart($member_id,$shohin_id){
        $pdo = $this->dbConnect();
        $sql = "DELETE FROM carts WHERE member_id = ? AND shohin_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->bindValue(2,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
    }  
    //カートIDでカートのゲームを削除
    public function deleteFromCartById($cartid){
        $pdo = $this->dbConnect();
        $sql = "DELETE FROM carts WHERE cart_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$cartid,PDO::PARAM_STR);
        $ps->execute();
    }  

    //カートの合計金額
    public function getCartSum($member_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT SUM(s.price) AS sum
                FROM carts c INNER JOIN shohins s ON c.shohin_id = s.shohin_id 
                WHERE member_id = ? AND is_purchased = '0'";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        foreach($results as $row) $sum = $row['sum'];
        return $sum;
    }

    //購入した動き
    public function updateCartAndHistory($member_id){
        $pdo = $this->dbConnect();
        $sql = "UPDATE carts SET is_purchased = '1' 
                WHERE member_id = $member_id AND is_purchased = '0'";
        $pdo->query($sql);
    }

    /* * *　* * *　* * *　* * *　購入履歴　操作　* * *　* * *　* * *　* * */
    
    //購入履歴にゲームを入れる
    public function insertNewHistory($member_id,$shohin_id){
        $pdo = $this->dbConnect();
        $today = date("Y-m-d");
        $sql = "INSERT INTO histories(member_id,shohin_id,buying_date) VALUES (?,?, $today)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->bindValue(2,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
    }  


// -- 複数レコード一括INSERT
// INSERT INTO KEY_VALUE
//   (KEY_NO, STRING_VALUE, NUMBER_VALUE)
// VALUES 
//   (1, 'VALUE1', 100),
//   (2, 'VALUE2', 200),
//   (3, 'VALUE3', 300),
//   (4, 'VALUE4', 400),
//   (5, 'VALUE5', 500),
//   (6, 'VALUE6', 600),
//   (7, 'VALUE7', 700),
//   (8, 'VALUE8', 800),
//   (9, 'VALUE9', 900),
//   (10, 'VALUE10', 1000);


    //購入履歴リストを表示する
    public function getBuyHistroyList($member_id){
        $pdo = $this->dbConnect();
        // $sql = "SELECT f.favorite_id,f.member_id,c.shohin_id,s.shohin_name,s.price,s.image_small 
        //         FROM favorites f INNER JOIN shohins s ON c.shohin_id = s.shohin_id 
        //         WHERE member_id = ?";
        // $ps = $pdo->prepare($sql);
        // $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        // $ps->execute();
        // $results = $ps->fetchAll();
        // return $results;
    }







/* * *　* * *　* * *　* * *　お気に入り　操作　* * *　* * *　* * *　* * */

    //お気に入りリストを表示する
     public function getFavoriteList($member_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT f.favorite_id,f.member_id,c.shohin_id,s.shohin_name,s.price,s.image_small 
                FROM favorites f INNER JOIN shohins s ON c.shohin_id = s.shohin_id 
                WHERE member_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }
    
  //お気に入りに入れているか確認する
    public function isInFavorite($member_id,$shohin_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT member_id,shohin_id FROM favorites WHERE member_id = ? AND shohin_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->bindValue(2,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        if(count($results)!=0){
            return true;
        }else{
            return false;
        }
    }
    //お気に入りにゲームを入れる
    public function insertNewFavorite($member_id,$shohin_id){
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO favorites(member_id,shohin_id) VALUES (?,?)";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->bindValue(2,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
    }  

    //お気に入りからゲームを削除
    public function deleteFromFavorite($member_id,$shohin_id){
        $pdo = $this->dbConnect();
        $sql = "DELETE FROM favorites WHERE member_id = ? AND shohin_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$member_id,PDO::PARAM_STR);
        $ps->bindValue(2,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
    }  






}
?>
