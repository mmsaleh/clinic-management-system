<?php include_once 'includes/header.php'; ?>
  <h2>Add User</h2>
  <form action="create_user.php" method="post">
    Username <input type="text" name="username"><br><br>
    Password <input type="password" name="password"><br><br>
    First Name <input type="text" name="fname"><br><br>
    Last Name <input type="text" name="lname"><br><br>
    <input type="submit" value="Add">
  </form>
<?php include_once 'includes/footer.php'; ?>
