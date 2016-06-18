<?php include_once 'includes/connection.php';

$query = "update users set
          username    =  '{$_POST['username']}',
          password    =  '{$_POST['password']}',
          first_name  =  '{$_POST['fname']}',
          last_name   =  '{$_POST['lname']}'
          where user_id = {$_POST['user_id']}";

mysqli_query($link, $query);
header("location:users.php");
