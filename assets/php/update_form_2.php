<?php
//  include 'predni.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blp_db";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}
	$id = $_GET['pid'];
	function query ( $query, $message = '' ) {
		global $conn;
		$insert = mysqli_query($conn, $query);
		if($insert){
		  echo"Successful Insertion ".$message."<br>";
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
		
		//mysqli_select_db($con , 'blp_db');

		if(isset($_POST['patient_name'])){
			$patient_name = $_POST['patient_name'];
		}
		else{
			$patient_name = "NULL" ;
		}

		if(isset($_POST['clinic_id'])){
		$clinic_id = $_POST['clinic_id'];
		}
		else{
			$clinic_id = "NAN";
		}

		if(isset($_POST['study_no'])){
			$study_no = ($_POST['study_no']);
		}
		else{
			$study_no = "NAN";
		}
		
		if(isset($_POST['date'])){
			$date = $_POST['date'];
		}
		else{
			$date = "NAN";
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

		if(isset($_POST['first_had_enl'])){
			$first_had_enl = $_POST['first_had_enl'];
		}
		else{
			$first_had_enl = "NAN";
		}

		if(isset($_POST['firstPDate'])){
			$firstPDate = $_POST['firstPDate'];
		}
		else{
			$firstPDate = "NAN";
		}	

		if(isset($_POST['first_sym'])){
			$first_sym = $_POST['first_sym'];
		}
		else{
			$first_sym = "NAN";
		}
		
	

		if(isset($_POST['date_started_predni'])){
			$date_started_predni = $_POST['date_started_predni'];
		}
		else{
			$date_started_predni = "NAN";
		}

		if(isset($_POST['current_dose_predni'])){
			$current_dose_predni = $_POST['current_dose_predni'];
		}
		else{
			$current_dose_predni = "NAN";
		}
		  
		if(isset($_POST['current_dose_clofa'])){
			$current_dose_clofa = $_POST['current_dose_clofa'];
		}
		else{
			$current_dose_clofa = "NAN";
		}

		if(isset($_POST['current_dose_thal'])){
			$current_dose_thal = $_POST['current_dose_thal'];
		}
		else{
			$current_dose_thal = "NAN";
		}

		if(isset($_POST['nfa'])){
			$nfa = $_POST['nfa'];
		}
		else{
			$nfa = "NAN";
		}

		if(isset($_POST['change_in_nfi'])){
			$change_in_nfi = $_POST['change_in_nfi'];
		}
		else{
			$change_in_nfi = "NAN";
		}

		if(isset($_POST['change_in_nfi_desc'])){
			$change_in_nfi_desc = $_POST['change_in_nfi_desc'];
		}
		else{
			$change_in_nfi_desc = "NAN";
		}

		if(isset($_POST['eess_2'])){
			$eess_2 = $_POST['eess_2'];
		}
		else{
			$eess_2 = "NAN";
		}

		if(isset($_POST['qol_2_score'])){
			$qol_2_score = $_POST['qol_2_score'];
		}
		else{
			$qol_2_score = "NAN";
		}

		if(isset($_POST['vas_for_pig_2'])){
			$vas_for_pig_2 = $_POST['vas_for_pig_2'];
		}
		else{
			$vas_for_pig_2 = "NAN";
		}
		
		if(isset($_POST['obs'])){
			$obs = $_POST['obs'];
		}
		else{
			$obs = "NAN";
		}

		if(isset($_POST['drug_dose_predni'])){
			$drug_dose_predni = $_POST['drug_dose_predni'];
		}
		else{
			$drug_dose_predni = "NAN";
		}

		if(isset($_POST['drug_dur_predni'])){
			$drug_dur_predni = $_POST['drug_dur_predni'];
		}
		else{
			$drug_dur_predni = "NAN";
		}
		
		if(isset($_POST['drug_dose_clofa'])){
			$drug_dose_clofa = $_POST['drug_dose_clofa'];
		}
		else{
			$drug_dose_clofa = "NAN";
		}

		if(isset($_POST['drug_dur_clofa'])){
			$drug_dur_clofa = $_POST['drug_dur_clofa'];
		}
		else{
			$drug_dur_clofa = "NAN";
		}

		if(isset($_POST['next_asse_date'])){
			$next_asse_date = $_POST['next_asse_date'];
		}
		else{
			$next_asse_date = "NAN";
		}



		$others_drug_name = empty($_POST['others_drug_name']) ? 'Unknown' : $_POST['others_drug_name'];
		$others_drug_dosage = empty($_POST['others_drug_dosage']) ? 'Unknown' : $_POST['others_drug_dosage'];
		$others_drug_duration = empty($_POST['others_drug_duration']) ? 'Unknown' : $_POST['others_drug_duration'];
		
		$q1 = "UPDATE `form2` SET
        `patient_name` = '$patient_name',
        `clinic_id` = '$clinic_id',
        `study_no` = '$study_no',
        `date` = '$date',
        `staff_name` = '$staff_name' ,
        `current_reaction_status` = '$current_reaction_status',
        `first_had_enl` = '$first_had_enl',
        `firstPDate` = '$firstPDate',
        `first_sym` = '$first_sym',
        `date_started_predni` = '$date_started_predni',
        `current_dose_predni` = '$current_dose_predni',
        `current_dose_clofa` = '$current_dose_clofa',
        `current_dose_thal` = '$current_dose_thal',
        `nfa` = '$nfa',
        `change_in_nfi` = '$change_in_nfi',
        `change_in_nfi_desc` = '$change_in_nfi_desc',
        `eess_2` = '$eess_2',
        `qol_2_score` = '$qol_2_score',
        `vas_for_pig_2` = '$vas_for_pig_2',
        `obs` = '$obs',
        `drug_dose_predni` = '$drug_dose_predni',
        `drug_dur_predni` = '$drug_dur_predni',
        `drug_dose_clofa` = '$drug_dose_clofa',
        `drug_dur_clofa` = '$drug_dur_clofa',
        `next_asse_date` = '$next_asse_date' 
		
        WHERE `pid`=".$id."";

		// $qu1 = "insert into form2_checkBox2 values $current_anti_reaction";

		$check_0 = isset($_POST['current_anti_reaction'][0]) ? 'yes' : 'no';
		$check_1 = isset($_POST['current_anti_reaction'][1]) ? 'yes' : 'no';
		$check_2 = isset($_POST['current_anti_reaction'][2]) ? 'yes' : 'no';
		$query = "UPDATE form2_checkBox2 SET 
		`pid`='$id', 
		`Prednisolone`='$check_0',
		`Clofazmine`='$check_1',
		`Thalidamide`='$check_2' WHERE `pid` = ".$id."";
		mysqli_query($conn, $query);

		$check_0a = isset($_POST['adverse_predni'][0]) ? 'yes' : 'no';
		$check_1a = isset($_POST['adverse_predni'][1]) ? 'yes' : 'no';
		$check_2a = isset($_POST['adverse_predni'][2]) ? 'yes' : 'no';
		$check_3a = isset($_POST['adverse_predni'][3]) ? 'yes' : 'no';
		$check_4a = isset($_POST['adverse_predni'][4]) ? 'yes' : 'no';
		$check_5a = isset($_POST['adverse_predni'][5]) ? 'yes' : 'no';
		$check_6a = isset($_POST['adverse_predni'][6]) ? 'yes' : 'no';
		$check_7a = isset($_POST['adverse_predni'][7]) ? 'yes' : 'no';
		$check_8a = isset($_POST['adverse_predni'][8]) ? 'yes' : 'no';
		$check_9a = isset($_POST['adverse_predni'][9]) ? 'yes' : 'no';
		$check_10a = isset($_POST['adverse_predni'][10]) ? 'yes' : 'no';
		$check_11a = isset($_POST['adverse_predni'][11]) ? 'yes' : 'no';
		$check_12a = isset($_POST['adverse_predni'][12]) ? 'yes' : 'no';
		$check_13a = isset($_POST['adverse_predni'][13]) ? 'yes' : 'no';
		$check_14a = isset($_POST['adverse_predni'][14]) ? 'yes' : 'no';
		$check_15a = isset($_POST['adverse_predni'][15]) ? 'yes' : 'no';
		$query1 = "UPDATE  form2_checkbox SET 
		`pid`='$id', 
		`Mild_Indigestion`='$check_0a',
		`Peptic_Ulcer`='$check_1a',
		`Striae`='$check_2a', 
		`Herpes_Zoster`='$check_3a',
		`Hyperglycaemia`='$check_4a',
		`Hypertension`='$check_5a', 
		`Malaena`='$check_6a',
		`Glaucoma`='$check_7a',
		`Truncal_Obesity`='$check_8a',
		`Osteoporosis`='$check_9a',
		`Moon_Face`='$check_10a',
		`Psychosis`='$check_11a',
		`Gastrointestinal_bleeding`='$check_12a',
		`Haematemesis`='$check_13a',
		`Extensive_Ringworm`='$check_14a',
		`Acne`='$check_15a'
		WHERE `pid` = ".$id."";
		mysqli_query($conn, $query1);

		if(query($q1, 'Others_Details') ) {

			// $Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";
			mysqli_query($conn,"DELETE FROM `form2_others` WHERE `pid` = $id");

			foreach ($others_drug_name as $key => $value) {

				$others_drug_name[$key] = escape(empty($_POST['others_drug_name'][$key]) ? 'Unknown' : $_POST['others_drug_name'][$key]);
				$others_drug_dosage[$key] = escape(empty($_POST['others_drug_dosage'][$key]) ? 'Unknown' : $_POST['others_drug_dosage'][$key]);
				$others_drug_duration[$key] = escape(empty($_POST['others_drug_duration'][$key]) ? 'Unknown' : $_POST['others_drug_duration'][$key]);
			
				$q2 = "insert into `form2_others` (
					`pid`,
					`others_drug_name`,
					`others_drug_dosage`,
					`others_drug_duration`
				) VALUES ('$id', '$others_drug_name[$key]', '$others_drug_dosage[$key]', '$others_drug_duration[$key]');";
			
			query($q2, 'form2_others');

			}header("location:../../modules/display_form_1-6.php?pid=".$id);
		}else {
			echo "<br>Person could not be made.";
		}
		
		// if ($conn->query($q1) === TRUE) {
		// 	echo "New record created successfully";
		// } else {
		// 	echo "Error: " . $q1 . "<br>" . $conn->error;
		// }
		$conn->close();
} else  {
		// do get
		echo "not a post request";
	}

	

 ?>

