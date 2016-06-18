<?php

include_once 'includes/connection.php';

$patient_id = $_GET['patient_id'];

$query = "delete from patients where patient_id = $patient_id";

mysqli_query($link, $query);
// redirect to add_patients page
header("location:patients.php");
