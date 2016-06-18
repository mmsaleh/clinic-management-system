<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
  <h2>Manage Patients</h2>
  <a href="add_patient.php">Add Patient</a>

  <table border="2">
    <tr>
      <td>ID</td>
      <td>Patient Name</td>
      <td>Mobile</td>
      <td>Age</td>
      <td>gender</td>
      <td>Blood Type</td>
      <td>Address</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
<?php
  $query  = "select * from patients";
  $result = mysqli_query($link, $query);
  while($userSet = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>{$userSet['patient_id']}</td>";
    echo "<td>{$userSet['patient_name']}</td>";
    echo "<td>{$userSet['mobile']}</td>";
    echo "<td>{$userSet['age']}</td>";
    echo "<td>{$userSet['gender']}</td>";
    echo "<td>{$userSet['bloodtype']}</td>";
    echo "<td>{$userSet['address']}</td>";
    echo "<td><a href='edit_patient.php?patient_id={$userSet['patient_id']}'>Edit</a></td>";
    echo "<td><a href='delete_patient.php?patient_id={$userSet['patient_id']}'>Delete</a></td>";
  }
?>

  </table>
<?php include_once 'includes/footer.php'; ?>
