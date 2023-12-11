<?php include("connect.php");
if($_POST){
$bookno=$_POST['bookno'];
$booktitle=$_POST['booktitle'];
$bookedition=$_POST['booked'];
$bookpub=$_POST['bookpub'];
$query1="INSERT INTO BOOK_DETAILS VALUES ('$bookno','$booktitle','$bookedition','$bookpub')";
$sql=mysqli_query($conn,$query1);
$query2=mysqli_query($conn,"select * from book_detils");
}
?>