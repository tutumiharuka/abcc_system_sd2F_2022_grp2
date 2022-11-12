<?php
    session_start();
    if(isset($_SESSION['member'])){
        session_destroy();
        header('Location: G1-1_Top.php');
    }else{
        header('Location: G1-1_Top.php');
    }
?>