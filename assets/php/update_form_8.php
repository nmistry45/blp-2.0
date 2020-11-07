<?php

include('connection.php');	

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // do post

    $pid = $_GET['pid'];
    $f8id = $_GET['f8id'];
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
    		$query1 = "UPDATE  form8_checkbox SET 
            `pid` ='$pid',
            `Mild_Indigestion` ='$check_0a',
            `Severe/Persistent_Indigestion` ='$check_1a',
            `Peptic_Ulcer` ='$check_2a', 
            `Gastrointestinal_Bleeding` ='$check_3a',
            `Hypertension` ='$check_4a',
            `Hyperglycaemia_DiabetesMellitus` ='$check_5a', 
            `Glaucoma` ='$check_6a',
            `Psychosis` ='$check_7a',
            `FragilityFracture_OR_Osteoporosis` ='$check_8a', 
            `MoonFace_TruncalObesity_Striae` ='$check_9a',
            `Acne` ='$check_10a',
            `Extensive_Ringworm` ='$check_11a', 
            `Herpes_Zoster` ='$check_12a',
            `Delayed_wound_healing` ='$check_13a',
            `Tb` ='$check_14a',
            `Strongyloides_Hyperinfestation` ='$check_15a'
            WHERE `f8id`=".$f8id."";
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
    		
    		$query2 = "UPDATE form8_checkbox2 SET 
            `pid` ='$pid',
            `Nausea` ='$check_0b',
            `Vomiting` ='$check_1b',
            `Indigestion_Mild` ='$check_2b', 
            `Severe/Persistent_Indigestion` ='$check_3b',
            `Severe_Abdominal_Pain` ='$check_4b',
            `Diarrhoea_Acute` ='$check_5b', 
            `Diarrhoea_Chronic` ='$check_6b',
            `Chronic_Dysentery` ='$check_7b',
            `Skin_Discolouration` ='$check_8b', 
            `Discolouration_Conjunctiva/Tears` ='$check_9b',
            `Ichthyosis` ='$check_10b',
            `Weight_Loss` ='$check_11b'
            WHERE `f8id`=".$f8id."";
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