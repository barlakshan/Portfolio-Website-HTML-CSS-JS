<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


//Database connection
$conn = new mysqli('localhost','root','','hire_form');
if($conn->connect_error){
	die('Connection Failed :' .$conn->connect_error);
}
else{
	$query = "INSERT INTO contact_form(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
	$result = mysqli_query($conn,$query);

	if($result){
		echo "Send message Successfully...";
		
	}

}
 ?>
