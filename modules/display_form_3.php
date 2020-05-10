<?php
    $dbname='bombaoim_blp_db';
    $dbhost='localhost';
    $dbpass='asdf1234';
    $dbuser='bombaoim_sakec';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

	}
	$id = $_GET['pid'];

$result_form_3_patient_name = mysqli_query($conn, "SELECT patient_name from form3 where pid = $id");
$result_form_3_clinic_id_date = mysqli_query($conn, "SELECT clinic_id, date from form3 where pid = $id");
$result_form_3_study_no = mysqli_query($conn, "SELECT study_no from form3 where pid = $id");
$result_form_3_current_reaction_status_staff_name= mysqli_query($conn, "SELECT current_reaction_status,staff_name from form3 where pid = $id");
$result_form_3_nfa_3_new_nfi_3_Add1 = mysqli_query($conn, "SELECT nfa_3 ,new_nfi_3, Add1 from form3 where pid = $id");
$result_form_3_eess_3_qol_3_vas_for_pig_3 = mysqli_query($conn, "SELECT eess_3, qol_3, vas_for_pig_3 from form3 where pid = $id");
$result_form_3_rand_date= mysqli_query($conn, "SELECT rand_date from form3 where pid = $id");
$result_form_3_drug_dose_clofa_drug_dura_clofa= mysqli_query($conn, "SELECT drug_dose_clofa, drug_dura_clofa from form3 where pid = $id");
$result_form_3_drug_dose_predni_drug_dura_predni= mysqli_query($conn, "SELECT drug_dose_predni, drug_dura_predni from form3 where pid = $id");
$result_form_3_advise_ad= mysqli_query($conn, "SELECT advise_ad from form3 where pid = $id");
$result_form_3_assessment_date_prednisolone_review = mysqli_query($conn, "SELECT assessment_date, prednisolone_review from form3 where pid = $id");

