<?
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordrepeat = $_POST['password-repeat'];
//Database connect
$conn = new mysqli('localhost','root',"",'test');
if($conn-> connet_error){
	die('Connect fail : '.$conn->connet_error);
}
else{
	$stmt = $con-> prepare("insert into sign(username,email,password,password-repeat)
	value = (?,?,?,?)");
	$stmt->bind_param("ssss",username,email,password,passwordrepeat);
	$stmt->execute();
	echo "thanh cong";
	$stmt->close();
	$con->close();
}
?>