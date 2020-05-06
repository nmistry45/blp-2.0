<?php

  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blp_db";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['pid'];

$result_form_4_patient_name = mysqli_query($conn, "SELECT patient_name from form4 where pid = $id");
$result_form_4_clinic_id_formDate = mysqli_query($conn, "SELECT clinic_id, formDate from form4 where pid = $id");
$result_form_4_study_no = mysqli_query($conn, "SELECT study_no from form4 where pid = $id");
$result_form_4_staff_name_current_status = mysqli_query($conn, "SELECT staff_name, current_status from form4 where pid = $id");
$result_form_4_nfa_4_eess_4 = mysqli_query($conn, "SELECT nfa_4, eess_4 from form4 where pid = $id");
$result_form_4_qol_4_vas_4 = mysqli_query($conn, "SELECT qol_4, vas_4 from form4 where pid = $id");
$result_form_4_enl_present_time_since = mysqli_query($conn, "SELECT enl_present_time_since from form4 where pid = $id");
$result_form_4_time_since_last_received_prednisolone = mysqli_query($conn, "SELECT time_since_last_received_prednisolone from form4 where pid = $id");
$result_form_4_recurrent_enl_start_predni = mysqli_query($conn, "SELECT recurrent_enl_start_predni from form4 where pid = $id");
$result_form_4_advised_admission_nextDate_nextPDate = mysqli_query($conn, "SELECT advised_admission, nextDate, nextPDate from form4 where pid = $id");
$result_form_4_checklist_predni = mysqli_query($conn, "SELECT * from form4_checkbox where pid = $id");
$result_form_4_checklist_clofa = mysqli_query($conn, "SELECT * from form4_checkbox2 where pid = $id");

?>




<!DOCTYPE html>
<meta charset="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <br><BR>
<h3>
    <center><span class="title_text"><strong>PATIENT RECORD</strong></span></center>
</h3>

<head>
  <title>Patient Record</title>
  <meta charset="utf-8">
  <meta charset="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
   
  th{
   width: 450px;
    
 }  

td{
  font-family:serif;
  text-align: left;
  font-size: 1.1em;
}

</style>
<body>
<br>
    
