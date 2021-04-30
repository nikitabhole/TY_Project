
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
width:100%;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
width:100%;

}

.header
{
background-color: pink;
width:100%;
height:80%;
align :center;
}
h1 {
  font-size: 40px;

}
p {
  font-size: 50px;

}
.btn{
		margin-left: 10px;
		margin-top: 30px;			
	}
	.btn input[type="button"]
	{
		border-radius:10%;
		border:solid black;
		font-size:  30px;
		min-height: 30px;
		width: 450px;
		background-color: darkturquoise;
	}

</style>
</head>
<body>

<!-- MAIN (Center website) -->

<div class="header">
<p>Welcome Admin</p>
</div>
<h1>To get information about your website follow following Actions....</h1>


<div class="row">

			
				<div class="btn">
					
 <input type="button" onclick="location.href='viewusers.php';" value="View Users"></button>
		<br><br>
<input type="button" onclick="location.href='deleteusers.php';" name="allex" value="Delete User"></button>
				<br><br>
 <input type="button" onclick="location.href='countusers.php';" value="Count Users"></button>
		<br><br>
		<input type="button" onclick="location.href='viewadmission.php';" value="View Admission"></button>
	<br><br>
 <input type="button" onclick="location.href='countadmission.php';" value="Count Admission"></button>
		<br><br>
	<input type="button" onclick="location.href='deleteadmission.php';" value="Delete Admission"></button>
<br><br>   

			<input type="button" onclick="location.href='todaysad.php';" value="Todays Admission"></button>
		<br><br>
   <input type="button" onclick="location.href='betweenad.php';" value="Admission During Dates"></button>
		<br><br>
 <input type="button" onclick="location.href='adtype.php';" value="Admission type details"></button>
		<br><br>
 <input type="button" onclick="location.href='childrenadd.php';" value="Childrens Live At"></button>
		<br><br>

 <input type="button" onclick="location.href='day.html';" value="Logout"></button>
		<br><br>
	</div>
</body>
</html>

