<?php
$conn=mysqli_connect("localhost","root","") or die("Could not connect");
mysqli_select_db($conn,"pipeline") or die("could not connect database");
?>