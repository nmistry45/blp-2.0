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

$result_form5_cid_d = mysqli_query($conn, "SELECT clinic_id, date from form5 where pid = $id");
$result_form5_ptn_sn_stn = mysqli_query($conn, "SELECT patient_name, study_no, staff_name from form5 where pid = $id");
$result_form5_pt_s_l_v = mysqli_query($conn, "SELECT patient_since_last_visit from form5 where pid = $id");
$result_form5_p_cv     = mysqli_query($conn, "SELECT prednisolone_5, clofazimine_vitamins from form5 where pid = $id");
$result_form5_nfa_nfi5 =  mysqli_query($conn, "SELECT nfa_5, new_nfi_5 from form5 where pid = $id");
$result_form5_if_eess =  mysqli_query($conn, "SELECT if_yes, eess_score_5 from form5 where pid = $id");
$result_form5_ad_pred  = mysqli_query($conn, "SELECT * from form5_checkbox where pid = $id");
$result_form5_ad_clofa  = mysqli_query($conn, "SELECT * from form5_checkbox2 where pid = $id");
$result_form5_isw_tf  = mysqli_query($conn, "SELECT patient_worse, time_since_flare_began from form5 where pid = $id");
$result_form5_cssc  = mysqli_query($conn, "SELECT dose_std_course, dura_std_course from form5 where pid = $id");
$result_form5_ap  = mysqli_query($conn, "SELECT dose_add_predni, dura_add_predni from form5 where pid = $id");
$result_form5_aa_dona = mysqli_query($conn, "SELECT advised_admission, date_of_next_assessment_5 from form5 where pid = $id");


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
        <th colspan="6" id="" style="vertical-align:middle; text-align:center;"><h4><strong>Clinical Record Sheet</strong></h4></th>
        <td colspan="1" >No Profile Image</td>
        <?php ?>
      </tr>
      
      <tr>
        <th colspan="1" id="">Clinic Id</th>
        <?php while( $row_form5_cid_d = mysqli_fetch_assoc($result_form5_cid_d)){ ?>
        <td colspan="5"><?php echo $row_form5_cid_d['clinic_id']; ?></td>
        <td colspan="1" style="text-align:left"><strong>Date:</strong><?php echo "  ".$row_form5_cid_d['date']; ?></td>
      </tr>
        <?php } ?>

      <tr>
        <th colspan="" id="" >ID Number</th>
        <td colspan="6"><?php echo $id ?></td>
      </tr>

      <?php while ( $row_form5_ptn_sn_stn = mysqli_fetch_assoc($result_form5_ptn_sn_stn)){ ?>
      <tr>
        <th colspan="">Patient Name</th>
            <td colspan="2"><?php echo $row_form5_ptn_sn_stn['patient_name']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Staff Name:</strong><?php echo "  ".$row_form5_ptn_sn_stn['staff_name']; ?></td>
            <td colspan="2" style="text-align:left"><strong>Study No:</strong><?php echo "  ".$row_form5_ptn_sn_stn['study_no']; ?></td>
      </tr>
      <?php } ?>

      <?php while ( $row_form5_pt_s_l_v = mysqli_fetch_assoc($result_form5_pt_s_l_v)){ ?>
      <tr>
        <th colspan="1" id="">Patient Since Last Visit</th>
        <td colspan="6"><?php echo $row_form5_pt_s_l_v['patient_since_last_visit']; ?></td>
      </tr>
      <?php } ?>

      <tr>
        <th colspan="7" id="" style="color:blue;"><u>Current Medication:</u></th>
      </tr>
        <?php while( $row_form5_p_cv = mysqli_fetch_assoc($result_form5_p_cv)){ ?>
        <tr>
          <td colspan=""><strong>Prednisolone:</strong><?php echo "  ".$row_form5_p_cv['prednisolone_5']; ?></td>
          <td colspan="7" style="text-align:left"><strong>Clofazimine:</strong><?php echo "  ".$row_form5_p_cv['clofazimine_vitamins']; ?></td>
        </tr>
        <?php } ?>

      <tr>
      <th colspan="7" id="" style="color:blue;"><u>Physical assessment:</u></th>
      </tr>
        <tr>
            <?php while( $row_form5_nfa_nfi5 = mysqli_fetch_assoc($result_form5_nfa_nfi5)){ ?>
        <td colspan=""><strong>NFA:</strong><?php echo " " .$row_form5_nfa_nfi5['nfa_5']; ?></td>
        <td colspan="7" style="text-align:left"><strong>NFI:</strong><?php echo "  ".$row_form5_nfa_nfi5['new_nfi_5']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">NFI and EESS</th>
            <?php while( $row_form5_if_eess = mysqli_fetch_assoc($result_form5_if_eess)){ ?>
        <td colspan="3"><strong>If Yes:</strong><?php echo " ".$row_form5_if_eess['if_yes']; ?></td>
        <td colspan="3" style="text-align:left"><strong>EESS:</strong><?php echo "  ".$row_form5_if_eess['eess_score_5']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Checklist for adverse effects of prednisolone</th>
            <?php while( $row_form5_ad_pred = mysqli_fetch_assoc($result_form5_ad_pred)){ ?>
        <td colspan="6"><?php echo $row_form5_ad_pred['adverse_effects_predni']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Checklist for adverse effects of Clofazimine</th>
            <?php while( $row_form5_ad_clofa = mysqli_fetch_assoc($result_form5_ad_clofa)){ ?>
        <td colspan="6"><?php echo $row_form5_ad_clofa['adverse_effects_clofa']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Is Patient Worst and Time to began Flare</th>
            <?php while( $row_form5_isw_tf = mysqli_fetch_assoc($result_form5_isw_tf)){ ?>
        <td colspan="3"><strong>If Patient Worst:</strong><?php echo " ".$row_form5_isw_tf['patient_worse']; ?></td>
        <td colspan="3"><strong>Time since flare began:</strong><?php echo " ".$row_form5_isw_tf['time_since_flare_began']; ?></td>
      </tr>
      <?php } ?>

       
      <tr>
      <th colspan="7" id="" style="color:blue;"><u>Treatment Prescribed:</u></th>
      </tr>
      <tr>
      <th colspan="" id="">Continue standard steroid course</th>
            <?php while( $row_form5_cssc = mysqli_fetch_assoc($result_form5_cssc)){ ?>
        <td colspan="3"><strong>Dose:</strong><?php echo " ".$row_form5_cssc['dose_std_course']; ?></td>
        <td colspan="3"><strong>Duration:</strong><?php echo " ".$row_form5_cssc['dura_std_course']; ?></td>
      </tr>
      <?php } ?>

       <tr>
      <th colspan="" id="">Additional Prednisolone</th>
            <?php while( $row_form5_ap = mysqli_fetch_assoc($result_form5_ap)){ ?>
        <td colspan="3"><strong>Dose:</strong><?php echo " ".$row_form5_ap['dose_add_predni']; ?></td>
        <td colspan="3"><strong>Duration:</strong><?php echo " ".$row_form5_ap['dura_add_predni']; ?></td>
      </tr>
      <?php } ?>

      <tr>
      <th colspan="" id="">Advised admission</th>
            <?php while( $row_form5_aa_dona = mysqli_fetch_assoc($result_form5_aa_dona)){ ?>
        <td colspan="3"><strong>Advised Admission:</strong><?php echo " ".$row_form5_aa_dona['advised_admission']; ?></td>
        <td colspan="3"><strong>Date of Next Assessment:</strong><?php echo " ".$row_form5_aa_dona['date_of_next_assessment_5']; ?></td>
      </tr>
      <?php } ?>
      
  </tbody>
</table>
<!-- <div class="d-flex justify-content-center">
  <a href="edit.php?pid=<?php echo $id; ?>" target="_blank" class=""><button type="button" class="btn btn-danger " >Edit Details</button></a><br><br>
</div> -->
</div>

</body>