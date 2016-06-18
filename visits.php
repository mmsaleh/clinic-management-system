<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/connection.php'; ?>

<?php
$output="";
// make action on same page
if (isset($_POST['submit'])){
  $patient_id = $_POST['p_id'];
  //check if patient has visits or not
 $query  = "select * from visits where patient_id = $patient_id";
 $result = mysqli_query($link, $query);
 $query2 = "select * from patients where patient_id =$patient_id";
 $result2 = mysqli_query($link, $query2);
 $p_record = mysqli_fetch_assoc($result2);
 $visitSet = array();
 // fetch all patient visits and fill them in array
  while ($row = mysqli_fetch_assoc($result)){
    $visitSet[] = $row;
  } if (empty($visitSet)){
    $output.="<a href='add_visit.php?patient_id=$patient_id'>Add Visit</a>";
  } else{
    $output.= "user has visits<br><br>";
    $output.="<a href='add_visit.php?patient_id=$patient_id'>Add Visit</a>";
    $output.="<h2>Visits Table</h2>";
    $output.="<h3>Patient Name:";
    $output.="{$p_record['patient_name']}";
    $output.="</h3>";
    $output.="<table border='2'>";
    $output.="<tr><th>Visit ID</th>
              <th>Date</th>
              <th>History</th>
              <th>Diagnosis</th>
              <th>Prescription</th>
              <th>Payment Method</th>
              <th>Edit</th>
              <th>Delete</th></tr>";
            foreach ($visitSet as $visit){
              $output.="<tr>";
              $output.="<td>{$visit['visit_id']}</td>
                <td>{$visit['date']}</td>
                <td>{$visit['history']}</td>
                <td>{$visit['diagnosis']}</td>
                <td>{$visit['prescription']}</td>
                <td>{$visit['payment_method']}</td>
                <td><a href='edit_visit.php?visit_id={$visit['visit_id']}'>Edit</a></td>
                <td><a href='delete_visit.php?visit_id={$visit['visit_id']}'>Delete</a></td>            </tr>";
          }
        $output.="</table>";
      }
    }
?>

<h2>Manage Visits</h2><hr><br>
<form action="visits.php" method="post">
  Patient ID <input type="text" name="p_id" >
  <input type="submit" name="submit" value="Search">
</form>

<?php
 if(isset($output)){
    echo "$output";
  }
?>

<?php include_once 'includes/footer.php'; ?>
