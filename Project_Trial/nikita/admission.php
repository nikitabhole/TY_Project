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
		<form action="parent.php" meyh>
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
				<td><input type="radio" name="gender" value="female">Female<input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="other">Other</td>
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

			<div style="text-align:center;margin-top:0px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
<!--  <span class="step"></span>-->
</div>
		<div style=" overflow:auto; ">
  <div style="text-align: center; ">
    <button  type="button" id="prevBtn" name="previous" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" name="next" onclick="nextPrev(1)">Next</button>
    <button type="button" id="goback" onclick="location.href='afterlogin.html';">Home Page</button>
  </div>
</div>
</form>

</form>
</div>
</div>
<div class="container">
	   <div class="form">
		   <form id="regForm">
		<h2>Admission Form</h2>
		   <form>
			<div class="tab">
			 <div class="p1">Children Details:</div>
			<div class="inputBox1">   			   
			<table align="center" cellpadding="10">


			<tr>
				<td>Child Name</td>
				<td><input type="text" name="cname" placeholder="Enter children name" required></td>
			</tr>


				<tr>
				<td>DOB</td>
					<td><input type="date" id="cdob" name="dob"></td>
				</tr>

				<tr>
				<td>Child Age</td>
					<td><span id="CAge"></span></td>
					<td>
					<input type="button" name="age" value="Age" onclick="agefinding1();"/>
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

					<td><input type="radio" name="gender" value="female">Female&nbsp;<input type="radio" name="gender" value="male">Male&nbsp;<input type="radio" name="gender" value="other">Other</td>
				</tr>
			<tr><td>Disorder</td>

				<td><input type="radio" name="disorder" value="m">Mild&nbsp;<input type="radio" name="disorder" value="mo">Moderate&nbsp;<input type="radio" name="disorder" value="s">Severe&nbsp;
		    <input type="radio" name="disorder" value="p">Profound&nbsp;<input type="radio" name="disorder" value="other">Other</td>
				</tr>



						<tr>
				<td>Family Doctor Name</td>
				<td><input type="text"  name="dname" placeholder="Enter doctor name" required></td>
			</tr>
				<tr>
				<td>Family Doctor Mobile Number</td>
				<td><input type="text" name="dnumber" placeholder="Enter mobile number" maxlength=10 minlength required></td>
		</tr>

			</table>

			</div>
			</div>
<div style=" overflow:auto; ">
  <div style="text-align: center; ">
    <button  type="button" id="prevBtn" name="previous" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" name="next" onclick="nextPrev(1)">Next</button>
    <button type="button" id="goback" onclick="location.href='afterlogin.html';">Home Page</button>
  </div>
</div>
</form>
</form>
</div>
</div>
<div class="container">
	   <div class="form">
		   <form id="regForm">
		<h2>Admission Form</h2>
<form>
			<div class="tab">
			 <div class="p4">Admission Details</div>
			<div class="inputBox2">   			   
			<table align="center" cellpadding="10" cellspacing="10">
<tr>

					<td>Admission type</td>
				<td>
				  <select id="type" name="type"  onchange="call();" required>
    <option value="" selected="selected">Choose Types</option>
    <option value="fullday">Full Day</option>
    <option value="temporary">Temporary</option>
    <option value="residential">residential</option>

    </select>
				</td>	

<!--					<td>Full Day<input type="radio" name="date" value="date">&nbsp;Half Day<input type="radio" name="date" value="">&nbsp;Residential<input type="radio" name="date" value=""></td>-->

				</tr>

						<tr>
				<td>Fee of Admission</td>
				<td><input type="text"  name="fees" id="fees" placeholder="" required></td>
			</tr>
<tr>
				<td>You have choosen admission type time</td>
				<td><input type="text" name="time" id="time" placeholder="" required></td>
			</tr>


				</table>
			</div>
</div>
<div style=" overflow:auto; ">
  <div style="text-align: center; ">
    <button  type="button" id="prevBtn" name="previous" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" name="next" onclick="nextPrev(1)">Next</button>
    <button type="button" id="goback" onclick="location.href='afterlogin.html';">Home Page</button>
  </div>
</div>
</form>
</form>
</div>
</div>

			<div style="text-align:center;margin-top:0px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
<!--  <span class="step"></span>-->
</div>
				<!--<div style=" overflow:auto; ">
  <div style="text-align: center; ">
    <button  type="button" id="prevBtn" name="previous" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" name="next" onclick="nextPrev(1)">Next</button>
    <button type="button" id="goback" onclick="location.href='afterlogin.html';">Home Page</button>
  </div>
</div>
			 </form>-->


	
		<script src="admission.js"></script>
	</body>
</html>
