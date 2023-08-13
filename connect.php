<?php
    $Name = $_POST['id'];
	$Name = $_POST['name'];
	$gender = $_POST['number'];
	$email = $_POST['email'];
	$password = $_POST['date'];

	// Database connection
	$conn = new mysqli('localhost','root','','contact_db1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact_form1(name, number, email, date) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $id, $name, $date, $email, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>