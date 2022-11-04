<?php include_once 'GameHeader.php'; ?>
<?php include_once 'GameNavbar.php'; ?>

<style>
    .kuhaku{
        height: 80px;
    }
</style>

<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $pass = $_POST['pass'];

    echo $name.$mail.$phone.$year.$pass;
?>

<?php include_once 'GameFooter.php'; ?>
