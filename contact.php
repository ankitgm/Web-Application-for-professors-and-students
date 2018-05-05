<?php

if(isset($_POST["email"]) && isset($_POST["comment"]))
{
	if(!empty($_POST["email"]) && !empty($_POST["comment"]))
	{
		$email=$_POST["email"];
		$comment=$_POST["comment"];

				
		$to = "ankitgoutamohanty@gmail.com";
		$subject = "Test mail";
		$message = $comment;
		$from = $email;
		$headers = "From: $from";
		mail($to,$subject,$message,$headers);
		//echo "Mail Sent.";
		
		
	}
}


//echo "Sumeet";

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/menu.css">
		<link rel="stylesheet" type="text/css" href="style/stylecontact.css">

		<title>
			Sumeet !!!		
		</title>
	</head>
	
	<body>
		<div class="header">
		Hello World !!!
		</div>

		<center>
			<div id="container">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="download_list.php">Download</a></li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>
			</div>s
		</center>

		<div id="contact_wrapper">

			<div id="left">
				
				We are here to answer any questions you may have about our website.</br> 
				Reach out to us and we'll respond as soon as we can.Even if there is</br> 
				something you have always wanted to experience and can't find it on website,</br>
				let us know and we promise we'll do our best to find it for you</br> 
				and send you there.


			</div>

			<div id="right">

				<div id="comment_form">
					<form action="contact.php" method="POST">	
						<div>
							<input type="text" name="name" id="name" value="" placeholder="Name">
						</div>
						<div>
							<input type="email" name="email" id="email" value="" placeholder="Email">
						</div>

						<div>
							<textarea rows="7" name="comment" id="comment" placeholder="Comment"></textarea>
						</div>
						<div>
							<input type="submit" name="submit" value="Reset">
							<input type="submit" name="submit" value="Submit">
						</div>
					</form>		
				</div>

			</div>
		</div>

	</body>
</html>