$result_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_query($conn, "SELECT * from form3_others where pid = $id");

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
        <th colspan="6" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Pre-randomisation 3 monthly routine follow up sheet</strong></h4></th>
        <td colspan="1" >No Profile Image</td>
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form3_clinic_id_date = mysqli_fetch_assoc($result_form_3_clinic_id_date)){ ?>
        <td colspan="5"><?php echo $row_form3_clinic_id_date['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form3_clinic_id_date['date']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ($row_form_3_current_reaction_status_staff_name = mysqli_fetch_assoc($result_form_3_current_reaction_status_staff_name)){ ?>
      <tr>
        <th colspan="">Current Reaction Status</th>
            <td colspan="5"><?php echo $row_form_3_current_reaction_status_staff_name['current_reaction_status']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form_3_current_reaction_status_staff_name['staff_name']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_3_patient_name = mysqli_fetch_assoc($result_form_3_patient_name)){ ?>
      <tr>
        <th colspan="1" id="">Name</th>
        <td colspan="6"><?php echo $row_form_3_patient_name['patient_name']; ?></td>
      </tr>
		<?php } ?>
		
	<?php while ($row_form_3_nfa_3_new_nfi_3_Add1 = mysqli_fetch_assoc($result_form_3_nfa_3_new_nfi_3_Add1)){ ?>	
      <tr>
        <th colspan="" id="">NFA</th>
        <td colspan="6"><?php echo $row_form_3_nfa_3_new_nfi_3_Add1['nfa_3']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">New NFI</th>
        <td colspan="6"><?php echo $row_form_3_nfa_3_new_nfi_3_Add1['new_nfi_3']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">Notes</th>
        <td colspan="6"><?php echo $row_form_3_nfa_3_new_nfi_3_Add1['Add1']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_3_current_reaction_status_staff_name = mysqli_fetch_assoc($result_form_3_current_reaction_status_staff_name)){ ?>
      <tr>
        <th colspan="">Current Reaction Status</th>
            <td colspan="5"><?php echo $row_form_3_current_reaction_status_staff_name['current_reaction_status']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Staff Name</strong><?php echo "  ".$row_form_3_current_reaction_status_staff_name['staff_name']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_3_eess_3_qol_3_vas_for_pig_3 = mysqli_fetch_assoc($result_form_3_eess_3_qol_3_vas_for_pig_3)){ ?>	
      <tr>
        <th colspan="" id="">EESS Score</th>
        <td colspan="6"><?php echo $row_form_3_eess_3_qol_3_vas_for_pig_3['eess_3']; ?></td>
      </tr>
	<tr>
        <th colspan="7" id="" style="color:blue;"><u>Patient Experience Assessment:</u></th>
      </tr>

      <tr>
        <th colspan="" id="">QOL</th>
        <td colspan="6"><?php echo $row_form_3_eess_3_qol_3_vas_for_pig_3['qol_3']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form_3_eess_3_qol_3_vas_for_pig_3['vas_for_pig_3']; ?></td>
      </tr>
      <?php } ?>

	<?php while ($row_form_3_rand_date = mysqli_fetch_assoc($result_form_3_rand_date)){ ?>
      <tr>
        <th colspan="1" id="">Randomisation Date</th>
        <td colspan="6"><?php echo $row_form_3_rand_date['rand_date']; ?></td>
      </tr>
		<?php } ?>
		
		<?php while ($row_form_3_drug_dose_predni_drug_dura_predni = mysqli_fetch_assoc($result_form_3_drug_dose_predni_drug_dura_predni)){ ?>
		<tr>
        <th colspan="7" id="" style="color:blue;"><u>Treatment Prescribed:</u></th>
      </tr>

      <tr>
        <th colspan="">Drug Dosage Prednisolone</th>
            <td colspan="5"><?php echo $row_form_3_drug_dose_predni_drug_dura_predni['drug_dose_predni']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form_3_drug_dose_predni_drug_dura_predni['drug_dura_predni']; ?></td>
      </tr>
      <?php } ?>
	  
	  <?php while ($row_form_3_drug_dose_clofa_drug_dura_clofa = mysqli_fetch_assoc($result_form_3_drug_dose_clofa_drug_dura_clofa)){ ?>
      <tr>
        <th colspan="">Drug Dosage Clofa</th>
            <td colspan="5"><?php echo $row_form_3_drug_dose_clofa_drug_dura_clofa['drug_dose_clofa']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form_3_drug_dose_clofa_drug_dura_clofa['drug_dura_clofa']; ?></td>
      </tr>
      <?php } ?>
		
		
	  
	  <?php while ($row_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_fetch_assoc($result_form_3_others_drug_name_others_drug_dosage_others_drug_duration)){ ?>
      <tr>
        <th colspan="">Drug Name</th>
            <td colspan="1"><?php echo $row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_name']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Drug Dosage:</strong><?php echo "  ".$row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_dosage']; ?></td>
			<td colspan="3" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_duration']; ?></td>
      </tr>
      <?php } ?>
      

	<?php while ($row_form_3_advise_ad = mysqli_fetch_assoc($result_form_3_advise_ad)){ ?>
      <tr>
        <th colspan="1" id="">Advised Admission</th>
        <td colspan="6"><?php echo $row_form_3_advise_ad['advise_ad']; ?></td>
      </tr>
		<?php } ?>
		
     
	 <?php while ($row_form_3_assessment_date_prednisolone_review = mysqli_fetch_assoc($result_form_3_assessment_date_prednisolone_review)){ ?>
      <tr>
        <th colspan="">Assessment Date</th>
            <td colspan="5"><?php echo $row_form_3_assessment_date_prednisolone_review['assessment_date']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Prednisolone Review:</strong><?php echo "  ".$row_form_3_assessment_date_prednisolone_review['prednisolone_review']; ?></td>
      </tr>
      <?php } ?>
      
      
  </tbody>
</table>
<!-- <div class="d-flex justify-content-center">
  <a href="edit.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger " >Edit Details</button></a><br><br>
</div> -->
</div>

</body>