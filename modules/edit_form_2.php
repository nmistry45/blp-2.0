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

$result_form_2 = mysqli_query($conn, "SELECT * from form2 where pid = $id");
$result_form2_checkBox2 = mysqli_query($conn, "SELECT * from form2_checkbox2 where pid = $id");
$result_form2_checkBox = mysqli_query($conn, "SELECT * from form2_checkbox where pid = $id");
$result_form2_others = mysqli_query($conn, "SELECT * from form2_others where pid = $id");


while ($row_form_2 = mysqli_fetch_assoc($result_form_2)){
            while ($row_form2_checkBox2 = mysqli_fetch_assoc($result_form2_checkBox2)){
                while ($row_form2_checkBox = mysqli_fetch_assoc($result_form2_checkBox)){

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
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
      
                <form method="POST" id="signup-form" class="signup-form" action="../assets/php/update_form_2.php?pid=<?php echo $id; ?>" enctype="multipart/form-data">


                <div class="form-group" style="margin-top: 20px">
                    <label for="patient_name" class="form-label">Patient Name</label>
                    <input type="text" style="width: 259px" name="patient_name" id="patient_name" placeholder="" value="<?php echo $row_form_2['patient_name']; ?>"  />
                    <label for="clinic_id" class="form-label">Clinic id</label>
                    <input type="text" style="width: 259px" name="clinic_id" id="clinic_id" placeholder="" value="<?php echo $row_form_2['clinic_id']; ?>" />
                    <label for="study_no" class="form-label">Study number</label>
                    <input type="text" style="width: 259px" name="study_no" id="study_no" placeholder="" value="<?php echo $row_form_2['study_no']; ?>"/>
                </div>

            <hr>
                <h3>
                    <span class="title_text"><center><b>2. Baseline Assessment</b></center></span>
            </h3>
            <hr>

                <!-- <fieldset> -->

                    <div class="form-row" style="padding-left: 76px ;margin-top: 9px;">
                        <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                            <label for="date" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input style="margin-left: 13px;" type="date" name="date" id="date" value="<?php echo $row_form_2['date']; ?>"/>
                        </div>
					              <div class="form-group" style="padding-left: 250px;">
            						    <label for="staff_name" class="form-label">Staff Name</label>
            						    <input type="text" name="staff_name" id="staff_name" placeholder="Staff Name" value="<?php echo $row_form_2['staff_name']; ?>"/>
					              </div>
				            </div>
	
				        <div class="fieldset-content">

                		    <div class="form-radio" style="padding-left:34px">
                                <label for="current_reaction_status" class="form-label">Current Reaction Status</label>
                                <div class="form-radio-item">
                                    <?php if($row_form_2['current_reaction_status'] === 'no reaction') { ?>
                                        <input type="radio" name="current_reaction_status" value="no reaction" id="no_enl" checked/>
                                        <label for="no_enl" style="width:120px;">No ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_reaction_status" value="no reaction" id="no_enl" />
                                        <label for="no_enl" style="width:120px;">No ENL</label>
                                    
                                    <?php } if($row_form_2['current_reaction_status'] === 'RR') { ?>
                                        <input type="radio" name="current_reaction_status" value="RR" id="RR" checked />
                                        <label for="RR" style="width:120px;">RR</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_reaction_status" value="RR" id="RR"  />
                                        <label for="RR" style="width:120px;">RR</label>
                                    
                                    <?php } if($row_form_2['current_reaction_status'] === 'acute enl'){?>                                
                                        <input type="radio" name="current_reaction_status" value="acute enl" id="acute_enl" checked/>
                                        <label for="acute_enl" style="width:120px;">Acute ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_reaction_status" value="acute enl" id="acute_enl" />
                                        <label for="acute_enl" style="width:120px;">Acute ENL</label>
                                        
                                    <?php } if($row_form_2['current_reaction_status'] === 'recurrent enl'){?>						
                                        <input type="radio" name="current_reaction_status" value="recurrent enl" id="recurrent_enl" checked />
                                        <label for="recurrent_enl" style="width:120px;">Recurrent ENL</label>
                                    <?php }else{?>
                                        <input type="radio" name="current_reaction_status" value="recurrent enl" id="recurrent_enl"  />
                                        <label for="recurrent_enl" style="width:120px;">Recurrent ENL</label>
                                        
                                    <?php } if($row_form_2['current_reaction_status'] === 'chronic enl'){?>	
                                        <input type="radio" name="current_reaction_status" value="chronic enl" id="chronic_enl" checked/>
                                        <label for="chronic_enl" style="width:120px;">Chronic ENL</label>
                                    <?php }else {?>   
                                        <input type="radio" name="current_reaction_status" value="chronic enl" id="chronic_enl" />
                                        <label for="chronic_enl" style="width:120px;">Chronic ENL</label>					
                                                                        
                                        <?php } ?>
                                </div>
                            </div>

                        <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                            <label for="first_had_enl" class="form-label">When first had ENL?</label>
                            <input style="width: 180px" type="date" name="first_had_enl" id="first_had_enl" value="<?php echo $row_form_2['first_had_enl']; ?>"/>
                        </div>
                    
                        <div class="form-group" style="padding-left: 34px ;margin-top: 9px;text-align:left;">
                            <label for="firstPDate" class="form-label">When first had prednisolone for ENL?</label>
                            <input style="width: 180px" type="date" name="firstPDate" id="firstPDate" value="<?php echo $row_form_2['firstPDate']; ?>"/>
                        </div>

                        <fieldset>
                            <div class="form-group" style="padding-left: 34px ;margin-top: 9px; text-align:left;"> 
                                <label  class="form-label" style="color:blue;" ><u><b>(if applicable)This episode of ENL:</b></u></label>
                            </div>
                        </fieldset>
                    

                        <div class="form-group" style="padding-left: 34px;margin-top: 9px;">
                            <label for="first_sym" class="form-label">When first symptoms(number of days ago)</label>
                            <input style="width: 180px" type="number" name="first_sym" id="first_sym" value="<?php echo $row_form_2['first_sym']; ?>"/>
                        </div>
        
                        <div class="form-radio" style="padding-left: 34px">
                            <label  for="current_anti_reaction" class="form-label">Current anti-reaction therapy</label>

                            <div class="form-radio-item">              									
                            <?php if($row_form2_checkBox2['Prednisolone'] === 'yes') { ?>
                                <input type="checkbox" name="current_anti_reaction[0]" value="yes" id="Prednisolone" checked  />
                                <label style="width:115px;"for="Prednisolone">Prednisolone</label>
                            <?php }else{ ?>
                                <input type="checkbox"  name="current_anti_reaction[0]" value="yes" id="Prednisolone" />
                                <label style="width:115px;"for="Prednisolone">Prednisolone</label>
                            
                            <?php } if($row_form2_checkBox2['Clofazmine'] === 'yes'){?>    
                                <input type="checkbox"  name="current_anti_reaction[1]" value="yes" id="Clofazmine" checked />
                                <label style="width:115px;"for="Clofazmine">Clofazmine</label>
                            <?php }else{ ?>
                                <input type="checkbox"  name="current_anti_reaction[1]" value="yes" id="Clofazmine"  />
                                <label style="width:115px;"for="Clofazmine">Clofazmine</label>

                            <?php } if($row_form2_checkBox2['Thalidamide'] === 'yes'){?>              
                                <input type="checkbox"  name="current_anti_reaction[2]" value="yes" id="Thalidamide" checked/>
                                <label style="width:115px;"for="Thalidamide">Thalidamide</label>
                            <?php }else{ ?>
                                <input type="checkbox" name="current_anti_reaction[2]" value="yes" id="Thalidamide"/>
                                <label style="width:115px;"for="Thalidamide">Thalidamide</label>
                            <?php } ?>
                            </div>
                        </div>

          

                        <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                            <label for="date_started_predni" class="form-label">Date started prednisolone(for this episode of ENL)</label>
                            <input style="width: 180px" type="date" name="date_started_predni" id="date_started_predni" value="<?php echo $row_form_2['date_started_predni']; ?>"/>
                        </div>
                  
                        <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                            <label for="current_dose_predni" class="form-label">Current daily dose of prednislone</label>
                            <input type="number" style="width: 180px" name="current_dose_predni" id="current_dose_predni" min="5" max="40" placeholder="Enter between 5-40" value="<?php echo $row_form_2['current_dose_predni']; ?>"/>mg/day
                        </div>

                        <div class="form-group" style="margin-top: 9px;padding-left: 34px" >
                            <label for="current_dose_clofa" class="form-label">Current daily dose of clofazmine</label>
                            <input type="number" style="width: 180px" name="current_dose_clofa" id="current_dose_clofa"  value="<?php echo $row_form_2['current_dose_clofa']; ?>"/>
                        </div>

                        <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                            <label for="current_dose_thal" class="form-label">Current daily dose of Thalidamide</label>
                            <input type="number" style="width: 180px" name="current_dose_thal" id="current_dose_thal"  value="<?php echo $row_form_2['current_dose_thal']; ?>"/>
                        </div>


							
                    		<fieldset>
                      			<div class="form-group" style="padding-left: 34px ;margin-top: 9px; text-align:left;"> 
                                <label  class="form-label" style="color:blue;" ><u><b>Physical Assessment :</u></b></label>
                            </div>
                    		</fieldset>
							
                    		<div class="fieldset-content">
                    			<div class="form-radio" style="padding-left: 34px">

                                    <label for="nfa" class="form-label">NFA</label>
                                    <div class="form-radio-item">
                                        <?php if($row_form_2['nfa'] === 'yes') { ?>
                                            <input type="radio" name="nfa" value="yes" id="yes" checked />
                                            <label for="yes" style="width:75px;">Yes</label>
                                        
                                        <?php }else{?>
                                            <input type="radio" name="nfa" value="yes" id="yes" />
                                            <label for="yes" style="width:75px;">Yes</label>
                                        
                                        <?php } if($row_form_2['nfa'] === 'no') { ?>
                                            <input type="radio" name="nfa" value="no" id="no" checked/>
                                            <label for="no" style="width:75px;">No</label>

                                        <?php } else{ ?>
                                            <input type="radio" name="nfa" value="no" id="no" />
                                            <label for="no" style="width:75px;">No</label>
                                        <?php } ?>
                                    </div>
                                </div>

                            <div class="form-group" style="padding-left: 34px" >
                                <label for="change_in_nfi" class="form-label">New NFI(i.e within past 6m,not yet treated with steroids)?</label>
                                <?php if ($row_form_2['change_in_nfi'] == "yes"){ ?>
                                    <select class="form-control;valid" name="change_in_nfi" id="change_in_nfi">
                                        <option value="yes" selected>Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                <?php }else{?>
                                    <select class="form-control;valid" name="change_in_nfi" id="change_in_nfi">
                                        <option value="yes">Yes</option>
                                        <option value="no" selected>No</option>
                                    </select>
                                <?php } ?>
                            </div>
                               

                            <div style="padding-left: 34px" class="form-textarea" id="IfyesHDiv">
                                <label for="change_in_nfi_desc" class="form-label">If yes?</label>
                                <td><input type="text" id="IfyesH" name="change_in_nfi_desc" placeholder="Which nerve" class="valid" value="<?php echo $row_form_2['change_in_nfi_desc']; ?>" /></td>
                            </div>
           
    
							
			                      <div class="form-group" style="padding-left: 34px">

                                <label for="eess" >EESS</label>                  
                        				<input type="range" style="border:1px solid;background-color: lightblue;" name="eess_2" id="eess_2" min="0" max="30" value="<?php echo $row_form_2['eess_2']; ?>"  onchange="show_value2(this.value)"/>
                        				<span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
                        				<style type="text/css">
                                    #eess_2{
                                          height:0px ;
                                          -webkit-appearance:none;
                                          border-radius: 5px;
                                          background-color: black;
                                          box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                          }
                                    #eess_2::-webkit-slider-thumb{
                                          -webkit-appearance:none;
                                          width: 40px;
                                          height: 40px;
                                          background-color: white;
                                          border-radius: 50%;
                                          cursor: pointer;
                                          outline: none;
                                          }
                                    #eess_2::-webkit-slider-thumb:hover{box-shadow: 0 0 0 3px black,0 0 0 6px white;}
                                    #eess_2:active::-webkit-slider-thumb{box-shadow: 0 0 0 3px black,0 0 0 6px white};
                                </style>
                        				<script type="text/javascript">
                        					function show_value2(x)
                        					{
                        						document.getElementById("slider_value2").innerHTML=x;
                        					} 
                        				</script>

                            </div>	

                            <fieldset>
                              <div class="form-group" style="padding-left: 34px ;margin-top: 9px; text-align:left;"> 
                                  <label  class="form-label" style="color:blue;" ><u><b>Physical Experience Assessment :</u></b></label>
                              </div>
                          </fieldset>

                      
                    	    <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="qol_2_score" class="form-label">QOL(SF36) score</label>
                              <input style="width: 180px;"type="text" name="qol_2_score" id="qol_2_score" placeholder="QOL score" value="<?php echo $row_form_2['qol_2_score']; ?>"/>
                          </div>

                          <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                              <label for="vas_for_pig_2" class="form-label">VAS for pigmentation</label>
                              <input style="width: 180px;" type="text" name="vas_for_pig_2" id="vas_for_pig_2" placeholder="VAS between 0-100" value="<?php echo $row_form_2['vas_for_pig_2']; ?>"/>
                          </div>	

                  
            <div class="form-group" style="margin-top: 9px;padding-left: 34px">
                <label for="adverse_effect_prednisolone">Checklist for adverse effects of prednisolone</label>&ensp;&ensp;&ensp;&ensp;
                    <div class="container" style="margin-top: 9px">
                
                          <!-- <form>-->
                                <div class="row">
                                <?php if($row_form2_checkBox['Mild_Indigestion'] === 'yes') { ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[0]"  value="yes" style="padding-left:4px" checked>Mild indigestion 
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[0]"  value="yes" style="padding-left:4px">Mild indigestion 
                                    </label>

                                <?php } if($row_form2_checkBox['Peptic_Ulcer'] === 'y'){?>  
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px" checked>Peptic Ulcer
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px">Peptic Ulcer
                                    </label>
                                <?php }if($row_form2_checkBox['Striae'] === 'yes') { ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[2]"  value="yes" style="padding-left:4px" checked>Striae
                                    </label>
                                <?php }else{ ?>
                                        <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[2]"  value="yes" style="padding-left:4px">Striae
                                    </label>
                                <?php } if($row_form2_checkBox['Herpes_Zoster'] === 'yes') { ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px" checked>Herpes Zoster
                                    </label>
                                <?php }else{ ?>
                                        <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px">Herpes Zoster
                                    </label>
                                <?php }if($row_form2_checkBox['Hyperglycaemia'] === 'yes') { ?>
            	                  </div>

                              	<div class="row">

                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[4]"  value="yes" style="padding-left:4px" checked>Hyperglycaemia 
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[4]"  value="yes" style="padding-left:4px">Hyperglycaemia 
                                    </label>
                                <?php }if($row_form2_checkBox['Hypertension'] === 'yes') { ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[5]"  value="yes" style="padding-left:4px" checked>Hypertension
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[5]"  value="yes" style="padding-left:4px">Hypertension
                                    </label>
                                <?php } if($row_form2_checkBox['Malaena'] === 'yes') { ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[6]"  value="yes" style="padding-left:4px" checked>Malaena
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[6]"  value="yes" style="padding-left:4px">Malaena
                                    </label>
                                <?php } if($row_form2_checkBox['Glaucoma'] === 'yes') { ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[7]"  value="yes" style="padding-left:4px" checked>Glaucoma
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[7]"  value="yes" style="padding-left:4px">Glaucoma
                                    </label>
                                <?php } if($row_form2_checkBox['Truncal_Obesity'] === 'yes') { ?>

                              	</div>

            	                <div class="row">

                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[8]"  value="yes" style="padding-left:4px" checked>Truncal Obesity  
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[8]"  value="yes" style="padding-left:4px">Truncal Obesity  
                                    </label>
                                <?php }if($row_form2_checkBox['Osteoporosis'] === 'yes') { ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[9]"  value="yes" style="padding-left:4px" checked>Osteoporosis
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[9]"  value="yes" style="padding-left:4px" >Osteoporosis
                                    </label>
                                <?php }if($row_form2_checkBox['Moon_Face'] === 'yes') { ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[10]"  value="yes" style="padding-left:4px" checked >Moon Face
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[10]"  value="yes" style="padding-left:4px">Moon Face
                                    </label>                             
                                <?php } if($row_form2_checkBox['Psychosis'] === 'yes') { ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[11]"  value="yes" style="padding-left:4px" checked>Psychosis
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline" style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[11]"  value="yes" style="padding-left:4px">Psychosis
                                    </label>
                                <?php }if($row_form2_checkBox['Gastrointestinal_bleeding'] === 'yes') { ?>

            	                </div>
                              	<div class="row">

                                    <label class="checkbox-inline"style="padding-left:4px">
                                      <input type="checkbox"  name="adverse_predni[12]"  value="yes" style="padding-left:4px" checked>Gastrointestinal bleeding
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                      <input type="checkbox"  name="adverse_predni[12]"  value="yes" style="padding-left:4px">Gastrointestinal bleeding
                                    </label>
                                <?php }if($row_form2_checkBox['Haematemesis'] === 'yes') { ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[13]"  value="yes" style="padding-left:4px" checked>Haematemesis
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox" name="adverse_predni[13]"  value="yes" style="padding-left:4px" >Haematemesis
                                    </label>
                                <?php } if($row_form2_checkBox['Extensive_Ringworm'] === 'yes') { ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[14]"  value="yes" style="padding-left:3px" checked>&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[14]"  value="yes" style="padding-left:3px">&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                    </label>
                                    
                                <?php }if($row_form2_checkBox['Acne'] === 'yes') { ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[15]"  value="yes" style="padding-left:4px" checked>Acne
                                    </label>
                                <?php }else{ ?>
                                    <label class="checkbox-inline"style="padding-left:4px">
                                        <input type="checkbox"  name="adverse_predni[15]"  value="yes" style="padding-left:4px">Acne
                                    </label>
                                <?php } ?>

                                </div>
                            
                          <!--</form>-->

                    </div>
                    </div>
                   
                        			<fieldset>
                              <div class="form-group" style="padding-left: 34px ;margin-top: 9px; text-align:left;"> 
                                <label  class="form-label" style="color:blue;" ><u><b>Decision:</u></b></label>
                              </div>
                            </fieldset>

                            <div class="form-group" style="margin-top: 20px;padding-left: 34px">
                            <label class="form-label"> 1. Observation or Randomize:</label>
                                <input type="text" style="width: 259px" name="obs" id="obs" placeholder="" value="<?php echo $row_form_2['obs']; ?>" />
                            </div>

                            <div class="form-group" style="margin-top: 20px;padding-left: 34px">
                            &ensp; &ensp; &ensp; &ensp; &nbsp;2.   &ensp;Treatment:
                            </div>
                            <div class="form-group" style="padding-left: 34px">
                                <label for="dp" class="form-label">Prednisolone</label>
                                    <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                        
                                        <tbody>
                                            <tr class="tr-header">
                                                <th>Drug Dosage</th>
                                                <th>Drug Duration</th>   
                                                   <!-- -  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th> -->
                                            </tr>
                                                
                                            <tr style="padding: 2px;">
                                                <td><input type="text" name="drug_dose_predni" class="valid" value="<?php echo $row_form_2['drug_dose_predni']; ?>"></td>
                                                <td><input type="text" name="drug_dur_predni" class="valid" value="<?php echo $row_form_2['drug_dur_predni']; ?>" /></td>
                                                   <!-- - <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td> -->
                                            </tr>
                                                

                                        </tbody>

                                    </table>
                                
                            </div>

                            <div class="form-group" style="padding-left: 34px">
                                <label for="dp" class="form-label">Chlofazimine</label>
                                    <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                        
                                        <tbody>
                                            <tr class="tr-header">
                                                <th>Drug Dosage</th>
                                                <th>Drug Duration</th>   
                                                   <!-- -  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th> -->
                                            </tr>
                                                
                                            <tr style="padding: 2px;">
                                                <td><input type="text" name="drug_dose_clofa" class="valid" value="<?php echo $row_form_2['drug_dose_clofa']; ?>"></td>
                                                <td><input type="text" name="drug_dur_clofa" class="valid" value="<?php echo $row_form_2['drug_dur_clofa']; ?>"></td>
                                                   <!-- - <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td> -->
                                            </tr>
                                                

                                        </tbody>

                                    </table>
                                
                            </div>

                            <div class="form-group" style="padding-left:34px;">
                                <label  class="form-label">Others</label>
                                    <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                        <tbody>
                                        <?php
                                        while ($row_form2_others = mysqli_fetch_assoc($result_form2_others)){ ?>
                                            <tr class="tr-header">
                                                <th>Drug Name</th>
                                                <th>Drug Dosage</th>
                                                <th>Drug Duration</th>
                                                <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>   
                                            </tr> 
                                            <tr style="padding: 2px;" >
                                                <td><input type="text" name="others_drug_name[]" class="valid" value="<?php echo $row_form2_others['others_drug_name']; ?>"></td>
                                                <td><input type="text" name="others_drug_dosage[]" class="valid" value="<?php echo $row_form2_others['others_drug_dosage']; ?>"></td>
                                                <td><input type="text" name="others_drug_duration[]" class="valid"  value="<?php echo $row_form2_others['others_drug_duration']; ?>"></td>
                                                <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>                                            
                                            </tr>     
                                        <?php } ?>                                              
                                        </tbody>
                                           
                                    </table>                                                     
                            </div>
            
                        
              
                        		<div id="others" style="display: none" style="padding-left:0px">Others:
                        	    <input type="text" name="others" id="txtPassportNumber"/>
                        	  </div> 

                            <div class="form-row" style="padding-left: 34px ;margin-top: 19px;">
                                <div class="form-group" style="margin-top: 9px; marker-start: 10px">
                                    <label  class="form-label">Next Assessment Date</label>&nbsp;&nbsp;
                                    <input style="width: 259px"type="date" name="next_asse_date" id="next_asse_date" value="<?php echo $row_form_2['next_asse_date']; ?>" />
                    						</div>
                            </div>

                            <?php } ?>
                            <?php } ?>
                            <?php } ?>
                            
                            
                            <input type="submit" value="Submit" name="submit" id="submit">
        				                <br>
                            <h4 id="result"></h4> 

                            <div class="fieldset-footer">
                                <span>Form 2 of 6</span>
                            </div>
                        </div>
                    </div>
                </form>

        </div>



        <div class="copy w3ls">
          <p>&copy; 2019  Bombay Leprosy Project  </p>
        </div>
    </div>

