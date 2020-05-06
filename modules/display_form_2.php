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

$result_form2_patientName_clinicId_studyNo = mysqli_query($conn, "SELECT patient_name,clinic_id,study_no from form2 where pid = $id");
$result_form2_date_staffName = mysqli_query($conn,"SELECT date,staff_name from form2 where pid = $id");
$result_form2_currentReactionStatus_firstHadEnl_firstPDate = mysqli_query($conn,"SELECT current_reaction_status,first_had_enl,firstPDate  from form2 where pid = $id");
$result_form2__firstSym = mysqli_query($conn,"SELECT first_sym from form2 where pid = $id");
$result_form2_checkBox2 = mysqli_query($conn,"SELECT current_anti_reaction from form2_checkbox2 where pid = $id");
$result_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal = mysqli_query($conn,"SELECT date_started_predni,current_dose_predni,current_dose_clofa,current_dose_thal  from form2 where pid = $id");
$result_form2_nfa_changeInNfi_changeInNfiDesc_eess2= mysqli_query($conn,"SELECT nfa,change_in_nfi,change_in_nfi_desc,eess_2 from form2 where pid = $id");
$result_form2_qol2Score_vasForPig2 = mysqli_query($conn,"SELECT qol_2_score,vas_for_pig_2 from form2 where pid = $id");
$result_form2_checkBox = mysqli_query($conn, "SELECT * from form2_checkbox where pid = $id");
$result_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa = mysqli_query($conn,"SELECT obs,drug_dose_predni,drug_dur_predni,drug_dose_clofa,drug_dur_clofa from form2 where pid = $id");
$result_form2_others = mysqli_query($conn, "SELECT * from form2_others where pid = $id");
$result_form2_next_asse_date = mysqli_query($conn, "SELECT next_asse_date from form2 where pid = $id");

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
        <th colspan="6" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Baseline Assessment</strong></h4></th>
        <td colspan="1" >No Profile Image</td>
        <?php ?>
      </tr>

      <?php while( $row_form2_patientName_clinicId_studyNo = mysqli_fetch_assoc($result_form2_patientName_clinicId_studyNo)){ ?> 

	      <tr>
	      	<th colspan="1" id="">Patient Name</th>
	      	<td colspan="4"><?php echo $row_form2_patientName_clinicId_studyNo['patient_name']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Clinic ID: </strong><?php echo "  ".$row_form2_patientName_clinicId_studyNo['clinic_id']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Study No: </strong><?php echo "  ".$row_form2_patientName_clinicId_studyNo['study_no']; ?></td>
	      </tr>

      <?php } ?>


       <?php while( $row_form2_date_staffName = mysqli_fetch_assoc($result_form2_date_staffName)){ ?>

	      <tr>
	      	<th colspan="1" id="">Date</th>
	      	<td colspan="5"><?php echo $row_form2_date_staffName['date']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Staff Name: </strong><?php echo "  ".$row_form2_date_staffName['staff_name']; ?></td>
	      </tr>

      <?php } ?>


      <?php while( $row_form2_currentReactionStatus_firstHadEnl_firstPDate = mysqli_fetch_assoc($result_form2_currentReactionStatus_firstHadEnl_firstPDate)){ ?>


	       <tr>
	        <th colspan="1" id="">Current Reaction Status</th>
	        <td colspan="6"><?php echo $row_form2_currentReactionStatus_firstHadEnl_firstPDate['current_reaction_status']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">When first had ENL?</th>
	        <td colspan="6"><?php echo $row_form2_currentReactionStatus_firstHadEnl_firstPDate['first_had_enl']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">When first had prednisolone for ENL?</th>
	        <td colspan="6"><?php echo $row_form2_currentReactionStatus_firstHadEnl_firstPDate['firstPDate']; ?></td>
	      </tr>

      <?php } ?>

       <tr>
        <th colspan="7" id="" style="color: blue"><u>(if applicable)This episode of ENL:</u></th>
      </tr>

      <tr>
        <th colspan="1" id="">When first symptoms(number of days ago)</th>
        <td colspan="6">
        <?php while($row_form2_firstSym = mysqli_fetch_assoc($result_form2__firstSym)){
         echo $row_form2_firstSym['first_sym']."<br>"; } 
         ?></td>
     </tr>

     <tr>
        <th colspan="1" id="">Current anti-reaction therapy</th>
        <td colspan="6">
        <?php while($row_form2_checkBox2 = mysqli_fetch_assoc($result_form2_checkBox2)){
         echo $row_form2_checkBox2['current_anti_reaction']."<br>"; } 
         ?></td>
     </tr>


       <?php while( $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal = mysqli_fetch_assoc($result_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal)){ ?>

      <tr>
        <th colspan="1" id="">Date started prednisolone(for this episode of ENL)</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['date_started_predni']; ?></td>
      </tr>

      <tr>
        <th colspan="1" id="">Current daily dose of prednislone</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_predni']; ?></td>
      </tr>

      <tr>
        <th colspan="1" id="">Current daily dose of clofazmine</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_clofa']; ?></td>
      </tr>

      <tr>
        <th colspan="1" id="">Current daily dose of Thalidamide</th>
        <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_thal']; ?></td>
      </tr>

      <?php } ?>

      <tr>
        <th colspan="7" id="" style="color: blue"><u>Physical Assessment :</u></th>
      </tr>

      <?php while( $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2 = mysqli_fetch_assoc($result_form2_nfa_changeInNfi_changeInNfiDesc_eess2)){ ?>


	       <tr>
	        <th colspan="1" id="">NFA</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['nfa']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">New NFI(i.e within past 6m,not yet treated with steroids)?</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['change_in_nfi']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">If yes?</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['change_in_nfi_desc']; ?></td>
	      </tr>

	       <tr>
	        <th colspan="1" id="">EESS</th>
	        <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['eess_2']; ?></td>
	      </tr>

      <?php } ?>

      <tr>
        <th colspan="7" id="" style="color: blue"><u>Physical Experience Assessment :</u></th>
      </tr>

      <?php while( $row_form2_qol2Score_vasForPig2 = mysqli_fetch_assoc($result_form2_qol2Score_vasForPig2)){ ?>


	       <tr>
	        <th colspan="1" id="">QOL(SF36) score</th>
	        <td colspan="6"><?php echo $row_form2_qol2Score_vasForPig2['qol_2_score']; ?></td>
	      </tr>

	      <tr>
	        <th colspan="1" id="">VAS for pigmentation</th>
	        <td colspan="6"><?php echo $row_form2_qol2Score_vasForPig2['vas_for_pig_2']; ?></td>
	      </tr>

	 <?php } ?>

	  

	 <tr>
        <th colspan="1" id="">Checklist for adverse effects of prednisolone</th>
        <td colspan="6">
        <?php while($row_form2_checkBox = mysqli_fetch_assoc($result_form2_checkBox)){
         echo $row_form2_checkBox['adverse_predni']."<br>"; } 
         ?></td>
     </tr>
     

     <tr>
        <th colspan="7" id="" style="color: blue"><u>Decision:</u></th>
      </tr>

     <?php while( $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa = mysqli_fetch_assoc($result_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa)){ ?>


	       <tr>
	        <th colspan="1" id="">1. Observation or Randomize:</th>
	        <td colspan="6"><?php echo $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['obs']; ?></td>
	      </tr>

	       <tr>
        	<th colspan="7" id="">Treatment:</th>
      	  </tr>

	      <tr>
	      	<th colspan="1" id="">Prednisolone dosage</th>
	      	<td colspan="5"><?php echo $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dose_predni']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  ".$row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dur_predni']; ?></td>
	      </tr>

	       <tr>
	      	<th colspan="1" id="">Chlofazimine dosage</th>
	      	<td colspan="5"><?php echo $row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dose_clofa']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  ".$row_form2_obs_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dur_clofa']; ?></td>
	      </tr>

	<?php } ?>	 

	 <?php while( $row_form2_others = mysqli_fetch_assoc($result_form2_others)){ ?>

	 	 <tr>
	      	<th colspan="1" id="">Other drug name</th>
	      	<td colspan="4"><?php echo $row_form2_others['others_drug_name']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Dosage:</strong><?php echo "  ".$row_form2_others['others_drug_dosage']; ?></td>
	      	<td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  ".$row_form2_others['others_drug_duration']; ?></td>
	      </tr>

	  <?php } ?>

	  <?php while( $row_form2_next_asse_date = mysqli_fetch_assoc($result_form2_next_asse_date)){ ?>


	       <tr>
	        <th colspan="1" id="">Next Assessment Date:</th>
	        <td colspan="6"><?php echo $row_form2_next_asse_date['next_asse_date']; ?></td>
	      </tr>

	  <?php } ?>
	</tbody>

</table>
</div>
</body>