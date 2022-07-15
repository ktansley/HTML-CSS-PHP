	<body>			
				<div class="content">
					<div class = "labcontent">
						<?php
						//turn each input into a variable
						$ePart = $_POST["earnedParticipation"];
						$mPart = $_POST["maxParticipation"];
						$wPart = $_POST["weightParticipation"];
						$eQuiz = $_POST["earnedQuiz"];
						$mQuiz = $_POST["maxQuiz"];
						$wQuiz = $_POST["weightQuiz"];
						$eLab = $_POST["earnedLab"];
						$mLab = $_POST["maxLab"];
						$wLab = $_POST["weightLab"];
						$ePract = $_POST["earnedPracticum"];
						$mPract = $_POST["maxPracticum"];
						$wPract = $_POST["weightPracticum"];
						
						//function to find the calculated percentage 
						function calculated($earned, $max){
							//take the earned points divided by the max points and multiply by 100 to turn into percent
							$score = ($earned/$max)*100;
							return $score;
						}
						
						//function to find the weighted percent
						function weightedpercent($earned, $max, $weighted){
							//divide the earned points by the max points and multiply that by whatever the weighted score is
							$percent = ($earned/$max)* $weighted; 
							return $percent;
						}
						
						//use the calculated function for each category
						$grade5 = calculated($ePart, $mPart);
						$grade6 = calculated($eQuiz, $mQuiz);
						$grade7 = calculated($eLab, $mLab);
						$grade8 = calculated($ePract, $mPract);
						
						//use weightedpercent function for each category 
						$grade1 = weightedpercent($ePart, $mPart, $wPart);
						$grade2 = weightedpercent($eQuiz, $mQuiz, $wQuiz);
						$grade3 = weightedpercent($eLab, $mLab, $wLab);
						$grade4 = weightedpercent($ePract, $mPract, $wPract);
						
						//print out the percentage and weighted percentage of each category
						echo "<p>You earned a $grade5% for Participation, with a weighted value of $grade1%</p>";
						echo "<p>You earned a $grade6% for Quizzes, with a weighted value of $grade2%</p>";
						echo "<p>You earned a $grade7% for the Lab Assignments, with a weighted value of $grade3%</p>";
						echo "<p>You earned a $grade8% for the Practica, with a weighted value of $grade4%</p>";
						
						//find the total grade percentage 
						$totalgrade = $grade1+$grade2+$grade3+$grade4;
						
						//define result1 to be used for result2
						$result1 = $totalgrade;
						
						//figure out where the grade percentage falls on the letter grade scale
						$result2 = ($result1 == ($totalgrade<=100 && $totalgrade>95) ? 'A+' :
										($result1 == ($totalgrade<95 && $totalgrade>=90) ? 'A':
										($result1 == ($totalgrade<90 && $totalgrade>=85) ? 'B+':
										($result1 == ($totalgrade<85 && $totalgrade>=80) ? 'B' : 
										($result1 == ($totalgrade<80 && $totalgrade>=75) ? 'C+':
										($result1 == ($totalgrade<75 && $totalgrade>=70) ? 'C':
										($result1 == ($totalgrade<70 && $totalgrade>=60) ? 'D':
										($result1 == ($totalgrade<60) ? 'F': 'other'))))))));
						
						//print out, in bold, the final grade percent and corresponding letter grade
						echo "<p><b>Your final grade is a $totalgrade%, which is a $result2.</b></p>";
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
