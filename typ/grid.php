
<html>
<head></head>
	<style>
		body{
			background-color:whitesmoke;
		}
	.header{
		 border-radius: 20%;
		border:solid black;
		margin-top: 0px;
		border-color: black;
			background-color: darkturquoise;
			margin-bottom: 10px;
			min-height: 50px;
		}
		
		
				time.icon
{
  font-size: 1em; /* change icon size */
  display: block;
  position: relative;
  width: 6em;
  height: 5em;
  background-color: #fff;
  border-radius: 0.6em;
  box-shadow: 0 1px 0 #bdbdbd, 0 2px 0 #fff, 0 3px 0 #bdbdbd, 0 4px 0 #fff, 0 5px 0 #bdbdbd, 0 0 0 1px #bdbdbd;
  overflow: hidden;
}
		time.icon *
{
  display: block;
  width: 100%;
  font-size: 1em;
  font-weight: bold;
  font-style: normal;
  text-align: center;
}
		time.icon strong
{
  position: absolute;
  top: 0;
  padding: 0.3em 0;
  color: #fff;
  background-color: royalblue;
  border-bottom: 1px dashed skyblue;
  box-shadow: 0 2px 0 blue;
}
		time.icon em
{
  position: absolute;
  bottom: 0.1em;
  color: dodgerblue;
}
				time.icon span
{
  font-size: 2.2em;
  letter-spacing: -0.06em;
  padding-top: 0.9em;
  color: #2f2f2f;
}
		
		
	.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
		
}

/* Create four equal columns that sits next to each other */
.column {
		
  flex: 25%;
  padding: 0 8px;
}

.column img {
  vertical-align: middle;
  width: 100%;
}
		.btn{
			margin-left: 10px;
			margin-top: 30px;			
		}
		.btn input[type="button"]
		{
border-radius:20%;
				border:solid black;
			font-size:  30px;
			min-height: 50px;
			width: 300px;
			background-color: darkturquoise;
		}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 20%;
  }
}

		div.desc {
	border: black;
		margin-bottom: 0px;	 
  padding: 8px;
  text-align: center;
}
		.p3{
			margin-bottom: 0px;
		}
		div.p{
			border:solid black;
		}
/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 20%;
  }


}
	</style>
	<body>
		<div align=center class="header">
		<h1>Events </h1>
	<input type="button" onclick="location.href='day.html';" name="back" value="Home"></button>
		</div>

		<div class="row">
			
  			<div class="column">
	  			<div class="p">
    			<img height="400" src="Event1.jpg">
						<div class=p3>
						<h3>Gathering of Mentally challenged children.</h3>
						</div>
					<div class="desc">
					<time datetime="2014-09-20" class="icon">
						<em>Saturday</em>
						<strong>September</strong>
						<span>20</span>
					</time>
					</div>
				</div>
				<div class="btn">
				<input type="button" onclick="location.href='showdetails.php';" name="allevents" value="All Events"></button>
					<br><br>
                                        
					<input type="button" onclick="location.href='add.php';" value="Add Events"></button>
					<br><br>
                                        
					<input type="button" onclick="location.href='deleteevent.php';" value="Delete Events"></button>
					<br><br>
                                        
					<input type="button" onclick="location.href='todaysevent.php';" value="Todays Events"></button>
					<br><br>
                                        <input type="button" onclick="location.href='upcomingevent.php';" value="upcoming events"></button>
					<br><br>      
                                        	
				</div>
			</div>
	
  			<div class="column">
				<div class="p">
	 			<img height="150" src="Event2.jpg">
						<div class=p3>
						<h3>Park for Mentally challenged children to increase their Physical Strength.</h3>
						</div>
					<div class="desc">
						<time datetime="2011-05-07" class="icon">
						<em>Friday</em>
						<strong>July</strong>
						<span>5</span>
					</time>
					</div>
	  			</div>
		   		<p>
				<div class="p">
				<img height="230" src="Event5.jpg">
					<div class=p3>
						<h3> Teaching how to make different Products .</h3>
						</div>
					<div class="desc">
							<time datetime="2009-04-06" class="icon">
						<em>Monday</em>
						<strong>April</strong>
						<span>6</span>
					</time>
					</div>
				</div>
		   		</p>
			</div>
	
  			<div class="column">
				<div class="p">
    			<img height="200" src="Event3.jpg">
					<div class=p3>
						<h3> Sessions for Parents and Society People.</h3>
						</div>
			  		<div class="desc">
								<time datetime="2009-03-15" class="icon">
						<em>Sunday</em>
						<strong>March</strong>
						<span>15</span>
					</time>
					</div>
				</div>
			    <p>	 
				<div class="p">
	   			<img height="200" src="Event4.jpg">
					
					<div class=p3>
						<h3> Sessions of Meditation.</h3>
						</div>
			  		<div class="desc">
						<time datetime="20016-08-21" class="icon">
						<em>Tuesday</em>
						<strong>August</strong>
						<span>21</span>
					</time>
					</div>
				</div>
		
		</div>

	</body>	  
</html>
