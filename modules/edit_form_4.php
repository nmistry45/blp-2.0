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
    

$id = $_GET['pid'];

$result_form_4 = mysqli_query($conn, "SELECT * from form4 where pid = $id");
$result_form4_checkBox2 = mysqli_query($conn, "SELECT * from form4_checkbox2 where pid = $id");
$result_form4_checkBox = mysqli_query($conn, "SELECT * from form4_checkbox where pid = $id");



while ($row_form_4 = mysqli_fetch_assoc($result_form_4)){
            while ($row_form4_checkBox2 = mysqli_fetch_assoc($result_form4_checkBox2)){
                while ($row_form4_checkBox = mysqli_fetch_assoc($result_form4_checkBox)){
                   

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
            <?php 
            $result_form_4_1 = mysqli_query($conn, "SELECT patient_name, clinic_id, study_no from form1 where pid = $id");
            while ($row_form_4_1 = mysqli_fetch_assoc($result_form_4_1)){
            ?>
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/update_form_4.php?pid=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="form-group" style="margin-top: 20px">
                            <label for="patient_name" class="form-label">Patient Name:</label>
                            <label for="op_patient_name" class="form-label" style="margin-left: -125px;"><?php echo $row_form_4_1['patient_name']; ?></label>
                            <label for="clinic_id" class="form-label" style="margin-left: 100px;">Clinic ID:</label>
                            <label for="op_clinic_id" class="form-label" style="margin-left: -150px;"><?php echo $row_form_4_1['clinic_id']; ?></label>
                            <label for="study_no" class="form-label" style="margin-left: 175px;">Study Number:</label>
                            <label for="op_study_no" class="form-label" style="margin-left: -150px;"><?php echo $row_form_4_1['study_no']; ?></label>
            <?php } ?>
				
				  </div>
	  <hr>
      <h3><span class="title_text"><center><b>4. Post-randomisation 3 monthly routine follow up sheet (while no ENL treatment)<b></center></span></h3>
                
                <hr>
                <!--<fieldset>-->
                    <div class="form-row" style="padding-left: 76px ;margin-top: 9px;">
                            <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                                <label for="formDate" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <input style="margin-left: 13px;" type="date" name="formDate" id="formDate" value="<?php echo $row_form_4['formDate']; ?>" /> 
                            </div>
						
							<div class="form-group" style="padding-left:250px">
                            <label for="staff_name" class="form-label">Staff Name</label>
                            <input type="text" name="staff_name" id="staff_name" placeholder="Staff Name" value="<?php echo $row_form_4['staff_name']; ?>"/>
							</div>
                        </div>
							

				
				<div class="form-radio" style="padding-left:34px">
                    <label for="current_status" class="form-label">Current Reaction Status</label>
                        <div class="form-radio-item">
                                    <?php if($row_form_4['current_status'] === 'no reaction') { ?>
                                        <input type="radio" name="current_status" value="no reaction" id="no_enl" checked/>
                                        <label for="no_enl" style="width:120px;">No ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="no reaction" id="no_enl" />
                                        <label for="no_enl" style="width:120px;">No ENL</label>
                                    
                                    <?php } if($row_form_4['current_status'] === 'RR') { ?>
                                        <input type="radio" name="current_status" value="RR" id="RR" checked />
                                        <label for="RR" style="width:120px;">RR</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="RR" id="RR"  />
                                        <label for="RR" style="width:120px;">RR</label>
                                    
                                    <?php } if($row_form_4['current_status'] === 'acute enl'){?>                                
                                        <input type="radio" name="current_status" value="acute enl" id="acute_enl" checked/>
                                        <label for="acute_enl" style="width:120px;">Acute ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="acute enl" id="acute_enl" />
                                        <label for="acute_enl" style="width:120px;">Acute ENL</label>
                                        
                                    <?php } if($row_form_4['current_status'] === 'recurrent enl'){?>						
                                        <input type="radio" name="current_status" value="recurrent enl" id="recurrent_enl" checked />
                                        <label for="recurrent_enl" style="width:120px;">Recurrent ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="recurrent enl" id="recurrent_enl"  />
                                        <label for="recurrent_enl" style="width:120px;">Recurrent ENL</label>
                                        
                                    <?php } if($row_form_4['current_status'] === 'chronic enl'){?>	
                                        <input type="radio" name="current_status" value="chronic enl" id="chronic_enl" checked/>
                                        <label for="chronic_enl" style="width:120px;">Chronic ENL</label>
                                    <?php }else {?>   
                                        <input type="radio" name="current_status" value="chronic enl" id="chronic_enl" />
                                        <label for="chronic_enl" style="width:120px;">Chronic ENL</label>					
                                                                        
                                    <?php } ?>
                        </div>
                </div>
							
						 <fieldset>
					 <div class="form-group" style="padding-left:34px ;margin-top: 9px; text-align:left;"> 
                            <label  class="form-label" style="color:blue;" ><u><b>Physical Examination :</u></b></label>
                            </div>
							</fieldset>
							
				<div class="fieldset-content">
				
                    <div class="form-radio" style="padding-left:34px">
                                <label for="nfa_4" class="form-label">NFA</label>
                                <div class="form-radio-item">

                                    <?php if($row_form_4['nfa_4'] === 'yes') { ?>
                                        <input type="radio" name="nfa_4" value="yes" id="yes" checked />
                                        <label for="yes" style="width:75px;">Yes</label>

                                    <?php }else{?>
                                        <input type="radio" name="nfa_4" value="yes" id="yes" />
                                        <label for="yes" style="width:75px;">Yes</label>

                                    <?php } if($row_form_4['nfa_4'] === 'no') { ?>
                                        <input type="radio" name="nfa_4" value="no" id="no" checked/>
                                        <label for="no" style="width:75px;">No</label>

                                    <?php } else{ ?>
                                        <input type="radio" name="nfa_4" value="no" id="no" />
                                        <label for="no" style="width:75px;">No</label>
                                    <?php } ?>
                                </div>
                                
                            </div>
							
							
				<div class="form-group" style="padding-left:34px">&ensp;&ensp;&ensp;&ensp;&ensp;
                                <label for="eess" >EESS</label>
                    
								<input type="range" style="border:1px solid;background-color: lightblue;" name="eess_4" id="eess_4" min="0" max="30"  value="<?php echo $row_form_4['eess_4']; ?>"  onchange="show_value2(this.value)"/>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
								 <!-- <span id="slider_value2" style="color:black;font-weight:bold;"></span> -->
								
								<style type="text/css">
                                #eess_4{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #eess_4::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #eess_4::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #eess_4:active::-webkit-slider-thumb{
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
                            </div>			
							  

					<fieldset>
					 <div class="form-group" style="margin-top: 9px; text-align:left;"> 
                            <label  class="form-label" style="color:blue;" ><u><b>Patient Experience Assessment:</u></b></label>
                            </div>
              </fieldset>
              
                          <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="qol_4" class="form-label">QOL(SF36) score</label>
                              <input style="width: 180px;"type="text" name="qol_4" id="qol_4" placeholder="QOL score"  value="<?php echo $row_form_4['qol_4']; ?>" />
                          </div>

                          <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="vas_4" class="form-label">VAS for pigmentation</label>
                              <input style="width: 180px;" type="text" name="vas_4" id="vas_4" placeholder="VAS between 0-100"  value="<?php echo $row_form_4['vas_4']; ?>"  />
                          </div>



						<div class="form-group" style="margin-top: 9px;padding-left: 34px">
                                <label for="adverse_effect_prednisolone">Checklist for adverse effects of prednisolone</label>&ensp;&ensp;&ensp;&ensp;
                                <div class="container" style="margin-top: 9px">
  
                                    <!-- <form   method="POST" id="signup-form" class="signup-form" action="form-66.php">-->
                                    <div class="row">
                                            <?php if($row_form4_checkBox['Mild_Indigestion'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[0]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Mild indigestion 
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[0]"  value="yes" style="padding-left:4px;margin-top:9px">Mild indigestion 
                                                </label>

                                            <?php } if($row_form4_checkBox['Peptic_Ulcer'] === 'yes'){?>  
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px;margin-top:9px"checked>Peptic Ulcer
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px;margin-top:9px">Peptic Ulcer
                                                </label>
                                            <?php }if($row_form4_checkBox['Striae'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[2]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Striae
                                                </label>
                                            <?php }else{ ?>
                                                    <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[2]"  value="yes" style="padding-left:4px;margin-top:9px">Striae
                                                </label>
                                            <?php } if($row_form4_checkBox['Herpes_Zoster'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px;margin-top:9px"checked>Herpes Zoster
                                                </label>
                                            <?php }else{ ?>
                                                    <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px;margin-top:9px">Herpes Zoster
                                                </label>
                                            <?php }if($row_form4_checkBox['Hyperglycaemia'] === 'yes') { ?>
                                    </div>

                                    <div class="row">

                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[4]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Hyperglycaemia 
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[4]"  value="yes" style="padding-left:4px;margin-top:9px">Hyperglycaemia 
                                                </label>
                                            <?php }if($row_form4_checkBox['Hypertension'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[5]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Hypertension
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[5]"  value="yes" style="padding-left:4px;margin-top:9px">Hypertension
                                                </label>
                                            <?php } if($row_form4_checkBox['Malaena'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[6]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Malaena
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[6]"  value="yes" style="padding-left:4px;margin-top:9px">Malaena
                                                </label>
                                            <?php } if($row_form4_checkBox['Glaucoma'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[7]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Glaucoma
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[7]"  value="yes" style="padding-left:4px;margin-top:9px">Glaucoma
                                                </label>
                                            <?php } if($row_form4_checkBox['Truncal_Obesity'] === 'yes') { ?>

                                    </div>

                                    <div class="row">

                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[8]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Truncal Obesity  
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[8]"  value="yes" style="padding-left:4px;margin-top:9px">Truncal Obesity  
                                                </label>
                                            <?php }if($row_form4_checkBox['Osteoporosis'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[9]"  value="yes" style="padding-left:4px" checked>Osteoporosis
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[9]"  value="yes" style="padding-left:4px;margin-top:9px" >Osteoporosis
                                                </label>
                                            <?php }if($row_form4_checkBox['Moon_Face'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[10]"  value="yes"style="padding-left:4px;margin-top:9px" checked >Moon Face
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[10]"  value="yes" style="padding-left:4px;margin-top:9px">Moon Face
                                                </label>                             
                                            <?php } if($row_form4_checkBox['Psychosis'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[11]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Psychosis
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[11]"  value="yes" style="padding-left:4px;margin-top:9px">Psychosis
                                                </label>
                                            <?php }if($row_form4_checkBox['Gastrointestinal_bleeding'] === 'yes') { ?>

                                    </div>
                                    <div class="row">

                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_predni[12]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Gastrointestinal bleeding
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_predni[12]"  value="yes" style="padding-left:4px;margin-top:9px">Gastrointestinal bleeding
                                                </label>
                                            <?php }if($row_form4_checkBox['Haematemesis'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[13]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Haematemesis
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[13]"  value="yes" style="padding-left:4px;margin-top:9px">Haematemesis
                                                </label>
                                            <?php } if($row_form4_checkBox['Extensive_Ringworm'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[14]"  value="yes" style="padding-left:3px;margin-top:9px"checked>&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[14]"  value="yes" style="padding-left:3px">&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                                </label>
                                                
                                            <?php }if($row_form4_checkBox['Acne'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[15]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Acne
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[15]"  value="yes"style="padding-left:4px;margin-top:9px">Acne
                                                </label>
                                            <?php } ?>

                                    </div>
                                    <!--</form>-->
                                </div>
                        </div>
                        <div class="form-group" style="margin-top: 9px;padding-left:34px">
                            <label for="adverse_effect_clofazimine">Checklist for adverse effects of Clofazimine</label>&ensp;&ensp;&ensp;&ensp;
                            <div class="container" style="margin-top: 9px">
									
				                <!--<form>	-->				
                                <div class="row">
                                        <?php if($row_form4_checkBox2['Mild_Indigestion'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                        <input type="checkbox" name="adverse_clofa[0]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Mild indigestion 
                                    </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                        <input type="checkbox" name="adverse_clofa[0]"  value="yes" style="padding-left:4px;margin-top:9px">Mild indigestion 
                                    </label>

                                        <?php } if($row_form4_checkBox2['Vomiting'] === 'yes'){?>  
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[1]" value="yes" style="padding-left:4px;margin-top:9px" checked>Vomiting
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[1]" value="yes" style="padding-left:4px;margin-top:9px">Vomiting
                                            </label>
                                        <?php }if($row_form4_checkBox2['Nausea'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[2]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Nausea
                                            </label>
                                        <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[2]"  value="yes"style="padding-left:4px;margin-top:9px">Nausea
                                            </label>
                                        <?php } if($row_form4_checkBox2['Abdominal_Pain'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[3]" value="yes" style="padding-left:4px;margin-top:9px" checked>Abdominal Pain
                                            </label>
                                        <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[3]" value="yes" style="padding-left:4px;margin-top:9px">Abdominal Pain
                                            </label>
                                        <?php }if($row_form4_checkBox2['Diarrhoea,Acute'] === 'yes') { ?>
            	                </div>

                              	<div class="row">

                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[4]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Diarrhoea,Acute 
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[4]"  value="yes" style="padding-left:4px;margin-top:9px">Diarrhoea,Acute 
                                            </label>
                                        <?php }if($row_form4_checkBox2['Ichthyosis'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[5]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Ichthyosis
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[5]"  value="yes" style="padding-left:4px;margin-top:9px">Ichthyosis
                                            </label>
                                        <?php } if($row_form4_checkBox2['Weight_loss'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[6]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Weight loss
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[6]"  value="yes" style="padding-left:4px;margin-top:9px">Weight loss
                                            </label>
                                        <?php } if($row_form4_checkBox2['Conjuctiva'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px">
                                                <input type="checkbox"  name="adverse_clofa[7]"  value="yes" style="padding-left:4px" checked>Conjuctiva
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[7]"  value="yes" style="padding-left:4px;margin-top:9px">Conjuctiva
                                            </label>
                                        <?php } if($row_form4_checkBox2['Persistent_Indigestion'] === 'yes') { ?>

                              	</div>

            	                <div class="row">

                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[8]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Persistent<br> Indigestion  
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[8]"  value="yes" style="padding-left:4px;margin-top:9px">Persistent<br> Indigestion  
                                            </label>
                                        <?php }if($row_form4_checkBox2['Diarrhoea,Chronic'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[9]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Diarrhoea,<br>Chronic
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[9]"  value="yes" style="padding-left:4px;margin-top:9px" >Diarrhoea,<br>Chronic
                                            </label>
                                        <?php }if($row_form4_checkBox2['Chronic_Dysentery'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[10]"  value="yes" style="padding-left:4px;margin-top:9px" checked >Chronic <br>Dysentery
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[10]"  value="yes" style="padding-left:4px;margin-top:9px">Chronic <br>Dysentery
                                            </label>                             
                                        <?php } if($row_form4_checkBox2['Skin_Discolouration'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[11]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Skin <br>Discolouration
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[11]"  value="yes" style="padding-left:4px;margin-top:9px">Skin <br>Discolouration
                                            </label>
                                        <?php } ?>

            	                </div>
                              	
                                							<!--	</form>-->
						</div>
						</div>
							  
					
						 
                        <div class="form-group" style="padding-left:34px">
                            <label for="enl_present_time_since" class="form-label">If ENL present, time since onset of this episode?</label>
                            <input type="text" name="enl_present_time_since" id="enl_present_time_since" placeholder="" value="<?php echo $row_form_4['enl_present_time_since']; ?>"  />
                        </div>
						

							<div class="form-group" style="padding-left:34px">
								<label for="time_since_last_received_prednisolone" class="form-label">Time since last received prednisolone<br>(days/weeks)?</label>
								<input type="text" name="time_since_last_received_prednisolone" id="time_since_last_received_prednisolone" placeholder="" value="<?php echo $row_form_4['time_since_last_received_prednisolone']; ?>"  />
							</div>
							 
						 
							<div class="form-group" style="padding-left:34px">
										<label for="recurrent_enl_start_predni" class="form-label">If recurrent ENL ,start prednisolone and move to fornightly observations</label>
										<input type="text" name="recurrent_enl_start_predni" id="recurrent_enl_start_predni" placeholder="" value="<?php echo $row_form_4['recurrent_enl_start_predni']; ?>" />
									</div>
									 
						 						 
						<div class="form-group" style="margin-top: 9px; text-align:left;"> 
                            <label  class="form-label" style="color:blue;" ><u><b>Treatment prescribed:</u></b></label>
                            </div>
							
 
				<div class="form-radio" style="padding-left:34px">
                                <label for="advised_admission" class="form-label">Advised admission</label>
                                <div class="form-radio-item">
                                    									
									<?php if($row_form_4['advised_admission'] === 'yes') { ?>
                                            <input type="radio" name="advised_admission" value="yes" id="yes1" checked />
                                            <label for="yes1" style="width:75px;">Yes</label>
                                        
                                        <?php }else{?>
                                            <input type="radio" name="advised_admission" value="yes" id="yes1" />
                                            <label for="yes1" style="width:75px;">Yes</label>
                                        
                                        <?php } if($row_form_4['advised_admission'] === 'no') { ?>
                                            <input type="radio" name="advised_admission" value="no" id="no1" checked/>
                                            <label for="no1" style="width:75px;">No</label>

                                        <?php } else{ ?>
                                            <input type="radio" name="advised_admission" value="no" id="no1" />
                                            <label for="no1" style="width:75px;">No</label>
                                        <?php } ?>
                                    
                                </div>
                            </div>
						
				

						<div class="form-group" style="padding-left:34px">
                            <label for="nextDate" class="form-label">Date for next routine assessment</label>
                            <input style="width:170px"type="date" name="nextDate" id="nextDate" value="<?php echo $row_form_4['nextDate']; ?>" > 
                        </div>
							
							
							<div class="form-group" style="padding-left:34px">
                            <label for="nextPDate" class="form-label">Date of Prednisolone review</label>
                            <input style="width:170px"type="date" name="nextPDate" id="nextPDate" value="<?php echo $row_form_4['nextPDate']; ?>" > 
                        </div>
                                        <?php }?>
                                        <?php }?>
                                        <?php }?>
							
							<input type="submit" value="submit" name="submit" id="submit">                       
                    <br>
                     <h4 id="result"></h4> 
					<h4 id="result1"></h4> 			
					<div class="fieldset-footer">
                        <span>Form 4 of 6</span>
                    </div>
                    </div>
                
                <!--</fieldset>-->

                                
             

            </form>
        </div>
        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
<script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var predni4 = [];
                $('.get_value').each(function() {
                    if ($(this).is(":checked")) {
                        predni4.push($(this).val());
                    }
                });
                predni4 = predni4.toString();
                $.ajax({
                    url: "../assets/php/predni4.php",
                    method: "POST",
                    data: {
                        predni4: predni4
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
	
	<script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var clofa4 = [];
                $('.get_value1').each(function() {
                    if ($(this).is(":checked")) {
                        clofa4.push($(this).val());
                    }
                });
                clofa4 = clofa4.toString();
                $.ajax({
                    url: "../assets/php/clofa4.php",
                    method: "POST",
                    data: {
                        clofa4: clofa4
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
 
<script type="text/javascript">
    
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(0)").clone(true).appendTo("#tb");
              var data1 = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              var data2 = $("#tb tr:eq(2)").clone(true).appendTo("#tb");
              var data3 = $("#tb tr:eq(3)").clone(true).appendTo("#tb");
              var data4 = $("#tb tr:eq(4)").clone(true).appendTo("#tb");
              var data5 = $("#tb tr:eq(5)").clone(true).appendTo("#tb");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1-1);
             document.getElementById("tb").deleteRow(trIndex1-2);
             document.getElementById("tb").deleteRow(trIndex1-3);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>


<script type="text/javascript">
    
$(function(){
    $('#addMore1').on('click', function() {
              var data = $("#tb1 tr:eq(0)").clone(true).appendTo("#tb1");
              var data1 = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
              var data2 = $("#tb1 tr:eq(2)").clone(true).appendTo("#tb1");
              var data3 = $("#tb1 tr:eq(3)").clone(true).appendTo("#tb1");
              var data4 = $("#tb1 tr:eq(4)").clone(true).appendTo("#tb1");
              var data5 = $("#tb1 tr:eq(5)").clone(true).appendTo("#tb1");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove1', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1-1);
             document.getElementById("tb1").deleteRow(trIndex1-2);
             document.getElementById("tb1").deleteRow(trIndex1-3);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>


<script type="text/javascript">
$("#Sex").change(function() {
  if ($(this).val() == "female") {
    $('#ObstetricHDiv').show();
   
  } else {
    $('#ObstetricHDiv').hide();
    
  }
});
$("#Sex").trigger("change");
    
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(0)").clone(true).appendTo("#tb6");
              var data1 = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              var data2 = $("#tb6 tr:eq(2)").clone(true).appendTo("#tb6");
              var data3 = $("#tb6 tr:eq(3)").clone(true).appendTo("#tb6");
              var data4 = $("#tb6 tr:eq(4)").clone(true).appendTo("#tb6");
              var data5 = $("#tb6 tr:eq(5)").clone(true).appendTo("#tb6");
              var data6 = $("#tb6 tr:eq(6)").clone(true).appendTo("#tb6");
              var data7 = $("#tb6 tr:eq(7)").clone(true).appendTo("#tb6");
              data7.find("input").val('');
              data6.find("input").val('');
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1-1);
             document.getElementById("tb6").deleteRow(trIndex1-2);
             document.getElementById("tb6").deleteRow(trIndex1-3);
             document.getElementById("tb6").deleteRow(trIndex1-4);
             document.getElementById("tb6").deleteRow(trIndex1-5);
           } else {
             alert("Sorry!! Can't remove first row!");
          } 
      });
});      
</script>

    
<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
              var data = $("#tb5 tr:eq(0)").clone(true).appendTo("#tb5");
              var data1 = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              var data2 = $("#tb5 tr:eq(2)").clone(true).appendTo("#tb5");
              var data3 = $("#tb5 tr:eq(3)").clone(true).appendTo("#tb5");
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1-1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore7').on('click', function() {
              var data = $("#tb7 tr:eq(0)").clone(true).appendTo("#tb7");
              data.find("input").val('');
     });
     $(document).on('click', '.remove7', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>0) {
             $(this).closest("tr").remove();
             document.getElementById("tb7").deleteRow(trIndex1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
</body>

</html>