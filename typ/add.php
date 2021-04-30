<?php include('eventc.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="event.css">
    <link href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
	<div class="event">
	    <h1>Add Your Event Details</h1>
	    <form action="add.php" method="POST">

	Enter host Name&nbsp;&nbsp;<input type="textbox"  name="hname">
	Enter event Name&nbsp;&nbsp;<input type="textbox" name="ename">
	Enter event Date&nbsp;&nbsp;<input type="date" name="edate">
	Enter event time From&nbsp;&nbsp;<input type="time" name="timefrom">
	Enter event time To&nbsp;&nbsp;<input type="time" name="timeto">
	Enter event Venue&nbsp;&nbsp;<input type="textbox" name="venue">
	Event Managed For <input type="radio" name="event" value="parents"><label for="parents">parents</label>
	<input type="radio" name="event" value="childrens">childrens<br><br>
		<input type="submit" value="Submit" name="submit">
		<input type="button" onclick="location.href='grid.html';" value="Go Back" name="goback">
		       </form>
	</div>
    </body>
</html>
</html>
