<?php
include("connect.php");
?>
<html>
<head>
<title> book details</title>
</head>
<center>
<h2> BOOK DETAILS </h2>
<form action="display.php" method="post">
Book Number:<input type="text"name="bookno"><br><br>
Book Title:<input type="text"name="booktitle"><br><br>
Book Edition:<input type="number"name="booked"><br><br>
Book Publisher:<input type=text"name="bookpub"value=""><br><br>
<input type="submit" name="submit" value="Submit">
</center>
</form>
</body>
</html
