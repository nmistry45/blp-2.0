<?php

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$pid = $_GET['pid'];

	function query($query, $message = '')
	{
		global $conn;
		$insert = mysqli_query($conn, $query);
		if ($insert) {
			//echo"Successful Insertion ".$message."<br>";
			return 1;
		} else {
			echo "<br>Query error " . $message . " : " . mysqli_error($conn) . "<br>";
			return 0;
		}
	}

	function escape($string)
	{
		global $conn;
		return mysqli_real_escape_string($conn, $string);
	}

	$date_form_7 = empty($_POST['date_form_7']) ? 'Unknown' : $_POST['date_form_7'];
	$staff_name_7 = empty($_POST['staff_name_7']) ? 'Unknown' : $_POST['staff_name_7'];
	$comments_7 = empty($_POST['comments_7']) ? 'Unknown' : $_POST['comments_7'];

	$misid = $conn->insert_id;

	foreach ($date_form_7 as $key => $value) {

		$date_form_7[$key] = escape(empty($_POST['date_form_7'][$key]) ? 'Unknown' : $_POST['date_form_7'][$key]);
		$staff_name_7[$key] = escape(empty($_POST['staff_name_7'][$key]) ? 'Unknown' : $_POST['staff_name_7'][$key]);
		$comments_7[$key] = escape(empty($_POST['comments_7'][$key]) ? 'Unknown' : $_POST['comments_7'][$key]);

		$q2 = "insert into `form7` (
				`misid`,
				`pid`,
				`date_form_7`,
				`staff_name_7`,
				`comments_7`
			) VALUES ('$misid', '$pid', '$date_form_7[$key]', '$staff_name_7[$key]', '$comments_7[$key]');";
		query($q2, 'form7');
	}

	echo ("<script>location.href = '../../modules/display_form_1-6.php?pid=$pid'</script>");
	$conn->close();
} else {
	// do get
	echo "not a post request";
}
