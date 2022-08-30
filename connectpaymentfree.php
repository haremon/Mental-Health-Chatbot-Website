<?php
	$comName = $_POST['comName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','nlp');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into paymentt(comName, email, password, address, city, gender) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $comName, $email, $password, $address, $city, $gender);
		$execval = $stmt->execute();
		echo $execval;


		$stmt->close();
		$conn->close();

	}
  echo file_get_contents("loading2.html");
?>
