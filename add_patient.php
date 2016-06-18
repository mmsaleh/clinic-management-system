<?php include_once 'includes/header.php'; ?>
  <h2>Add Patient</h2>
  <form action="create_patient.php" method="post">
    Username <input type="text" name="patient_name"><br><br>
    Mobile <input type="text" name="mobile" ><br><br>
    Age <input type="text" name="age" ><br><br>
    Gender <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br><br>
    Blood Type  <select name="bloodtype">
                  <option value="">Select Blood Type</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select><br><br>
    Address <input type="text" name="address" ><br><br>
    <input type="submit" value="Add">
  </form>
<?php include_once 'includes/footer.php'; ?>
