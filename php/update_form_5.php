<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // do post
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
		
		//mysqli_select_db($con , 'blp_db');
		
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
		if(isset($_POST['patient_since_last_visit'])){
			$patient_since_last_visit = $_POST['patient_since_last_visit'];
		}
		else{
			
			$patient_since_last_visit = "NAN";
		}
		if(isset($_POST['prednisolone_5'])){
			$prednisolone_5 = $_POST['prednisolone_5'];
		}
		else{
			
			$prednisolone_5 = "NAN";
		}
		if(isset($_POST['clofazimine_vitamins'])){
			$clofazimine_vitamins = $_POST['clofazimine_vitamins'];
		}
		else{
			
			$clofazimine_vitamins = "NAN";
		}		
		if(isset($_POST['nfa_5'])){
			$nfa_5 = $_POST['nfa_5'];
		}
		else{
			
			$nfa_5 = "NAN";
		}
		if(isset($_POST['new_nfi_5'])){
			$new_nfi_5 = $_POST['new_nfi_5'];
		}
		else{
			
			$new_nfi_5 = "NAN";
		}
		if(isset($_POST['if_yes'])){
			$if_yes = $_POST['if_yes'];
		}
		else{
			
			$if_yes = "NAN";
		}
		if(isset($_POST['eess_score_5'])){
			$eess_score_5 = $_POST['eess_score_5'];
		}
		else{
			
			$eess_score_5 = "NAN";
		}
		
		if(isset($_POST['patient_worse'])){
			$patient_worse = $_POST['patient_worse'];
		}
		else{
			
			$patient_worse = "NAN";
		}
		if(isset($_POST['time_since_flare_began'])){
			$time_since_flare_began = $_POST['time_since_flare_began'];
		}
		else{
			
			$time_since_flare_began = "NAN";
		}
		
		
		if(isset($_POST['dose_std_course'])){
			$dose_std_course = $_POST['dose_std_course'];
		}
		else{
			
			$dose_std_course = "NAN";
		}
		if(isset($_POST['dura_std_course'])){
			$dura_std_course = $_POST['dura_std_course'];
		}
		else{
			
			$dura_std_course = "NAN";
		}
		if(isset($_POST['dose_add_predni'])){
			$dose_add_predni = $_POST['dose_add_predni'];
		}
		else{
			
			$dose_add_predni = "NAN";
		}
		if(isset($_POST['dura_add_predni'])){
			$dura_add_predni = $_POST['dura_add_predni'];
		}
		else{
			
			$dura_add_predni = "NAN";
		}
		
		if(isset($_POST['advised_admission'])){
			$advised_admission = $_POST['advised_admission'];
		}
		else{
			
			$advised_admission = "NAN";
		}
		if(isset($_POST['date_of_next_assessment_5'])){
			$date_of_next_assessment_5 = $_POST['date_of_next_assessment_5'];
		}
		else{
			
			$date_of_next_assessment_5 = "NAN";
		}

		
		
		$q1 = "UPDATE form5 SET
        `pid` = '$id',
        `date` = '$date',
        `staff_name` = '$staff_name',
        `patient_since_last_visit` = '$patient_since_last_visit',
        `prednisolone_5` = '$prednisolone_5',
        `clofazimine_vitamins` = '$clofazimine_vitamins',
        `nfa_5` = '$nfa_5',
        `new_nfi_5` = '$new_nfi_5',
        `if_yes` = '$if_yes',
		`eess_score_5` = '$eess_score_5',
        `patient_worse` = '$patient_worse',
        `time_since_flare_began` = '$time_since_flare_began',
        `dose_std_course` ='$dose_std_course' ,
        `dura_std_course` = '$dura_std_course',
        `dose_add_predni` = '$dose_add_predni',
        `dura_add_predni` = '$dura_add_predni',
        `advised_admission` = '$advised_admission',
		`date_of_next_assessment_5`='$date_of_next_assessment_5' 
        WHERE `pid`=".$id."";

		$check_0d = isset($_POST['adverse_predni'][0]) ? 'yes' : 'no';
		$check_1d = isset($_POST['adverse_predni'][1]) ? 'yes' : 'no';
		$check_2d = isset($_POST['adverse_predni'][2]) ? 'yes' : 'no';
		$check_3d = isset($_POST['adverse_predni'][3]) ? 'yes' : 'no';
		$check_4d = isset($_POST['adverse_predni'][4]) ? 'yes' : 'no';
		$check_5d = isset($_POST['adverse_predni'][5]) ? 'yes' : 'no';
		$check_6d = isset($_POST['adverse_predni'][6]) ? 'yes' : 'no';
		$check_7d = isset($_POST['adverse_predni'][7]) ? 'yes' : 'no';
		$check_8d = isset($_POST['adverse_predni'][8]) ? 'yes' : 'no';
		$check_9d = isset($_POST['adverse_predni'][9]) ? 'yes' : 'no';
		$check_10d = isset($_POST['adverse_predni'][10]) ? 'yes' : 'no';
		$check_11d = isset($_POST['adverse_predni'][11]) ? 'yes' : 'no';
		$check_12d = isset($_POST['adverse_predni'][12]) ? 'yes' : 'no';
		$check_13d = isset($_POST['adverse_predni'][13]) ? 'yes' : 'no';
		$check_14d = isset($_POST['adverse_predni'][14]) ? 'yes' : 'no';
		$check_15d = isset($_POST['adverse_predni'][15]) ? 'yes' : 'no';
		$query1 = "UPDATE  form5_checkbox SET 
		`pid`='$id', 
		`Mild_Indigestion`='$check_0d',
		`Peptic_Ulcer`='$check_1d',
		`Striae`='$check_2d', 
		`Herpes_Zoster`='$check_3d',
		`Hyperglycaemia`='$check_4d',
		`Hypertension`='$check_5d', 
		`Malaena`='$check_6d',
		`Glaucoma`='$check_7d',
		`Truncal_Obesity`='$check_8d',
		`Osteoporosis`='$check_9d',
		`Moon_Face`='$check_10d',
		`Psychosis`='$check_11d',
		`Gastrointestinal_bleeding`='$check_12d',
		`Haematemesis`='$check_13d',
		`Extensive_Ringworm`='$check_14d',
		`Acne`='$check_15d'
		WHERE `pid` = ".$id."";
		mysqli_query($conn, $query1);

		$check_0e = isset($_POST['adverse_clofa'][0]) ? 'yes' : 'no';
		$check_1e = isset($_POST['adverse_clofa'][1]) ? 'yes' : 'no';
		$check_2e = isset($_POST['adverse_clofa'][2]) ? 'yes' : 'no';
		$check_3e = isset($_POST['adverse_clofa'][3]) ? 'yes' : 'no';
		$check_4e = isset($_POST['adverse_clofa'][4]) ? 'yes' : 'no';
		$check_5e = isset($_POST['adverse_clofa'][5]) ? 'yes' : 'no';
		$check_6e = isset($_POST['adverse_clofa'][6]) ? 'yes' : 'no';
		$check_7e = isset($_POST['adverse_clofa'][7]) ? 'yes' : 'no';
		$check_8e = isset($_POST['adverse_clofa'][8]) ? 'yes' : 'no';
		$check_9e = isset($_POST['adverse_clofa'][9]) ? 'yes' : 'no';
		$check_10e = isset($_POST['adverse_clofa'][10]) ? 'yes' : 'no';
		$check_11e = isset($_POST['adverse_clofa'][11]) ? 'yes' : 'no';

		$query2 = "UPDATE  form5_checkbox2 SET 
		`pid`='$id', 
		`Mild_Indigestion`='$check_0e',
		`Vomiting`='$check_1e',
		`Nausea`='$check_2e', 
		`Abdominal_Pain`='$check_3e',
		`Diarrhoea,Acute`='$check_4e',
		`Ichthyosis`='$check_5e', 
		`Weight_loss`='$check_6e',
		`Conjuctiva`='$check_7e',
		`Persistent_Indigestion`='$check_8e',
		`Diarrhoea,Chronic`='$check_9e',
		`Chronic_Dysentery`='$check_10e',
		`Skin_Discolouration`='$check_11e'
		WHERE `pid` = ".$id."";
		mysqli_query($conn, $query2);


		if(query($q1, 'form5') ) {

			// $Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";

			header("location:../../modules/display_form_1-6.php?pid=".$id);
		} else {
			echo "<br>Person could not be made.";
		}
		// echo $q1;
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