<div class="container">
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th colspan="6" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Post-randomisation 3 monthly routine follow up sheet (while no ENL treatment)</strong></h4></th>
        <td colspan="1" >No Profile Image</td>
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form_4_clinic_id_formDate = mysqli_fetch_assoc($result_form_4_clinic_id_formDate)){ ?>
        <td colspan="5"><?php echo $row_form_4_clinic_id_formDate['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form_4_clinic_id_formDate['formDate']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

         <?php while ( $row_form_4_patient_name = mysqli_fetch_assoc($result_form_4_patient_name)){ ?>
      <tr>
        <th colspan="1" id="">Patient Name</th>
        <td colspan="6"><?php echo $row_form_4_patient_name['patient_name']; ?></td>
      </tr>
      <?php } ?>

         <?php while ( $row_form_4_study_no = mysqli_fetch_assoc($result_form_4_study_no)){ ?>
      <tr>
        <th colspan="1" id="">Study Number</th>
        <td colspan="6"><?php echo $row_form_4_study_no['study_no']; ?></td>
      </tr>
      <?php } ?>
	  
	 <?php while ( $row_form_4_staff_name_current_status = mysqli_fetch_assoc($result_form_4_staff_name_current_status)){ ?>
      <tr>
        <th colspan="1" id="">Staff Name</th>
        <td colspan="6"><?php echo $row_form_4_staff_name_current_status['staff_name']; ?></td>
      </tr>

	  <tr>
        <th colspan="" id="">Current Status</th>
        <td colspan="6"><?php echo $row_form_4_staff_name_current_status['current_status']; ?></td>
      </tr>
      <?php } ?>

	   <tr>
        <th colspan="7" id="" style="color:blue;"><u>Physical Examination</u></th>
        <?php ?>
      </tr>

      <?php while ($row_form_4_nfa_4_eess_4 = mysqli_fetch_assoc($result_form_4_nfa_4_eess_4)){ ?>
      <tr>
        <th colspan="1" id="">NFA</th>
        <td colspan="6"><?php echo $row_form_4_nfa_4_eess_4['nfa_4']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">EESS</th>
        <td colspan="6"><?php echo $row_form_4_nfa_4_eess_4['eess_4']; ?></td>
      </tr>

      <?php } ?>
	   <tr>
        <th colspan="7" id="" style="color:blue;"><u>Patient experience assessment</u></th>
        <?php ?>
	  </tr>
      
	  <?php while ($row_form_4_qol_4_vas_4 = mysqli_fetch_assoc($result_form_4_qol_4_vas_4)){ ?>
      <tr>
        <th colspan="1" id="">QOL Score</th>
        <td colspan="6"><?php echo $row_form_4_qol_4_vas_4['qol_4']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form_4_qol_4_vas_4['vas_4']; ?></td>
      </tr>
      <?php } ?>
	  
	  <tr>
      <th colspan="" id="">Checklist for adverse effects of prednisolone</th>
            <?php while( $row_form_4_checklist_predni = mysqli_fetch_assoc($result_form_4_checklist_predni)){ ?>
        <td colspan="6"><?php echo $row_form_4_checklist_predni['checklist_predni']; ?></td>
      </tr>
      <?php } ?>

	  <tr>
      <th colspan="" id="">Checklist for adverse effects of Clofazimine</th>
            <?php while( $row_form_4_checklist_clofa = mysqli_fetch_assoc($result_form_4_checklist_clofa)){ ?>
        <td colspan="6"><?php echo $row_form_4_checklist_clofa['checklist_clofa']; ?></td>
      </tr>
      <?php } ?>
		
	  <?php while ( $row_form_4_enl_present_time_since = mysqli_fetch_assoc($result_form_4_enl_present_time_since)){ ?>
      <tr>
        <th colspan="1" id="">Time since onset of this episode</th>
        <td colspan="6"><?php echo $row_form_4_enl_present_time_since['enl_present_time_since']; ?></td>
      </tr>
      <?php } ?>
      
	  <?php while ( $row_form_4_time_since_last_received_prednisolone = mysqli_fetch_assoc($result_form_4_time_since_last_received_prednisolone)){ ?>
      <tr>
        <th colspan="1" id="">Time since last received prednisolone</th>
        <td colspan="6"><?php echo $row_form_4_time_since_last_received_prednisolone['time_since_last_received_prednisolone']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ( $row_form_4_recurrent_enl_start_predni = mysqli_fetch_assoc($result_form_4_recurrent_enl_start_predni)){ ?>
      <tr>
        <th colspan="1" id="">If recurrent ENL ,start prednisolone</th>
        <td colspan="6"><?php echo $row_form_4_recurrent_enl_start_predni['recurrent_enl_start_predni']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_4_advised_admission_nextDate_nextPDate = mysqli_fetch_assoc($result_form_4_advised_admission_nextDate_nextPDate)){ ?>
      <tr>
        <th colspan="1" id="">Advised admission</th>
        <td colspan="6"><?php echo $row_form_4_advised_admission_nextDate_nextPDate['advised_admission']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Date for next routine assessment</th>
        <td colspan="6"><?php echo $row_form_4_advised_admission_nextDate_nextPDate['nextDate']; ?></td>
      </tr>
	      
		  <tr>
        <th colspan="" id="">Date of Prednisolone review</th>
        <td colspan="6"><?php echo $row_form_4_advised_admission_nextDate_nextPDate['nextPDate']; ?></td>
      </tr>
      <?php } ?>
	 
   </tbody>
</table>
<!-- <div class="d-flex justify-content-center">
  <a href="edit.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger " >Edit Details</button></a><br><br>
</div> -->
</div>

</body>