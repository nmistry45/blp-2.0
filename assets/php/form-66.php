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
		$pid = $_GET['pid'];
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
		if(isset($_POST['current_status'])){
			$current_status = $_POST['current_status'];
		}

		else{
			
			$current_status = "NAN";
		}

		if(isset($_POST['nfa'])){
			$nfa = $_POST['nfa'];
		}

		else{
			
			$nfa = "NAN";
		}

		if(isset($_POST['eess'])){
			$eess = $_POST['eess'];
		}

		else{
			
			$eess = "NAN";
		}	

		if(isset($_POST['qol'])){
			$qol = $_POST['qol'];
		}

		else{
			
			$qol = "NAN";
		}

		if(isset($_POST['vas'])){
			$vas = $_POST['vas'];
		}

		else{
			
			$vas = "NAN";
		}

		if(isset($_POST['current_antireaction_therapy'])){
			$current_antireaction_therapy = $_POST['current_antireaction_therapy'];
		}

		else{
			
			$current_antireaction_therapy = "NAN";
		}

		

		if(isset($_POST['no_weeks_extra_clofazimine'])){
			$no_weeks_extra_clofazimine = $_POST['no_weeks_extra_clofazimine'];
		}

		else{
			
			$no_weeks_extra_clofazimine = "NAN";
		}

		if(isset($_POST['enl_at_randomisation'])){
			$enl_at_randomisation = $_POST['enl_at_randomisation'];
		}

		else{
			
			$enl_at_randomisation = "NAN";
		}

		if(isset($_POST['duration_first_episode'])){
			$duration_first_episode = $_POST['duration_first_episode'];
		}

		else{
			
			$duration_first_episode = "NAN";
		}

		if(isset($_POST['flare_of_enl'])){
			$flare_of_enl = $_POST['flare_of_enl'];
		}

		else{
			
			$flare_of_enl = "NAN";
		}

		if(isset($_POST['if_flare_how_long'])){
			$if_flare_how_long = $_POST['if_flare_how_long'];
		}

		else{
			
			$if_flare_how_long = "NAN";
		}

		if(isset($_POST['eess_at_flare'])){
			$eess_at_flare = $_POST['eess_at_flare'];
		}

		else{
			
			$eess_at_flare = "NAN";
		}

		if(isset($_POST['recurrent_enl_steroids'])){
			$recurrent_enl_steroids = $_POST['recurrent_enl_steroids'];
		}

		else{
			
			$recurrent_enl_steroids = "NAN";
		}

		if(isset($_POST['chronic_enl_randomisation'])){
			$chronic_enl_randomisation = $_POST['chronic_enl_randomisation'];
		}

		else{
			
			$chronic_enl_randomisation = "NAN";
		}

		if(isset($_POST['total_steroids_consumed'])){
			$total_steroids_consumed = $_POST['total_steroids_consumed'];
		}

		else{
			
			$total_steroids_consumed = "NAN";
		}
		
		if(isset($_POST['change_in_nfa'])){
			$change_in_nfa = $_POST['change_in_nfa'];
		}

		else{
			
			$change_in_nfa = "NAN";
		}

		if(isset($_POST['change_in_nfa_desc'])){
			$change_in_nfa_desc = $_POST['change_in_nfa_desc'];
		}

		else{
			
			$change_in_nfa_desc = "NAN";
		}

		if(isset($_POST['change_in_qol'])){
			$change_in_qol = $_POST['change_in_qol'];
		}

		else{
			
			$change_in_qol = "NAN";
		}
		
		if(isset($_POST['adverse_effect_of_drug'])){
			$adverse_effect_of_drug = $_POST['adverse_effect_of_drug'];
		}

		else{
			
			$adverse_effect_of_drug = "NAN";
		}

		if(isset($_POST['drug_desc'])){
			$drug_desc = $_POST['drug_desc'];
		}

		else{
			
			$drug_desc = "NAN";
		}

	

		if(isset($_POST['others'])){
			$others = $_POST['others'];
		}

		else{
			
			$others = "NAN";
		}
		
		$q1 = "insert into form6 (pid,date,staff_name,current_status,nfa,eess,qol,vas,
		current_antireaction_therapy,no_weeks_extra_clofazimine,enl_at_randomisation,duration_first_episode,flare_of_enl,if_flare_how_long,eess_at_flare,recurrent_enl_steroids,chronic_enl_randomisation,total_steroids_consumed,
		change_in_nfa,change_in_nfa_desc,change_in_qol,adverse_effect_of_drug,drug_desc,others) 
		values ('$pid','$date','$staff_name','$current_status','$nfa','$eess','$qol','$vas','$current_antireaction_therapy',
		'$no_weeks_extra_clofazimine','$enl_at_randomisation','$duration_first_episode','$flare_of_enl','$if_flare_how_long','$eess_at_flare','$recurrent_enl_steroids','$chronic_enl_randomisation','$total_steroids_consumed',
		'$change_in_nfa','$change_in_nfa_desc','$change_in_qol','$adverse_effect_of_drug','$drug_desc','$others');";

		$check_0f = isset($_POST['adverse_predni'][0]) ? 'yes' : 'no';
		$check_1f = isset($_POST['adverse_predni'][1]) ? 'yes' : 'no';
		$check_2f = isset($_POST['adverse_predni'][2]) ? 'yes' : 'no';
		$check_3f = isset($_POST['adverse_predni'][3]) ? 'yes' : 'no';
		$check_4f = isset($_POST['adverse_predni'][4]) ? 'yes' : 'no';
		$check_5f = isset($_POST['adverse_predni'][5]) ? 'yes' : 'no';
		$check_6f = isset($_POST['adverse_predni'][6]) ? 'yes' : 'no';
		$check_7f = isset($_POST['adverse_predni'][7]) ? 'yes' : 'no';
		$check_8f = isset($_POST['adverse_predni'][8]) ? 'yes' : 'no';
		$check_9f = isset($_POST['adverse_predni'][9]) ? 'yes' : 'no';
		$check_10f = isset($_POST['adverse_predni'][10]) ? 'yes' : 'no';
		$check_11f = isset($_POST['adverse_predni'][11]) ? 'yes' : 'no';
		$check_12f = isset($_POST['adverse_predni'][12]) ? 'yes' : 'no';
		$check_13f = isset($_POST['adverse_predni'][13]) ? 'yes' : 'no';
		$check_14f = isset($_POST['adverse_predni'][14]) ? 'yes' : 'no';
		$check_15f = isset($_POST['adverse_predni'][15]) ? 'yes' : 'no';
		$query1 = "INSERT INTO form6_checkbox VALUES ('$pid', '$check_0f','$check_1f','$check_2f', '$check_3f','$check_4f','$check_5f', '$check_6f','$check_7f','$check_8f', '$check_9f','$check_10f','$check_11f', '$check_12f','$check_13f','$check_14f','$check_15f')";
		mysqli_query($conn, $query1);

		$check_0g = isset($_POST['adverse_clofa'][0]) ? 'yes' : 'no';
        $check_1g = isset($_POST['adverse_clofa'][1]) ? 'yes' : 'no';
        $check_2g = isset($_POST['adverse_clofa'][2]) ? 'yes' : 'no';
        $check_3g = isset($_POST['adverse_clofa'][3]) ? 'yes' : 'no';
        $check_4g = isset($_POST['adverse_clofa'][4]) ? 'yes' : 'no';
        $check_5g = isset($_POST['adverse_clofa'][5]) ? 'yes' : 'no';
        $check_6g = isset($_POST['adverse_clofa'][6]) ? 'yes' : 'no';
        $check_7g = isset($_POST['adverse_clofa'][7]) ? 'yes' : 'no';
        $check_8g = isset($_POST['adverse_clofa'][8]) ? 'yes' : 'no';
        $check_9g = isset($_POST['adverse_clofa'][9]) ? 'yes' : 'no';
        $check_10g = isset($_POST['adverse_clofa'][10]) ? 'yes' : 'no';
        $check_11g = isset($_POST['adverse_clofa'][11]) ? 'yes' : 'no';
		$query2 = "INSERT INTO form6_checkbox2 VALUES ('$pid', '$check_0g','$check_1g','$check_2g', '$check_3g','$check_4g','$check_5g', '$check_6g','$check_7g','$check_8g', '$check_9g','$check_10g','$check_11g')";
		mysqli_query($conn, $query2);

		$check_0h = isset($_POST['withdraw'][0]) ? 'yes' : 'no';
        $check_1h = isset($_POST['withdraw'][1]) ? 'yes' : 'no';
        $check_2h = isset($_POST['withdraw'][2]) ? 'yes' : 'no';
        $check_3h = isset($_POST['withdraw'][3]) ? 'yes' : 'no';
        $check_4h = isset($_POST['withdraw'][4]) ? 'yes' : 'no';
		$check_5h = isset($_POST['withdraw'][5]) ? 'yes' : 'no';
		$query3 = "INSERT INTO form6_checkbox3 VALUES ('$pid', '$check_0h','$check_1h','$check_2h', '$check_3h','$check_4h','$check_5h')";
		mysqli_query($conn, $query3);
	
		if(query($q1, 'form6') ) {

			// $Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";

			header("location:../../modules/display_form_1-6.php?pid=".$pid);
		} else {
			echo "<br>Person could not be made.";
		}

		//if ($conn->query($q1) === TRUE) {
		//	echo "New record created successfully";
		//} else {
			//echo "Error: " . $q1 . "<br>" . $conn->error;
		//}

$conn->close();

	} 
	else {
		// do get
		echo "not a post request";
	}

?>