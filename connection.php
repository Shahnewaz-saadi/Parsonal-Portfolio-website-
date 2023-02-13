<?php
$servername="localhost";
$username="root";
$password="";
$dbname="client_info";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
echo "Connected Successfully";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

$sql = "INSERT INTO client (FirstName, LastName, Email,Mobile,Message)
VALUES ('$fname', '$lname', '$email','$mobile','$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$retval = mysqli_select_db( $conn, 'client_info' );

if(! $retval ) {
   die('Could not select database: ' . mysqli_error($conn));
}
echo "Database client_info selected successfully\n";

mysqli_close($conn);
?>

<html>
<a href="index.php">
  <button type="button" class="btn" name="home">Go to home page</button>
</a>

</html>