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
        <th colspan="6" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Initial Assessment Sheet</strong></h4></th>
        <td colspan="1" >No Profile Image</td>
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
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
            <td colspan="1" style="text-align:left"><strong>Staff Name</strong><?php echo "  ".$row_form_1_clinic_regno_staff_name['staff_name']; ?></td>
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
        <td colspan="1" style="text-align:left"><strong>Date of starting RFT</strong><?php echo "  ".$row_form_1_dateMDT_dateRFT['dateRFT']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="1" id="">Smear at Diagnosis</th>
            <?php while( $row_form_1_SmearDiagnosis_SmearDate = mysqli_fetch_assoc($result_form_1_SmearDiagnosis_SmearDate)){ ?>
        <td colspan="5"><?php echo $row_form_1_SmearDiagnosis_SmearDate['SmearDiagnosis']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Smear Date</strong><?php echo "  ".$row_form_1_SmearDiagnosis_SmearDate['SmearDate']; ?></td>
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
<!-- <div class="d-flex justify-content-center">
  <a href="edit.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger " >Edit Details</button></a><br><br>
</div> -->
</div>

</body>