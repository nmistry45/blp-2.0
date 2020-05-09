<?php
   session_start();
   include ('logout.php');
   if(!isset($_SESSION['id'])){
       echo"<script>
       alert('Please Login');
       document.location.href = 'login.php';
       </script>
       ";
   }
   
  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blp_db";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/faviconsBLP/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
  <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Patient Form</title>

    <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css --><!--
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script>
<!-- stylesheet -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

  <!-- header -->   
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!-- Latest compiled JavaScript -->
  <link rel="stylesheet" href="../assets/css/form_style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
            <?php $pid = $_GET['pid'];
            $result_form_5 = mysqli_query($conn, "SELECT patient_name, clinic_id, study_no from form1 where pid = $pid");
            while ($row_form_5 = mysqli_fetch_assoc($result_form_5)){
            ?>
            <form method="POST" id="signup-form" class="signup-form" onsubmit="return checkDate(this)" action="../assets/php/form-55.php?pid=<?php echo $pid; ?>" enctype="multipart/form-data">
                <div class="form-group" style="margin-top: 20px">
                            <label for="patient_name" class="form-label">Patient Name:</label>
                            <label for="op_patient_name" class="form-label" style="margin-left: -125px;"><?php echo $row_form_5['patient_name']; ?></label>
                            <label for="clinic_id" class="form-label" style="margin-left: 100px;">Clinic ID:</label>
                            <label for="op_clinic_id" class="form-label" style="margin-left: -150px;"><?php echo $row_form_5['clinic_id']; ?></label>
                            <label for="study_no" class="form-label" style="margin-left: 175px;">Study Number:</label>
                            <label for="op_study_no" class="form-label" style="margin-left: -150px;"><?php echo $row_form_5['study_no']; ?></label>
                </div>
            <?php } ?>
        <hr>
        <h3><span class="title_text"><center><b>5. Clinical Record Sheet<b></center></span></h3>
        <hr>
                
                <!-- <fieldset> -->

                    <div class="form-row" style="padding-left: 39px ;margin-top: 9px;">
                        <div class="form-group" style="padding-left: 39px ;margin-top: 9px;">
                            <label for="date" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input style="margin-left: 13px;" type="date" name="date" id="date" />
                        </div>
                        <div class="form-group" style="padding-left: 310px;">
                            <label for="staff_name" class="form-label">Staff Name</label>                            
                            <input type="text" name="staff_name" id="staff_name" placeholder="Staff Name"/>
                        </div>
                    </div>

                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="patient_since_last_visit" class="form-label">How was patient since last visit</label>
                             <textarea name="patient_since_last_visit" id="patient_since_last_visit" placeholder="Describe Here" ></textarea>
                        </div>
                         <div class="form-group">
                            <label for="current_medication" class="form-label" style="color: blue;"><u><b>Current Medication: </u></b></label>
                        </div>

                        <div class="form-group">
                                <label for="prednisolone_5" class="form-label">Predisolone:</label>
                                <input type="text" name="prednisolone_5" id="prednisolone_5" placeholder="Medication during past 1 week" />
                        </div>

                        <div class="form-group">
                                <label for="clofazimine_vitamins" class="form-label">Clofazimine/Vitamins:</label>
                                <input type="text" name="clofazimine_vitamins" id="clofazimine_vitamins" placeholder="Medication during past 1 week" />
                        </div>

                         <div class="form-group">
                            <label for="physical_assessment" class="form-label" style="color: blue;"><u><b>Physical assessment: </u></b></label>
                        </div>

                       <div class="fieldset-content">
                        <div class="form-group" style="padding-left:2px;">
						<div class="form-radio" >
                                <label for="nfa_5"  class="form-label">NFA</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="nfa_5" value="yes" id="yes" />
                                    <label for="yes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="nfa_5" value="no" id="no" />
                                    <label for="no" style="width:80px;">No</label>
                                </div>
                            </div>
                                        
                        </div>
                        <div class="form-group" style="padding-left: 34px" >
                            <label for="new_nfi_5" class="form-label">NFI</label>
                            <select class="form-control;valid" name="new_nfi_5" id="new_nfi_5">
                                      <option value="yes">Yes</option>
                                      <option value="no">No</option>
                             </select>
                         </div>
                        <div style="padding-left: 34px" class="form-textarea" id="IfyesHDiv">
                            <label for="if_yes" class="form-label">If yes?</label>
                            <td><input type="text" id="IfyesH" name="if_yes" placeholder="If yes?" class="valid"></td>
                        </div>
                            

								<div class="form-group" style="padding-left:10px">
                                <label for="eess_score_5" >EESS</label>
                    
								<input type="range" style="border:1px solid;background-color: lightblue;" name="eess_score_5" id="eess_score_5" min="0" max="30" value="15" onchange="show_value2(this.value)"/>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span>
								
								<style type="text/css">
                                #eess_score_5{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #eess_score_5::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #eess_score_5::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #eess_score_5:active::-webkit-slider-thumb{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                }
                            </style>
								
								<script type="text/javascript">
								function show_value2(x)
								{
									document.getElementById("slider_value2").innerHTML=x;
								} 
								</script>
								<br>
                            </div>
                            
                            <div class="form-group" style="padding-left:15px">
                                <label for="adverse_effect_prednisolone">Checklist for adverse effects of prednisolone</label>&ensp;&ensp;&ensp;
                                <div class="container">
  
 <!-- <form   method="POST" id="signup-form" class="signup-form" action="form-66.php">-->
                            <div class="row">

                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_predni[0]"  value="yes" style="padding-left:4px;margin-top:9px">Mild indigestion 
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px;margin-top:9px">Peptic Ulcer
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_predni[2]"  value="yes" style="padding-left:4px;margin-top:9px">Striae
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px;margin-top:9px">Herpes Zoster
                                </label>

                            </div>

                                <div class="row">

                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[4]"  value="yes" style="padding-left:4px;margin-top:9px">Hyperglycaemia 
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_predni[5]"  value="yes" style="padding-left:4px;margin-top:9px">Hypertension
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[6]"  value="yes" style="padding-left:4px;margin-top:9px">Malaena
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[7]"  value="yes" style="padding-left:4px;margin-top:9px">Glaucoma
                                </label>

                            </div>

                            <div class="row">

                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[8]"  value="yes" style="padding-left:4px;margin-top:9px">Truncal Obesity  
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[9]"  value="yes" style="padding-left:4px;margin-top:9px">Osteoporosis
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[10]"  value="yes" style="padding-left:4px;margin-top:9px">Moon Face
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[11]"  value="yes" style="padding-left:4px;margin-top:9px">Psychosis
                                </label>

                            </div>
                            <div class="row">

                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                <input type="checkbox"  name="adverse_predni[12]"  value="yes" style="padding-left:4px;margin-top:9px">Gastrointestinal bleeding
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_predni[13]"  value="yes" style="padding-left:4px;margin-top:9px">Haematemesis
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[14]"  value="yes" style="padding-left:4px;margin-top:9px">&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_predni[15]"  value="yes" style="padding-left:4px;margin-top:9px">Acne
                                </label>

                            </div>

 <!--</form>-->
