<?php
// get values from add_user form
$username   =  $_POST['username'];
$password   =  $_POST['password'];
$first_name =  $_POST['fname'];
$last_name  =  $_POST['lname'];

// open connection to mysql server
$link = mysqli_connect( 'localhost', 'root', 'root', 'clinic');
if(!$link){
  die('cannot connect to server');
}

// perform query
$query ="insert into users(username, password, first_name, last_name) values('$username', '$password', '$first_name', '$last_name')";

// perform query by php
mysqli_query($link, $query);

// redirect to add_user page
header("location:users.php");
