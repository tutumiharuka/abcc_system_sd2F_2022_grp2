<?php
 session_start();
 //DB接続
 require_once 'DBManager.php';
 $dbmng = new DBManager();
 $results = $dbmng->getUserPassByMail($_POST['mail']);

 //　TODO　Login関するクラスを作り、　getUserNameのように皆が使いやすいようにする

 foreach($results as $row){
     //パスワード認証できたら、member情報をセッションに入れる
     if(password_verify($_POST['pass'],$row['password']) == true){
         $_SESSION['member']=[
            'member_id'=>$row['member_id'],
            'name'=>$row['name'],
            'mail'=>$row['mail'],
            'phone_number'=>$row['phone_number'],
            'date_of_birth'=>$row['date_of_birth'],
            'password'=>$_POST['pass'] 
            //ここで、パスワードがstringで保存される、修正必要かも
         ];
        // 認証成功
         if(isset($_SESSION['member'])){
            header('Location: G1-2-2_LoginEnd.php');
         }
     }else{
         //認証失敗
         $_SESSION['err'] = "IDが存在しないやパスワードが違うのか、ご確認ください";
         header('Location: G1-2-1_Login.php');
     }
 }

 // データベース
// --- ジャンルエンティティを追加する
// --- 重複Mailを防ぐために、会員エンティティにUNIQUE制約を設定する
// --- カート　エンティティに、無駄にIDを増やさないために、カートIDという主キーを消し、会員IDを主キーとして設定する
// ---　お気に入り　エンティティに、無駄IDを増やさないために、お気に入りIDという主キーを消し、会員IDを主キーとして設定する
//  実務的には、外部キー設定しない
?>






