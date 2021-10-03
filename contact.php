<?php

	if (isset($_POST['submit'])) {
		# code...
		$name = $_POST['name'];
		$subject = $_POST['message'];
		$mailFrom = $_POST['email'];
		$message = $_POST['message'];

		$mailTo = "hamza589@hamzas.ca";
		$headers = "From: ".$mailFrom;
		$txt = "You have received an email from ".$name.".\n\n".$message;

		mail($mailTo, $subject, $txt, $headers);
		header("Location: index.html");
	}

?>