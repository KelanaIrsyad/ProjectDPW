<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	$con = new mysqli("localhost", "root", "", "registrasiweb");
	if ($con->connect_error) {
		die("Gagal : ".$con->connet_error);
	} else{
		$stmt = $con->prepare("SELECT * FROM register WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if ($data['password'] === $password) {
				Header("Location: indexbaru.html");
			} else{
				echo "Email or password";
			}
		} else {
			echo "Email or password";
		}
	}
?>