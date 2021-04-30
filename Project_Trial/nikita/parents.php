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
		<form action="parents.php" method="post">
			<div class="tab">
			<div class="p3" >Parent Details</div>
		   <div class="inputBox">
			   <table align="center" cellpadding="10" cellspacing="10">
			<tr>
				<td>Enter Name</td>
				<td><input type="text" name="pname" placeholder="Enter your name" required></td>
			</tr>

				   <tr>
				<td> Enter email Address</td>
 <td>
	  <input type="email" name="email" placeholder="Enter email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">

				</td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="date" id="dob" name="dob"></td>
			</tr>

				<tr>
				<td>Parent Age</td>
					<td><span id="Age"></span></td>
					<td>
					<input type="button" name="age" value="Age" onclick="agefinding();"/>
					</td>
				</tr>

<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="female">Female&nbsp;<br><input type="radio" name="gender" value="male">Male&nbsp;<input type="radio" name="gender" value="other">Other</td>
				</tr>
			<tr>
				<td>Phone no</td>
				<td>  <input type="text" name="pnumber" placeholder="Parents Number" required pattern="[0-9]{10}"  maxlength=10>
				</td>
				   </tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" placeholder="Enter your address" required></td>
			</tr>

			<tr>
				<td>Occupation</td>
				<td><input type="text" name="occupation" placeholder="Enter your occupation" required></td>
			</tr>

			<tr>
				<td>Work Address</td>
				<td><input type="text"  name="waddress" placeholder="Enter your work address" required></td>
			</tr>

			<tr>
				<td>Relationship with child</td>
				<td><input type="text" name="relation" placeholder="Enter Relation" required></td>
			</tr>


			   </table>
			</div>
			</div>

			<!--<div style="text-align:center;margin-top:0px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
<!--  <span class="step"></span>
</div>-->

			

  <div style="text-align: center; ">
  <!-- <button  type="button" id="prevBtn" name="previous" onclick="nextPrev(-1)">Previous</button>-->
    <button type="button" name="next" onclick="location.href='child.php';">Next</button>
    <button type="button" id="goback" onclick="location.href='afterlogin.html';">Home Page</button>
</div>
</form>

</form>
</div>
</div>

		<script src="admission.js"></script>
	</body>
</html>

