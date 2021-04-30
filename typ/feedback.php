<?php include('feedbackcon.php')?>
<!DOCTYPE html> 
<html>
	<head>

		<style>
body {
	font-family: Arial;
	font-size: 17px;
	background-color: whitesmoke;
}

.container {
	background-color: #B0DFE5;

	border: 1px solid lightgrey;
	border-radius: 3px;
width:30%;
height:50%;
    transform: translate(100%,0%);
padding:20px;
}

input[type=text] {
	width: 90%;

	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 3px;
}

label {
	margin-bottom: 20px;
	display: block;
padding:10px;
}

/*
   .icon-container {
	   margin-bottom: 20px;
	   padding: 7px 0;
	   font-size: 24px;
   }
 */
.mess
{
width:90%;
height:20%;
padding: 12px;
	border: 1px solid #ccc;
	border-radius: 3px;
}
   .btn {
	   background-color:#ffbb6a;
	   color: black;
	   padding:  10px;
margin:20px;

	   border: none;
	   width: 40%;
	   border-radius: 3px;
	   cursor: pointer;
	   font-size: 17px;



   }

   .btn:hover {
	   background-color: darkorange;
   } 
		</style>
	</head>
	<body>

		<h1 align=center>Feedback Form</h1>
		
				<div class="container">

<form action="feedback.php" method="POST">
							<label for="fname"> Full Name</label>
							<input type="text" name="firstname" placeholder="Himesh Ranme" required>
							<label for="email"> Email</label>
							<input type="text" name="email" placeholder="john@example.com"  required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
							<label for="message">Message</label>
							<textarea name="message"  name="message" class="mess" placeholder="hello" required>

						</textarea>
					
					<input type="submit" value="Submit" name="submit" class="btn">
					<input type="submit" onclick="location.href='day.html';" name="goback" value="Back Home" class="btn">
			</form>
                         </div>
	</body>
</html>
</html>
