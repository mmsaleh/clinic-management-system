<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
// get existing user data from database
$query ="select * from users where user_id = {$_GET['user_id']}";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>

<h2>Edit User</h2>
  <form action="update_user.php" method="post">
    Username <input type="text" name="username" value="<?php echo $userSet['username']; ?>"><br><br>
    Password <input type="password" name="password" value="<?php echo $userSet['password']; ?>"><br><br>
    First Name <input type="text" name="fname" value="<?php echo $userSet['first_name']; ?>"><br><br>
    Last Name <input type="text" name="lname" value="<?php echo $userSet['last_name']; ?>"><br><br>
    <input type="hidden" name="user_id" value="<?php echo $userSet['user_id']; ?>">
    <input type="submit" value="Update">
  </form>
<?php include_once 'includes/footer.php'; ?>
