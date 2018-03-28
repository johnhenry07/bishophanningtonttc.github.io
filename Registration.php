<?php 

		session_start();
		if (!isset($_SESSION['x'])) {
			echo "ACCESS DENIED. PLEASE LOGIN";
			echo "<a href=index.php> CLICK TO LOGIN</a>";
			exit();//stop program
		}

//IF SESSION EXISTS
		else {
			$email = $_SESSION['x'];//get the session
			//store it in email
			echo "<h3>LOGGED IN AS: $email<br> WELCOME!</h3>";
		}

 ?>


<!DOCTYPE html>
<html>
<head>	
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<h1 class="jumbotron text-center" >Student Registration</h1>
<div class="text-center">
	<a href="" class="btn btn-outline-warning">BACK HOME</a> 
	
</div>
<br><br>



<form method="POST" class="text-center">
	<input type="email" name="email" placeholder="Enter Your email" class="btn btn-dark"> <br><br>
	<input type="email" name="repeat_email" placeholder="Repeat Your email" class="btn btn-dark" required=""> <br><br>
	<input type="password" name="password" placeholder="Enter Your password" class="btn btn-dark" required=""> <br><br>
	<input type="password" name="repeat_password" placeholder="Repeat Your password" class="btn btn-dark" required=""> <br><br>
	<input type="text" name="name" placeholder="Enter Your Name " class="btn btn-dark" required=""> <br><br>
	<input type="number" name="phone" placeholder="Enter phone no. " class="btn btn-dark" required=""> <br><br>
	<input type="file" name="photo" placeholder="Upload Your photo " class="btn btn-dark" required=""> <br><br>
	 <input type="text" name="county" placeholder="Enter Your County " class="btn btn-dark" required=""> <br><br> 
	 <input type="text" name="location" placeholder="Enter Your location " class="btn btn-dark" required=""> <br><br>
	 select Gender <br>
	 <input type="radio" name="gender" value="male"> Male 
	 <input type="radio" name="gender" value="female" class="btn btn-dark"> Female
	 <br> 
	 <input type="date" name="dob" placeholder="Enter Date of Birth " class="btn btn-dark" required=""> <br><br>
	 <input type="radio" name="nationality" placeholder="Enter Your Nationality " class="btn btn-dark" required=""> <br><br>
	 <input type="text" name="course_name" placeholder="Enter Course Name " class="btn btn-dark" required=""> <br><br>
	 <input type="radio" name="children" placeholder="Do You Have Children " class="btn btn-dark" required=""> <br><br>
	 <input type="radio" name="agreement" placeholder="Do You Agree " class="btn btn-dark" required=""> <br><br>
	 <input type="text" name="about_us" placeholder="How did you know about us " class="btn btn-dark" required=""> <br><br>
	 <input type="radio" name="ok" class="btn btn-danger">

</form>

<?php
$email = $_POST['email']; 
$repeat_email = $_POST['repeat_email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];
$county = $_POST['county'];
$location = $_POST['location'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$nationality = $_POST['nationality'];
$course_name = $_POST['course_name'];
$children = $_POST['children'];
$agreement = $_POST['agreement'];
$about_us = $_POST['about_us'];
//after receiving from the form, save them to DB


$conn = mysqli_connect("localhost","root","","bhttc");
$res = mysqli_query($conn,"INSERT INTO patients VALUES('$email','$repeat_email','$password','$repeat_password','$name','$phone','$photo','$county','$location','$gender','$dob','$nationality','$course_name','$children','$agreement','$about_us')");

if ($res==true) {
	echo "Thank you. Patient $fname Added successfully";
}
else {
	echo "Something went wrong. Try Again";
}

 ?>


</body>
</html>