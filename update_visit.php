<?php include_once 'includes/connection.php';

$query = "update visits set
          date     ='{$_POST['date']}',
          history           ='{$_POST['history']}',
          diagnosis              ='{$_POST['diagnosis']}',
          prescription           ='{$_POST['prescription']}',
          payment_method        ='{$_POST['payment_method']}'
          where visit_id = {$_POST['visit_id']}";
mysqli_query($link, $query);
header("location:visits.php");
