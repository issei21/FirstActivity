<?php

 session_start();
 $firstName = $_POST['firstName'];
 $lastname = $_POST['lastName'];
 $age = $_POST['age'];
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $_session['user'];
 
 include_once('config.php');
 if ($conn){
 $query = mysqli_query($conn, "INSERT INTO tbl_sample(firstname, lastname, age, contactno, emailAdd) VALUES('" . $firstname . "','" . $lastName . "','" . $age . "','" . $contact . "','" . $email . "');");
 
 if($query >=1){
 
  echo "Inserted";
  }else{
     echo "Not Instered...!  ";
	 die("error: ". $conn->error);
	 }
	 session_destroy();
	 
	 ?>