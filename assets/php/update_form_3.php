<?php

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $id = $_GET['pid'];
$f3id = $_GET['f3id'];
  function query ( $query, $message = '' ) {
      global $conn;
      $insert = mysqli_query($conn, $query);
      if($insert){
        // echo"Successful Insertion ".$message."<br>";
        return 1;
      }
      else{
        echo"<br>Query error ".$message." : " . mysqli_error($conn)."<br>";
        return 0;
      }
  }

  function escape ( $string ) {
      global $conn;
      return mysqli_real_escape_string($conn, $string);
  }	
      
      if(isset($_POST['date'])){
          $date = $_POST['date'];
      }
      else{
          $date = "NAN";
      }
      if(isset($_POST['time_point'])){
          $time_point = $_POST['time_point'];
      }
      else{
          $time_point = "NAN";
      }
      if(isset($_POST['staff_name'])){
          $staff_name = $_POST['staff_name'];
      }
      else{
          $staff_name = "NAN";
      }

      if(isset($_POST['current_reaction_status'])){
          $current_reaction_status = $_POST['current_reaction_status'];
      }
      else{
          $current_reaction_status = "NULL";
      }
      if(isset($_POST['weight'])){
          $weight = $_POST['weight'];
      }
      else{
          $weight = "NAN";
      }

      if(isset($_POST['nfa_3'])){
          $nfa_3 = $_POST['nfa_3'];
      }
      else{
          $nfa_3 = "NAN";
      }

      if(isset($_POST['new_nfi_3'])){
          $new_nfi_3 = $_POST['new_nfi_3'];
      }
      else{
          $new_nfi_3 = "NAN";
      }

      if(isset($_POST['Add1'])){
          $Add1 = $_POST['Add1'];
      }
      else{
          $Add1 = "NAN";
      }
      
      if(isset($_POST['eess_3'])){
          $eess_3 = $_POST['eess_3'];
      }
      else{
          $eess_3 = "NAN";
      }
      
      if(isset($_POST['qol_3'])){
          $qol_3 = $_POST['qol_3'];
      }
      else{
          $qol_3 = "NAN";
      }
      
      if(isset($_POST['vas_for_pig_3'])){
          $vas_for_pig_3 = $_POST['vas_for_pig_3'];
      }
      else{
          $vas_for_pig_3 = "NAN";
      }

      if(isset($_POST['rand_date'])){
          $rand_date = $_POST['rand_date'];
      }
      else{
          $rand_date = "NAN";
      }

      if(isset($_POST['drug_dose_predni'])){
          $drug_dose_predni = $_POST['drug_dose_predni'];
      }
      else{
          $drug_dose_predni = "NAN";
      }

      if(isset($_POST['drug_dura_predni'])){
          $drug_dura_predni = $_POST['drug_dura_predni'];
      }
      else{
          $drug_dura_predni = "NAN";
      }

      if(isset($_POST['drug_dose_clofa'])){
          $drug_dose_clofa = $_POST['drug_dose_clofa'];
      }
      else{
          $drug_dose_clofa = "NAN";
      }

      if(isset($_POST['drug_dura_clofa'])){
          $drug_dura_clofa = $_POST['drug_dura_clofa'];
      }
      else{
          $drug_dura_clofa = "NAN";
      }



      if(isset($_POST['assessment_date'])){
          $assessment_date = $_POST['assessment_date'];
      }
      else{
          $assessment_date = "NAN";
      }


      $others_drug_name = empty($_POST['others_drug_name']) ? 'Unknown' : $_POST['others_drug_name'];
      $others_drug_dosage = empty($_POST['others_drug_dosage']) ? 'Unknown' : $_POST['others_drug_dosage'];
      $others_drug_duration = empty($_POST['others_drug_duration']) ? 'Unknown' : $_POST['others_drug_duration'];

      $q1 = "UPDATE form3 SET 
      `pid` = '$id',
      `date` = '$date',
	  `time_point` = '$time_point',
      `staff_name` = '$staff_name',
      `current_reaction_status` = '$current_reaction_status',
	  `weight` = '$weight',
      `nfa_3` ='$nfa_3' ,
      `new_nfi_3` ='$new_nfi_3' ,
      `Add1` ='$Add1' ,
      `eess_3` ='$eess_3' ,
      `qol_3` = '$qol_3',
      `vas_for_pig_3` = '$vas_for_pig_3',
      `rand_date` = '$rand_date',
      `drug_dose_predni` = '$drug_dose_predni',
      `drug_dura_predni` = '$drug_dura_predni',
      `drug_dose_clofa` ='$drug_dose_clofa' ,
      `drug_dura_clofa` = '$drug_dura_clofa',
     
      `assessment_date` = '$assessment_date'
      WHERE `f3id`=".$f3id."";
    //   echo $q1;

      if(query($q1, 'Others_Details3') ) {

        //   $Pid = $conn->insert_id;
        //   echo "Pid is " . $Pid . "<br>";
        mysqli_query($conn,"DELETE FROM `form3_others` WHERE `f3id` = $f3id");

          foreach ($others_drug_name as $key => $value) {

              $others_drug_name[$key] = escape(empty($_POST['others_drug_name'][$key]) ? 'Unknown' : $_POST['others_drug_name'][$key]);
              $others_drug_dosage[$key] = escape(empty($_POST['others_drug_dosage'][$key]) ? 'Unknown' : $_POST['others_drug_dosage'][$key]);
              $others_drug_duration[$key] = escape(empty($_POST['others_drug_duration'][$key]) ? 'Unknown' : $_POST['others_drug_duration'][$key]);
            
              $q2 = "insert into `form3_others` (
                `f3id`,
                `pid`,
                `others_drug_name`,
                `others_drug_dosage`,
                `others_drug_duration`
            ) VALUES ('$f3id', '$id', '$others_drug_name[$key]', '$others_drug_dosage[$key]', '$others_drug_duration[$key]');";
            //   echo $q2;
          query($q2, 'form3_others');
          }
        //   header("location:../../modules/display_form_1-6.php?pid=".$id);
        echo("<script>location.href = '../../modules/display_form_1-6.php?pid=$id'</script>");
        
      }
      else {
          echo "<br>Person could not be made.";
      }

$conn->close();

  } else  {
      // do get
      echo "not a post request";
  }

?>