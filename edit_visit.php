  <?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>
<?php
// get existing visit data from database
$query ="select * from visits where visit_id = {$_GET['visit_id']}";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);
?>

<h2>Edit Visit</h2>
  <form action="update_visit.php" method="post">
    Date <input type="date" name="date" value="<?php echo $userSet['date']; ?>"><br><br>
    History <input type="textarea" name="history" value="<?php echo $userSet['history']; ?>"><br><br>
    Diagnosis <input type="textarea" name="diagnosis" value="<?php echo $userSet['diagnosis']; ?>"><br><br>
    Prescription <input type="textarea" name="prescription" value="<?php echo $userSet['prescription']; ?>"><br><br>
    Payment Method <input type="radio" name="payment_method" value="cash" <?php if($userSet['payment_method']=='cash'){echo 'checked';} ?> > Cash
    <input type="radio" name="payment_method" value="insurance" <?php if($userSet['payment_method']=='insurance'){echo 'checked';} ?> > Insurance
    <input type="hidden" name="visit_id" value="<?php echo $userSet['visit_id']; ?>">
    <input type="hidden" name="patient_id" value="<?php echo $userSet['patient_id']; ?>">
    <input type="submit" value="Update">
  </form>
<?php include_once 'includes/footer.php'; ?>
