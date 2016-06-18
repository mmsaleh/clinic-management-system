<?php
session_start();
if(isset($_SESSION['user_id'])){
  $message = "welcome";
}else{
  header("location:login.php");
  exit;
}
?>
<html>
    <head>
        <title>E-Clinic</title>
        <link rel="stylesheet" href="css/public.css" type="text/css"/>
    </head>
    <body>
        <div id="header">
            <h1> Clinic System</h1>
        </div>
        <div id="main">
            <table id="structure">
                <tr>
                    <td id="navigation">

                    </td>
                    <td id="page">