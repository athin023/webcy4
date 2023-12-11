<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bank";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection Failed:"$conn->connect_error);
}
?>

<html>
<head>
<title> Display Book Details</title>
</head>
<body>
<table border="1px solid black">
<tr>
<th>Book Number</th>
<th>Title</th>
<th>Edition</th>
<th>Publisher</th>
</tr>
<tr>

<?php
while($row=mysqli_fetch_assoc($query))
{
echo"<tr>";
echo"<td>".$row['bookno']."</td>";
echo"<td>".$row['booktitle']."</td>";
echo"<td>".$row['bookedition']."</td>";
echo"<td>".$row['bookpub']."</td>";
Echo"<tr>";
}?>
</tr>
</table>
</body>
</html>