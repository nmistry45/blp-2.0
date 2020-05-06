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
		$update = mysqli_query($conn, $query);
		if($update){
		  echo"Successfully Updated ".$message."<br>";
		  return 1;
		}
		else{
		  echo"<br>Query error ".$message." : " . mysqli_error($conn)."<br>";
		  return 0;
		}
	}

		//mysqli_select_db($con , 'blp_db');
		
		if(isset($_POST['patient_name'])){
			$patient_name = ($_POST['patient_name']);
		}
		else{

			$patient_name = "NAN";
		}

		if(isset($_POST['clinic_id'])){
			$clinic_id = $_POST['clinic_id'];
		}
		else{
			
			$clinic_id = "Nan";
		}
		
		if(isset($_POST['study_no'])){
			$study_no = $_POST['study_no'];
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

		if(isset($_POST['patient_name1'])){
			$patient_name1 = $_POST['patient_name1'];
		}
		else{
			
			$patient_name1 = "NAN";
		}	
		
		if(isset($_POST['sex'])){
			$sex = $_POST['sex'];
		}
		else{
			
			$sex = "NAN";
		}
		
		if(isset($_POST['clinic_regno'])){
			$clinic_regno = $_POST['clinic_regno'];
		}
		else{
			
			$clinic_regno = "Nan";
		}
		
		if(isset($_POST['address'])){
			$address = $_POST['address'];
		}
		else{
			
			$address = "NAN";
		}
		
		if(isset($_POST['dateMDT'])){
			$dateMDT = $_POST['dateMDT'];
		}
		else{
			
			$dateMDT = "NAN";
		}

		if(isset($_POST['dateRFT'])){
			$dateRFT = $_POST['dateRFT'];
		}
		else{
			
			$dateRFT = "Nan";
		}
		
		if(isset($_POST['SmearDiagnosis'])){
			$SmearDiagnosis = $_POST['SmearDiagnosis'];
		}
		else{
			
			$SmearDiagnosis = "NAN";
		}
		
		if(isset($_POST['SmearDate'])){
			$SmearDate = $_POST['SmearDate'];
		}
		else{
			
			$SmearDate = "NAN";
		}
		
		if(isset($_POST['mdiag'])){
			$mdiag = $_POST['mdiag'];
		}
		else{

			$mdiag = "NAn";
		}

		if(isset($_POST['Age'])){
			$Age = $_POST['Age'];
		}
		else{

			$Age = "NAN";
		}
		
		if(isset($_POST['Weight'])){
			$Weight = $_POST['Weight'];
		}
		else{

			$Weight = "NAN";
		}

		if(isset($_POST['Height'])){
			$Height = $_POST['Height'];
		}
		else{
			
			$Height = "NAN";
		}

		if(isset($_POST['BMI'])){
			$BMI = $_POST['BMI'];
		}
		else{
			
			$BMI = "NAN";
		}

		if(isset($_POST['no_contra_indication_steroids'])){
			$no_contra_indication_steroids = $_POST['no_contra_indication_steroids'];
		}
		else{
			
			$no_contra_indication_steroids = "Nan";
		}

		if(isset($_POST['able_to_attend_regularly'])){
			$able_to_attend_regularly = $_POST['able_to_attend_regularly'];
		}
		else{
			
			$able_to_attend_regularly = "NAN";
		}

		if(isset($_POST['pregnant'])){
			$pregnant = $_POST['pregnant'];
		}
		else{
			
			$pregnant = "Nan";
		}

		if(isset($_POST['tuberculosis'])){
			$tuberculosis = $_POST['tuberculosis'];
		}
		else{
			
			$tuberculosis = "NAN";
		}
		
		if(isset($_POST['diabetes'])){
			$diabetes = $_POST['diabetes'];
		}
		else{
			
			$diabetes = "NAN";
		}

		if(isset($_POST['other_serious_illness'])){
			$other_serious_illness = $_POST['other_serious_illness'];
		}
		else{
			
			$other_serious_illness = "NAN";
		}

		if(isset($_POST['other_illness_desc'])){
			$other_illness_desc = $_POST['other_illness_desc'];
		}
		else{
			
			$other_illness_desc = "NAN";
		}
		
		if(isset($_POST['inform_consent'])){
			$inform_consent = $_POST['inform_consent'];
		}
		else{
			
			$inform_consent = "NAN";
		}

		if(isset($_POST['allocate_study_no'])){
			$allocate_study_no = $_POST['allocate_study_no'];
		}
		else{
			
			$allocate_study_no = "NAN";
		}

		if(isset($_POST['history_of_enl'])){
			$history_of_enl = $_POST['history_of_enl'];
		}
		else{
			
			$history_of_enl = "NAN";
		}

		$Contact = empty($_POST['Contact']) ? 0000000000 : $_POST['Contact'];
		
		$q = "UPDATE `form1` SET
		`patient_name` = '$patient_name' ,
		`clinic_id` = '$clinic_id',
		`study_no` = '$study_no', 
		`date` = '$date',
		`staff_name` = '$staff_name',
		`patient_name1` = '$patient_name1',
		`sex` = '$sex',
		`clinic_regno` = '$clinic_regno',
		`address` = '$address',
		`dateMDT` = '$dateMDT',
		`dateRFT` = '$dateRFT',
		`SmearDiagnosis` = '$SmearDiagnosis',
		`SmearDate` = '$SmearDate',
		`mdiag` = '$mdiag',
		`Age` = '$Age',
		`Weight` = '$Weight',
		`Height` = '$Height',
		`BMI` = '$BMI',
		`no_contra_indication_steroids` = '$no_contra_indication_steroids',
		`able_to_attend_regularly` = '$able_to_attend_regularly',
		`pregnant` = '$pregnant',
		`tuberculosis` = '$tuberculosis',
		`diabetes` = '$diabetes',
		`other_serious_illness` = '$other_serious_illness',
		`other_illness_desc` = '$other_illness_desc',
		`inform_consent` = '$inform_consent',
		`allocate_study_no` = '$allocate_study_no',
		`history_of_enl` = '$history_of_enl'
		
		WHERE `pid`=".$id."";


		if(query($q, 'Contact') ) {

			$Pid = $conn->insert_id;
			// echo "Pid is " . $Pid . "<br>";
			
			foreach ($Contact as $key => $value) {

				$Contact[$key] = empty($_POST['Contact'][$key]) ? 0000000000 : $_POST['Contact'][$key];
		
				$q2 = "UPDATE `form1_contact` SET 
				`pid` = '$Pid',
				`contact_no` = ' $Contact[$key]' 
				WHERE `pid` = ".$id."";
				query($q2, 'form1_contact');
				   
		
				if( $Contact[$key] == 0000000000 ) break;
			  }

			// header("location:../../modules/edit_form_2.php?pid=".$id);
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