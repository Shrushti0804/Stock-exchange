<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
    
	// Database connection
	$conn = new mysqli('localhost','Kenil','dolat','kenil');
    echo "hdsg";
	if($conn->connect_error){
        echo "connect";
		echo "$conn->connect_error";
		 die("Connection Failed : ". $conn->connect_error);
	} else {
        echo"success";
		$stmt = $conn->prepare("insert into jhewfbv(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>