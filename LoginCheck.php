<?php
 session_start();
 require_once 'LoginManager.php';
 $login = new LoginManager();
 $results = $login->login($_POST['mail']);
// echo "ログイン";
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
?>






