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
    <option value="residential">Residential</option>

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
    <button  type="button" name="previous" onclick="location.href='child.php'">Previous</button>
    <button type="button" id="nextBtn" name="submit">Submit</button>
    <button type="button" id="goback" onclick="location.href='afterlogin.html';">Home Page</button>
  </div>
</div>
</form>
</form>
</div>
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
