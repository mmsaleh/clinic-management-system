<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>

  <h2>Manage Users</h2>
  <a href="add_user.php">Add User</a>
  <hr>
  <table border="2">
    <tr>
      <td>ID</td>
      <td>Username</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
<?php
  $query  = "select * from users";
  $result = mysqli_query($link, $query);
  while($userSet = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>{$userSet['user_id']}</td>";
    echo "<td>{$userSet['username']}</td>";
    echo "<td>{$userSet['first_name']}</td>";
    echo "<td>{$userSet['last_name']}</td>";
    echo "<td><a href='edit_user.php?user_id={$userSet['user_id']}'>Edit</a></td>";
    echo "<td><a href='delete_user.php?user_id={$userSet['user_id']}'>Delete</a></td>";
  }
?>

  </table>

<?php include_once 'includes/footer.php'; ?>
