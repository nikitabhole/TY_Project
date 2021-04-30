
<?php include('adcon.php')?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="admission.css">
	</head>
   <body>
<div class="container">
	   <div class="form">
		   <form id="regForm">
		<h2>Admission Form</h2>
		   <form name="form2" onsubmit="return checkchild();" method="POST">
			<div class="tab">
			 <div class="p1">Children Details:</div>
			<div class="inputBox1">   			   
			<table align="center" cellpadding="10">


			<tr>
				<td>Child Name</td>
				<td><input type="text" name="cname" id="cname" placeholder="Enter children name" required></td>
			</tr>


				<tr>
				<td>DOB</td>
					<td><input type="date" id="cdob" name="dob" required></td>
				</tr>

				<tr>
				<td>Child Age</td>
					<td><span id="CAge"></span></td>
					<td>
					<input type="button" name="age" value="Age" onclick="agefinding1();" required/>
					</td>
				</tr>

			<tr>
				<td>Child Blood group</td>
				<td>
				  <select id="Blood Group" name="blood_group" required>
    <option value="" selected="selected">Blood Group</option>
    <option value="A+" >A+</option>
    <option value="B+" >B+</option>
    <option value="AB+" >AB+</option>
    <option value="O+" >O+</option>
    <option value="A-" >A-</option>
    <option value="B-" >B-</option>
    <option value="AB-" >AB-</option>
    <option value="O-" >O-</option>
    </select>
				</td>

			</tr>
		<tr>
				<td>Address</td>
				<td><input type="text" name="caddress" placeholder="Enter address" required></td>
			</tr>

			<tr><td>Gender</td>

					<td><input type="radio" name="gender" value="female">Female&nbsp;<br><input type="radio" name="gender" value="male">Male&nbsp;<br><input type="radio" name="gender" value="other">Other</td>
				</tr>
			<tr><td>Disorder</td>

				<td><input type="radio" name="disorder" value="m">Mild&nbsp;<br><input type="radio" name="disorder" value="mo">Moderate&nbsp;<br><input type="radio" name="disorder" value="s">Severe&nbsp;<br><input type="radio" name="disorder" value="p">Profound&nbsp;<br><input type="radio" name="disorder" value="other">Other</td>
				</tr>



						<tr>
				<td>Family Doctor Name</td>
				<td><input type="text"  name="dname" placeholder="Enter Doctor name" required></td>
			</tr>
				<tr>
				<td>Family Doctor Mobile Number</td>
				<td><input type="text" name="dnumber" placeholder="Enter Doctor mobile number" maxlength="10" minlength="10" required></td>
		</tr>

			</table>

			</div>
			</div>
<div style=" overflow:auto; ">
  <div style="text-align: center; ">
    <button  type="button" name="previous" onclick="location.href='parents.php';">Previous</button>
    <button type="button" name="submit" onclick="location.href='ad.php';">Next</button>
    <button type="button" id="goback" onclick="location.href='afterlogin.html';">Home Page</button>
  </div>
</div>
</form>
</form>
</div>
</div>

		<script src="admission.js"></script>
	</body>
</html>

