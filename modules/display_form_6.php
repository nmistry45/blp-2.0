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

$result_form_6_clinic_id_date = mysqli_query($conn, "SELECT clinic_id, date from form6 where pid = $id");   
$result_form_6_current_status = mysqli_query($conn, "SELECT current_status from form6 where pid = $id");    
$result_form_6_patient_name = mysqli_query($conn, "SELECT patient_name from form6 where pid = $id");   

$result_form_6_clinic_staff_name_study_no = mysqli_query($conn, "SELECT staff_name,study_no from form6 where pid = $id");     
  
$result_form_6_nfa_eess_qol_vas = mysqli_query($conn, "SELECT nfa,eess,qol,vas from form6 where pid = $id");
$result_form_6_current_antireaction_therapy = mysqli_query($conn, "SELECT current_antireaction_therapy from form6 where pid = $id");
$result_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl= mysqli_query($conn, "SELECT no_weeks_extra_clofazimine, enl_at_randomisation, duration_first_episode, flare_of_enl from form6 where pid = $id");
$result_form_6_if_flare_how_long_eess_at_flare = mysqli_query($conn, "SELECT if_flare_how_long, eess_at_flare from form6 where pid = $id");
$result_form_6_recurrent_enl_steroids_chronic_enl_randomisation = mysqli_query($conn, "SELECT recurrent_enl_steroids,chronic_enl_randomisation from form6 where pid = $id");
$result_form_6_total_steroids_consumed = mysqli_query($conn, "SELECT total_steroids_consumed from form6 where pid = $id");
$result_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol = mysqli_query($conn, "SELECT change_in_nfa,change_in_nfa_desc,change_in_qol from form6 where pid = $id");
$result_form_6_adverse_effect_of_drug_drug_desc = mysqli_query($conn, "SELECT adverse_effect_of_drug,drug_desc from form6 where pid = $id");
$result_form6_ad_pred  = mysqli_query($conn, "SELECT * from form6_checkbox where pid = $id");
$result_form6_ad_clofa  = mysqli_query($conn, "SELECT * from form6_checkbox2 where pid = $id");
$result_form6_with  = mysqli_query($conn, "SELECT * from form6_checkbox3 where pid = $id");

