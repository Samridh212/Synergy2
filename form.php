
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $problem = $_POST['problem'];
    $date = $_POST['date'];
    $time = $_POST['time'];
	$gender = $_POST['gender']; 

		if(!empty($fname) && !empty($email) && !empty($phone) && !empty($age) &&!empty($gender) && !empty($problem) && !empty($time) && !empty($date)&&!empty($lname)) {
		
			include('connection.php');
			$registered = mysqli_query($dbc, "INSERT INTO SynergyDataBase(FirstName,LastName,Age,Gender,email,PhoneNumber,Date,Time,Problem) VALUES('$fname','$lname','$email','$phone','$age','$problem','$date','$time','$gender')");

			echo "Your appointment is succesfully registered (Our Time is not confirm so we may call you to confirm time)";

			
		}else{
		
			echo "ERROR: you left some values in blank!";
		
		}


}else{

	echo "<strong>Please complete the form...</strong>";

}

?>
