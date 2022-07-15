<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="home.css" type="text/css" />
		<title>Updated Entry</title>
	</head>
	
	<body>
						<?php 
							$first = $_POST["first"];
							$last = $_POST["last"];
							$email = $_POST["email"];
							$phone = $_POST["phone"];
							$address = $_POST["address"];
							$city = $_POST["city"];
							$state = $_POST["state"];
							$zip = $_POST["zip"];
							
							if (!empty($first) && !empty($last)&& !empty($email)&& !empty($phone)&& !empty($address)&& !empty($city)&& !empty($state)&& !empty($zip)){							
								$array = array($first, $last, $email, $phone, $address, $city, $state, $zip."\n");
								$str = implode(",", $array);
								$open = fopen("lab3.txt", "a");
								$write = fwrite($open, $str);
						
								if ($write>0){
									echo "Contact updated";
								}
								else{
									echo "Contact has not been updated";
								}
							}
							else{
								echo "You must enter a value in each field.";
							}
							?>
							</br></br>
						<a href="lab3.php">Return to Directory</a>
	</body>
</html>
