<?php
// Placeholder for Database.php (not provided); using dbconnect.php instead
// require_once('database/Database.php');
// $db = new Database(); 
include('session.php');
include('header.php');
include('menubar.php');
include('dbconnect.php');
if(session_status() == PHP_SESSION_NONE) {
  include('session.php');
}

// Array created to handle the error messages
$errors = array();

// Variables to hold the form data
$statement = ''; $status = ''; $caseid = '';

if(empty($_POST['statement'])) {
  array_push($errors, "The Statement field cannot be empty, ensure it is entered");
} else {
  $statement = $_POST['statement'];
}

if(empty($_POST['status'])) {
  array_push($errors, "You need to select the status field");
} else {
  $status = $_POST['status'];
}

if(empty($_POST['caseid'])) {
  array_push($errors, "Enter the case id");
} else {
  $caseid = $_POST['caseid'];
}

if($errors) {
  foreach($errors as $value) {
    echo '<span>'. $value.' </span> </br>'; 
  }
} else {
  $sql = "UPDATE investigation SET statement=?, status=? WHERE case_id=?";
  $q = $dbcon->prepare($sql); // Changed from $conn to $dbcon
  $success = $q->execute(array($statement, $status, $caseid));
  if($success) {
    echo "<script>alert('The Statement saved successfully')</script>";
    echo "<script>window.open('cidcaseview.php','_self')</script>";
  }
}

// $db->Disconnect(); // Removed as Database.php is not used
?>