$result_form_6_others = mysqli_query($conn, "SELECT others from form6 where pid = $id");


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
        <th colspan="6" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Final follow up sheet at end of 24m from randomization (or at withdrawal)</strong></h4></th>
        <td colspan="1" >No Profile Image</td>
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form6_clinic_id_date = mysqli_fetch_assoc($result_form_6_clinic_id_date)){ ?>
        <td colspan="5"><?php echo $row_form6_clinic_id_date['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form6_clinic_id_date['date']; ?></td>
      </tr>
        <?php } ?>

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
      
            <?php while( $row_form_6_clinic_staff_name_study_no = mysqli_fetch_assoc($result_form_6_clinic_staff_name_study_no)){ ?>
        <td colspan=""><strong>Staff Name:</strong><?php echo " " .$row_form_6_clinic_staff_name_study_no['staff_name']; ?></td>
        <td colspan="7" style="text-align:left"><strong>Study No:</strong><?php echo "  ".$row_form_6_clinic_staff_name_study_no['study_no']; ?></td>
      
      <?php } ?></tr>
		

		<?php while ( $row_form_6_current_status = mysqli_fetch_assoc($result_form_6_current_status)){ ?>
      <tr>
        <th colspan="1" id="">Current Status</th>
        <td colspan="6"><?php echo $row_form_6_current_status['current_status']; ?></td>
      </tr>
      <?php } ?>
		
      <?php while ($row_form_6_nfa_eess_qol_vas = mysqli_fetch_assoc($result_form_6_nfa_eess_qol_vas)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue;"><u>Physical Assessment:</u></th>
      </tr>
	  <tr>
        <th colspan="1" id="">NFA</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['nfa']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">EESS</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['eess']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">QOL Score</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['qol']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">VAS</th>
        <td colspan="6"><?php echo $row_form_6_nfa_eess_qol_vas['vas']; ?></td>
      </tr>
      <?php } ?>

		<?php while ( $row_form_6_current_antireaction_therapy = mysqli_fetch_assoc($result_form_6_current_antireaction_therapy)){ ?>
      <tr>
        <th colspan="1" id="">Current Anti-Reaction Therapy</th>
        <td colspan="6"><?php echo   $row_form_6_current_antireaction_therapy['current_antireaction_therapy']; ?></td>
      </tr>
      <?php } ?>
		
		<tr>
      <th colspan="" id="">Checklist for adverse effects of prednisolone</th>
            <?php while( $row_form6_ad_pred = mysqli_fetch_assoc($result_form6_ad_pred)){ ?>
        <td colspan="6"><?php echo $row_form6_ad_pred['adv_eff_predni']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Checklist for adverse effects of Clofazimine</th>
            <?php while( $row_form6_ad_clofa = mysqli_fetch_assoc($result_form6_ad_clofa)){ ?>
        <td colspan="6"><?php echo $row_form6_ad_clofa['adv_eff_clofa']; ?></td>
      </tr>
      <?php } ?>
		
		
	<?php while ($row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl = mysqli_fetch_assoc($result_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl)){ ?>
      <tr>
        <th colspan="7" id="" style="color: blue;"><u>Summary of Observations:</u></th>
      </tr>
	  <tr>
        <th colspan="1" id="">Number of weeks extra vitamins received</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['no_weeks_extra_clofazimine']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">ENL at Randomization</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['enl_at_randomisation']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Duration of 1st Episode</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['duration_first_episode']; ?></td>
      </tr>
	  
	  <tr>
        <th colspan="" id="">Flare of ENL while on steroid</th>
        <td colspan="6"><?php echo $row_form_6_no_weeks_extra_clofazimine_enl_at_randomisation_duration_first_episode_flare_of_enl['flare_of_enl']; ?></td>
      </tr>
      <?php } ?>

	<tr>
      
            <?php while( $row_form_6_if_flare_how_long_eess_at_flare = mysqli_fetch_assoc($result_form_6_if_flare_how_long_eess_at_flare)){ ?>
        <td colspan=""><strong>First flare after how long: </strong><?php echo $row_form_6_if_flare_how_long_eess_at_flare['if_flare_how_long']; ?></td>
        <td colspan="7" style="text-align:left"><strong>EESS at flare:</strong><?php echo "  ".$row_form_6_if_flare_how_long_eess_at_flare['eess_at_flare']; ?></td>
      </tr>
      <?php } ?>
	<tr>
      
            <?php while( $row_form_6_recurrent_enl_steroids_chronic_enl_randomisation = mysqli_fetch_assoc($result_form_6_recurrent_enl_steroids_chronic_enl_randomisation)){ ?>
        <td colspan=""><strong>Recurrent ENL more than 27 days after end of steroid course:</strong><?php echo"        ".$row_form_6_recurrent_enl_steroids_chronic_enl_randomisation['recurrent_enl_steroids']; ?></td>
        <td colspan="7" style="text-align:left"><strong>Chronic ENL continued after randomization:</strong><?php echo "  ".$row_form_6_recurrent_enl_steroids_chronic_enl_randomisation['recurrent_enl_steroids']; ?></td>
      
      <?php } ?></tr>
		
		<?php while ( $row_form_6_total_steroids_consumed = mysqli_fetch_assoc($result_form_6_total_steroids_consumed)){ ?>
      <tr>
        <th colspan="1" id="">Total Steriod Consumed</th>
        <td colspan="6"><?php echo $row_form_6_total_steroids_consumed['total_steroids_consumed']; ?></td>
      </tr>
      <?php } ?>



		<?php while ($row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol = mysqli_fetch_assoc($result_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol)){ ?>
      <tr>
        <th colspan="1" id="">Change in NFA Baseline to end</th>
        <td colspan="6"><?php echo $row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol['change_in_nfa']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">If yes?</th>
        <td colspan="6"><?php echo $row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol['change_in_nfa_desc']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Change in QOL Score baseline to end</th>
        <td colspan="6"><?php echo $row_form_6_change_in_nfa_change_in_nfa_desc_change_in_qol['change_in_qol']; ?></td>
      </tr>
	  
	  
      <?php } ?>



		<tr>
        <th colspan="1" id="">Adverse Effects of drugs</th>
        <?php while( $row_form_6_adverse_effect_of_drug_drug_desc = mysqli_fetch_assoc($result_form_6_adverse_effect_of_drug_drug_desc)){ ?>
        <td colspan="5"><?php echo $row_form_6_adverse_effect_of_drug_drug_desc['adverse_effect_of_drug']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Adverse Effect:</strong><?php echo "  ".$row_form_6_adverse_effect_of_drug_drug_desc['drug_desc']; ?></td>
      </tr>
        <?php } ?>

		
		<tr>
      <th colspan="" id="">Reason of withdrawal before 24months observation</th>
            <?php while( $row_form6_with = mysqli_fetch_assoc($result_form6_with)){ ?>
        <td colspan="6"><?php echo $row_form6_with['withdrawal_reason']; ?></td>
      </tr>
      <?php } ?>
		
		<tr>
      <th colspan="" id="">Other Description</th>
            <?php while( $row_form6_others = mysqli_fetch_assoc($result_form_6_others)){ ?>
        <td colspan="6"><?php echo $row_form6_others['others']; ?></td>
      </tr>
      <?php } ?>
		
      

      
  </tbody>
</table>
<!-- <div class="d-flex justify-content-center">
  <a href="edit.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger " >Edit Details</button></a><br><br>
</div> -->
</div>

</body>