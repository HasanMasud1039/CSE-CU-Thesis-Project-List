<?php
session_start();

// initializing variables
$Id = "";
$Student = "";
$thesis    = "";
$supervisor = ""; 

// connect to the database
$db = mysqli_connect('localhost', 'root', '12345', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Id = mysqli_real_escape_string($db, $_POST['Id']);
  $Student = mysqli_real_escape_string($db, $_POST['Student']);
  $thesis = mysqli_real_escape_string($db, $_POST['thesis']);
  $supervisor = mysqli_real_escape_string($db, $_POST['supervisor']);
  $errors = array();

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Id)) { array_push($errors, "ID is required"); }
  if (empty($Student)) { array_push($errors, "Student Name is required"); }
  if (empty($thesis)) { array_push($errors, "Thesis or Project Title is required"); }
  if (empty($supervisor)) { array_push($errors, "Select supervisor"); }
  }

  // first check the database to make sure 
  // a user does not already exist with the same Student and/or email
  $user_check_query = "SELECT * FROM bsc WHERE Id = '$Id'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Id'] === $Id) {
      array_push($errors, "ID already exists");
    }
  }
  if (isset($_POST['reg_user'])) {
    $Id = mysqli_real_escape_string($db, $_POST['Id']);
   
    
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO bsc (Id, Student, thesis, supervisor) 
  			  VALUES('$Id','$Student', '$thesis', '$supervisor')";
    mysqli_query($db, $query);
    $_SESSION['Id'] = $Id;
    $_SESSION['Student'] = $Student;
  $_SESSION['success'] = "You are now registered";
    header('location: index2.php');
  }

  else {
    array_push($errors, "  ");
  }  
}

  
  ?>