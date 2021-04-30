<!DOCTYPE html>
<html>
<head>
</head>
<?php
$aki="abhi";
echo '<script type="text/javascript">
function func()
document.getElementById("name").value="'.$aki.'";
}
</script>';
?>
<body>
<input type="text" name="name" id="a" disabled>
<button onclick="func();">Click</button>
</body>
</html>
