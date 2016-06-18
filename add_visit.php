<?php
include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php';?>

<?php
if(isset($_POST['submit'])){
  //get visit values from add_visit.php
  $patient_id      =  $_REQUEST['patient_id'];
  $date            =  $_REQUEST['date'];
  $history         =  $_REQUEST['history'];
  $diagnosis       =  $_REQUEST['diagnosis'];
  $prescription    =  $_REQUEST['prescription'];
  $payment_method  =  $_REQUEST['payment_method'];

  // insert into visits table
$query ="insert into visits(patient_id, date, history, diagnosis, prescription, payment_method) values('$patient_id','$date', '$history', '$diagnosis', '$prescription', '$payment_method')";
mysqli_query($link, $query);
// redirect to visits page
header("location:visits.php");
}
?>

  <h2>Add Visit</h2>
  <form action="" method="post">
    <input type="hidden" name="patient_id" value="<?php echo $_REQUEST['patient_id']?>"/>
    Date <input type="date" name="date"><br><br>
    History <textarea name="history"></textarea><br><br>
    Diagnosis <input type="textarea" name="diagnosis"><br><br>
    Prescription <input type="textarea" name="prescription"><br><br>
    Payment Method <input type="radio" name="payment_method" value="cash">Cash
    <input type="radio" name="payment_method" value="insurance">Insurance<br><br>
    <input type="submit" value="Add" name="submit">
  </form>

<?php include_once 'includes/footer.php'; ?>
