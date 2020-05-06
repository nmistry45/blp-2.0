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

		if(isset($_POST['formDate'])){
			$formDate = $_POST['formDate'];
		}
		else{
			
			$formDate = "";
		}
		if(isset($_POST['staff_name'])){
			$staff_name = $_POST['staff_name'];
		}
		else{
			
			$staff_name = "";
		}
		if(isset($_POST['current_status'])){
			$current_status = $_POST['current_status'];
		}
		else{
			
			$current_status = "";
		}		
		if(isset($_POST['nfa_4'])){
			$nfa_4 = $_POST['nfa_4'];
		}
		else{
			
			$nfa_4 = "";
		}
		if(isset($_POST['eess_4'])){
			$eess_4 = $_POST['eess_4'];
		}
		else{
			
			$eess_4 = "";
		}
		if(isset($_POST['qol_4'])){
			$qol_4 = $_POST['qol_4'];
		}
		else{
			
			$qol_4 = "";
		}
		if(isset($_POST['vas_4'])){
			$vas_4 = $_POST['vas_4'];
		}
		else{
			
			$vas_4 = "";
		}
		if(isset($_POST['enl_present_time_since'])){
			$enl_present_time_since = $_POST['enl_present_time_since'];
		}
		else{
			
			$enl_present_time_since = "";
		}
		if(isset($_POST['time_since_last_received_prednisolone'])){
			$time_since_last_received_prednisolone = $_POST['time_since_last_received_prednisolone'];
		}
		else{
			
			$time_since_last_received_prednisolone = "";
		}
		if(isset($_POST['recurrent_enl_start_predni'])){
			$recurrent_enl_start_predni = $_POST['recurrent_enl_start_predni'];
		}
		else{
			
			$recurrent_enl_start_predni = "";
		}
		if(isset($_POST['advised_admission'])){
			$advised_admission = $_POST['advised_admission'];
		}
		else{
			
			$advised_admission = "";
		}
		if(isset($_POST['nextDate'])){
			$nextDate = $_POST['nextDate'];
		}
		else{
			
			$nextDate = "";
		}
		if(isset($_POST['nextPDate'])){
			$nextPDate = $_POST['nextPDate'];
		}
		else{
			
			$nextPDate = "";
		}
		
		$q = "UPDATE form4 SET
        `pid` = '$id',
        `formDate` = '$formDate',
        `staff_name` ='$staff_name' ,
        `current_status` ='$current_status' ,
        `nfa_4` ='$nfa_4' ,
        `eess_4` = '$eess_4',
        `qol_4` = '$qol_4',
        `vas_4` = '$vas_4',
		`enl_present_time_since` = '$enl_present_time_since',
        `time_since_last_received_prednisolone` ='$time_since_last_received_prednisolone' , 
        `recurrent_enl_start_predni` = '$recurrent_enl_start_predni',
        `advised_admission` = '$advised_admission',
        `nextDate` = '$nextDate',
        `nextPDate` = '$nextPDate' 
		 WHERE `pid`=".$id."";
		// echo $q;

        $check_0b = isset($_POST['adverse_predni'][0]) ? 'yes' : 'no';
		$check_1b = isset($_POST['adverse_predni'][1]) ? 'yes' : 'no';
		$check_2b = isset($_POST['adverse_predni'][2]) ? 'yes' : 'no';
		$check_3b = isset($_POST['adverse_predni'][3]) ? 'yes' : 'no';
		$check_4b = isset($_POST['adverse_predni'][4]) ? 'yes' : 'no';
		$check_5b = isset($_POST['adverse_predni'][5]) ? 'yes' : 'no';
		$check_6b = isset($_POST['adverse_predni'][6]) ? 'yes' : 'no';
		$check_7b = isset($_POST['adverse_predni'][7]) ? 'yes' : 'no';
		$check_8b = isset($_POST['adverse_predni'][8]) ? 'yes' : 'no';
		$check_9b = isset($_POST['adverse_predni'][9]) ? 'yes' : 'no';
		$check_10b = isset($_POST['adverse_predni'][10]) ? 'yes' : 'no';
		$check_11b = isset($_POST['adverse_predni'][11]) ? 'yes' : 'no';
		$check_12b = isset($_POST['adverse_predni'][12]) ? 'yes' : 'no';
		$check_13b = isset($_POST['adverse_predni'][13]) ? 'yes' : 'no';
		$check_14b = isset($_POST['adverse_predni'][14]) ? 'yes' : 'no';
		$check_15b = isset($_POST['adverse_predni'][15]) ? 'yes' : 'no';
		$query1 = "UPDATE  form4_checkbox SET 
		`pid`='$id', 
		`Mild_Indigestion`='$check_0b',
		`Peptic_Ulcer`='$check_1b',
		`Striae`='$check_2b', 
		`Herpes_Zoster`='$check_3b',
		`Hyperglycaemia`='$check_4b',
		`Hypertension`='$check_5b', 
		`Malaena`='$check_6b',
		`Glaucoma`='$check_7b',
		`Truncal_Obesity`='$check_8b',
		`Osteoporosis`='$check_9b',
		`Moon_Face`='$check_10b',
		`Psychosis`='$check_11b',
		`Gastrointestinal_bleeding`='$check_12b',
		`Haematemesis`='$check_13b',
		`Extensive_Ringworm`='$check_14b',
		`Acne`='$check_15b'
		WHERE `pid` = ".$id."";
        mysqli_query($conn, $query1);
        
        $check_0c = isset($_POST['adverse_clofa'][0]) ? 'yes' : 'no';
		$check_1c = isset($_POST['adverse_clofa'][1]) ? 'yes' : 'no';
		$check_2c = isset($_POST['adverse_clofa'][2]) ? 'yes' : 'no';
		$check_3c = isset($_POST['adverse_clofa'][3]) ? 'yes' : 'no';
		$check_4c = isset($_POST['adverse_clofa'][4]) ? 'yes' : 'no';
		$check_5c = isset($_POST['adverse_clofa'][5]) ? 'yes' : 'no';
		$check_6c = isset($_POST['adverse_clofa'][6]) ? 'yes' : 'no';
		$check_7c = isset($_POST['adverse_clofa'][7]) ? 'yes' : 'no';
		$check_8c = isset($_POST['adverse_clofa'][8]) ? 'yes' : 'no';
		$check_9c = isset($_POST['adverse_clofa'][9]) ? 'yes' : 'no';
		$check_10c = isset($_POST['adverse_clofa'][10]) ? 'yes' : 'no';
		$check_11c = isset($_POST['adverse_clofa'][11]) ? 'yes' : 'no';
		
		$query2 = "UPDATE  form4_checkbox2 SET 
		`pid`='$id', 
		`Mild_Indigestion`='$check_0c',
		`Vomiting`='$check_1c',
		`Nausea`='$check_2c', 
		`Abdominal_Pain`='$check_3c',
		`Diarrhoea,Acute`='$check_4c',
		`Ichthyosis`='$check_5c', 
		`Weight_loss`='$check_6c',
		`Conjuctiva`='$check_7c',
		`Persistent_Indigestion`='$check_8c',
		`Diarrhoea,Chronic`='$check_9c',
		`Chronic_Dysentery`='$check_10c',
		`Skin_Discolouration`='$check_11c'
		WHERE `pid` = ".$id."";
        mysqli_query($conn, $query2);

		if(query($q, 'form4') ) {

			// $Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";

			header("location:../../modules/display_form_1-6.php?pid=".$id);
		} else {
			echo "<br>Person could not be made.";
		}

		// if ($conn->query($q) === TRUE) {
		// 	echo "New record created successfully";
		// } else {
		// 	echo "Error: " . $q . "<br>" . $conn->error;
		// }

		$conn->close();

	} else  {
		// do get
		echo "not a post request";
	}

	

 ?>

