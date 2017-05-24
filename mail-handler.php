<?php 
	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to='alexkarydis@gmail.com';
	$subject='Form Submission';
	$body= "Name: ".$name. "\n". "Wrote the following: "."\n\n".$message;
	$headers="From: " .$email;

	if(mail($to, $subject, $body, $headers)){
		echo "<h1>Sent successfuly! Thank you"." ".$name.", We will contact you shortly!</h1>";
	}else{
		echo "Something went wrong!";
	}
}
 ?>