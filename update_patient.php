<?php include_once 'includes/connection.php';

$query = "update patients set
          patient_name     ='{$_POST['patient_name']}',
          mobile           ='{$_POST['mobile']}',
          age              ='{$_POST['age']}',
          gender           ='{$_POST['gender']}',
          bloodtype        ='{$_POST['bloodtype']}',
          address          ='{$_POST['address']}'
          where patient_id = {$_POST['patient_id']}";
mysqli_query($link, $query);
header("location:patients.php");
