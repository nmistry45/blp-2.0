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
		
		$q = "insert into form4 (pid,formDate,staff_name,current_status,nfa_4,eess_4,qol_4,vas_4,
		enl_present_time_since,time_since_last_received_prednisolone,recurrent_enl_start_predni,advised_admission,nextDate,nextPDate) 
		values ('$pid','$formDate','$staff_name','$current_status','$nfa_4','$eess_4','$qol_4','$vas_4','$enl_present_time_since',
		'$time_since_last_received_prednisolone','$recurrent_enl_start_predni','$advised_admission','$nextDate','$nextPDate');";
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
		$query1 = "INSERT INTO form4_checkbox VALUES ('$pid', '$check_0b','$check_1b','$check_2b', '$check_3b','$check_4b','$check_5b', '$check_6b','$check_7b','$check_8b', '$check_9b','$check_10b','$check_11b', '$check_12b','$check_13b','$check_14b','$check_15b')";
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
		$query2 = "INSERT INTO form4_checkbox2 VALUES ('$pid', '$check_0c','$check_1c','$check_2c', '$check_3c','$check_4c','$check_5c', '$check_6c','$check_7c','$check_8c', '$check_9c','$check_10c','$check_11c')";
		mysqli_query($conn, $query2);

		if(query($q, 'form4') ) {

			// $Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";

			header("location:../../modules/display_form_1-6.php?pid=".$pid);
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

