<?php
if(isset($_POST['reg'])){

  $tname = $_POST['firstName'];
  $mail = $_POST['lastName'];
  $ctype = $_POST['email'];
  $mobile=$_POST['mobile'];
  $m_1 = $_POST['m1'];
  $m_2 = $_POST['m2'];
  $m_3 = $_POST['m3'];
  $m_4 = $_POST['m4'];

  $insert = "INSERT INTO user_info(firstName,lastName,email,mobile	)VALUES('$tname','$mail','$ctype','$mobile')";
  $_query = mysqli_query($conn, $insert);

  $insert = "INSERT INTO user_info(firstName,lastName,email,mobile	)VALUES('$tname','m_1','m_2','m_3','m_4')";
  $_query = mysqli_query($conn, $insert1);

  // if($_query){
  //   echo "data insert success";
  // }

}
?>