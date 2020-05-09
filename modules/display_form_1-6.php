<?php
session_start();
include ('logout.php');
if(!isset($_SESSION['id'])){
  echo"<script>
  alert('Please Login');
  document.location.href = 'login.php';
  </script>
  ";
}
  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blp_db";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

$id = $_GET['pid'];

$result_form_1_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
$result_form_1_clinic_id_date = mysqli_query($conn, "SELECT clinic_id, date from form1 where pid = $id");
$result_form_1_study_no = mysqli_query($conn, "SELECT study_no from form1 where pid = $id");
$result_form_1_patient_name1_sex_address = mysqli_query($conn, "SELECT patient_name1, sex, address from form1 where pid = $id");
$result_form_1_clinic_regno_staff_name = mysqli_query($conn, "SELECT clinic_regno, staff_name from form1 where pid = $id");
$result_form_1_dateMDT_dateRFT = mysqli_query($conn, "SELECT dateMDT, dateRFT from form1 where pid = $id");
$result_form_1_SmearDiagnosis_SmearDate = mysqli_query($conn, "SELECT SmearDiagnosis, SmearDate from form1 where pid = $id");
$result_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent 
= mysqli_query($conn, "SELECT mdiag, Age, Weight, Height, BMI, no_contra_indication_steroids, able_to_attend_regularly, pregnant, tuberculosis, diabetes, other_serious_illness, other_illness_desc, inform_consent
from form1 where pid = $id");
$result_form_1_allocate_study_no_history_of_enl = mysqli_query($conn, "SELECT allocate_study_no, history_of_enl from form1 where pid = $id");
$result_form_1_contact_no = mysqli_query($conn, "SELECT * from form1_contact where pid = $id");

$result_form2_date = mysqli_query($conn,"SELECT date from form2 where pid = $id");
$result_form2_currentReactionStatus_firstHadEnl_firstPDate = mysqli_query($conn,"SELECT current_reaction_status,first_had_enl,firstPDate  from form2 where pid = $id");
$result_form2__firstSym = mysqli_query($conn,"SELECT first_sym from form2 where pid = $id");
$result_form2_checkBox2 = mysqli_query($conn,"SELECT * from form2_checkbox2 where pid = $id");
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
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>1. Initial Assessment Sheet</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic ID:</th>
        <?php while( $row_form1_clinic_id_date = mysqli_fetch_assoc($result_form_1_clinic_id_date)){ ?>
        <td colspan="5"><?php echo $row_form1_clinic_id_date['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form1_clinic_id_date['date']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ($row_form_1_clinic_regno_staff_name = mysqli_fetch_assoc($result_form_1_clinic_regno_staff_name)){ ?>
      <tr>
        <th colspan="">Patient Code</th>
            <td colspan="5"><?php echo $row_form_1_clinic_regno_staff_name['clinic_regno']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form_1_clinic_regno_staff_name['staff_name']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_1_patient_name1_sex_address = mysqli_fetch_assoc($result_form_1_patient_name1_sex_address)){ ?>
      <tr>
        <th colspan="1" id="">Name</th>
        <td colspan="6"><?php echo $row_form_1_patient_name1_sex_address['patient_name1']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Sex</th>
        <td colspan="6"><?php echo $row_form_1_patient_name1_sex_address['sex']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Address</th>
        <td colspan="6"><?php echo $row_form_1_patient_name1_sex_address['address']; ?></td>
      </tr>
      <?php } ?>

      <tr>
        <th colspan="" id="">Contact Number</th>
        <td colspan="6">
        <?php while($row_form_1_contact_no = mysqli_fetch_assoc($result_form_1_contact_no)){
         echo $row_form_1_contact_no['contact_no']."<br>"; } 
         ?></td>
      </tr>

      <tr>
      <th colspan="1" id="">Date of starting MDT</th>
            <?php while( $row_form_1_dateMDT_dateRFT = mysqli_fetch_assoc($result_form_1_dateMDT_dateRFT)){ ?>
        <td colspan="5"><?php echo $row_form_1_dateMDT_dateRFT['dateMDT']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date of starting RFT:</strong><?php echo "  ".$row_form_1_dateMDT_dateRFT['dateRFT']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="1" id="">Smear at Diagnosis</th>
            <?php while( $row_form_1_SmearDiagnosis_SmearDate = mysqli_fetch_assoc($result_form_1_SmearDiagnosis_SmearDate)){ ?>
        <td colspan="5"><?php echo $row_form_1_SmearDiagnosis_SmearDate['SmearDiagnosis']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Smear Date:</strong><?php echo "  ".$row_form_1_SmearDiagnosis_SmearDate['SmearDate']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent = mysqli_fetch_assoc($result_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue"><u>Eligibility Criteria for Screening:</u></th>
      </tr>
      <tr>
        <th colspan="1" id="">Withing 24 Months of Diagnosis?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['mdiag']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Age</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['Age']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Weight</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['Weight']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Height</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['Height']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">BMI</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['BMI']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">No contra-indications to steroids / to clofa</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['no_contra_indication_steroids']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Able to attend regularly?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['able_to_attend_regularly']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Pregnant?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['pregnant']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Tuberculosis?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['tuberculosis']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Diabetes?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['diabetes']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Serious Illness</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['other_serious_illness']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Serious Illness Description</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['other_illness_desc']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Does patient give informed consent?</th>
        <td colspan="6"><?php echo $row_form_1_mdiag_Age_Weight_Height_BMI_no_contra_indication_steroids_able_to_attend_regularly_pregnant_tuberculosis_diabetes_other_serious_illness_other_illness_desc_inform_consent['inform_consent']; ?></td>
      </tr>
      <?php } ?>

      <?php while ($row_form_1_allocate_study_no_history_of_enl = mysqli_fetch_assoc($result_form_1_allocate_study_no_history_of_enl)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue"><u>Enrolment for Observations:</u></th>
      </tr>

      <tr>
        <th colspan="1" id="">Allocated Study Number</th>
        <td colspan="6"><?php echo $row_form_1_allocate_study_no_history_of_enl['allocate_study_no']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">History of ENL?</th>
        <td colspan="6"><?php echo $row_form_1_allocate_study_no_history_of_enl['history_of_enl']; ?></td>
      </tr>
      <?php } ?>
      
  </tbody>
</table>
</div>

<div class="container">
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>2. Baseline Assessment</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

       <?php while( $row_form2_date = mysqli_fetch_assoc($result_form2_date)){ ?>

	      <tr>
	      	<th colspan="1" id="">Date</th>
	      	<td colspan="7"><?php echo $row_form2_date['date']; ?></td>
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
        <th colspan="7" id="" style="color: blue"><u>Current anti reaction :</u></th>
      </tr>

      <tr>
      <?php while ($row_form2_checkBox2 = mysqli_fetch_assoc($result_form2_checkBox2)){ ?>
            <td colspan="2" style="text-align:left"><strong>Prednisolone:</strong><?php echo "  ".$row_form2_checkBox2['Prednisolone']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Clofazmine:</strong><?php echo "  ".$row_form2_checkBox2['Clofazmine']; ?></td>
            <td colspan="3" style="text-align:left"><strong>Thalidamide:</strong><?php echo "  ".$row_form2_checkBox2['Thalidamide']; ?></td>
      <?php } ?>
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
        <th colspan="7" id="" style="color: blue"><u>Physical Assessment:</u></th>
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
        <th colspan="7" id="" style="color: blue"><u>Physical Experience Assessment:</u></th>
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
        <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of prednisolone :</u></th>
      </tr>

     <?php while ($row_form2_checkBox = mysqli_fetch_assoc($result_form2_checkBox)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form2_checkBox['Mild_Indigestion']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  ".$row_form2_checkBox['Peptic_Ulcer']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  ".$row_form2_checkBox['Striae']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  ".$row_form2_checkBox['Herpes_Zoster']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form2_checkBox['Hyperglycaemia']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  ".$row_form2_checkBox['Hypertension']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  ".$row_form2_checkBox['Malaena']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  ".$row_form2_checkBox['Glaucoma']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Truncal Obesity  :</strong><?php echo $row_form2_checkBox['Truncal_Obesity']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  ".$row_form2_checkBox['Osteoporosis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  ".$row_form2_checkBox['Moon_Face']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  ".$row_form2_checkBox['Psychosis']; ?></td>
  </tr>
  <tr>
        
        <td colspan="2" style="text-align:left"><strong>Gastrointestinal bleeding :</strong><?php echo $row_form2_checkBox['Gastrointestinal_bleeding']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  ".$row_form2_checkBox['Haematemesis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  ".$row_form2_checkBox['Extensive_Ringworm']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  ".$row_form2_checkBox['Acne']; ?></td>
  </tr>
    <?php } ?>

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

<div class="d-flex justify-content-center">
  <a href="edit_form_1.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger ">Edit Form1 Details</button></a><br><br>
  <a href="edit_form_2.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger ">Edit Form2 Details</button></a><br><br>
  <br><br>
</div>

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

$form_3 = mysqli_query($conn, "Select * from form3 where pid=$id");

$form_4 = mysqli_query($conn, "Select * from form4 where pid=$id");

$form_5 = mysqli_query($conn, "Select * from form5 where pid=$id");

$form_6 = mysqli_query($conn, "Select * from form6 where pid=$id");

?>
    
<div class="container">
<?php 
  while($row_form3 = mysqli_fetch_assoc($form_3)){
  ?>
  <table class="table table-bordered">

   <?php
   $result_form_3_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
   $result_form_3_clinic_id = mysqli_query($conn, "SELECT clinic_id from form1 where pid = $id");
   $result_form_3_study_no = mysqli_query($conn, "SELECT study_no from form1 where pid = $id");
   $result_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_query($conn, "SELECT * from form3_others where pid = $id");
   ?>

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>3. Pre-randomisation 3 monthly routine follow up sheet</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form3_clinic_id = mysqli_fetch_assoc($result_form_3_clinic_id)){ ?>
        <td colspan="5"><?php echo $row_form3_clinic_id['clinic_id']; ?></td>
        <?php } ?>
        <?php  ?>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form3['date']; ?></td>
      </tr>
        <?php  ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>
      
      <tr>
        <th colspan="">Current Reaction Status</th>
            <td colspan="5"><?php echo $row_form3['current_reaction_status']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form3['staff_name']; ?></td>
      </tr>
      <?php  ?>

      <?php while ($row_form_3_patient_name = mysqli_fetch_assoc($result_form_3_patient_name)){ ?>
      <tr>
        <th colspan="1" id="">Name</th>
        <td colspan="6"><?php echo $row_form_3_patient_name['patient_name']; ?></td>
      </tr>
    <?php } ?>
    
    <?php while ( $row_form_3_study_no = mysqli_fetch_assoc($result_form_3_study_no)){ ?>
      <tr>
        <th colspan="1" id="">Study Number</th>
        <td colspan="6"><?php echo $row_form_3_study_no['study_no']; ?></td>
      </tr>
      <?php } ?>
		
	<?php  ?>	
      <tr>
        <th colspan="" id="">NFA</th>
        <td colspan="6"><?php echo $row_form3['nfa_3']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">New NFI</th>
        <td colspan="6"><?php echo $row_form3['new_nfi_3']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">Notes</th>
        <td colspan="6"><?php echo $row_form3['Add1']; ?></td>
      </tr>
      <?php  ?>
	  
	  <?php  ?>
	  
	  <?php  ?>	
      <tr>
        <th colspan="" id="">EESS Score</th>
        <td colspan="6"><?php echo $row_form3['eess_3']; ?></td>
      </tr>
	<tr>
        <th colspan="7" id="" style="color:blue;"><u>Patient Experience Assessment:</u></th>
      </tr>

      <tr>
        <th colspan="" id="">QOL</th>
        <td colspan="6"><?php echo $row_form3['qol_3']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form3['vas_for_pig_3']; ?></td>
      </tr>
      <?php  ?>

	<?php  ?>
      <tr>
        <th colspan="1" id="">Randomisation Date</th>
        <td colspan="6"><?php echo $row_form3['rand_date']; ?></td>
      </tr>
		<?php  ?>
		
		<?php  ?>
		<tr>
        <th colspan="7" id="" style="color:blue;"><u>Treatment Prescribed:</u></th>
      </tr>

      <tr>
        <th colspan="">Drug Dosage Prednisolone</th>
            <td colspan="5"><?php echo $row_form3['drug_dose_predni']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form3['drug_dura_predni']; ?></td>
      </tr>
      <?php  ?>
	  
	  <?php  ?>
      <tr>
        <th colspan="">Drug Dosage Clofa</th>
            <td colspan="5"><?php echo $row_form3['drug_dose_clofa']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form3['drug_dura_clofa']; ?></td>
      </tr>
      <?php  ?>
		
	  <?php while ($row_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_fetch_assoc($result_form_3_others_drug_name_others_drug_dosage_others_drug_duration)){ ?>
      <tr>
        <th colspan="">Drug Name</th>
            <td colspan="1"><?php echo $row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_name']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Drug Dosage:</strong><?php echo "  ".$row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_dosage']; ?></td>
			<td colspan="3" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  ".$row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_duration']; ?></td>
      </tr>
      <?php } ?>
      
	<?php  ?>
      <tr>
        <th colspan="1" id="">Advised Admission</th>
        <td colspan="6"><?php echo $row_form3['advise_ad']; ?></td>
      </tr>
		<?php  ?>
     
	 <?php  ?>
      <tr>
        <th colspan="">Assessment Date</th>
            <td colspan="5"><?php echo $row_form3['assessment_date']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Prednisolone Review:</strong><?php echo "  ".$row_form3['prednisolone_review']; ?></td>
      </tr>
      <?php  ?>

  </tbody>
</table>
<?php } ?>
</div>

<div class="container">
<?php 
  while($row_form4 = mysqli_fetch_assoc($form_4)){
  ?>
  <table class="table table-bordered">

  <?php 
    $result_form_4_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
    $result_form_4_clinic_id = mysqli_query($conn, "SELECT clinic_id from form1 where pid = $id");
    $result_form_4_study_no = mysqli_query($conn, "SELECT study_no from form1 where pid = $id");
    $result_form_4_checklist_predni = mysqli_query($conn, "SELECT * from form4_checkbox where pid = $id");
    $result_form_4_checklist_clofa = mysqli_query($conn, "SELECT * from form4_checkbox2 where pid = $id");
    ?>

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>4. Post-randomisation 3 monthly routine follow up sheet (while no ENL treatment)</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form_4_clinic_id = mysqli_fetch_assoc($result_form_4_clinic_id)){ ?>
        <td colspan="5"><?php echo $row_form_4_clinic_id['clinic_id']; ?></td>
        <?php } ?>
        <?php  ?>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form4['formDate']; ?></td>
      </tr>
        <?php  ?>

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
	  
	 <?php  ?>
      <tr>
        <th colspan="1" id="">Staff Name</th>
        <td colspan="6"><?php echo $row_form4['staff_name']; ?></td>
      </tr>

	  <tr>
        <th colspan="" id="">Current Status</th>
        <td colspan="6"><?php echo $row_form4['current_status']; ?></td>
      </tr>
      <?php  ?>

	   <tr>
        <th colspan="7" id="" style="color:blue;"><u>Physical Examination</u></th>
        <?php ?>
      </tr>

      <?php  ?>
      <tr>
        <th colspan="1" id="">NFA</th>
        <td colspan="6"><?php echo $row_form4['nfa_4']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">EESS</th>
        <td colspan="6"><?php echo $row_form4['eess_4']; ?></td>
      </tr>

      <?php  ?>
	   <tr>
        <th colspan="7" id="" style="color:blue;"><u>Patient experience assessment</u></th>
        <?php ?>
	  </tr>
      
	  <?php  ?>
      <tr>
        <th colspan="1" id="">QOL Score</th>
        <td colspan="6"><?php echo $row_form4['qol_4']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form4['vas_4']; ?></td>
      </tr>
      <?php  ?>
	  
      <tr>
        <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of prednisolone :</u></th>
      </tr>
	  
      <?php while ($row_form_4_checklist_predni = mysqli_fetch_assoc($result_form_4_checklist_predni)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form_4_checklist_predni['Mild_Indigestion']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  ".$row_form_4_checklist_predni['Peptic_Ulcer']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  ".$row_form_4_checklist_predni['Striae']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  ".$row_form_4_checklist_predni['Herpes_Zoster']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form_4_checklist_predni['Hyperglycaemia']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  ".$row_form_4_checklist_predni['Hypertension']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  ".$row_form_4_checklist_predni['Malaena']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  ".$row_form_4_checklist_predni['Glaucoma']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Truncal Obesity  :</strong><?php echo $row_form_4_checklist_predni['Truncal_Obesity']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  ".$row_form_4_checklist_predni['Osteoporosis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  ".$row_form_4_checklist_predni['Moon_Face']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  ".$row_form_4_checklist_predni['Psychosis']; ?></td>
  </tr>
  <tr>
        
        <td colspan="2" style="text-align:left"><strong>Gastrointestinal bleeding :</strong><?php echo $row_form_4_checklist_predni['Gastrointestinal_bleeding']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  ".$row_form_4_checklist_predni['Haematemesis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  ".$row_form_4_checklist_predni['Extensive_Ringworm']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  ".$row_form_4_checklist_predni['Acne']; ?></td>
  </tr>
    <?php } ?>

    <tr>
        <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of Clofazimine :</u></th>
      </tr>

    <?php while ($row_form_4_checklist_clofa = mysqli_fetch_assoc($result_form_4_checklist_clofa)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Mild Indigestion: </strong><?php echo $row_form_4_checklist_clofa['Mild_Indigestion']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Vomiting: </strong><?php echo "  ".$row_form_4_checklist_clofa['Vomiting']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Nausea: </strong><?php echo "  ".$row_form_4_checklist_clofa['Nausea']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Abdominal Pain: </strong><?php echo "  ".$row_form_4_checklist_clofa['Abdominal_Pain']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Diarrhoea,Acute: </strong><?php echo $row_form_4_checklist_clofa['Diarrhoea,Acute']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Ichthyosis: </strong><?php echo "  ".$row_form_4_checklist_clofa['Ichthyosis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Weight loss: </strong><?php echo "  ".$row_form_4_checklist_clofa['Weight_loss']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Conjuctiva: </strong><?php echo "  ".$row_form_4_checklist_clofa['Conjuctiva']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Persistent Indigestion: </strong><?php echo $row_form_4_checklist_clofa['Persistent_Indigestion']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Diarrhoea,Chronic: </strong><?php echo "  ".$row_form_4_checklist_clofa['Diarrhoea,Chronic']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Chronic Dysentery: </strong><?php echo "  ".$row_form_4_checklist_clofa['Chronic_Dysentery']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Skin Discolouration: </strong><?php echo "  ".$row_form_4_checklist_clofa['Skin_Discolouration']; ?></td>
  </tr>

    <?php } ?>
		
	  <?php  ?>
      <tr>
        <th colspan="1" id="">Time since onset of this episode</th>
        <td colspan="6"><?php echo $row_form4['enl_present_time_since']; ?></td>
      </tr>
      <?php  ?>
      
	  <?php  ?>
      <tr>
        <th colspan="1" id="">Time since last received prednisolone</th>
        <td colspan="6"><?php echo $row_form4['time_since_last_received_prednisolone']; ?></td>
      </tr>
      <?php  ?>
	  
	  <?php  ?>
      <tr>
        <th colspan="1" id="">If recurrent ENL ,start prednisolone</th>
        <td colspan="6"><?php echo $row_form4['recurrent_enl_start_predni']; ?></td>
      </tr>
      <?php  ?>
	  
	  <?php  ?>
      <tr>
        <th colspan="1" id="">Advised admission</th>
        <td colspan="6"><?php echo $row_form4['advised_admission']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Date for next routine assessment</th>
        <td colspan="6"><?php echo $row_form4['nextDate']; ?></td>
      </tr>
	      
		  <tr>
        <th colspan="" id="">Date of Prednisolone review</th>
        <td colspan="6"><?php echo $row_form4['nextPDate']; ?></td>
      </tr>
      <?php  ?>
     
   </tbody>
</table>
<?php } ?>
</div>

<div class="container">
<?php 
  while($row_form5 = mysqli_fetch_assoc($form_5)){
  ?>
  <table class="table table-bordered">

  <?php 
    $result_form5_cid = mysqli_query($conn, "SELECT clinic_id from form1 where pid = $id");
    $result_form5_ptn = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
    $result_form5_sn = mysqli_query($conn, "SELECT study_no from form1 where pid = $id");
    $result_form5_ad_pred  = mysqli_query($conn, "SELECT * from form5_checkbox where pid = $id");
    $result_form5_ad_clofa  = mysqli_query($conn, "SELECT * from form5_checkbox2 where pid = $id");
     ?>

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>5. Clinical Record Sheet</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>

      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form5_cid = mysqli_fetch_assoc($result_form5_cid)){ ?>
        <td colspan="5"><?php echo $row_form5_cid['clinic_id']; ?></td>
        <?php } ?>
        <?php  ?>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form5['date']; ?></td>
      </tr>
        <?php  ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ( $row_form5_ptn = mysqli_fetch_assoc($result_form5_ptn)){ ?>
      <tr>
        <th colspan="">Patient Name</th>
            <td colspan="2"><?php echo $row_form5_ptn['patient_name']; ?></td>
            <?php } ?>
            <?php  ?>
            <td colspan="2" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form5['staff_name']; ?></td>
            <?php  ?>
            <?php while ( $row_form5_sn = mysqli_fetch_assoc($result_form5_sn)){ ?>
            <td colspan="2" style="text-align:left"><strong>Study No:</strong><?php echo "  ".$row_form5_sn['study_no']; ?></td>
      </tr>
      <?php } ?>

      <?php  ?>
      <tr>
        <th colspan="1" id="">Patient Since Last Visit</th>
        <td colspan="6"><?php echo $row_form5['patient_since_last_visit']; ?></td>
      </tr>
      <?php  ?>

      <tr>
        <th colspan="7" id="" style="color:blue;"><u>Current Medication:</u></th>
      </tr>
        <?php  ?>
        <tr>
          <td colspan=""><strong>Prednisolone:</strong><?php echo "  ".$row_form5['prednisolone_5']; ?></td>
          <td colspan="7" style="text-align:left"><strong>Clofazimine:</strong><?php echo "  ".$row_form5['clofazimine_vitamins']; ?></td>
        </tr>
        <?php  ?>

      <tr>
      <th colspan="7" id="" style="color:blue;"><u>Physical assessment:</u></th>
      </tr>
        <tr>
            <?php  ?>
        <td colspan=""><strong>NFA:</strong><?php echo " " .$row_form5['nfa_5']; ?></td>
        <td colspan="7" style="text-align:left"><strong>NFI:</strong><?php echo "  ".$row_form5['new_nfi_5']; ?></td>
      </tr>
      <?php  ?>

      <tr>
      <th colspan="" id="">NFI and EESS</th>
            <?php  ?>
        <td colspan="3"><strong>If Yes:</strong><?php echo " ".$row_form5['if_yes']; ?></td>
        <td colspan="3" style="text-align:left"><strong>EESS:</strong><?php echo "  ".$row_form5['eess_score_5']; ?></td>
      </tr>
      <?php  ?>

      <tr>
        <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of prednisolone :</u></th>
      </tr>
	  
      <?php while ($row_form5_ad_pred = mysqli_fetch_assoc($result_form5_ad_pred)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form5_ad_pred['Mild_Indigestion']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  ".$row_form5_ad_pred['Peptic_Ulcer']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  ".$row_form5_ad_pred['Striae']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  ".$row_form5_ad_pred['Herpes_Zoster']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form5_ad_pred['Hyperglycaemia']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  ".$row_form5_ad_pred['Hypertension']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  ".$row_form5_ad_pred['Malaena']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  ".$row_form5_ad_pred['Glaucoma']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Truncal Obesity  :</strong><?php echo $row_form5_ad_pred['Truncal_Obesity']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  ".$row_form5_ad_pred['Osteoporosis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  ".$row_form5_ad_pred['Moon_Face']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  ".$row_form5_ad_pred['Psychosis']; ?></td>
  </tr>
  <tr>
        
        <td colspan="2" style="text-align:left"><strong>Gastrointestinal bleeding :</strong><?php echo $row_form5_ad_pred['Gastrointestinal_bleeding']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  ".$row_form5_ad_pred['Haematemesis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  ".$row_form5_ad_pred['Extensive_Ringworm']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  ".$row_form5_ad_pred['Acne']; ?></td>
  </tr>
    <?php } ?>

    <tr>
        <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of Clofazimine :</u></th>
      </tr>

    <?php while ($row_form5_ad_clofa = mysqli_fetch_assoc($result_form5_ad_clofa)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Mild Indigestion: </strong><?php echo $row_form5_ad_clofa['Mild_Indigestion']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Vomiting: </strong><?php echo "  ".$row_form5_ad_clofa['Vomiting']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Nausea: </strong><?php echo "  ".$row_form5_ad_clofa['Nausea']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Abdominal Pain: </strong><?php echo "  ".$row_form5_ad_clofa['Abdominal_Pain']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Diarrhoea,Acute: </strong><?php echo $row_form5_ad_clofa['Diarrhoea,Acute']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Ichthyosis: </strong><?php echo "  ".$row_form5_ad_clofa['Ichthyosis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Weight loss: </strong><?php echo "  ".$row_form5_ad_clofa['Weight_loss']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Conjuctiva: </strong><?php echo "  ".$row_form5_ad_clofa['Conjuctiva']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Persistent Indigestion: </strong><?php echo $row_form5_ad_clofa['Persistent_Indigestion']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Diarrhoea,Chronic: </strong><?php echo "  ".$row_form5_ad_clofa['Diarrhoea,Chronic']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Chronic Dysentery: </strong><?php echo "  ".$row_form5_ad_clofa['Chronic_Dysentery']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Skin Discolouration: </strong><?php echo "  ".$row_form5_ad_clofa['Skin_Discolouration']; ?></td>
  </tr>

    <?php } ?>

      <tr>
      <th colspan="" id="">Is Patient Worst and Time to began Flare</th>
            <?php  ?>
        <td colspan="3"><strong>If Patient Worst:</strong><?php echo " ".$row_form5['patient_worse']; ?></td>
        <td colspan="3"><strong>Time since flare began:</strong><?php echo " ".$row_form5['time_since_flare_began']; ?></td>
      </tr>
      <?php  ?>

      <tr>
      <th colspan="7" id="" style="color:blue;"><u>Treatment Prescribed:</u></th>
      </tr>
      <tr>
      <th colspan="" id="">Continue standard steroid course</th>
            <?php  ?>
        <td colspan="3"><strong>Dose:</strong><?php echo " ".$row_form5['dose_std_course']; ?></td>
        <td colspan="3"><strong>Duration:</strong><?php echo " ".$row_form5['dura_std_course']; ?></td>
      </tr>
      <?php  ?>

       <tr>
      <th colspan="" id="">Additional Prednisolone</th>
            <?php  ?>
        <td colspan="3"><strong>Dose:</strong><?php echo " ".$row_form5['dose_add_predni']; ?></td>
        <td colspan="3"><strong>Duration:</strong><?php echo " ".$row_form5['dura_add_predni']; ?></td>
      </tr>
      <?php  ?>

      <tr>
      <th colspan="" id="">Advised admission</th>
            <?php  ?>
        <td colspan="3"><strong>Advised Admission:</strong><?php echo " ".$row_form5['advised_admission']; ?></td>
        <td colspan="3"><strong>Date of Next Assessment:</strong><?php echo " ".$row_form5['date_of_next_assessment_5']; ?></td>
      </tr>
      <?php  ?>
      
  </tbody>
</table>
<?php } ?>
</div>

<div class="container">
<?php 
  while($row_form6 = mysqli_fetch_assoc($form_6)){
  ?>
  <table class="table table-bordered">

  <?php 
    $result_form_6_clinic_id = mysqli_query($conn, "SELECT clinic_id from form1 where pid = $id");
    $result_form_6_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
    $result_form_6_study_no = mysqli_query($conn, "SELECT study_no from form1 where pid = $id");
    $result_form6_ad_pred  = mysqli_query($conn, "SELECT * from form6_checkbox where pid = $id");
    $result_form6_ad_clofa  = mysqli_query($conn, "SELECT * from form6_checkbox2 where pid = $id");
    $result_form6_with  = mysqli_query($conn, "SELECT * from form6_checkbox3 where pid = $id");
    ?>

    <tbody>
      <tr>
        <th colspan="7" id="" style="vertical-align:middle; text-align:center;"><h4><strong>6. Final follow up sheet at end of 24m from randomization (or at withdrawal)</strong></h4></th>
        <!-- <td colspan="1" >No Profile Image</td> -->
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form_6_clinic_id = mysqli_fetch_assoc($result_form_6_clinic_id)){ ?>
        <td colspan="5"><?php echo $row_form_6_clinic_id['clinic_id']; ?></td>
        <?php } ?>
        <?php  ?>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form6['date']; ?></td>
      </tr>
        <?php  ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ( $row_form_6_patient_name = mysqli_fetch_assoc($result_form_6_patient_name)){ ?>
      <tr>
        <th colspan="1" id="">Patient Name</th>
        <td colspan="6"><?php echo $row_form_6_patient_name['patient_name']; ?></td>
      </tr>
      <?php } ?>
	 
		<tr>
        <?php  ?>
        <td colspan=""><strong>Staff Name:</strong><?php echo " " .$row_form6['staff_name']; ?></td>
        <?php  ?>
        <?php while( $row_form_6_study_no = mysqli_fetch_assoc($result_form_6_study_no)){ ?>
        <td colspan="7" style="text-align:left"><strong>Study No:</strong><?php echo "  ".$row_form_6_study_no['study_no']; ?></td>
      <?php } ?>
    </tr>

		<?php  ?>
      <tr>
        <th colspan="1" id="">Current Status</th>
        <td colspan="6"><?php echo $row_form6['current_status']; ?></td>
      </tr>
      <?php  ?>
		
      <?php  ?>
      <tr>
        <th colspan="7" id="" style="color: blue;"><u>Physical Assessment:</u></th>
      </tr>
	  <tr>
        <th colspan="1" id="">NFA</th>
        <td colspan="6"><?php echo $row_form6['nfa']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">EESS</th>
        <td colspan="6"><?php echo $row_form6['eess']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">QOL Score</th>
        <td colspan="6"><?php echo $row_form6['qol']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form6['vas']; ?></td>
      </tr>
      <?php  ?>

		<?php  ?>
      <tr>
        <th colspan="1" id="">Current Anti-Reaction Therapy</th>
        <td colspan="6"><?php echo   $row_form6['current_antireaction_therapy']; ?></td>
      </tr>
      <?php  ?>
		
		<tr>
        <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of prednisolone :</u></th>
      </tr>
	  
      <?php while ($row_form6_ad_pred = mysqli_fetch_assoc($result_form6_ad_pred)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form6_ad_pred['Mild_Indigestion']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  ".$row_form6_ad_pred['Peptic_Ulcer']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  ".$row_form6_ad_pred['Striae']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  ".$row_form6_ad_pred['Herpes_Zoster']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form6_ad_pred['Hyperglycaemia']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  ".$row_form6_ad_pred['Hypertension']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  ".$row_form6_ad_pred['Malaena']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  ".$row_form6_ad_pred['Glaucoma']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Truncal Obesity  :</strong><?php echo $row_form6_ad_pred['Truncal_Obesity']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  ".$row_form6_ad_pred['Osteoporosis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  ".$row_form6_ad_pred['Moon_Face']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  ".$row_form6_ad_pred['Psychosis']; ?></td>
  </tr>
  <tr>
        
        <td colspan="2" style="text-align:left"><strong>Gastrointestinal bleeding :</strong><?php echo $row_form6_ad_pred['Gastrointestinal_bleeding']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  ".$row_form6_ad_pred['Haematemesis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  ".$row_form6_ad_pred['Extensive_Ringworm']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  ".$row_form6_ad_pred['Acne']; ?></td>
  </tr>
    <?php } ?>

    <tr>
        <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of Clofazimine :</u></th>
      </tr>

    <?php while ($row_form6_ad_clofa = mysqli_fetch_assoc($result_form6_ad_clofa)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Mild Indigestion: </strong><?php echo $row_form6_ad_clofa['Mild_Indigestion']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Vomiting: </strong><?php echo "  ".$row_form6_ad_clofa['Vomiting']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Nausea: </strong><?php echo "  ".$row_form6_ad_clofa['Nausea']; ?></td>
            <td colspan="1" style="text-align:left"><strong>Abdominal Pain: </strong><?php echo "  ".$row_form6_ad_clofa['Abdominal_Pain']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Diarrhoea,Acute: </strong><?php echo $row_form6_ad_clofa['Diarrhoea,Acute']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Ichthyosis: </strong><?php echo "  ".$row_form6_ad_clofa['Ichthyosis']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Weight loss: </strong><?php echo "  ".$row_form6_ad_clofa['Weight_loss']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Conjuctiva: </strong><?php echo "  ".$row_form6_ad_clofa['Conjuctiva']; ?></td>
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Persistent Indigestion: </strong><?php echo $row_form6_ad_clofa['Persistent_Indigestion']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Diarrhoea,Chronic: </strong><?php echo "  ".$row_form6_ad_clofa['Diarrhoea,Chronic']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Chronic Dysentery: </strong><?php echo "  ".$row_form6_ad_clofa['Chronic_Dysentery']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Skin Discolouration: </strong><?php echo "  ".$row_form6_ad_clofa['Skin_Discolouration']; ?></td>
  </tr>

    <?php } ?>
		
	<?php  ?>
      <tr>
        <th colspan="7" id="" style="color: blue;"><u>Summary of Observations:</u></th>
      </tr>
	  <tr>
        <th colspan="1" id="">Number of weeks extra vitamins received</th>
        <td colspan="6"><?php echo $row_form6['no_weeks_extra_clofazimine']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">ENL at Randomization</th>
        <td colspan="6"><?php echo $row_form6['enl_at_randomisation']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Duration of 1st Episode</th>
        <td colspan="6"><?php echo $row_form6['duration_first_episode']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">Flare of ENL while on steroid</th>
        <td colspan="6"><?php echo $row_form6['flare_of_enl']; ?></td>
      </tr>
      <?php  ?>

	<tr>
        <?php  ?>
        <td colspan=""><strong>First flare after how long: </strong><?php echo $row_form6['if_flare_how_long']; ?></td>
        <td colspan="7" style="text-align:left"><strong>EESS at flare:</strong><?php echo "  ".$row_form6['eess_at_flare']; ?></td>
      </tr>
      <?php  ?>
	<tr>
      
        <?php  ?>
        <td colspan=""><strong>Recurrent ENL more than 27 days after end of steroid course:</strong><?php echo"        ".$row_form6['recurrent_enl_steroids']; ?></td>
        <td colspan="7" style="text-align:left"><strong>Chronic ENL continued after randomization:</strong><?php echo "  ".$row_form6['recurrent_enl_steroids']; ?></td>
      
      <?php  ?></tr>
		
		<?php  ?>
      <tr>
        <th colspan="1" id="">Total Steriod Consumed</th>
        <td colspan="6"><?php echo $row_form6['total_steroids_consumed']; ?></td>
      </tr>
      <?php  ?>

		<?php  ?>
      <tr>
        <th colspan="1" id="">Change in NFA Baseline to end</th>
        <td colspan="6"><?php echo $row_form6['change_in_nfa']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">If yes?</th>
        <td colspan="6"><?php echo $row_form6['change_in_nfa_desc']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Change in QOL Score baseline to end</th>
        <td colspan="6"><?php echo $row_form6['change_in_qol']; ?></td>
      </tr>
	  
      <?php  ?>

		<tr>
        <th colspan="1" id="">Adverse Effects of drugs</th>
        <?php  ?>
        <td colspan="5"><?php echo $row_form6['adverse_effect_of_drug']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Adverse Effect:</strong><?php echo "  ".$row_form6['drug_desc']; ?></td>
      </tr>
        <?php  ?>

		<tr>
        <th colspan="7" id="" style="color: blue"><u>Reason of withdrawal before 24months observation:</u></th>
      </tr>

    <?php while ($row_form6_with = mysqli_fetch_assoc($result_form6_with)){ ?>
      <tr>
        
            <td colspan="2" style="text-align:left"><strong>Protocol Violation: </strong><?php echo $row_form6_with['Protocol_Violation']; ?></td>
            <td colspan="3" style="text-align:left"><strong>Patient refused followup: </strong><?php echo "  ".$row_form6_with['Patient_refused_followup']; ?></td>
            <td colspan="3" style="text-align:left"><strong>Uncontrolled reaction: </strong><?php echo "  ".$row_form6_with['Uncontrolled_reaction']; ?></td>
            
      </tr>
      <tr>
        
        <td colspan="2" style="text-align:left"><strong>Severe adverse effects: </strong><?php echo $row_form6_with['Severe_adverse_effects']; ?></td>
        <td colspan="3" style="text-align:left"><strong>Died: </strong><?php echo "  ".$row_form6_with['Died']; ?></td>
        <td colspan="2" style="text-align:left"><strong>Others: </strong><?php echo "  ".$row_form6_with['Others']; ?></td>
        
    <?php } ?>
		
		<tr>
      <th colspan="" id="">Other Description</th>
            <?php  ?>
        <td colspan="6"><?php echo $row_form6['others']; ?></td>
      </tr>
      <?php  ?>
        
  </tbody>
</table>
<?php } ?>
</div>

<div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:115px;">
  <a href="form_3.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block">3. Pre-randomisation 3 monthly routine follow up sheet</button>
  </a><br>
  <a href="form_4.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block">4. Post-randomisation 3 monthly routine follow up sheet</button>
  </a><br>
</div>

<div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:205px;" >
  <a href="edit_form_3.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-danger ">Edit Form3 Details</button>
  </a><br>
  <a href="edit_form_4.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-danger ">Edit Form4 Details</button>
  </a><br>
</div>

<div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:115px;">
  <a href="form_5.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block">5. Clinical Record Sheet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;</button>
  </a><br>
  <a href="form_6.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-primary btn-lg btn-block" >6. Final follow up sheet at end of 24m of randomization&nbsp;&nbsp;&nbsp;</button>
  </a><br>
</div>

<div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:205px;" >
  <a href="edit_form_5.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-danger ">Edit Form5 Details</button>
  </a><br>
  <a href="edit_form_6.php?pid=<?php echo $id; ?>" target="_blank" class="">
    <button type="button" class="btn btn-danger ">Edit Form6 Details</button>
  </a><br>
</div>

</body>