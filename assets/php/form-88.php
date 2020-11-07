<?php

include('connection.php');	

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // do post

	$pid = $_GET['pid'];
	function query ( $query, $message = '' ) {
		global $conn;
		$insert = mysqli_query($conn, $query);
		if($insert){
		  //echo"Successful Insertion ".$message."<br>";
		  return 1;
		}
		else{
		  echo"<br>Query error ".$message." : " . mysqli_error($conn)."<br>";
		  return 0;
		}
	}


            $f8id = $conn->insert_id;
    
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
    		$query1 = "INSERT INTO form8_checkbox VALUES ('$f8id','$pid','$check_0a','$check_1a','$check_2a', '$check_3a','$check_4a','$check_5a', '$check_6a','$check_7a','$check_8a', '$check_9a','$check_10a','$check_11a', '$check_12a','$check_13a','$check_14a','$check_15a')";
            mysqli_query($conn, $query1);
            
        // if(query($query1, 'Others_Details') ) {
        

            $check_0b = isset($_POST['adverse_clofa'][0]) ? 'yes' : 'no';
    		$check_1b = isset($_POST['adverse_clofa'][1]) ? 'yes' : 'no';
    		$check_2b = isset($_POST['adverse_clofa'][2]) ? 'yes' : 'no';
    		$check_3b = isset($_POST['adverse_clofa'][3]) ? 'yes' : 'no';
    		$check_4b = isset($_POST['adverse_clofa'][4]) ? 'yes' : 'no';
    		$check_5b = isset($_POST['adverse_clofa'][5]) ? 'yes' : 'no';
    		$check_6b = isset($_POST['adverse_clofa'][6]) ? 'yes' : 'no';
    		$check_7b = isset($_POST['adverse_clofa'][7]) ? 'yes' : 'no';
    		$check_8b = isset($_POST['adverse_clofa'][8]) ? 'yes' : 'no';
    		$check_9b = isset($_POST['adverse_clofa'][9]) ? 'yes' : 'no';
    		$check_10b = isset($_POST['adverse_clofa'][10]) ? 'yes' : 'no';
    		$check_11b = isset($_POST['adverse_clofa'][11]) ? 'yes' : 'no';
    		
    		$query2 = "INSERT INTO form8_checkbox2 VALUES ('$f8id','$pid','$check_0b','$check_1b','$check_2b', '$check_3b','$check_4b','$check_5b', '$check_6b','$check_7b','$check_8b', '$check_9b','$check_10b','$check_11b')";
    		mysqli_query($conn, $query2);
			
				
// 			header("location:../../modules/display_form_1-6.php?pid=".$pid);
            echo("<script>location.href = '../../modules/display_form_1-6.php?pid=$pid'</script>");
		// }else {
		// 	echo "<br>Person could not be made.";
		// }
		
		$conn->close();
} else  {
		// do get
		echo "not a post request";
	}

?>