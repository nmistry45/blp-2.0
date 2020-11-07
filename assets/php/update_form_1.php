<?php

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// do post

	$id = $_GET['pid'];

	function query($query, $message = '')
	{
		global $conn;
		$update = mysqli_query($conn, $query);
		if ($update) {
			//echo"Successfully Updated ".$message."<br>";
			return 1;
		} else {
			echo "<br>Query error " . $message . " : " . mysqli_error($conn) . "<br>";
			return 0;
		}
	}

	if (isset($_POST['patient_name'])) {
		$patient_name = ($_POST['patient_name']);
	} else {

		$patient_name = "NAN";
	}

	if (isset($_POST['study_no'])) {
		$study_no = $_POST['study_no'];
	} else {

		$study_no = "NAN";
	}

	if (isset($_POST['date'])) {
		$date = $_POST['date'];
	} else {

		$date = "NAN";
	}
	if (isset($_POST['staff_name'])) {
		$staff_name = $_POST['staff_name'];
	} else {

		$staff_name = "NAN";
	}
	if (isset($_POST['patient_name1'])) {
		$patient_name1 = $_POST['patient_name1'];
	} else {

		$patient_name1 = "NAN";
	}

	if (isset($_POST['clinic_regno'])) {
		$clinic_regno = $_POST['clinic_regno'];
	} else {

		$clinic_regno = "Nan";
	}

	if (isset($_POST['address'])) {
		$address = $_POST['address'];
	} else {

		$address = "NAN";
	}

	if (isset($_POST['email_id'])) {
		$email_id = $_POST['email_id'];
	} else {

		$email_id = "NAN";
	}

	if (isset($_POST['local_staff_contact'])) {
		$local_staff_contact = $_POST['local_staff_contact'];
	} else {

		$local_staff_contact = "NAN";
	}

	if (isset($_POST['staff_mobile_no'])) {
		$staff_mobile_no = $_POST['staff_mobile_no'];
	} else {

		$staff_mobile_no = "NAN";
	}

	if (isset($_POST['dateMDT'])) {
		$dateMDT = $_POST['dateMDT'];
	} else {

		$dateMDT = "NAN";
	}

	if (isset($_POST['dateRFT'])) {
		$dateRFT = $_POST['dateRFT'];
	} else {

		$dateRFT = "Nan";
	}

	if (isset($_POST['SmearDiagnosis'])) {
		$SmearDiagnosis = $_POST['SmearDiagnosis'];
	} else {

		$SmearDiagnosis = "NAN";
	}

	if (isset($_POST['SmearDate'])) {
		$SmearDate = $_POST['SmearDate'];
	} else {

		$SmearDate = "NAN";
	}

	if (isset($_POST['mdiag'])) {
		$mdiag = $_POST['mdiag'];
	} else {
		$mdiag = "NAN";
	}

	if (isset($_POST['type'])) {
		$type = $_POST['type'];
	} else {
		$type = "NAN";
	}

	if (isset($_POST['Age'])) {

		$Age = $_POST['Age'];
	} else {
		$Age = "NAN";
	}

	if (isset($_POST['sex'])) {
		$sex = $_POST['sex'];
	} else {

		$sex = "NAN";
	}

	if (isset($_POST['Weight'])) {
		$Weight = $_POST['Weight'];
	} else {

		$Weight = "NAN";
	}

	if (isset($_POST['Height'])) {
		$Height = $_POST['Height'];
	} else {

		$Height = "NAN";
	}

	if (isset($_POST['BMI'])) {
		$BMI = $_POST['BMI'];
	} else {

		$BMI = "NAN";
	}

	if (isset($_POST['any_contra_indication_steroids'])) {
		$any_contra_indication_steroids = $_POST['any_contra_indication_steroids'];
	} else {

		$any_contra_indication_steroids = "Nan";
	}

	if (isset($_POST['able_to_attend_regularly'])) {
		$able_to_attend_regularly = $_POST['able_to_attend_regularly'];
	} else {

		$able_to_attend_regularly = "NAN";
	}

	if (isset($_POST['not_pregnant'])) {
		$not_pregnant = $_POST['not_pregnant'];
	} else {

		$not_pregnant = "Nan";
	}

	if (isset($_POST['long_term'])) {
		$long_term = $_POST['long_term'];
	} else {

		$long_term = "Nan";
	}

	if (isset($_POST['inform_consent'])) {
		$inform_consent = $_POST['inform_consent'];
	} else {

		$inform_consent = "NAN";
	}

	if (isset($_POST['allocate_study_no'])) {
		$allocate_study_no = $_POST['allocate_study_no'];
	} else {

		$allocate_study_no = "NAN";
	}

	if (isset($_POST['history_of_enl'])) {
		$history_of_enl = $_POST['history_of_enl'];
	} else {

		$history_of_enl = "NAN";
	}

	if (isset($_POST['others'])) {
		$others = $_POST['others'];
	} else {

		$others = "NAN";
	}

	$Contact = empty($_POST['Contact']) ? 0000000000 : $_POST['Contact'];

	$q = "UPDATE `form1` SET
		`patient_name` = '$patient_name' ,
		`study_no` = '$study_no', 
		`date` = '$date',
		`staff_name` = '$staff_name',
		`patient_name1` = '$patient_name1',
		`clinic_regno` = '$clinic_regno',
		`address` = '$address',
		`email_id` = '$email_id',
		`local_staff_contact` = '$local_staff_contact',
		`staff_mobile_no` = '$staff_mobile_no',
		`dateMDT` = '$dateMDT',
		`dateRFT` = '$dateRFT',
		`SmearDiagnosis` = '$SmearDiagnosis',
		`SmearDate` = '$SmearDate',
		`mdiag` = '$mdiag',
		`type` = '$type',
		`Age` = '$Age',
		`sex` = '$sex',
		`Weight` = '$Weight',
		`Height` = '$Height',
		`BMI` = '$BMI',
		`any_contra_indication_steroids` = '$any_contra_indication_steroids',
		`able_to_attend_regularly` = '$able_to_attend_regularly',
		`not_pregnant` = '$not_pregnant',
		`long_term` = '$long_term',
		`inform_consent` = '$inform_consent',
		`allocate_study_no` = '$allocate_study_no',
		`history_of_enl` = '$history_of_enl',
		`others` = '$others'
		
		WHERE `pid`=" . $id . "";

	$check_0h = isset($_POST['other'][0]) ? 'yes' : 'no';
	$check_1h = isset($_POST['other'][1]) ? 'yes' : 'no';
	$check_2h = isset($_POST['other'][2]) ? 'yes' : 'no';
	$check_3h = isset($_POST['other'][3]) ? 'yes' : 'no';
	$check_4h = isset($_POST['other'][4]) ? 'yes' : 'no';
	$check_5h = isset($_POST['other'][5]) ? 'yes' : 'no';

	$query3 = "UPDATE  form1_checkbox SET 
        `pid`='$id', 
        `HIV`='$check_0h',
        `Chronic_Moderate/Severe_Renal_Impairment`='$check_1h',
        `Tuberculosis`='$check_2h', 
        `Cancer`='$check_3h',
        `Uncontrolled_Type-1_Diabetes`='$check_4h',
        `Other_Illness`='$check_5h'
        WHERE `pid`=" . $id . "";
	mysqli_query($conn, $query3);

	if (query($q, 'Contact')) {

		// 			$Pid = $conn->insert_id;
		// echo "Pid is " . $Pid . "<br>";
		mysqli_query($conn, "DELETE FROM `form1_contact` WHERE `pid` = $id");

		foreach ($Contact as $key => $value) {

			$Contact[$key] = empty($_POST['Contact'][$key]) ? 0000000000 : $_POST['Contact'][$key];

			$q2 = "insert into `form1_contact` (
				`pid`,
				`contact_no` 
				) values ('$id','$Contact[$key]');";
			query($q2, 'form1_contact');

			if ($Contact[$key] == 0000000000) break;
		}
		// header("location:../../modules/display_form_1-6.php?pid=".$id);
		echo ("<script>location.href = '../../modules/display_form_1-6.php?pid=$id'</script>");
	} else {
		echo "<br>Person could not be made.";
	}

	$conn->close();
} else {
	// do get
	echo "not a post request";
}