</div>
</div>

						<div class="form-group" style="padding-left:15px">
                        <label for="adverse_effect_clofazimine">Checklist for adverse effects of Clofazimine</label>&ensp;&ensp;&ensp;
                               
						<div class="container">
									
				<!--<form>	-->				
                            <div class="row">

                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_clofa[0]"  value="yes" style="padding-left:4px;margin-top:9px">Mild indigestion 
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_clofa[1]" value="yes" style="padding-left:4px;margin-top:9px">Vomiting
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_clofa[2]"  value="yes" style="padding-left:4px;margin-top:9px">Nausea
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_clofa[3]" value="yes" style="padding-left:4px;margin-top:9px">Abdominal Pain
                                </label>

                            </div>

                            <div class="row">

                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_clofa[4]"  value="yes" style="padding-left:4px;margin-top:9px">Diarrhoea,Acute 
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox" name="adverse_clofa[5]"  value="yes" style="padding-left:4px;margin-top:9px">Ichthyosis
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_clofa[6]"  value="yes" style="padding-left:4px;margin-top:9px">Weight loss
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_clofa[7]"  value="yes"style="padding-left:4px;margin-top:9px">Conjuctiva
                                </label>

                            </div>

                            <div class="row">

                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_clofa[8]"  value="yes" style="padding-left:4px;margin-top:9px">Persistent<br> Indigestion 
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_clofa[9]"  value="yes" style="padding-left:4px;margin-top:9px">Diarrhoea,<br>Chronic
                                </label>
                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_clofa[10]"  value="yes" style="padding-left:4px;margin-top:9px">Chronic<br> Dysentery
                                </label>
                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                    <input type="checkbox"  name="adverse_clofa[11]"  value="yes" style="padding-left:4px;margin-top:9px">Skin <br>Discolouration
                                </label>

                            </div>

							<!--	</form>-->
						</div>
						</div>
							  
                         <div class="form-group">
                                <label for="patient_worse" class="form-label">Is Patient Worse:</label>
                                <input type="text" name="patient_worse" id="patient_worse" placeholder="Describe condition" />
                        </div>

                        <div class="form-group">
                            <label for="time_since_flare_began">Time since flare began</label>
                            <input type="range"style="border:1px solid;background-color: lightblue;" name="time_since_flare_began" id="time_since_flare_began" min="1" max="14" value="7" onchange="show_value3(this.value)">
                          <span id="slider_value3" style="color:black;font-weight:bold;"></span><br>
								 <span id="slider_value3" style="color:black;font-weight:bold;"></span>
								
								<style type="text/css">
                                #time_since_flare_began{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #time_since_flare_began::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #time_since_flare_began::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #time_since_flare_began:active::-webkit-slider-thumb{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                }
                            </style>
								
								<script type="text/javascript">
								function show_value3(x)
								{
									document.getElementById("slider_value3").innerHTML=x;
								} 
								</script>
                        </div>

                        <label style="color:blue;"><u><b>Treatment prescribed:</u></b></label>
						 
						 
						 
                       <div class="form-group" style="padding-left: 34px">
                          <label for="dp" class="form-label">(a) Continue standard steroid course</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th> Dose</th>
                                            <th> Duration</th>   
                                           <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="dose_std_course" class="valid"></td>
                                            <td><input type="text" name="dura_std_course"class="valid"></td>
                                           <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>
                                        

                                    </tbody>

                            </table>
                        
                        </div>
                        
						<div class="form-group" style="padding-left: 34px">
                          <label for="dp" class="form-label">(b)Additional prednisolone</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Dose</th>
                                            <th>Duration</th>   
                                           <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="dose_add_predni" class="valid"></td>
                                            <td><input type="text" name="dura_add_predni"class="valid"></td>
                                           <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>
                                        

                                    </tbody>

                            </table>
                        
                        </div>
                        

						<div class="form-group">
                                <label for="advised_admission" class="form-label">Advised admission:</label>
                                <input type="text" name="advised_admission" id="advised_admission" placeholder="Describe condition" />
                        </div>

                        <div class="form-group" style="padding-left: 0px ;margin-top: 9px;">
                            <label for="date_of_next_assessment_5" class="form-label">Date of next assessment:</label>&ensp;&ensp;
                            <input style="margin-left: -18px;" type="date" name="date_of_next_assessment_5" id="date_of_next_assessment_5" />
                        </div>
						
						

                        <input type="submit" value="submit" name="submit" id="submit">
				<br>
                     <h4 id="result"></h4> 
					<h4 id="result1"></h4> 		

                    <div class="fieldset-footer">
                        <span>Form 5 of 6</span>
                    </div>

                    </div>
                
                <!-- </fieldset> -->

            </form>

        </div>

        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
        </div>

    </div>

    <!-- JS -->

	
    <script type="text/javascript">
	function checkDate(thisform)
   {
	    var date1  = thisform.date.value;
      var assesdate = thisform.date_of_next_assessment_5.value;
      if(date1 >= assesdate)
      {
        alert("Date of assessment should be greater than date of form");
        thisform.date_of_next_assessment_5.focus();
        return false;
      }	 
        return true;
   }
   
	</script>
	<script type="text/javascript">
			$("#new_nfi_5").change(function() {
			  if ($(this).val() == "yes") {
				$('#IfyesHDiv').show();
			   
			  } else {
				$('#IfyesHDiv').hide();
				
			  }
			});
			$("#new_nfi_5").trigger("change");
	</script>  
    
</body>

</html>