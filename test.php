public function UpdateNewMember($name,$mail,$phone,$birth){

$pdo = $this->dbConnect();

$sql = "UPDATE members SET name = $_POST['name'] ,mail=$_POST['mail'],phone_number= $_POST['phone'],date_of_birth= $_POST['birth']

WHERE member_id = ? ";

$ps = $pdo->prepare($sql);

$ps->bindValue(1, $name,  PDO::PARAM_STR);

$ps->bindValue(2, $mail,  PDO::PARAM_STR);

$ps->bindValue(3, $phone, PDO::PARAM_STR);

$ps->bindValue(4, $birth, PDO::PARAM_STR);

$ps->bindValue(5, $member_id, PDO::PARAM_STR);

$ps->execute();

}