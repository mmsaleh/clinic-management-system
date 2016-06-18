<?php
// get values from add_patient form
$patientname   =  $_POST['patient_name'];
$mobile        =  $_POST['mobile'];
$age           =  $_POST['age'];
$gender        =  $_POST['gender'];
$bloodtype     =  $_POST['bloodtype'];
$address       =  $_POST['address'];

// open connection to mysql server
$link = mysqli_connect( 'localhost', 'root', 'root', 'clinic');
if(!$link){
  die('cannot connect to server');
}

// perform query
$query ="insert into patients(patient_name, mobile, age, gender, bloodtype, address) values('$patientname', '$mobile', '$age', '$gender', '$bloodtype', '$address')";

// perform query by php
mysqli_query($link, $query);

// redirect to add_patients page
header("location:patients.php");
