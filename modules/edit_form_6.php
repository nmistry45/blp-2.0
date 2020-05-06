<?php

  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blp_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$id = $_GET['pid'];

$result_form_6 = mysqli_query($conn, "SELECT * from form6 where pid = $id");
$result_form6_checkBox = mysqli_query($conn, "SELECT * from form6_checkbox where pid = $id");
$result_form6_checkBox2 = mysqli_query($conn, "SELECT * from form6_checkbox2 where pid = $id");
$result_form6_checkBox3 = mysqli_query($conn, "SELECT * from form6_checkbox3 where pid = $id");



while ($row_form_6 = mysqli_fetch_assoc($result_form_6)){
                while ($row_form6_checkBox = mysqli_fetch_assoc($result_form6_checkBox)){
                    while ($row_form6_checkBox2 = mysqli_fetch_assoc($result_form6_checkBox2)){
                        while ($row_form6_checkBox3 = mysqli_fetch_assoc($result_form6_checkBox3)){
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
            $result_form_6_1 = mysqli_query($conn, "SELECT patient_name, clinic_id, study_no from form1 where pid = $id");
            while ($row_form_6_1 = mysqli_fetch_assoc($result_form_6_1)){
            ?>
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/update_form_6.php?pid=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="form-group" style="margin-top: 20px">
                            <label for="patient_name" class="form-label">Patient Name:</label>
                            <label for="op_patient_name" class="form-label" style="margin-left: -125px;"><?php echo $row_form_6_1['patient_name']; ?></label>
                            <label for="clinic_id" class="form-label" style="margin-left: 100px;">Clinic ID:</label>
                            <label for="op_clinic_id" class="form-label" style="margin-left: -150px;"><?php echo $row_form_6_1['clinic_id']; ?></label>
                            <label for="study_no" class="form-label" style="margin-left: 175px;">Study Number:</label>
                            <label for="op_study_no" class="form-label" style="margin-left: -150px;"><?php echo $row_form_6_1['study_no']; ?></label>
                </div>
            <?php } ?>
    
                <hr>
                <h3>
                    <span class="title_text"><center><b>Final follow up sheet at end of 24m from randomization (or at withdrawal)</b></center></span>
                </h3>
                <hr>
                
                <fieldset>
                    <div class="form-row" style="padding-left: 70px ;margin-top: 9px;">
                            <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                                <label for="date" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <input style="margin-left: 13px;" type="date" name="date" id="date" value="<?php echo $row_form_6['date']; ?>" > 
                            </div>
							<div class="staff" style="padding-left:250px">
							<div class="form-group">
                            <label for="staff_name" class="form-label">Staff Name</label>
                            <input type="text" name="staff_name" id="staff_name" placeholder="Staff Name" value="<?php echo $row_form_6['staff_name']; ?>" />
							</div>
                        </div>
							
							
                </div>
				
				<div class="form-radio" style="padding-left:30px">
                                <label for="current_status" class="form-label">Current Status</label>
                                <div class="form-radio-item">
                                    <?php if($row_form_6['current_status'] === 'no reaction') { ?>
                                        <input type="radio" name="current_status" value="no reaction" id="no_enl" checked/>
                                        <label for="no_enl" style="width:120px;">No ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="no reaction" id="no_enl" />
                                        <label for="no_enl" style="width:120px;">No ENL</label>
                                    
                                    <?php } if($row_form_6['current_status'] === 'RR') { ?>
                                        <input type="radio" name="current_status" value="RR" id="RR" checked />
                                        <label for="RR" style="width:120px;">RR</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="RR" id="RR"  />
                                        <label for="RR" style="width:120px;">RR</label>
                                    
                                    <?php } if($row_form_6['current_status'] === 'acute enl'){?>                                
                                        <input type="radio" name="current_status" value="acute enl" id="acute_enl" checked/>
                                        <label for="acute_enl" style="width:120px;">Acute ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="acute enl" id="acute_enl" />
                                        <label for="acute_enl" style="width:120px;">Acute ENL</label>
                                        
                                    <?php } if($row_form_6['current_status'] === 'recurrent enl'){?>						
                                        <input type="radio" name="current_status" value="recurrent enl" id="recurrent_enl" checked />
                                        <label for="recurrent_enl" style="width:120px;">Recurrent ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_status" value="recurrent enl" id="recurrent_enl"  />
                                        <label for="recurrent_enl" style="width:120px;">Recurrent ENL</label>
                                        
                                    <?php } if($row_form_6['current_status'] === 'chronic enl'){?>	
                                        <input type="radio" name="current_status" value="chronic enl" id="chronic_enl" checked/>
                                        <label for="chronic_enl" style="width:120px;">Chronic ENL</label>
                                    <?php }else {?>   
                                        <input type="radio" name="current_status" value="chronic enl" id="chronic_enl" />
                                        <label for="chronic_enl" style="width:120px;">Chronic ENL</label>					
                                                                        
                                    <?php } ?>
                        </div>
                </div>
							
						 <fieldset>
					 <div class="form-group" style="padding-right: -30px ;margin-top: 9px; text-align:left;"> 
                            <label  class="form-label" style="color:blue;" ><u><b>Physical Examination :</b></u></label>
                            </div>
							</fieldset>
							
				<div class="fieldset-content">
				
                    <div class="form-radio" style="padding-left:30px">
                                <label for="nfa" class="form-label">NFA</label>
                                <div class="form-radio-item">

                                    <?php if($row_form_6['nfa'] === 'yes') { ?>
                                        <input type="radio" name="nfa" value="yes" id="yes" checked />
                                        <label for="yes" style="width:75px;">Yes</label>

                                    <?php }else{?>
                                        <input type="radio" name="nfa" value="yes" id="yes" />
                                        <label for="yes" style="width:75px;">Yes</label>

                                    <?php } if($row_form_6['nfa'] === 'no') { ?>
                                        <input type="radio" name="nfa" value="no" id="no" checked/>
                                        <label for="no" style="width:75px;">No</label>

                                    <?php } else{ ?>
                                        <input type="radio" name="nfa" value="no" id="no" />
                                        <label for="no" style="width:75px;">No</label>
                                    <?php } ?>
                                </div>
                            </div>
							
							
				<div class="form-group" style="padding-right:-30px">
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<label for="eess" >EESS</label>
                    
								<input type="range" style="border:1px solid;background-color: lightblue;" name="eess" id="eess" min="0" max="30" value="<?php echo $row_form_6['eess']; ?>"  onchange="show_value2(this.value)"/>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
								 <span id="slider_value2" style="color:black;font-weight:bold;"></span>
								
								<style type="text/css">
                                #eess{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #eess::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #eess::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #eess:active::-webkit-slider-thumb{
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
							  
                            <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="qol" class="form-label">QOL(SF36) score</label>
                              <input style="width: 180px;"type="text" name="qol" id="qol" placeholder="QOL score" value="<?php echo $row_form_6['qol']; ?>" />
                          </div>

                          <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="vas" class="form-label">VAS for pigmentation</label>
                              <input style="width: 180px;" type="text" name="vas" id="vas" placeholder="VAS between 0-100" value="<?php echo $row_form_6['vas']; ?>" />
                          </div>
						
						<div class="form-group" style="margin-top: 9px;padding-left: 34px" >
                            <label for="current_antireaction_therapy" class="form-label" >Current anti_reaction therapy</label>
                            <textarea rows="4" cols="50" name="current_antireaction_therapy" id="current_anti_reaction_therapy" style="height:150px" placeholder=""><?php echo $row_form_6['current_antireaction_therapy']; ?> 
							</textarea>
                        </div>
						
						
						<div class="form-group" style="margin-top: 9px;padding-left: 34px">
                                <label for="adverse_effect_prednisolone">Checklist for adverse effects of prednisolone</label>&ensp;&ensp;&ensp;&ensp;
                                <div class="container">
  
                                <div class="row">
                                            <?php if($row_form6_checkBox['Mild_Indigestion'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[0]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Mild indigestion 
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[0]"  value="yes" style="padding-left:4px;margin-top:9px">Mild indigestion 
                                                </label>

                                            <?php } if($row_form6_checkBox['Peptic_Ulcer'] === 'yes'){?>  
                                                <label class="checkbox-inline "style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px;margin-top:9px" checked>Peptic Ulcer
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px;margin-top:9px">Peptic Ulcer
                                                </label>
                                            <?php }if($row_form6_checkBox['Striae'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[2]"  value="yes" style="padding-left:4px;margin-top:9px"checked>Striae
                                                </label>
                                            <?php }else{ ?>
                                                    <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[2]"  value="yes" style="padding-left:4px;margin-top:9px">Striae
                                                </label>
                                            <?php } if($row_form6_checkBox['Herpes_Zoster'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px;margin-top:9px" checked>Herpes Zoster
                                                </label>
                                            <?php }else{ ?>
                                                    <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px;margin-top:9px">Herpes Zoster
                                                </label>
                                            <?php }if($row_form6_checkBox['Hyperglycaemia'] === 'yes') { ?>
                                    </div>



                                    <div class="row">

                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[4]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Hyperglycaemia 
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[4]"  value="yes" style="padding-left:4px;margin-top:9px">Hyperglycaemia 
                                                </label>
                                            <?php }if($row_form6_checkBox['Hypertension'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[5]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Hypertension
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[5]"  value="yes" style="padding-left:4px;margin-top:9px">Hypertension
                                                </label>
                                            <?php } if($row_form6_checkBox['Malaena'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[6]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Malaena
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[6]"  value="yes" style="padding-left:4px;margin-top:9px">Malaena
                                                </label>
                                            <?php } if($row_form6_checkBox['Glaucoma'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[7]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Glaucoma
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[7]"  value="yes" style="padding-left:4px;margin-top:9px">Glaucoma
                                                </label>
                                            <?php } if($row_form6_checkBox['Truncal_Obesity'] === 'yes') { ?>

                                    </div>>
                                    <div class="row">

                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[8]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Truncal Obesity  
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[8]"  value="yes" style="padding-left:4px;margin-top:9px">Truncal Obesity  
                                                </label>
                                            <?php }if($row_form6_checkBox['Osteoporosis'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[9]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Osteoporosis
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[9]"  value="yes" style="padding-left:4px;margin-top:9px" >Osteoporosis
                                                </label>
                                            <?php }if($row_form6_checkBox['Moon_Face'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[10]"  value="yes" style="padding-left:4px;margin-top:9px" checked >Moon Face
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[10]"  value="yes" style="padding-left:4px;margin-top:9px">Moon Face
                                                </label>                             
                                            <?php } if($row_form6_checkBox['Psychosis'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[11]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Psychosis
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[11]"  value="yes" style="padding-left:4px;margin-top:9px">Psychosis
                                                </label>
                                            <?php }if($row_form6_checkBox['Gastrointestinal_bleeding'] === 'yes') { ?>

                                                </div>
                                                <div class="row">

                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_predni[12]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Gastrointestinal bleeding
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_predni[12]"  value="yes" style="padding-left:4px;margin-top:9px">Gastrointestinal bleeding
                                                </label>
                                            <?php }if($row_form6_checkBox['Haematemesis'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[13]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Haematemesis
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[13]"  value="yes" style="padding-left:4px;margin-top:9px" >Haematemesis
                                                </label>
                                            <?php } if($row_form6_checkBox['Extensive_Ringworm'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[14]"  value="yes" style="padding-left:3px" checked>&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[14]"  value="yes" style="padding-left:3px">&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                                </label>
                                            <?php }if($row_form6_checkBox['Acne'] === 'yes') { ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[15]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Acne
                                                </label>
                                            <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox"  name="adverse_predni[15]"  value="yes" style="padding-left:4px;margin-top:9px">Acne
                                                </label>
                                            <?php } ?>

                                    </div>


 <!--</form>-->
</div>
</div>

						<div class="form-group" style="margin-top: 9px;padding-left: 34px">
                        <label for="adverse_effect_clofazimine">Checklist for adverse effects of Clofazimine</label>&ensp;&ensp;&ensp;&ensp;
						<div class="container">
									
				<!--<form>	-->				
                                    <div class="row">
                                        <?php if($row_form6_checkBox2['Mild_Indigestion'] === 'yes') { ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[0]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Mild indigestion 
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[0]"  value="yes" style="padding-left:4px;margin-top:9px">Mild indigestion 
                                            </label>

                                        <?php } if($row_form6_checkBox2['Vomiting'] === 'yes'){?>  
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[1]" value="yes" style="padding-left:4px;margin-top:9px" checked>Vomiting
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[1]" value="yes" style="padding-left:4px;margin-top:9px">Vomiting
                                            </label>
                                        <?php }if($row_form6_checkBox2['Nausea'] === 'yes') { ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[2]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Nausea
                                            </label>
                                        <?php }else{ ?>
                                                <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[2]"  value="yes" style="padding-left:4px;margin-top:9px">Nausea
                                            </label>
                                        <?php } if($row_form6_checkBox2['Abdominal_Pain'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[3]" value="yes" style="padding-left:4px;margin-top:9px" checked>Abdominal Pain
                                            </label>
                                        <?php }else{ ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[3]" value="yes" style="padding-left:4px;margin-top:9px">Abdominal Pain
                                            </label>
                                        <?php }if($row_form6_checkBox2['Diarrhoea,Acute'] === 'yes') { ?>
            	                </div>


	                            <div class="row">

                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[4]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Diarrhoea,Acute 
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[4]"  value="yes" style="padding-left:4px;margin-top:9px">Diarrhoea,Acute 
                                            </label>
                                        <?php }if($row_form6_checkBox2['Ichthyosis'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[5]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Ichthyosis
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[5]"  value="yes" style="padding-left:4px;margin-top:9px">Ichthyosis
                                            </label>
                                        <?php } if($row_form6_checkBox2['Weight_loss'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[6]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Weight loss
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[6]"  value="yes" style="padding-left:4px;margin-top:9px">Weight loss
                                            </label>
                                        <?php } if($row_form6_checkBox2['Conjuctiva'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[7]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Conjuctiva
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[7]"  value="yes" style="padding-left:4px;margin-top:9px">Conjuctiva
                                            </label>
                                        <?php } if($row_form6_checkBox2['Persistent_Indigestion'] === 'yes') { ?>

                              	</div>

	
	                            <div class="row">

                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[8]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Persistent<br> Indigestion  
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[8]"  value="yes" style="padding-left:4px;margin-top:9px">Persistent<br> Indigestion  
                                            </label>
                                        <?php }if($row_form6_checkBox2['Diarrhoea,Chronic'] === 'yes') { ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[9]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Diarrhoea,<br>Chronic
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[9]"  value="yes" style="padding-left:4px;margin-top:9px" >Diarrhoea,<br>Chronic
                                            </label>
                                        <?php }if($row_form6_checkBox2['Chronic_Dysentery'] === 'yes') { ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[10]"  value="yes" style="padding-left:4px;margin-top:9px" checked >Chronic<br> Dysentery
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[10]"  value="yes" style="padding-left:4px;margin-top:9px">Chronic<br> Dysentery
                                            </label>                             
                                        <?php } if($row_form6_checkBox2['Skin_Discolouration'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[11]"  value="yes" style="padding-left:4px;margin-top:9px" checked>Skin<br> Discolouration
                                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox"  name="adverse_clofa[11]"  value="yes" style="padding-left:4px;margin-top:9px">Skin<br> Discolouration
                                            </label>
                                        <?php } ?>

            	                </div>

								
							<!--	</form>-->
						</div>
						</div>
							  
					<fieldset>
					 <div class="form-group" style="padding-right: -30px ;margin-top: 9px; text-align:left;"> 
                            <label  class="form-label" style="color:blue;"><u><b>Summary of Observations</b></u></label>
                     </div>
					</fieldset>
                         
                    <div class="form-group" style="padding-left: 30px ;">
                            <label for="no_weeks_extra_clofazimine" class="form-label">Number of weeks extra clofazimine/vitamins received</label>
                            <input type="number" name="no_weeks_extra_clofazimine" id="no_weeks_extra_clofazimine" placeholder="Number of weeks" value="<?php echo $row_form_6['no_weeks_extra_clofazimine']; ?>"  />
                    </div>
						 
						 
				    <div class="form-radio" style="padding-left: 30px ;">
                                <label for="enl_at_randomisation" class="form-label">ENL at Randomization</label>
                                <div class="form-radio-item">
                                    									
									<?php if($row_form_6['enl_at_randomisation'] === 'yes') { ?>
                                            <input type="radio" name="enl_at_randomisation" value="yes" id="yes1" checked />
                                            <label for="yes1" style="width:75px;">Yes</label>
                                        
                                        <?php }else{?>
                                            <input type="radio" name="enl_at_randomisation" value="yes" id="yes1" />
                                            <label for="yes1" style="width:75px;">Yes</label>
                                        
                                        <?php } if($row_form_6['enl_at_randomisation'] === 'no') { ?>
                                            <input type="radio" name="enl_at_randomisation" value="no" id="no1" checked/>
                                            <label for="no1" style="width:75px;">No</label>

                                        <?php } else{ ?>
                                            <input type="radio" name="enl_at_randomisation" value="no" id="no1" />
                                            <label for="no1" style="width:75px;">No</label>
                                        <?php } ?>
                                    
                                </div>
                                
                    </div>
						
						<div class="form-group" style="padding-left: 30px ;">
                            <label for="duration_first_episode" class="form-label">Duration of 1st episode (weeks)</label>
                            <input type="number" name="duration_first_episode" id="duration_first_episode" placeholder="Duration of 1st episode " value="<?php echo $row_form_6['duration_first_episode']; ?>" />
                        </div>
						
						<div class="form-radio" style="padding-left: 30px ;">
                                <label for="flare_of_enl" class="form-label">Flare of ENL while  on steroid</label>
                                <div class="form-radio-item">
                                    									
									<?php if($row_form_6['flare_of_enl'] === 'yes') { ?>
                                            <input type="radio" name="flare_of_enl" value="yes" id="yes2" checked />
                                            <label for="yes2" style="width:75px;">Yes</label>
                                        
                                        <?php }else{?>
                                            <input type="radio" name="flare_of_enl" value="yes" id="yes2" />
                                            <label for="yes2" style="width:75px;">Yes</label>
                                        
                                        <?php } if($row_form_6['flare_of_enl'] === 'no') { ?>
                                            <input type="radio" name="flare_of_enl" value="no" id="no2" checked/>
                                            <label for="no2" style="width:75px;">No</label>

                                        <?php } else{ ?>
                                            <input type="radio" name="flare_of_enl" value="no" id="no2" />
                                            <label for="no2" style="width:75px;">No</label>
                                        <?php } ?>
                                    
                                </div>
								
                        </div>
						 
						<div class="form-row" style="padding-left: 30px ;">
                            <div class="form-group">
                                <label for="if_flare_how_long" class="form-label">If yes,first flare after how long?</label>
                                <input type="text" name="if_flare_how_long" id="if_flare_how_long" value="<?php echo $row_form_6['if_flare_how_long']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="eess_at_flare" class="form-label" >EESS at flare</label>
								
								<input type="range" style="border:1px solid;background-color: lightblue;" name="eess_at_flare" id="eess_at_flare" min="0" max="30" value="<?php echo $row_form_6['eess_at_flare']; ?>"  onchange="show_value3(this.value)"/>
								 <span id="slider_value3" style="color:black;font-weight:bold;"></span><br>
								 <span id="slider_value3" style="color:black;font-weight:bold;"></span>
								
								<style type="text/css">
                                #eess_at_flare{
                                    height:0px ;
                                    -webkit-appearance:none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #eess_at_flare::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #eess_at_flare::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #eess_at_flare:active::-webkit-slider-thumb{
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
                        </div>

						
						
						<div class="form-radio" style="padding-left: 30px ;">
                                <label for="recurrent_enl_steroids" class="form-label">Recurrent ENL more than 27 days after end of steroid course?</label>
                                <div class="form-radio-item">
                                
                                    									
									<?php if($row_form_6['recurrent_enl_steroids'] === 'yes') { ?>
                                            <input type="radio" name="recurrent_enl_steroids" value="yes" id="yes3" checked />
                                            <label for="yes3" style="width:75px;">Yes</label>
                                        
                                    <?php }else{?>
                                            <input type="radio" name="recurrent_enl_steroids" value="yes" id="yes3" />
                                            <label for="yes3" style="width:75px;">Yes</label>
                                        
                                    <?php } if($row_form_6['recurrent_enl_steroids'] === 'no') { ?>
                                            <input type="radio" name="recurrent_enl_steroids" value="no" id="no3" checked/>
                                            <label for="no3" style="width:75px;">No</label>

                                    <?php } else{ ?>
                                            <input type="radio" name="recurrent_enl_steroids" value="no" id="no3" />
                                            <label for="no3" style="width:75px;">No</label>
                                    <?php } ?>
        </div>
                        </div>
						
						
						<div class="form-radio" style="padding-left: 30px ;">
                                <label for="chronic_enl_randomisation" class="form-label">Chronic ENL continued after randomization ?</label>
                                <div class="form-radio-item">
                                    <?php if($row_form_6['chronic_enl_randomisation'] === 'yes') { ?>
                                            <input type="radio" name="chronic_enl_randomisation" value="yes" id="yes4" checked />
                                            <label for="yes4" style="width:75px;">Yes</label>
                                        
                                    <?php }else{?>
                                            <input type="radio" name="chronic_enl_randomisation" value="yes" id="yes4" />
                                            <label for="yes4" style="width:75px;">Yes</label>
                                        
                                    <?php } if($row_form_6['chronic_enl_randomisation'] === 'no') { ?>
                                            <input type="radio" name="chronic_enl_randomisation" value="no" id="no4" checked/>
                                            <label for="no4" style="width:75px;">No</label>

                                    <?php } else{ ?>
                                            <input type="radio" name="chronic_enl_randomisation" value="no" id="no4" />
                                            <label for="no4" style="width:75px;">No</label>
                                    <?php } ?>	
                                    
                                </div>
                        </div>
						
						
						<div class="form-group" style="padding-left: 30px ;">
                            <label for="total_steroids_consumed" class="form-label">Total Steroid Consumed</label>
                            <input type="number" name="total_steroids_consumed" id="total_steroids_consumed" placeholder="Total Steroid Consumed in gms" value="<?php echo $row_form_6['total_steroids_consumed']; ?>" />
                        </div>
						
						<div class="form-group" style="padding-left: 30px ;">
                                <label for="change_in_nfa">Change in NFA baseline to end</label>
                                <?php if ($row_form_6['change_in_nfa'] == "yes"){ ?>
                                <select class="form-control;valid" name="change_in_nfa" id="change_in_nfa">
                                      <option value="yes" selected>Yes</option>
                                      <option value="no">No</option>
                                </select>
                                <?php }else{?>
                                <select class="form-control; valid;" name="change_in_nfa" id="change_in_nfa" >
                                      <option value="yes" >Yes</option>
                                      <option value="no" selected>No</option>
                                </select>
                                <?php } ?>
                                
                         </div>
                        
                        <div class="form-textarea" id="IfyesHDiv" style="padding-left: 30px ;">
                                                  
                            <label for="change_in_nfa_desc" class="form-label">If yes?</label>
                                <td><input type="text" id="IfyesH" name="change_in_nfa_desc" placeholder="Needed to continue" class="valid" value="<?php echo $row_form_6['change_in_nfa_desc']; ?>" ></td>
                        </div>
						<div class="form-radio" style="padding-left: 30px ;">
                                <label for="change_in_qol" class="form-label">Change in QOL Score baseline to end</label>
                                <div class="form-radio-item">
                                <?php if($row_form_6['change_in_qol'] === 'increase') { ?>
                                            <input type="radio" name="change_in_qol" value="increase" id="increase" checked />
                                            <label for="increase" style="width:75px;">Yes</label>
                                        
                                    <?php }else{?>
                                            <input type="radio" name="change_in_qol" value="increase" id="increase" />
                                            <label for="increase" style="width:75px;">Yes</label>
                                        
                                    <?php } if($row_form_6['change_in_qol'] === 'decrease') { ?>
                                            <input type="radio" name="change_in_qol" value="decrease" id="decrease" checked/>
                                            <label for="decrease" style="width:75px;">No</label>

                                    <?php } else{ ?>
                                            <input type="radio" name="change_in_qol" value="decrease" id="decrease" />
                                            <label for="decrease" style="width:75px;">No</label>
                                    <?php } ?>
									
								</div>
                        </div>
							
                    <div class="form-group" style="padding-left: 30px ;">
                                <label for="adverse_effect_of_drug">Adverse effects of drugs</label>
                                <?php if ($row_form_6['adverse_effect_of_drug'] == "yes"){ ?>
                                <select class="form-control;valid" name="adverse_effect_of_drug" id="adverse_effect_of_drug">
                                      <option value="yes" selected>Yes</option>
                                      <option value="no">No</option>
                                </select>
                                <?php }else{?>
                                <select class="form-control; valid;" name="adverse_effect_of_drug" id="adverse_effect_of_drug" >
                                      <option value="yes" >Yes</option>
                                      <option value="no" selected>No</option>
                                </select>
                                <?php } ?>
                         </div>
                              
                             
                                 <div class="form-textarea" id="drug_descDiv" style="padding-left: 30px ;">
                                                  
                                     <label for="drug_desc" class="form-label">If yes?</label>
                                     <td><input type="text" id="drug_desc" name="drug_desc" placeholder="Needed to continue" class="valid" value="<?php echo $row_form_6['drug_desc']; ?>" ></td>
                                 </div>

                         <div class="form-group"id="check" style="padding-left: 30px ;">
                                <label for="reason_withdrawal_before_24m">Reason of withdrawal before 24months observation</label>
                                <div class="container"style="width=50px margin=auto">
  
                                    <!--<form>-->
                                    <div class="row">
                                        <?php if($row_form6_checkBox3['Protocol_Violation'] === 'yes') { ?>
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[0]"  value="yes" style="padding-left:8px" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protocol Violation 
                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[0]"  value="yes" style="padding-left:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protocol Violation 
                            </label>
                                        <?php } if($row_form6_checkBox3['Patient_refused_followup'] === 'yes'){?>  
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[1]"  value="yes" style="padding-left:8px" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient refused followup
                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[1]"  value="yes" style="padding-left:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient refused followup
                            </label>
                                        <?php }if($row_form6_checkBox3['Uncontrolled_reaction'] === 'yes') { ?>
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox"name="withdraw[2]"  value="yes" style="padding-left:8px" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uncontrolled reaction
                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox"name="withdraw[2]"  value="yes" style="padding-left:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uncontrolled reaction
                            </label>
                                        <?php } if($row_form6_checkBox3['Severe_adverse_effects'] === 'yes') { ?>
                                    </div>

                                    <div class="row">
                                        
                                    <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[3]"  value="yes" style="padding-left:8px" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Severe adverse effects
                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[3]"  value="yes" style="padding-left:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Severe adverse effects
                            </label>
                                        <?php } if($row_form6_checkBox3['Died'] === 'yes'){?>  
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[4]"  value="yes" style="padding-left:8px" checked>Died
                            </label>
                                        <?php }else{ ?>
                                            <label class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[4]"  value="yes" style="padding-left:8px">Died
                            </label>
                                        <?php }if($row_form6_checkBox3['Others'] === 'yes') { ?>
                                            <label for="chkpassport" class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[5]"  value="yes" id="chkpassport" onclick="ShowHideDiv(this)"style="padding-left:30px" checked />Others
                            </label>
                                        <?php }else{ ?>
                                            <label for="chkpassport" class="checkbox-inline"style="padding-left:4px">
                            <input type="checkbox" name="withdraw[5]"  value="yes" id="chkpassport" onclick="ShowHideDiv(this)"style="padding-left:30px" />Others
                            </label>
                                        <?php }?>
                                        
                                    </div>


            
                                        <?php } ?>
                                        <?php } ?>
                                        <?php } ?>
	

  </form>
  
  
</div>

	
</div>
	<div id="others" style="display: none" style="padding-left:0px">
	Others:
	<input type="text" class="get_value3" value="<?php echo $row_form_6['others']; ?>" name="others" id="txtPassportNumber"/>
	</div>

				<input type="submit" value="submit" name="submit" id="submit">
				<br>
                     <h4 id="result"></h4> 
					<h4 id="result1"></h4> 					 
                    <div class="fieldset-footer">
                        <span>Form 6 of 6</span>
                    </div>
                    </div>
                
                </fieldset>

                <?php } ?>    
             

            </form>
        </div>
        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
   <!-- <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
    


<script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var insert = [];
                $('.get_value').each(function() {
                    if ($(this).is(":checked")) {
                        insert.push($(this).val());
                    }
                });
                insert = insert.toString();
                $.ajax({
                    url: "../assets/php/insert.php",
                    method: "POST",
                    data: {
                        insert: insert
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
                var insert1 = [];
                $('.get_value1').each(function() {
                    if ($(this).is(":checked")) {
                        insert1.push($(this).val());
                    }
                });
                insert1 = insert1.toString();
                $.ajax({
                    url: "../assets/php/insert1.php",
                    method: "POST",
                    data: {
                        insert1: insert1
                    },
                    success: function(data) {
                        $('#result1').html(data);
                    }
                });
            });
        });
    </script>

<script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var insert2 = [];
                $('.get_value2').each(function() {
                    if ($(this).is(":checked")) {
                        insert2.push($(this).val());
                    }
                });
                insert2 = insert2.toString();
                $.ajax({
                    url: "../assets/php/insert2.php",
                    method: "POST",
                    data: {
                        insert2: insert2
                    },
                    success: function(data) {
                        $('#result2').html(data);
                    }
                });
            });
        });
    </script>


<script type="text/javascript">
$("#change_in_nfa").change(function() {
  if ($(this).val() == "yes") {
    $('#IfyesHDiv').show();
   
  } else {
    $('#IfyesHDiv').hide();
    
  }
});
$("#change_in_nfa").trigger("change");



$("#adverse_effect_of_drug").change(function() {
  if ($(this).val() == "yes") {
    $('#drug_descDiv').show();
   
  } else {
    $('#drug_descDiv').hide();
    
  }
});
$("#adverse_effect_of_drug").trigger("change");

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
	<script type="text/javascript">
			function ShowHideDiv(chkpassport)
			{
			var others = document.getElementById("others");
			others.style.display = chkpassport.checked ? "block" : "none" ;
			}
	</script>



</body>

</html>