<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
// get existing user data from database
$query ="select * from patients where patient_id = {$_GET['patient_id']}";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>

<h2>Edit Patient</h2>
  <form action="update_patient.php" method="post">
    Username <input type="text" name="patient_name" value="<?php echo $userSet['patient_name']; ?>"><br><br>
    Mobile <input type="mobile" name="mobile" value="<?php echo $userSet['mobile']; ?>"><br><br>
    Age <input type="age" name="age" value="<?php echo $userSet['age']; ?>"><br><br>
    Gender <input type="radio" name="gender" value="male" <?php if($userSet['gender']=='male'){echo 'checked';} ?> >Male
    <input type="radio" name="gender" value="female" <?php if($userSet['gender']=='female'){echo 'checked';} ?> >Female<br><br>
    Blood Type  <select name="bloodtype">
                  <option value="">Select Blood Type</option>
                  <option value="A+" <?php if($userSet['bloodtype']=="A+"){echo 'selected';} ?>>A+</option>
                  <option value="A-"<?php if($userSet['bloodtype']=="A-"){echo 'selected';} ?>>A-</option>
                  <option value="B+"<?php if($userSet['bloodtype']=="B+"){echo 'selected';} ?>>B+</option>
                  <option value="B-"<?php if($userSet['bloodtype']=="B-"){echo 'selected';} ?>>B-</option>
                  <option value="AB+"<?php if($userSet['bloodtype']=="AB+"){echo 'selected';} ?>>AB+</option>
                  <option value="AB-"<?php if($userSet['bloodtype']=="AB-"){echo 'selected';} ?>>AB-</option>
                  <option value="O+"<?php if($userSet['bloodtype']=="O+"){echo 'selected';} ?>>O+</option>
                  <option value="O-"<?php if($userSet['bloodtype']=="O-"){echo 'selected';} ?>>O-</option>
                </select><br><br>
  Address <input type="address" name="address" value="<?php echo $userSet['address']; ?>"><br><br>
    <input type="hidden" name="patient_id" value="<?php echo $userSet['patient_id']; ?>">
    <input type="submit" value="Update">
  </form>
<?php include_once 'includes/footer.php'; ?>
