<?php
class DBManager{
    //DBに接続
    private function dbConnect(){
        // 本番
        $pdo = new PDO('mysql:host=localhost;dbname=gamedb;charset=utf8','webuser','abccsd2');
        // テスト用(1~4game)
        // $pdo = new PDO('mysql:host=localhost;dbname=gametest;charset=utf8','webuser','abccsd2');
        // LolipopのDBを使うabccsd2
        // $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418471-gamedb;charset=utf8','LAA1418471','password');
        return $pdo;
    }

 /*　新規登録 */
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


 /*　ログイン */
    public function getUserPassByMail($mail){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM members WHERE mail = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$mail,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }


/*商品リストやゲーム情報を取得する */
    // G1-5-1_ShohinList.phpにゲームリストを入れます
    public function getGameListByGenre($genre_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT shohin_id,shohin_name,price,image_small FROM shohins WHERE genre_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$genre_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
    }


    public function getGameById($shohin_id){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM shohins WHERE shohin_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$shohin_id,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        return $results;
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

    // //ログイン
    // public function getUserPassByMail($mail){
    //     $pdo = $this->dbConnect();
    //     $sql = "SELECT * FROM user_mst WHERE user_mail = ?";
    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1,$mail,PDO::PARAM_STR);
    //     $ps->execute();
    //     $results = $ps->fetchAll();
    //     return $results;
    // }

        // //5-1ex 新規登録
    // public function insertNewUser($mail,$name,$password,$address){
    //     $pdo = $this->dbConnect();
    //     $sql = "INSERT INTO user_mst ( user_mail, user_name, user_password, user_address) VALUES (?,?,?,?)";
    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1, $mail, PDO::PARAM_STR);
    //     $ps->bindValue(2, $name, PDO::PARAM_STR);
    //     $ps->bindValue(3, password_hash($password,PASSWORD_DEFAULT), PDO::PARAM_STR);
    //     $ps->bindValue(4, $address, PDO::PARAM_STR);
    //     $ps->execute();
    // }
    
}
?>