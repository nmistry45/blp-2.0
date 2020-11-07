<?php

session_start();

include('logout.php');
include('../assets/php/connection.php');

if (!isset($_SESSION['id'])) {
  echo "<script>
  alert('Please Login');
  document.location.href = 'login.php';
  </script>
  ";
}

$id = $_GET['pid'];

$result_form_1_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
$result_form_1_date = mysqli_query($conn, "SELECT date from form1 where pid = $id");
$result_form_1_study_no = mysqli_query($conn, "SELECT study_no from form1 where pid = $id");
$result_form_1_patient_name1_sex_address = mysqli_query($conn, "SELECT patient_name1, sex, address from form1 where pid = $id");
$result_form_1_email_id_local_staff_contact_staff_mobile_no = mysqli_query($conn, "SELECT email_id, local_staff_contact, staff_mobile_no from form1 where pid = $id");
$result_form_1_clinic_regno_staff_name = mysqli_query($conn, "SELECT clinic_regno, staff_name from form1 where pid = $id");
$result_form_1_dateMDT_dateRFT = mysqli_query($conn, "SELECT dateMDT, dateRFT from form1 where pid = $id");
$result_form_1_SmearDiagnosis_SmearDate = mysqli_query($conn, "SELECT SmearDiagnosis, SmearDate from form1 where pid = $id");
$result_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent
  = mysqli_query($conn, "SELECT mdiag, type, Age, Weight, Height, BMI, any_contra_indication_steroids, able_to_attend_regularly, not_pregnant, long_term, inform_consent
from form1 where pid = $id");
$result_form_1_others = mysqli_query($conn, "SELECT others from form1 where pid = $id");
$result_form_1_allocate_study_no_history_of_enl = mysqli_query($conn, "SELECT allocate_study_no, history_of_enl from form1 where pid = $id");
$result_form_1_contact_no = mysqli_query($conn, "SELECT * from form1_contact where pid = $id");
$result_form1_checkbox = mysqli_query($conn, "SELECT * from form1_checkbox where pid = $id");

$result_form2_date = mysqli_query($conn, "SELECT date from form2 where pid = $id");
$result_form2_currentReactionStatus_weight2 = mysqli_query($conn, "SELECT current_reaction_status,weight_2  from form2 where pid = $id");
$result_form2_firstHadEnl_firstPDate = mysqli_query($conn, "SELECT first_had_enl,firstPDate  from form2 where pid = $id");
$result_form2__firstSym = mysqli_query($conn, "SELECT first_sym from form2 where pid = $id");
$result_form2_checkBox2 = mysqli_query($conn, "SELECT * from form2_checkbox2 where pid = $id");
$result_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal = mysqli_query($conn, "SELECT date_started_predni,current_dose_predni,current_dose_clofa,current_dose_thal  from form2 where pid = $id");
$result_form2_nfa_changeInNfi_changeInNfiDesc_eess2 = mysqli_query($conn, "SELECT nfa,change_in_nfi,change_in_nfi_desc,eess_2 from form2 where pid = $id");
$result_form2_bp2_hb2_rbsl2 = mysqli_query($conn, "SELECT bp_2,hb_2,rbsl_2 from form2 where pid = $id");
$result_form2_qol2Score_vasForPig2 = mysqli_query($conn, "SELECT qol_2_score,vas_for_pig_2 from form2 where pid = $id");
$result_form2_checkBox = mysqli_query($conn, "SELECT * from form2_checkbox where pid = $id");
$result_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa = mysqli_query($conn, "SELECT obs,ran,drug_dose_predni,drug_dur_predni,drug_dose_clofa,drug_dur_clofa from form2 where pid = $id");
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
    th {
      width: 450px;

    }

    td {
      font-family: serif;
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
            <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
              <h4><strong>1. Initial Assessment Sheet</strong></h4>
            </th>
            <!-- <td colspan="1" >No Profile Image</td> -->
            <?php ?>
          </tr>

          <?php while ($row_form_1_date = mysqli_fetch_assoc($result_form_1_date)) { ?>
            <tr>
              <th colspan="1">Date:</th>
              <td colspan="6"><?php echo date("d-m-Y", strtotime($row_form_1_date['date'])); ?></td>
            </tr>
          <?php } ?>

          <tr>
            <th colspan="" id="">ID Number</th>
            <td colspan="6"><?php echo $id ?></td>
          </tr>

          <?php while ($row_form_1_clinic_regno_staff_name = mysqli_fetch_assoc($result_form_1_clinic_regno_staff_name)) { ?>
            <tr>
              <th colspan="">Patient Code</th>
              <td colspan="5"><?php echo $row_form_1_clinic_regno_staff_name['clinic_regno']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  " . $row_form_1_clinic_regno_staff_name['staff_name']; ?></td>
            </tr>
          <?php } ?>

          <?php while ($row_form_1_patient_name1_sex_address = mysqli_fetch_assoc($result_form_1_patient_name1_sex_address)) { ?>
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
              <?php while ($row_form_1_contact_no = mysqli_fetch_assoc($result_form_1_contact_no)) {
                echo $row_form_1_contact_no['contact_no'] . "<br>";
              }
              ?></td>
          </tr>

          <?php while ($row_form_1_email_id_local_staff_contact_staff_mobile_no = mysqli_fetch_assoc($result_form_1_email_id_local_staff_contact_staff_mobile_no)) { ?>
            <tr>
              <th colspan="1" id="">E-Mail ID:</th>
              <td colspan="6"><?php echo $row_form_1_email_id_local_staff_contact_staff_mobile_no['email_id']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">Local Staff Contact:</th>
              <td colspan="6"><?php echo $row_form_1_email_id_local_staff_contact_staff_mobile_no['local_staff_contact']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">Staff Mobile No:</th>
              <td colspan="6"><?php echo $row_form_1_email_id_local_staff_contact_staff_mobile_no['staff_mobile_no']; ?></td>
            </tr>
          <?php } ?>

          <tr>
            <th colspan="1" id="">Date of Starting MDT</th>
            <?php while ($row_form_1_dateMDT_dateRFT = mysqli_fetch_assoc($result_form_1_dateMDT_dateRFT)) { ?>
              <td colspan="3"><?php echo date("d-m-Y", strtotime($row_form_1_dateMDT_dateRFT['dateMDT'])); ?></td>
              <td colspan="3" style="text-align:left"><strong>Date of Starting RFT:</strong><?php echo date("d-m-Y", strtotime($row_form_1_dateMDT_dateRFT['dateRFT'])); ?></td>
          </tr>
        <?php } ?>

        <tr>
          <th colspan="1" id="">Smear at Diagnosis</th>
          <?php while ($row_form_1_SmearDiagnosis_SmearDate = mysqli_fetch_assoc($result_form_1_SmearDiagnosis_SmearDate)) { ?>
            <td colspan="3"><?php echo $row_form_1_SmearDiagnosis_SmearDate['SmearDiagnosis']; ?></td>
            <td colspan="3" style="text-align:left"><strong>Smear Date:</strong><?php echo date("d-m-Y", strtotime($row_form_1_SmearDiagnosis_SmearDate['SmearDate'])); ?></td>
        </tr>
      <?php } ?>

      <?php while ($row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent = mysqli_fetch_assoc($result_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent)) { ?>
        <tr>
          <th colspan="7" id="" style="color: blue"><u>Eligibility Criteria for Screening:</u></th>
        </tr>
        <tr>
          <th colspan="1" id="">Withing 24 Months of Diagnosis?</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['mdiag']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Type</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['type']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Age</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['Age']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Weight</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['Weight']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Height</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['Height']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">BMI</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['BMI']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Any contra-indications to steroids/to clofazimine?</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['any_contra_indication_steroids']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Able to attend regularly?</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['able_to_attend_regularly']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Not Pregnant?</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['not_pregnant']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Long Term Medication for Other Illness:</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['long_term']; ?></td>
        </tr>

        <tr>
          <th colspan="" id="">Does Patient Give Informed Consent?</th>
          <td colspan="6"><?php echo $row_form_1_mdiag_type_Age_Weight_Height_BMI_any_contra_indication_steroids_able_to_attend_regularly_not_pregnant_long_term_inform_consent['inform_consent']; ?></td>
        </tr>
      <?php } ?>

      <tr>
        <th colspan="7" id="">Other Illnesses:</th>
      </tr>

      <?php while ($row_form1_checkbox = mysqli_fetch_assoc($result_form1_checkbox)) { ?>
        <tr>

          <td colspan="2" style="text-align:left"><strong>HIV: </strong><?php echo $row_form1_checkbox['HIV']; ?></td>
          <td colspan="3" style="text-align:left"><strong>Chronic Moderate/Severe Renal Impairment: </strong><?php echo "  " . $row_form1_checkbox['Chronic_Moderate/Severe_Renal_Impairment']; ?></td>
          <td colspan="3" style="text-align:left"><strong>Tuberculosis: </strong><?php echo "  " . $row_form1_checkbox['Tuberculosis']; ?></td>

        </tr>
        <tr>

          <td colspan="2" style="text-align:left"><strong>Cancer: </strong><?php echo $row_form1_checkbox['Cancer']; ?></td>
          <td colspan="3" style="text-align:left"><strong>Uncontrolled Type-1 Diabetes: </strong><?php echo "  " . $row_form1_checkbox['Uncontrolled_Type-1_Diabetes']; ?></td>
          <td colspan="2" style="text-align:left"><strong>Other Illness: </strong><?php echo "  " . $row_form1_checkbox['Other_Illness']; ?></td>

        <?php } ?>

        <?php while ($row_form_1_others = mysqli_fetch_assoc($result_form_1_others)) { ?>
        <tr>
          <th colspan="" id="">Other Illness Description:</th>
          <td colspan="6"><?php echo $row_form_1_others['others']; ?></td>
        </tr>
      <?php } ?>

      <?php while ($row_form_1_allocate_study_no_history_of_enl = mysqli_fetch_assoc($result_form_1_allocate_study_no_history_of_enl)) { ?>
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
            <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
              <h4><strong>2. Baseline Assessment</strong></h4>
            </th>
            <!-- <td colspan="1" >No Profile Image</td> -->
            <?php ?>
          </tr>

          <?php while ($row_form2_date = mysqli_fetch_assoc($result_form2_date)) { ?>

            <tr>
              <th colspan="1" id="">Date</th>
              <td colspan="7"><?php echo date("d-m-Y", strtotime($row_form2_date['date'])); ?></td>
            </tr>

          <?php } ?>



          <tr>
            <?php while ($row_form2_currentReactionStatus_weight2 = mysqli_fetch_assoc($result_form2_currentReactionStatus_weight2)) { ?>
              <td colspan="2" style="text-align:left"><strong>Current Reaction Status:</strong>
                <?php echo "  " . $row_form2_currentReactionStatus_weight2['current_reaction_status']; ?></td>
              <td colspan="5" style="text-align:left"><strong>Weight:</strong>
                <?php echo "  " . $row_form2_currentReactionStatus_weight2['weight_2']; ?> kg</td>
            <?php } ?>
          </tr>

          <?php while ($row_form2_firstHadEnl_firstPDate = mysqli_fetch_assoc($result_form2_firstHadEnl_firstPDate)) { ?>
            <tr>
              <th colspan="1" id="">When First had ENL?</th>
              <td colspan="6"><?php echo date("d-m-Y", strtotime($row_form2_firstHadEnl_firstPDate['first_had_enl'])); ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">When First had Prednisolone for ENL?</th>
              <td colspan="6"><?php echo date("d-m-Y", strtotime($row_form2_firstHadEnl_firstPDate['firstPDate'])); ?></td>
            </tr>

          <?php } ?>

          <tr>
            <th colspan="7" id="" style="color: blue"><u>(if applicable)This Episode of ENL:</u></th>
          </tr>

          <tr>
            <th colspan="1" id="">When First Symptoms(Number of Days Ago)</th>
            <td colspan="6">
              <?php while ($row_form2_firstSym = mysqli_fetch_assoc($result_form2__firstSym)) {
                echo $row_form2_firstSym['first_sym'] . "<br>";
              }
              ?></td>
          </tr>

          <tr>
            <th colspan="7" id="" style="color: blue"><u>Current anti reaction :</u></th>
          </tr>

          <tr>
            <?php while ($row_form2_checkBox2 = mysqli_fetch_assoc($result_form2_checkBox2)) { ?>
              <td colspan="2" style="text-align:left"><strong>Prednisolone:</strong><?php echo "  " . $row_form2_checkBox2['Prednisolone']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Clofazmine:</strong><?php echo "  " . $row_form2_checkBox2['Clofazmine']; ?></td>
              <td colspan="3" style="text-align:left"><strong>Thalidamide:</strong><?php echo "  " . $row_form2_checkBox2['Thalidamide']; ?></td>
            <?php } ?>
          </tr>

          <?php while ($row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal = mysqli_fetch_assoc($result_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal)) { ?>

            <tr>
              <th colspan="1" id="">Date Started Prednisolone(For this Episode of ENL)</th>
              <td colspan="6"><?php echo date("d-m-Y", strtotime($row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['date_started_predni'])); ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Current Daily Dose of Prednislone</th>
              <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_predni']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Current Daily Dose of Clofazmine</th>
              <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_clofa']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Current Daily Dose of Thalidamide</th>
              <td colspan="6"><?php echo $row_form2_dateStartedPredni_currentDosePredni_currentDoseClofa_currentDoseThal['current_dose_thal']; ?></td>
            </tr>

          <?php } ?>

          <tr>
            <th colspan="7" id="" style="color: blue"><u>Physical Assessment:</u></th>
          </tr>

          <?php while ($row_form2_nfa_changeInNfi_changeInNfiDesc_eess2 = mysqli_fetch_assoc($result_form2_nfa_changeInNfi_changeInNfiDesc_eess2)) { ?>

            <tr>
              <th colspan="1" id="">NFA</th>
              <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['nfa']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">New NFI (i.e. Within Past 6 months, Not Yet Treated with Steroids)?</th>
              <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['change_in_nfi']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">If Yes?</th>
              <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['change_in_nfi_desc']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">EESS</th>
              <td colspan="6"><?php echo $row_form2_nfa_changeInNfi_changeInNfiDesc_eess2['eess_2']; ?></td>
            </tr>

          <?php } ?>

          <tr>
            <?php while ($row_form2_bp2_hb2_rbsl2 = mysqli_fetch_assoc($result_form2_bp2_hb2_rbsl2)) { ?>
              <td colspan="2" style="text-align:left"><strong>BP:</strong><?php echo "  " . $row_form2_bp2_hb2_rbsl2['bp_2']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Hb:</strong><?php echo "  " . $row_form2_bp2_hb2_rbsl2['hb_2']; ?></td>
              <td colspan="3" style="text-align:left"><strong>RBSL:</strong><?php echo "  " . $row_form2_bp2_hb2_rbsl2['rbsl_2']; ?></td>
            <?php } ?>
          </tr>

          <tr>
            <th colspan="7" id="" style="color: blue"><u>Physical Experience Assessment:</u></th>
          </tr>

          <?php while ($row_form2_qol2Score_vasForPig2 = mysqli_fetch_assoc($result_form2_qol2Score_vasForPig2)) { ?>

            <tr>
              <th colspan="1" id="">QOL (SF36) Score</th>
              <td colspan="6"><?php echo $row_form2_qol2Score_vasForPig2['qol_2_score']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">VAS for Pigmentation</th>
              <td colspan="6"><?php echo $row_form2_qol2Score_vasForPig2['vas_for_pig_2']; ?></td>
            </tr>

          <?php } ?>

          <tr>
            <th colspan="7" id="" style="color: blue"><u>Checklist for adverse effects of prednisolone :</u></th>
          </tr>

          <?php while ($row_form2_checkBox = mysqli_fetch_assoc($result_form2_checkBox)) { ?>
            <tr>

              <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form2_checkBox['Mild_Indigestion']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  " . $row_form2_checkBox['Peptic_Ulcer']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  " . $row_form2_checkBox['Striae']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  " . $row_form2_checkBox['Herpes_Zoster']; ?></td>
            </tr>
            <tr>

              <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form2_checkBox['Hyperglycaemia']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  " . $row_form2_checkBox['Hypertension']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  " . $row_form2_checkBox['Malaena']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  " . $row_form2_checkBox['Glaucoma']; ?></td>
            </tr>
            <tr>

              <td colspan="2" style="text-align:left"><strong>Truncal Obesity :</strong><?php echo $row_form2_checkBox['Truncal_Obesity']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  " . $row_form2_checkBox['Osteoporosis']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  " . $row_form2_checkBox['Moon_Face']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  " . $row_form2_checkBox['Psychosis']; ?></td>
            </tr>
            <tr>

              <td colspan="2" style="text-align:left"><strong>Gastrointestinal Bleeding :</strong><?php echo $row_form2_checkBox['Gastrointestinal_bleeding']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  " . $row_form2_checkBox['Haematemesis']; ?></td>
              <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  " . $row_form2_checkBox['Extensive_Ringworm']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  " . $row_form2_checkBox['Acne']; ?></td>
            </tr>
          <?php } ?>

          <tr>
            <th colspan="7" id="" style="color: blue"><u>Decision:</u></th>
          </tr>

          <?php while ($row_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa = mysqli_fetch_assoc($result_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa)) { ?>

            <tr>
              <th colspan="1" id="">Observation:</th>
              <td colspan="6"><?php echo $row_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['obs']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Randomise:</th>
              <td colspan="6"><?php echo $row_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['ran']; ?></td>
            </tr>

            <tr>
              <th colspan="7" id="">Treatment:</th>
            </tr>

            <tr>
              <th colspan="1" id="">Prednisolone Dosage</th>
              <td colspan="5"><?php echo $row_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dose_predni']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  " . $row_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dur_predni']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Chlofazimine Dosage</th>
              <td colspan="5"><?php echo $row_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dose_clofa']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  " . $row_form2_obs_ran_drugDosePredni_drugDurPredni_drugDoseClofa_drugDurClofa['drug_dur_clofa']; ?></td>
            </tr>

          <?php } ?>

          <?php while ($row_form2_others = mysqli_fetch_assoc($result_form2_others)) { ?>

            <tr>
              <th colspan="1" id="">Other Drug Name</th>
              <td colspan="4"><?php echo $row_form2_others['others_drug_name']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Dosage:</strong><?php echo "  " . $row_form2_others['others_drug_dosage']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Duration:</strong><?php echo "  " . $row_form2_others['others_drug_duration']; ?></td>
            </tr>

          <?php } ?>

          <?php while ($row_form2_next_asse_date = mysqli_fetch_assoc($result_form2_next_asse_date)) { ?>

            <tr>
              <th colspan="1" id="">Next Assessment Date:</th>
              <td colspan="6"><?php echo date("d-m-Y", strtotime($row_form2_next_asse_date['next_asse_date'])); ?></td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="d-flex justify-content-center">
      <a href="edit_form_1.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger ">Edit Form1 Details</button></a><br><br>
      <a href="edit_form_2.php?pid=<?php echo $id; ?>" target="_blank" style="padding-left:30px;" class=""><button type="button" class="btn btn-danger ">Edit Form2 Details</button></a><br><br>
      <br><br>
    </div>

    <?php

    include('../assets/php/connection.php');

    $id = $_GET['pid'];

    $form_3 = mysqli_query($conn, "Select * from form3 where pid=$id");

    $form_4 = mysqli_query($conn, "Select * from form4 where pid=$id");

    $form_5 = mysqli_query($conn, "Select * from form5 where pid=$id");

    $form_6 = mysqli_query($conn, "Select * from form6 where pid=$id");

    $form_7 = mysqli_query($conn, "Select * from form7 where pid=$id");

    $form_8 = mysqli_query($conn, "Select * from form8_checkbox where pid=$id");

    ?>

    <div class="container">
      <?php
      while ($row_form3 = mysqli_fetch_assoc($form_3)) {
      ?>
        <table class="table table-bordered">

          <?php
          $result_form_3_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
          $f3id = $row_form3['f3id'];
          $result_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_query($conn, "SELECT * from form3_others where f3id = $f3id");
          ?>

          <tbody>
            <tr>
              <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
                <h4><strong>3. Pre-Randomisation 3 Monthly Routine Follow-Up Sheet</strong></h4>
              </th>
              <!-- <td colspan="1" >No Profile Image</td> -->
              <?php ?>
            </tr>

            <tr>
              <th colspan="1" id="">Date</th>
              <td colspan="7"><?php echo date("d-m-Y", strtotime($row_form3['date'])); ?></td>
            </tr>

            <tr>
              <th colspan="" id="">ID Number</th>
              <td colspan="5"><?php echo $id ?></td>
              <td colspan="1" style="text-align:left"><strong>Time Point:</strong><?php echo "  " . $row_form3['time_point']; ?></td>
            </tr>

            <tr>
              <th colspan="">Current Reaction Status</th>
              <td colspan="5"><?php echo $row_form3['current_reaction_status']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  " . $row_form3['staff_name']; ?></td>
            </tr>
            <?php  ?>

            <?php while ($row_form_3_patient_name = mysqli_fetch_assoc($result_form_3_patient_name)) { ?>
              <tr>
                <th colspan="1" id="">Name</th>
                <td colspan="6"><?php echo $row_form_3_patient_name['patient_name']; ?></td>
              </tr>

            <?php } ?>

            <?php  ?>
            <tr>
              <th colspan="">Weight</th>
              <td colspan="6"><?php echo $row_form3['weight']; ?></td>
            </tr>
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
              <th colspan="" id="">QOL (SF36) Score</th>
              <td colspan="6"><?php echo $row_form3['qol_3']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">VAS for Pigmentation</th>
              <td colspan="6"><?php echo $row_form3['vas_for_pig_3']; ?></td>
            </tr>
            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="1" id="">If first ENL, randomise</th>
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
              <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  " . $row_form3['drug_dura_predni']; ?></td>
            </tr>
            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="">Drug Dosage Clofazimine</th>
              <td colspan="5"><?php echo $row_form3['drug_dose_clofa']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  " . $row_form3['drug_dura_clofa']; ?></td>
            </tr>
            <?php  ?>

            <?php while ($row_form_3_others_drug_name_others_drug_dosage_others_drug_duration = mysqli_fetch_assoc($result_form_3_others_drug_name_others_drug_dosage_others_drug_duration)) { ?>
              <tr>
                <th colspan="">Drug Name</th>
                <td colspan="1"><?php echo $row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_name']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Drug Dosage:</strong><?php echo "  " . $row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_dosage']; ?></td>
                <td colspan="3" style="text-align:left"><strong>Drug Duration:</strong><?php echo "  " . $row_form_3_others_drug_name_others_drug_dosage_others_drug_duration['others_drug_duration']; ?></td>
              </tr>
            <?php } ?>

            <?php  ?>

            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="">Assessment Date</th>
              <td colspan="6"><?php echo date("d-m-Y", strtotime($row_form3['assessment_date'])); ?></td>

            </tr>
            <?php  ?>

          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          <a href="edit_form_3.php?pid=<?php echo $id; ?>&f3id=<?php echo $f3id; ?>" target="_blank" class="">
            <button type="button" class="btn btn-danger ">Edit Form3 Details</button>
          </a>
        </div>
        <br>
      <?php } ?>
    </div>

    <div class="container">
      <?php
      while ($row_form4 = mysqli_fetch_assoc($form_4)) {
      ?>
        <table class="table table-bordered">

          <?php
          $result_form_4_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
          $f4id = $row_form4['f4id'];
          $result_form_4_checklist_predni = mysqli_query($conn, "SELECT * from form4_checkbox where f4id = $f4id");
          $result_form_4_checklist_clofa = mysqli_query($conn, "SELECT * from form4_checkbox2 where f4id = $f4id");
          ?>

          <tbody>
            <tr>
              <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
                <h4><strong>4. Post-Randomisation 3 Monthly Routine Follow-Up Sheet</strong></h4>
              </th>
              <!-- <td colspan="1" >No Profile Image</td> -->
              <?php ?>
            </tr>

            <tr>
              <th colspan="1" id="">Date</th>
              <td colspan="7"><?php echo date("d-m-Y", strtotime($row_form4['formDate'])); ?></td>
            </tr>

            <tr>
              <th colspan="" id="">ID Number</th>
              <td colspan="6"><?php echo $id ?></td>
            </tr>

            <?php while ($row_form_4_patient_name = mysqli_fetch_assoc($result_form_4_patient_name)) { ?>
              <tr>
                <th colspan="1" id="">Patient Name</th>
                <td colspan="6"><?php echo $row_form_4_patient_name['patient_name']; ?></td>
              </tr>
            <?php } ?>



            <?php  ?>

            <tr>
              <th colspan="1" id="">Time Point</th>
              <td colspan="6"><?php echo $row_form4['time_point']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Staff Name</th>
              <td colspan="6"><?php echo $row_form4['staff_name']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Current Status</th>
              <td colspan="3"><?php echo $row_form4['current_status']; ?></td>

              <th colspan="1" id="">Weight</th>
              <td colspan="3"><?php echo $row_form4['weight']; ?> kg</td>
            </tr>


            <?php  ?>

            <tr>
              <th colspan="7" id="" style="color:blue;"><u>Physical Examination:</u></th>
              <?php ?>
            </tr>

            <?php  ?>
            <tr>
              <th colspan="1" id="">NFA</th>
              <td colspan="6"><?php echo $row_form4['nfa_4']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">New NFI</th>
              <td colspan="6"><?php echo $row_form4['new_nfi_4']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">Notes</th>
              <td colspan="6"><?php echo $row_form4['Add1']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">EESS</th>
              <td colspan="6"><?php echo $row_form4['eess_4']; ?></td>
            </tr>

            <?php  ?>
            <tr>
              <th colspan="7" id="" style="color:blue;"><u>Patient Experience Assessment:</u></th>
              <?php ?>
            </tr>

            <?php  ?>
            <tr>
              <th colspan="1" id="">QOL (SF36) Score</th>
              <td colspan="6"><?php echo $row_form4['qol_4']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">VAS</th>
              <td colspan="6"><?php echo $row_form4['vas_4']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Prednisolone :</u></th>
            </tr>

            <?php while ($row_form_4_checklist_predni = mysqli_fetch_assoc($result_form_4_checklist_predni)) { ?>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form_4_checklist_predni['Mild_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  " . $row_form_4_checklist_predni['Peptic_Ulcer']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  " . $row_form_4_checklist_predni['Striae']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  " . $row_form_4_checklist_predni['Herpes_Zoster']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form_4_checklist_predni['Hyperglycaemia']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  " . $row_form_4_checklist_predni['Hypertension']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  " . $row_form_4_checklist_predni['Malaena']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  " . $row_form_4_checklist_predni['Glaucoma']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Truncal Obesity :</strong><?php echo $row_form_4_checklist_predni['Truncal_Obesity']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  " . $row_form_4_checklist_predni['Osteoporosis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  " . $row_form_4_checklist_predni['Moon_Face']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  " . $row_form_4_checklist_predni['Psychosis']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Gastrointestinal Bleeding :</strong><?php echo $row_form_4_checklist_predni['Gastrointestinal_bleeding']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  " . $row_form_4_checklist_predni['Haematemesis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  " . $row_form_4_checklist_predni['Extensive_Ringworm']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  " . $row_form_4_checklist_predni['Acne']; ?></td>
              </tr>
            <?php } ?>

            <tr>
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Clofazimine :</u></th>
            </tr>

            <?php while ($row_form_4_checklist_clofa = mysqli_fetch_assoc($result_form_4_checklist_clofa)) { ?>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Mild Indigestion: </strong><?php echo $row_form_4_checklist_clofa['Mild_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Vomiting: </strong><?php echo "  " . $row_form_4_checklist_clofa['Vomiting']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Nausea: </strong><?php echo "  " . $row_form_4_checklist_clofa['Nausea']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Abdominal Pain: </strong><?php echo "  " . $row_form_4_checklist_clofa['Abdominal_Pain']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Diarrhoea, Acute: </strong><?php echo $row_form_4_checklist_clofa['Diarrhoea,Acute']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Ichthyosis: </strong><?php echo "  " . $row_form_4_checklist_clofa['Ichthyosis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Weight Loss: </strong><?php echo "  " . $row_form_4_checklist_clofa['Weight_loss']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Conjuctiva: </strong><?php echo "  " . $row_form_4_checklist_clofa['Conjuctiva']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Persistent Indigestion: </strong><?php echo $row_form_4_checklist_clofa['Persistent_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Diarrhoea, Chronic: </strong><?php echo "  " . $row_form_4_checklist_clofa['Diarrhoea,Chronic']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Chronic Dysentery: </strong><?php echo "  " . $row_form_4_checklist_clofa['Chronic_Dysentery']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Skin Discolouration: </strong><?php echo "  " . $row_form_4_checklist_clofa['Skin_Discolouration']; ?></td>
              </tr>

            <?php } ?>

            <?php  ?>
            <tr>
              <th colspan="1" id="">Time Since Onset of this Episode</th>
              <td colspan="6"><?php echo $row_form4['enl_present_time_since']; ?></td>
            </tr>
            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="1" id="">Time Since Last Received Prednisolone</th>
              <td colspan="6"><?php echo $row_form4['time_since_last_received_prednisolone']; ?></td>
            </tr>
            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="1" id="">If Recurrent ENL, Start Prednisolone</th>
              <td colspan="6"><?php echo $row_form4['recurrent_enl_start_predni']; ?></td>
            </tr>
            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="1" id="">Advised Admission</th>
              <td colspan="6"><?php echo $row_form4['advised_admission']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">Date for Next Routine Assessment</th>
              <td colspan="6"><?php echo date("d-m-Y", strtotime($row_form4['nextDate'])); ?></td>
            </tr>

          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          <a href="edit_form_4.php?pid=<?php echo $id; ?>&f4id=<?php echo $f4id; ?>" target="_blank" class="">
            <button type="button" class="btn btn-danger ">Edit Form4 Details</button>
          </a>
        </div>
        <br>
      <?php } ?>
    </div>

    <div class="container">
      <?php
      while ($row_form5 = mysqli_fetch_assoc($form_5)) {
      ?>
        <table class="table table-bordered">

          <?php
          $result_form5_ptn = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
          $f5id = $row_form5['f5id'];
          $result_form5_ad_pred  = mysqli_query($conn, "SELECT * from form5_checkbox where f5id = $f5id");
          $result_form5_ad_clofa  = mysqli_query($conn, "SELECT * from form5_checkbox2 where f5id = $f5id");
          ?>

          <tbody>
            <tr>
              <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
                <h4><strong>5. Clinical Record Sheet</strong></h4>
              </th>
              <!-- <td colspan="1" >No Profile Image</td> -->
              <?php ?>
            </tr>

            <tr>
              <th colspan="1" id="">Date</th>
              <td colspan="7"><?php echo date("d-m-Y", strtotime($row_form5['date'])); ?></td>
            </tr>

            <tr>
              <th colspan="" id="">ID Number</th>
              <td colspan="6"><?php echo $id ?></td>
            </tr>

            <?php while ($row_form5_ptn = mysqli_fetch_assoc($result_form5_ptn)) { ?>

              <tr>
                <th colspan="">Patient Name</th>
                <td colspan="6"><?php echo $row_form5_ptn['patient_name']; ?></td>
              </tr>
            <?php } ?>
            <?php ?>
            <tr>
              <th colspan="">Staff Name</th>
              <td colspan="6"><?php echo $row_form5['staff_name']; ?></td>
            </tr>
            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="1" id="">Time Point</th>
              <td colspan="6"><?php echo $row_form5['time_point']; ?></td>
            </tr>
            <?php  ?>
            <tr>
              <th colspan="1" id="">Patient Since Last Visit</th>
              <td colspan="6"><?php echo $row_form5['patient_since_last_visit']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="1" id="">Current Medication</th>
              <td colspan="6"><?php echo $row_form5['current_medication']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">Weight</th>
              <td colspan="6"><?php echo $row_form5['weight_5']; ?> kg</td>
            </tr>

            <tr>
              <th colspan="1" id="">Actually Received Total: </th>
              <td colspan="3"><strong>Prednisolone:</strong><?php echo "  " . $row_form5['prednisolone_5']; ?></td>
              <td colspan="4" style="text-align:left"><strong>Clofazimine:</strong><?php echo "  " . $row_form5['clofazimine_vitamins']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="7" id="" style="color:blue;"><u>Physical Assessment:</u></th>
            </tr>
            <tr>
              <?php  ?>
              <td colspan=""><strong>NFA:</strong><?php echo " " . $row_form5['nfa_5']; ?></td>
              <td colspan="7" style="text-align:left"><strong>NFI:</strong><?php echo "  " . $row_form5['new_nfi_5']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <?php  ?>
              <td colspan="2"><strong>If Yes:</strong><?php echo " " . $row_form5['if_yes']; ?></td>
              <td colspan="5" style="text-align:left"><strong>EESS:</strong><?php echo "  " . $row_form5['eess_score_5']; ?></td>
            </tr>
            <?php  ?>
            <tr>
              <th colspan="1" id="">BP</th>
              <td colspan="6"><?php echo $row_form5['bp']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="1" id="">BSL (if steroids taken >=24 weeks)</th>
              <td colspan="6"><?php echo $row_form5['bsl']; ?></td>
            </tr>
            <?php  ?>
            <tr>
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Prednisolone :</u></th>
            </tr>

            <?php while ($row_form5_ad_pred = mysqli_fetch_assoc($result_form5_ad_pred)) { ?>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form5_ad_pred['Mild_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  " . $row_form5_ad_pred['Peptic_Ulcer']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  " . $row_form5_ad_pred['Striae']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  " . $row_form5_ad_pred['Herpes_Zoster']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form5_ad_pred['Hyperglycaemia']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  " . $row_form5_ad_pred['Hypertension']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  " . $row_form5_ad_pred['Malaena']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  " . $row_form5_ad_pred['Glaucoma']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Truncal Obesity :</strong><?php echo $row_form5_ad_pred['Truncal_Obesity']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  " . $row_form5_ad_pred['Osteoporosis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  " . $row_form5_ad_pred['Moon_Face']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  " . $row_form5_ad_pred['Psychosis']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Gastrointestinal Bleeding :</strong><?php echo $row_form5_ad_pred['Gastrointestinal_bleeding']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  " . $row_form5_ad_pred['Haematemesis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  " . $row_form5_ad_pred['Extensive_Ringworm']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  " . $row_form5_ad_pred['Acne']; ?></td>
              </tr>
            <?php } ?>

            <tr>
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Clofazimine :</u></th>
            </tr>

            <?php while ($row_form5_ad_clofa = mysqli_fetch_assoc($result_form5_ad_clofa)) { ?>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Mild Indigestion: </strong><?php echo $row_form5_ad_clofa['Mild_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Vomiting: </strong><?php echo "  " . $row_form5_ad_clofa['Vomiting']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Nausea: </strong><?php echo "  " . $row_form5_ad_clofa['Nausea']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Abdominal Pain: </strong><?php echo "  " . $row_form5_ad_clofa['Abdominal_Pain']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Diarrhoea, Acute: </strong><?php echo $row_form5_ad_clofa['Diarrhoea,Acute']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Ichthyosis: </strong><?php echo "  " . $row_form5_ad_clofa['Ichthyosis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Weight Loss: </strong><?php echo "  " . $row_form5_ad_clofa['Weight_loss']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Conjuctiva: </strong><?php echo "  " . $row_form5_ad_clofa['Conjuctiva']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Persistent Indigestion: </strong><?php echo $row_form5_ad_clofa['Persistent_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Diarrhoea, Chronic: </strong><?php echo "  " . $row_form5_ad_clofa['Diarrhoea,Chronic']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Chronic Dysentery: </strong><?php echo "  " . $row_form5_ad_clofa['Chronic_Dysentery']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Skin Discolouration: </strong><?php echo "  " . $row_form5_ad_clofa['Skin_Discolouration']; ?></td>
              </tr>

            <?php } ?>

            <tr>
              <th colspan="" id="">Is Patient Worst and Time to Began Flare</th>
              <?php  ?>
              <td colspan="3"><strong>If Patient Worst:</strong><?php echo " " . $row_form5['patient_worse']; ?></td>
              <td colspan="3"><strong>Time Since Flare Began:</strong><?php echo " " . $row_form5['time_since_flare_began']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="7" id="" style="color:blue;"><u>Treatment Prescribed:</u></th>
            </tr>
            <tr>
              <th colspan="" id="">Continue Standard Steroid Course</th>
              <?php  ?>
              <td colspan="3"><strong>Dose:</strong><?php echo " " . $row_form5['dose_std_course']; ?></td>
              <td colspan="3"><strong>Duration:</strong><?php echo " " . $row_form5['dura_std_course']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="" id="">Additional Prednisolone</th>
              <?php  ?>
              <td colspan="3"><strong>Dose:</strong><?php echo " " . $row_form5['dose_add_predni']; ?></td>
              <td colspan="3"><strong>Duration:</strong><?php echo " " . $row_form5['dura_add_predni']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="" id="">Advised Admission</th>
              <?php  ?>
              <td colspan="3"><strong>Advised Admission Description:</strong><?php echo " " . $row_form5['advised_admission']; ?></td>
              <td colspan="3"><strong>Date of Next Assessment:</strong><?php echo date("d-m-Y", strtotime($row_form5['date_of_next_assessment_5'])); ?></td>
            </tr>
            <?php  ?>

          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          <a href="edit_form_5.php?pid=<?php echo $id; ?>&f5id=<?php echo $f5id; ?>" target="_blank" class="">
            <button type="button" class="btn btn-danger ">Edit Form5 Details</button>
          </a>
        </div>
        <br>
      <?php } ?>
    </div>

    <div class="container">
      <?php
      while ($row_form6 = mysqli_fetch_assoc($form_6)) {
      ?>
        <table class="table table-bordered">

          <?php
          $result_form_6_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
          $f6id = $row_form6['f6id'];
          $result_form6_ad_pred  = mysqli_query($conn, "SELECT * from form6_checkbox where f6id = $f6id");
          $result_form6_ad_clofa  = mysqli_query($conn, "SELECT * from form6_checkbox2 where f6id = $f6id");
          $result_form6_with  = mysqli_query($conn, "SELECT * from form6_checkbox3 where f6id = $f6id");
          ?>

          <tbody>
            <tr>
              <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
                <h4><strong>6. Final Follow-Up Sheet at End of 24 months from Randomization (or at Withdrawal)</strong></h4>
              </th>
              <!-- <td colspan="1" >No Profile Image</td> -->
              <?php ?>
            </tr>

            <tr>
              <th colspan="1" id="">Date</th>
              <td colspan="7"><?php echo date("d-m-Y", strtotime($row_form6['date'])); ?></td>
            </tr>

            <tr>
              <th colspan="" id="">ID Number</th>
              <td colspan="6"><?php echo $id ?></td>
            </tr>

            <?php while ($row_form_6_patient_name = mysqli_fetch_assoc($result_form_6_patient_name)) { ?>
              <tr>
                <th colspan="1" id="">Patient Name</th>
                <td colspan="6"><?php echo $row_form_6_patient_name['patient_name']; ?></td>
              </tr>
            <?php } ?>

            <tr>
              <?php  ?>
              <th colspan="1" id="">Staff Name</th>
              <td colspan="6"><?php echo $row_form6['staff_name']; ?></td>
              <?php  ?>
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
              <th colspan="1" id="">Weight</th>
              <td colspan="6"><?php echo $row_form6['Weight']; ?></td>
            </tr>

            <tr>
              <th colspan="1" id="">BMI</th>
              <td colspan="6"><?php echo $row_form6['BMI']; ?></td>
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
              <th colspan="" id="">QOL (SF36) Score</th>
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
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Prednisolone :</u></th>
            </tr>

            <?php while ($row_form6_ad_pred = mysqli_fetch_assoc($result_form6_ad_pred)) { ?>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Mild Indigestion:</strong><?php echo $row_form6_ad_pred['Mild_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Peptic Ulcer:</strong><?php echo "  " . $row_form6_ad_pred['Peptic_Ulcer']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Striae:</strong><?php echo "  " . $row_form6_ad_pred['Striae']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Herpes Zoster:</strong><?php echo "  " . $row_form6_ad_pred['Herpes_Zoster']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Hyperglycaemia :</strong><?php echo $row_form6_ad_pred['Hyperglycaemia']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Hypertension:</strong><?php echo "  " . $row_form6_ad_pred['Hypertension']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Malaena:</strong><?php echo "  " . $row_form6_ad_pred['Malaena']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Glaucoma:</strong><?php echo "  " . $row_form6_ad_pred['Glaucoma']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Truncal Obesity :</strong><?php echo $row_form6_ad_pred['Truncal_Obesity']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Osteoporosis:</strong><?php echo "  " . $row_form6_ad_pred['Osteoporosis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Moon Face:</strong><?php echo "  " . $row_form6_ad_pred['Moon_Face']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Psychosis:</strong><?php echo "  " . $row_form6_ad_pred['Psychosis']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Gastrointestinal Bleeding :</strong><?php echo $row_form6_ad_pred['Gastrointestinal_bleeding']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Haematemesis:</strong><?php echo "  " . $row_form6_ad_pred['Haematemesis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Extensive Ringworm:</strong><?php echo "  " . $row_form6_ad_pred['Extensive_Ringworm']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Acne:</strong><?php echo "  " . $row_form6_ad_pred['Acne']; ?></td>
              </tr>
            <?php } ?>

            <tr>
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Clofazimine :</u></th>
            </tr>

            <?php while ($row_form6_ad_clofa = mysqli_fetch_assoc($result_form6_ad_clofa)) { ?>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Mild Indigestion: </strong><?php echo $row_form6_ad_clofa['Mild_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Vomiting: </strong><?php echo "  " . $row_form6_ad_clofa['Vomiting']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Nausea: </strong><?php echo "  " . $row_form6_ad_clofa['Nausea']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Abdominal Pain: </strong><?php echo "  " . $row_form6_ad_clofa['Abdominal_Pain']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Diarrhoea, Acute: </strong><?php echo $row_form6_ad_clofa['Diarrhoea,Acute']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Ichthyosis: </strong><?php echo "  " . $row_form6_ad_clofa['Ichthyosis']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Weight Loss: </strong><?php echo "  " . $row_form6_ad_clofa['Weight_loss']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Conjuctiva: </strong><?php echo "  " . $row_form6_ad_clofa['Conjuctiva']; ?></td>
              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Persistent Indigestion: </strong><?php echo $row_form6_ad_clofa['Persistent_Indigestion']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Diarrhoea, Chronic: </strong><?php echo "  " . $row_form6_ad_clofa['Diarrhoea,Chronic']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Chronic Dysentery: </strong><?php echo "  " . $row_form6_ad_clofa['Chronic_Dysentery']; ?></td>
                <td colspan="1" style="text-align:left"><strong>Skin Discolouration: </strong><?php echo "  " . $row_form6_ad_clofa['Skin_Discolouration']; ?></td>
              </tr>

            <?php } ?>

            <?php  ?>
            <tr>
              <th colspan="7" id="" style="color: blue;"><u>Summary of Observations:</u></th>
            </tr>
            <tr>
              <th colspan="1" id="">Number of Weeks Extra Clofazimine/Vitamins Received</th>
              <td colspan="6"><?php echo $row_form6['no_weeks_extra_clofazimine']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">ENL at Randomization</th>
              <td colspan="6"><?php echo $row_form6['enl_at_randomisation']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">Duration of that Episode</th>
              <td colspan="6"><?php echo $row_form6['duration_first_episode']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">Flare of ENL while on Steroid</th>
              <td colspan="6"><?php echo $row_form6['flare_of_enl']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <?php  ?>
              <td colspan=""><strong>First Flare after how Long: </strong><?php echo $row_form6['if_flare_how_long']; ?></td>
              <td colspan="7" style="text-align:left"><strong>EESS at Flare:</strong><?php echo "  " . $row_form6['eess_at_flare']; ?></td>
            </tr>
            <?php  ?>
            <tr>

              <?php  ?>
              <td colspan=""><strong>Recurrent ENL More than 27 days after End of Steroid Course:</strong><?php echo "        " . $row_form6['recurrent_enl_steroids']; ?></td>
              <td colspan="7" style="text-align:left"><strong>Chronic ENL Continued after Randomization:</strong><?php echo "  " . $row_form6['recurrent_enl_steroids']; ?></td>

              <?php  ?>
            </tr>

            <?php  ?>
            <tr>
              <th colspan="1" id="">Total Steriod Consumed</th>
              <td colspan="6"><?php echo $row_form6['total_steroids_consumed']; ?> grams</td>
            </tr>
            <?php  ?>

            <?php  ?>
            <tr>
              <th colspan="1" id="">Change in NFA Baseline to End</th>
              <td colspan="6"><?php echo $row_form6['change_in_nfa']; ?></td>
            </tr>

            <tr>
              <th colspan="" id="">Change in QOL Score Baseline to End</th>
              <td colspan="6"><?php echo $row_form6['change_in_qol']; ?></td>
            </tr>

            <?php  ?>

            <tr>
              <th colspan="1" id="">Adverse Effects of Drugs</th>
              <?php  ?>
              <td colspan="3"><?php echo $row_form6['adverse_effect_of_drug']; ?></td>
              <td colspan="3" style="text-align:left"><strong>Adverse Effect:</strong><?php echo "  " . $row_form6['drug_desc']; ?></td>
            </tr>
            <?php  ?>

            <tr>
              <th colspan="7" id="" style="color: blue"><u>Reason of Withdrawal Before 24 months Observation:</u></th>
            </tr>

            <?php while ($row_form6_with = mysqli_fetch_assoc($result_form6_with)) { ?>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Protocol Violation: </strong><?php echo $row_form6_with['Protocol_Violation']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Patient Withdraws Consent: </strong><?php echo "  " . $row_form6_with['Patient_withdraws_content']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Uncontrolled Reaction: </strong><?php echo "  " . $row_form6_with['Uncontrolled_reaction']; ?></td>
                <td colspan="2" style="text-align:left"><strong>End of funding period : </strong><?php echo "  " . $row_form6_with['End_of_funding_period']; ?></td>

              </tr>
              <tr>

                <td colspan="2" style="text-align:left"><strong>Severe Adverse Effects: </strong><?php echo $row_form6_with['Severe_adverse_effects']; ?></td>
                <td colspan="3" style="text-align:left"><strong>Died: </strong><?php echo "  " . $row_form6_with['Died']; ?></td>
                <td colspan="2" style="text-align:left"><strong>Others: </strong><?php echo "  " . $row_form6_with['Others']; ?></td>

              <?php } ?>

              <tr>
                <th colspan="" id="">Others Description</th>
                <?php  ?>
                <td colspan="6"><?php echo $row_form6['others']; ?></td>
              </tr>

              <tr>
                <th colspan="" id="">Death Cause</th>
                <?php  ?>
                <td colspan="6"><?php echo $row_form6['death']; ?></td>
              </tr>
              <?php  ?>

          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          <a href="edit_form_6.php?pid=<?php echo $id; ?>&f6id=<?php echo $f6id; ?>" target="_blank" class="">
            <button type="button" class="btn btn-danger ">Edit Form6 Details</button>
          </a>
        </div>
        <br>
      <?php } ?>
    </div>

    <div class="container">

      <table class="table table-bordered">

        <?php
        $result_form_7_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
        ?>

        <tbody>
          <tr>
            <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
              <h4><strong>7. Miscellaneous Notes by Research Staff</strong></h4>
            </th>
            <!-- <td colspan="1" >No Profile Image</td> -->
            <?php ?>
          </tr>

          <?php while ($row_form_7_patient_name = mysqli_fetch_assoc($result_form_7_patient_name)) { ?>
            <tr>
              <th colspan="1" id="">Patient Name</th>
              <td colspan="6"><?php echo $row_form_7_patient_name['patient_name']; ?></td>
            </tr>
          <?php } ?>

          <?php
          while ($row_form7 = mysqli_fetch_assoc($form_7)) {
            $misid = $row_form7['misid'];
          ?>
            <tr>
              <th colspan="1" id="">Date</th>
              <td colspan="4"><?php echo $row_form7['date_form_7']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Staff Name:</strong><?php echo "  " . $row_form7['staff_name_7']; ?></td>
              <td colspan="1" style="text-align:left"><strong>Comments:</strong><?php echo "  " . $row_form7['comments_7']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        <a href="edit_form_7.php?pid=<?php echo $id; ?>&misid=<?php echo $misid; ?>" target="_blank" class="">
          <button type="button" class="btn btn-danger ">Edit Form7 Details</button>
        </a>
      </div>
      <br>

    </div>

    <div class="container">
      <?php
      while ($row_form8 = mysqli_fetch_assoc($form_8)) {
      ?>
        <table class="table table-bordered">

          <?php
          $result_form_8_patient_name = mysqli_query($conn, "SELECT patient_name from form1 where pid = $id");
          $f8id = $row_form8['f8id'];
          $result_form_8_ad_predni = mysqli_query($conn, "SELECT * from form8_checkbox where f8id = $f8id");
          $result_form_8_ad_clofa = mysqli_query($conn, "SELECT * from form8_checkbox2 where f8id = $f8id");
          ?>

          <tbody>
            <tr>
              <th colspan="7" id="" style="vertical-align:middle; text-align:center;">
                <h4><strong>8.Checklist for Adverse Effects</strong></h4>
              </th>
            </tr>

            <?php while ($row_form_8_patient_name = mysqli_fetch_assoc($result_form_8_patient_name)) { ?>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Patient Name:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo $row_form_8_patient_name['patient_name']; ?></td>
              </tr>
            <?php } ?>

            <tr>
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Prednisolone :</u></th>
            </tr>


            <?php while ($row_form_8_ad_predni = mysqli_fetch_assoc($result_form_8_ad_predni)) { ?>

              <tr>
                <td colspan="1" style="text-align:left"><strong>Mild Indigestion(ie relieved by antacid):</strong></td>
                <td colspan="6" width="25%" style="text-align:left"><?php echo $row_form_8_ad_predni['Mild_Indigestion']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Severe/Persistent Indigestion,suggestive of a peptic ulcer:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Severe/Persistent_Indigestion']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Any evidence of peptic ulcer from investigations such as gastroscopy or imaging, if done:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Peptic_Ulcer']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Evidence of Gastrointestinal bleeding- haematemesis, melaena, FOB positive if done:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Gastrointestinal_Bleeding']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Hypertension(new or uncontrolled) :</strong></td>
                <td colspan="6" style="text-align:left"><?php echo $row_form_8_ad_predni['Hypertension']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Hyperglycaemia/new diagnosis of diabetes mellitus:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Hyperglycaemia_DiabetesMellitus']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Glaucoma(must get intra ocular pressure checked if eye pain/declining vision):</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Glaucoma']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Psychosis(considered by physician/psychiatrist to be Steroid induced):</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Psychosis']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Fragility fracture or other evidence of osteoporosis (eg dexascan shows more than 2 SD below normal):</strong></td>
                <td colspan="6" style="text-align:left"><?php echo $row_form_8_ad_predni['FragilityFracture_OR_Osteoporosis']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Moon Face,Truncal Obesity,Striae:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['MoonFace_TruncalObesity_Striae']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Acne(if not a teenager):</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Acne']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Extensive Ringworm:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Extensive_Ringworm']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Herpes Zoster :</strong></td>
                <td colspan="6" style="text-align:left"><?php echo $row_form_8_ad_predni['Herpes_Zoster']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Delayed wound healing(compared with normal for type of wound):</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Delayed_wound_healing']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Tb- new or reactivated,pulmonary/extrapulmonary:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Tb']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Strongyloides hyperinfestation syndrome:</strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_predni['Strongyloides_Hyperinfestation']; ?></td>
              </tr>
            <?php } ?>

            <tr>
              <th colspan="7" id="" style="color: blue"><u>Checklist for Adverse Effects of Clofazimine :</u></th>
            </tr>

            <?php while ($row_form_8_ad_clofa = mysqli_fetch_assoc($result_form_8_ad_clofa)) { ?>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Nausea: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo $row_form_8_ad_clofa['Nausea']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Vomiting: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Vomiting']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Indigestion mild,responds to antacid: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Indigestion_Mild']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Severe/persistent indigestion suggestive of gastric ulceration: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Severe/Persistent_Indigestion']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Severe abdominal pain,suggestive of "acute abdomen",which might be due to clofazimine crystal deposition: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo $row_form_8_ad_clofa['Severe_Abdominal_Pain']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Diarrhoea,acute: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Diarrhoea_Acute']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Diarrhoea,chronic: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Diarrhoea_Chronic']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Chronic Dysentery (blood and mucous in stools, tenesmus): </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Chronic_Dysentery']; ?></td>
              </tr>

              <tr>
                <td colspan="1" style="text-align:left"><strong>Skin discolouration: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo $row_form_8_ad_clofa['Skin_Discolouration']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Discolouration of conjunctiva/tears: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Discolouration_Conjunctiva/Tears']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Ichthyosis: </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Ichthyosis']; ?></td>
              </tr>
              <tr>
                <td colspan="1" style="text-align:left"><strong>Weight loss (if present,consider malabsorption as well as other possible causes): </strong></td>
                <td colspan="6" style="text-align:left"><?php echo "  " . $row_form_8_ad_clofa['Weight_Loss']; ?></td>
              </tr>

            <?php } ?>
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          <a href="edit_form_8.php?pid=<?php echo $id; ?>&f8id=<?php echo $f8id; ?>" target="_blank" class="">
            <button type="button" class="btn btn-danger ">Edit Form8 Details</button>
          </a>
        </div>

        <br>
      <?php } ?>
    </div>


    <div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:115px;">
      <a href="form_3.php?pid=<?php echo $id; ?>" target="_blank" class="">
        <button type="button" class="btn btn-primary btn-lg btn-block">3. Pre-Randomisation 3 Monthly Routine Follow-Up Sheet</button>
      </a><br>
      <a href="form_4.php?pid=<?php echo $id; ?>" target="_blank" class="">
        <button type="button" class="btn btn-primary btn-lg btn-block">4. Post-Randomisation 3 Monthly Routine Follow-Up Sheet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </a><br>
    </div>

    <div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:115px;">
      <a href="form_5.php?pid=<?php echo $id; ?>" target="_blank" class="">
        <button type="button" class="btn btn-primary btn-lg btn-block">5. Clinical Record Sheet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </a><br>
      <a href="form_6.php?pid=<?php echo $id; ?>" target="_blank" class="">
        <button type="button" class="btn btn-primary btn-lg btn-block">6. Final Follow-Up Sheet at End of 24 months of Randomization&nbsp;&nbsp;&nbsp;</button>
      </a><br>
    </div>

    <div class="btn btn-light-blue" style="display: flex; justify-content:space-around; padding-left:115px;">
      <a href="form_7.php?pid=<?php echo $id; ?>" target="_blank" class="">
        <button type="button" class="btn btn-primary btn-lg btn-block">7. Miscellaneous Notes by Research Staff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </a><br>
      <a href="form_8.php?pid=<?php echo $id; ?>" target="_blank" class="">
        <button type="button" class="btn btn-primary btn-lg btn-block">8. Checklist for Adverse Effects&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </a><br>
    </div>



  </body>