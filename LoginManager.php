<?php
class LoginManager{
    //DBに接続
    private function dbConnect(){
        $pdo = new PDO('mysql:host=localhost;dbname=gamedb;charset=utf8','webuser','abccsd2');
        return $pdo;
    }

    // public function getMemberIdByMail($mail){
    //     $pdo = $this->dbConnect();
    //     $sql = "SELECT * FROM members WHERE mail = ?";
    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1,$mail,PDO::PARAM_STR);
    //     $ps->execute();
    //     $results = $ps->fetchAll();
    // }


    /*　ログイン画面でログインする */
    public function login($mail){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM members WHERE mail = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$mail,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        
        if(count($results)==0){
            //存在しない場合
            $_SESSION['err'] = "メールアドレス、パスワードの入力に誤りがあるか登録されていません。再度ログインしてください。";
            header('Location: G1-2-1_Login.php');
        }

        foreach($results as $row){
            //パスワード認証できたら、member情報をセッションに入れる
            if(password_verify($_POST['pass'],$row['password']) == true){
                $_SESSION['member']=[
                   'member_id'=>$row['member_id'],
                   'name'=>$row['name'],
                   'mail'=>$row['mail'],
                   'phone_number'=>$row['phone_number'],
                   'date_of_birth'=>$row['date_of_birth'],
                   'password'=>$row['password'] 
                   //ここで、パスワードがstringで保存される、修正必要かも
                ];
               // 認証成功
                if(isset($_SESSION['member'])){
                   header('Location: G1-2-2_LoginEnd.php');
                }
            }else{
                //認証失敗
                $_SESSION['err'] = "メールアドレス、パスワードの入力に誤りがあるか登録されていません。再度ログインしてください。";
                header('Location: G1-2-1_Login.php');
            }
        }
    }

       /*　新規登録画面の直後ログインする */
       public function loginAfterNewMember($mail){
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM members WHERE mail = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1,$mail,PDO::PARAM_STR);
        $ps->execute();
        $results = $ps->fetchAll();
        foreach($results as $row){
            //パスワード認証できたら、member情報をセッションに入れる
            if(password_verify($_POST['pass'],$row['password']) == true){
                $_SESSION['member']=[
                   'member_id'=>$row['member_id'],
                   'name'=>$row['name'],
                   'mail'=>$row['mail'],
                   'phone_number'=>$row['phone_number'],
                   'date_of_birth'=>$row['date_of_birth'],
                   'password'=>$row['password'] 
                   //ここで、パスワードがstringで保存される、修正必要かも
                ];
            }
        }
    }

    //ログインしてないと、ログイン画面に転送
    public function isLogin(){
        if(isset($_SESSION['member']) == false){
            header('Location: G1-2-1_Login.php');
        }

    }






}
?>
