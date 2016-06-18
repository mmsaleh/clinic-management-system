<?php

include_once 'includes/connection.php';

$visit_id = $_GET['visit_id'];

$query = "delete from visits where visit_id = $visit_id";

mysqli_query($link, $query);
// redirect to visits page
header("location:visits.php");
