<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="home.css" type="text/css" />
		<title>Edit Entry</title>
	</head>
	
	<body>
						</br>
						<?php 
							$first = $_POST["first"];
							$last = $_POST["last"];
							if (empty($first) or empty($last)){
								echo "You must enter a value in each field.";
							} 
							else{$open = fopen("lab3.txt", "r");
							$read = file_get_contents("lab3.txt");

							
							$count = count($person);
							for($i=0; $i<$count; $i++){
								$info = explode(",", $person[$i]);
								if (($first == $info[0]) && ($last == $info[1])){
									
									echo '<form method="post" action="updateentry.php">
										<p>
										First Name <input type="text" name="first" value= "'.$info[0].'"<br>
										Last Name <input type="text" name="last" value= "'.$info[1].'"<br>
										Email Address <input type="text" name="email" value= "'.$info[2].'"<br>
										Phone Number <input type="text" name="phone" value= "'.$info[3].'"<br>
										Address <input type="text" name="address" value= "'.$info[4].'" <br>
										City <input type="text" name="city" value= "'.$info[5].'"<br>
										State <select name="state">
				<option value="Alabama">Alabama</option>
				<option value="Alaska">Alaska</option>
				<option value="Arizona">Arizona</option>
				<option value="Arkansas">Arkansas</option>
				<option value="California">California</option>
				<option value="Colorado">Colorado</option>
				<option value="Connecticut">Connecticut</option>
				<option value="Delaware">Delaware</option>
				<option value="Florida">Florida</option>
				<option value="Georgia">Georgia</option>
				<option value="Hawaii">Hawaii</option>
				<option value="Idaho">Idaho</option>
				<option value="Illinois">Illinois</option>
				<option value="Indiana">Indiana</option>
				<option value="Iowa">Iowa</option>
				<option value="Kansas">Kansas</option>
				<option value="Kentucky">Kentucky</option>
				<option value="Louisiana">Louisiana</option>
				<option value="Maine">Maine</option>
				<option value="Maryland">Maryland</option>
				<option value="Massachusetts">Massachusetts</option>
				<option value="Michigan">Michigan</option>
				<option value="Minnesota">Minnesota</option>
				<option value="Mississippi">Mississippi</option>
				<option value="Missouri">Missouri</option>
				<option value="Montana">Montana</option>
				<option value="Nebraska">Nebraska</option>
				<option value="Nevada">Nevada</option>
				<option value="New Hampshire">New Hampshire</option>
				<option value="New Jersey">New Jersey</option>
				<option value="New Mexico">New Mexico</option>
				<option value="New York">New York</option>
				<option value="North Carolina">North Carolina</option>
				<option value="North Dakota">North Dakota</option>
				<option value="Ohio">Ohio</option>
				<option value="Oklahoma">Oklahoma</option>
				<option value="Oregon">Oregon</option>
				<option value="Pennsylvania">Pennsylvania</option>
				<option value="Rhode Island">Rhode Island</option>
				<option value="South Carolina">South Carolina</option>
				<option value="South Dakota">South Dakota</option>
				<option value="Tennessee">Tennessee</option>
				<option value="Texas">Texas</option>
				<option value="Utah">Utah</option>
				<option value="Vermont">Vermont</option>
				<option value="Virginia">Virginia</option>
				<option value="Washington">Washington</option>
				<option value="West Virginia">West Virginia</option>
				<option value="Wisconsin">Wisconsin</option>
				<option value="Wyoming">Wyoming</option>
			</select> 
										Zip <input type="text" name="zip" value= "'.$info[7].'"<br>
										<input type="submit" value = "Update Entry"/>
									</p></form>';
								}
								else{echo "Not found ";}
							}
							
							}
							?>
							</br></br>
						<a href="lab3.php">Return to Directory</a>
	</body>
</html>
