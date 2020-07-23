<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$phNumber=$_POST['phNumber'];
		$email=$_POST['email'];
		$services=$_POST['services'];
		$message=$_POST['message'];

		$to='support@knoktalk.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phNumber."\n"."Email :".$email."\n"."Services :".$services."\n"."Wrote the following Message:"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			
		}
		else{
			echo "Something went wrong!";
		}
	}
?>