<?php
 session_start();
 require_once 'LoginManager.php';
 $loginMng = new LoginManager(); 
 $loginMng->login($_POST['mail']);
?>