<!-- JS -->


<script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var predni = [];
                $('.get_value').each(function() {
                    if ($(this).is(":checked")) {
                        predni.push($(this).val());
                    }
                });
                predni = predni.toString();
                $.ajax({
                    url: "../assets/php/predni2.php",
                    method: "POST",
                    data: {
                        predni: predni
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
                var current_antiReaction = [];
                $('.get_value1').each(function() {
                    if ($(this).is(":checked")) {
                        current_antiReaction.push($(this).val());
                    }
                });
                current_antiReaction = current_antiReaction.toString();
                $.ajax({
                    url: "../assets/php/current_anti.php",
                    method: "POST",
                    data: {
                        current_antiReaction: current_antiReaction
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>

<script type="text/javascript">
$("#change_in_nfi").change(function() {
  if ($(this).val() == "yes") {
    $('#IfyesHDiv').show();
   
  } else {
    $('#IfyesHDiv').hide();
    
  }
});
$("#change_in_nfi").trigger("change");

$("#adverse_effect_of_drug").change(function() {
  if ($(this).val() == "yes") {
    $('#IfyesH1Div').show();
   
  } else {
    $('#IfyesH1Div').hide();
    
  }
});
$("#adverse_effect_of_drug").trigger("change");


</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
        
              var data = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
}); 
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore4').on('click', function() {
              var data = $("#tb4 tr:eq(1)").clone(true).appendTo("#tb4");
              data.find("input").val('');
     });
     $(document).on('click', '.remove4', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
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