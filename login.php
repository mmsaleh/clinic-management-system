<?php include_once 'includes/connection.php' ;?>
<?php
  if(isset($_POST['submit'])){
  // check for required fields
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        // check if username and password exist in users table
        $username  =  $_POST['username'];
        $password  =  $_POST['password'];
        //query check
        $query   = "select * from users where username ='$username'
                 and password ='$password'";
        $result  = mysqli_query($link, $query);
        $userSet = mysqli_fetch_assoc($result);
        if(!empty($userSet{'user_id'})){
        session_start();
        $_SESSION['user_id']=$userSet['user_id'];
        //print_r($_SESSION);
        header("location:index.php");exit;
        }else{
          $output = "user not found";
        }
        } else {
        $output = "username password required";
        }
  }?>
  <?php
  // require_once 'includes/header.php';
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
  <h2>Login</h2>
  <?php if(isset($output)){echo "<h2>$output</h2>";} ?>
  <form action="" method="post">
    Username <input type="text" name="username"><br><br>
    Password <input type="password" name="password"><br><br>
    <input type="submit" value="Login" name="submit">
  </form>
<?php include_once 'includes/footer.php'; ?>