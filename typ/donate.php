<?php include('donatecon.php')?>
<!DOCTYPE html> 
<html>
	<head>

		<style>
body {
	font-family: Arial;
	font-size: 17px;
	padding: 0px;
	background-color: whitesmoke;
}

* {
	box-sizing: border-box;


}

.row {
	/* IE10 */
	display: flex;

	padding-left:200px;
	padding-right:200px;
	margin: 20px 20px 20px 20px;
}

.col-50 {
	-ms-flex: 50%; /* IE10 */
	flex: 30%;
}

.col-75 {
	-ms-flex: 34%; /* IE10 */
	flex: 34%;
}

.col-25,
.col-50,
.col-75 {
	padding: 0 16px;
}

.container {
	background-color:  #B0DFE5;
	padding: 5px -10px 10px 10px;
	border: 1px solid lightgrey;
	border-radius: 3px;
}

input[type=text] {
	width: 100%;
	margin-bottom: 10px;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 3px;
}

label {
	margin-bottom: 10px;
	display: block;
}

/*
   .icon-container {
	   margin-bottom: 20px;
	   padding: 7px 0;
	   font-size: 24px;
   }
 */

   .btn {
	   background-color:#ffbb6a;
	   color: black;
	   padding:  10px;
	   margin: 10px 90px;
margin-right:50px;
	   border: none;
	   width: 80%;
	   border-radius: 3px;
	   cursor: pointer;
	   font-size: 17px;
	   flex:middle;


   }

   .btn:hover {
	   background-color: darkorange;
   } 
		</style>
	</head>
	<body>

		<h1 align=center>Donation Form</h1>

		<div class="row">
			<div class="col-75">
				<div class="container">
					<div class="row">
						<div class="col-50">
<form action="donate.php" method="POST">
							<label for="fname"><i class="fa fa-user"></i> Full Name</label>
							<input type="text" name="firstname" placeholder="Himesh Ranme" required>
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
							<input type="text" name="email" placeholder="john@example.com"  required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
							<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
							<input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
							<label for="city"><i class="fa fa-institution"></i> City</label>
							<input type="text" id="city" name="city" placeholder="Pune" required>

							<div class="row">
								<div class="col-50">
									<label for="state">State</label>
									<input type="text" id="state" name="state" placeholder="Maharashtra">
								</div>
								<div class="col-50">
									<label for="pincode">pincode</label>
									<input type="text" id="pincode" name="pincode" placeholder="10001" maxlength="5" minlength="5">
								</div>
								<div class="col-50">
									<label for="zip">Amount</label>
									<input type="text" id="Rs." name="rs" placeholder="100/-">
								</div>
							</div>
						</div>	 
					</div>
					<input type="submit" value="Submit" name="submit" class="btn">
					<input type="submit" onclick="location.href='day.html';" name="goback" value="Back Home" class="btn">
			</form>
                         </div>
			</div>
		</div>
	</body>
</html>
</html>
