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

$result_form_1 = mysqli_query($conn, "SELECT * from form1 where pid = $id");
$result_form_1_contact_no = mysqli_query($conn, "SELECT * from form1_contact where pid = $id");

while ($row_form_1 = mysqli_fetch_assoc($result_form_1)){
    
        
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

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
</head>

<body>

    <div class="main">
	
        <div class="container">
            <h2>Bombay Leprosy Project </h2>
			
			  <form method="POST" id="signup-form" class="signup-form" action="../assets/php/update_form_1.php?pid=<?php echo $id; ?>" onsubmit="return MdtStartDate(this)" enctype="multipart/form-data">


			<div class="form-group" style="margin-top: 20px">
                            <label for="patient_name" class="form-label">Patient Name</label>
                            
                            <input type="text" style="width: 259px" name="patient_name" id="patient_name" placeholder="" value="<?php echo $row_form_1['patient_name']; ?>" />
							
							<label for="clinic_id" class="form-label">Clinic id</label>
                            
                            <input type="text" style="width: 259px" name="clinic_id" id="clinic_id" placeholder="" value="<?php echo $row_form_1['clinic_id']; ?>" />
                            
							<label for="study_no" class="form-label">Study number</label>
                            
                            <input type="text" style="width: 259px" name="study_no" id="study_no" placeholder="" value="<?php echo $row_form_1['study_no']; ?>" />
		   </div>
			
			<hr>
                <h3>
                    <span class="title_text"><center><b>1. Initial Assessment Sheet</b></center></span>
                </h3>
			<hr>
                
                <!-- <fieldset> -->

                    <div class="form-row" style="padding-left: 41px ;margin-top: 9px;">
                        <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                            <label for="date" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input style="margin-left: 13px;" type="date" name="date" id="formDate" value="<?php echo $row_form_1['date']; ?>"/>
                        </div>
                        <div class="form-group" style="padding-left: 300px;">
                            <label for="staff_name" class="form-label">Staff Name</label>                            
                            <input type="text" name="staff_name" id="staff_name" placeholder="Staff Name" value="<?php echo $row_form_1['staff_name']; ?>" />
                        </div>
                    </div>

                    <div class="fieldset-content">
                        
                        <div class="form-group">
                            <label for="patient_name1" class="form-label">Name</label>
                            <input type="text" name="patient_name1" id="patient_name1" placeholder="Name" value="<?php echo $row_form_1['patient_name1']; ?>" />
                        </div>

                        <div class="form-group">
                                <label for="sex">Sex</label>
                                <?php if ($row_form_1['sex'] == "male"){ ?>
                                <select class="form-control;valid" name="sex" id="sex">
                                      <option value="male" selected>Male</option>
                                      <option value="female">Female</option>
                                </select>
                                <?php }else{?>
                                <select class="form-control; valid;" name="sex" id="sex" >
                                      <option value="male" >Male</option>
                                      <option value="female" selected>Female</option>
                                </select>
                                <?php } ?>
                        </div>

                        <div class="form-group">
                            <label for="clinic_regno" class="form-label">Clinic Registration No</label>
                                <input type="text" name="clinic_regno" id="clinic_regno" placeholder="Registration No"
                                value="<?php echo $row_form_1['clinic_regno']; ?>" />
                        </div>

                        <div class="form-textarea">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" placeholder="address" ><?php echo $row_form_1['address']; ?></textarea>
                        </div>

                        <div class="form-row">
                           <div class="form-group">
                                <label for="Contact1" class="form-label">Contact No.</label>
                                <table style="padding-left: 41px ;" id="tb7" class="form-label">
                                    <tbody>
                                    <?php
                                    while ($row_form_1_contact_no = mysqli_fetch_assoc($result_form_1_contact_no)){ ?>
                                        <tr class="tr-header">
                                            <th><input type="number" name="Contact[]" id="Contact[]" value=<?php echo $row_form_1_contact_no['contact_no'];  ?> /></th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore7" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                            <th>&ensp;   </th>
                                            <th><a href='javascript:void(0);' style="font-size:18px;" class='remove7' title="Remove"><span class='fa fa-minus'></span></a></th>
                                        </tr>
                                    <?php } ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                  
                        <div class="form-row" style="padding-left: 25px;">
                            <div class="form-group" style="padding-left: 25px;">
                                <label for="dateMDT" class="form-label">Date of starting MDT</label>
                                <input style="margin-left: 0px;" type="date" name="dateMDT" id="dateMDT" value="<?php echo $row_form_1['dateMDT']; ?>"/>
                            </div>
                            <div class="form-group" style="padding-left: 275px;">
                                <label for="dateRFT" class="form-label">Date of RFT</label>
                                <input style="margin-left: 0px;" type="date" name="dateRFT" id="dateRFT" value="<?php echo $row_form_1['dateRFT']; ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="SmearDiagnosis">Smear at Diagnosis</label>
                            <input type="range" style="border:1px solid;background-color: lightblue;" name="SmearDiagnosis" id="SmearDiagnosis" min="0" max="6" value="<?php echo $row_form_1['SmearDiagnosis']; ?>" onchange="show_value2(this.value)">
                            <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
                            <style type="text/css">
                                #SmearDiagnosis{
                                    height:0px ;
                                    -webkit-appearance:none; 
                                    border-radius: 5px; 
                                    background-color: black; 
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #SmearDiagnosis::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #SmearDiagnosis::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #SmearDiagnosis:active::-webkit-slider-thumb{
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

                        <div class="form-row" style="padding-left: 27px ;margin-top: 9px;">
                            <div class="form-group" style="padding-left: 27px ;margin-top: 9px;">
                                <label for="SmearDate" class="form-label">Smear Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <input style="margin-left: 13px;" type="date" name="SmearDate" id="SmearDate" value= "<?php echo $row_form_1['SmearDate'];?>" />
                            </div>
                        </div>

                        <div class="rows">
                            
                            <label style="color:blue;"><u><b>Eligibility Criteria for Screening:</b></u></label>

                            <div class="form-radio">
                                <label for="mdiag" class="form-label">Withing 24 Months of Diagnosis?</label>
                                <div class="form-radio-item">
                                    <?php if($row_form_1['mdiag'] === 'yes') { ?>
                                    <input type="radio" name="mdiag" value="yes" id="24myes" checked />
                                    <label for="24myes" style="width:80px;">Yes</label>

                                    <?php }else{?>
                                    <input type="radio" name="mdiag" value="yes" id="24myes" />
                                    <label for="24myes" style="width:80px;">Yes</label>

                                    <?php } if($row_form_1['mdiag']==='no') { ?>
    
                                    <input type="radio" name="mdiag" value="no" id="24mno" checked/>
                                    <label for="24mno" style="width:80px;">No</label>

                                    <?php }else{?>
                                    <input type="radio" name="mdiag" value="no" id="24mno"  />
                                    <label for="24mno" style="width:80px;">No</label>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Age" class="form-label">Age?</label>
                                <input type="text" name="Age" id="Age" placeholder="Age" value= "<?php echo $row_form_1['Age']; ?>" />
                            </div>

                            <div class="form-group">
                                <label for="Weight" class="form-label">Weight?</label>
                                <input type="text" name="Weight" id="Weight" onchange="calculateBMI()" placeholder="Weight in kilograms"  value="<?php echo $row_form_1['Weight']; ?>" />
                            </div>

                            <div class="form-group">
                                <label for="Height" class="form-label">Height?</label>
                                <input type="text" name="Height" id="Height" onchange="calculateBMI()" placeholder="Height in meters square" value="<?php echo $row_form_1['Height']; ?>" />
                            </div>

                            <div class="form-group">
                                <label for="BMI" class="form-label">BMI?</label>
                                <input type="text" name="BMI" id="BMI" onchange="calculateBMI()" placeholder="BMI Score" value="<?php echo $row_form_1['BMI']; ?>"/>
                            </div>
							
                            <div class="form-radio">
                                <label for="no_contra_indication_steroids" class="form-label">No contra-indications to steroids / to clofa</label>
                                <div class="form-radio-item">
                                     <?php if($row_form_1['no_contra_indication_steroids']==='yes') {?>
                                    <input type="radio" name="no_contra_indication_steroids" value="yes" id="contrayes" checked />
                                    <label for="contrayes" style="width:80px;">Yes</label>

                                    <?php }else{?>
                                    <input type="radio" name="no_contra_indication_steroids" value="yes" id="contrayes" />
                                    <label for="contrayes" style="width:80px;">Yes</label>

                                    <?php }if($row_form_1['no_contra_indication_steroids']==='no') {?>
    
                                    <input type="radio" name="no_contra_indication_steroids" value="no" id="contrano" checked />
                                    <label for="contrano" style="width:80px;">No</label>

                                    <?php }else{?>
                                    <input type="radio" name="no_contra_indication_steroids" value="no" id="contrano" />
                                    <label for="contrano" style="width:80px;">No</label>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="able_to_attend_regularly" class="form-label">Able to attend regularly?</label>
                                <div class="form-radio-item">
                                    <?php if($row_form_1['able_to_attend_regularly']==='yes') {?>
                                    <input type="radio" name="able_to_attend_regularly" value="yes" id="attendyes" checked />
                                    <label for="attendyes" style="width:80px;">Yes</label>

                                    <?php }else{?>
                                    <input type="radio" name="able_to_attend_regularly" value="yes" id="attendyes" />
                                    <label for="attendyes" style="width:80px;">Yes</label>

                                    <?php }if($row_form_1['able_to_attend_regularly']==='no') {?>
    
                                    <input type="radio" name="able_to_attend_regularly" value="no" id="attendno" checked />
                                    <label for="attendno" style="width:80px;">No</label>

                                    <?php }else{?>
                                    <input type="radio" name="able_to_attend_regularly" value="no" id="attendno" />
                                    <label for="attendno" style="width:80px;">No</label>
                                    <?php } ?> 
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="pregnant" class="form-label">Pregnant?</label>
                                <div class="form-radio-item">
                                     <?php if($row_form_1['pregnant']==='yes') {?>
                                    <input type="radio" name="pregnant" value="yes" id="pregyes" checked />
                                    <label for="pregyes" style="width:80px;">Yes</label>

                                    <?php }else{?>
                                    <input type="radio" name="pregnant" value="yes" id="pregyes" />
                                    <label for="pregyes" style="width:80px;">Yes</label>

                                    <?php }if($row_form_1['pregnant']==='no') {?>
    
                                    <input type="radio" name="pregnant" value="no" id="pregno" checked />
                                    <label for="pregno" style="width:80px;">No</label>

                                    <?php }else{?>
                                    <input type="radio" name="pregnant" value="no" id="pregno" />
                                    <label for="pregno" style="width:80px;">No</label>
                                    <?php } ?> 
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="tuberculosis" class="form-label">Tuberculosis?</label>
                                <div class="form-radio-item">
                                    <?php if($row_form_1['tuberculosis']==='yes') {?>
                                    <input type="radio" name="tuberculosis" value="yes" id="tbyes" checked />
                                    <label for="tbyes" style="width:80px;">Yes</label>

                                    <?php }else{?>

                                    <input type="radio" name="tuberculosis" value="yes" id="tbyes" />
                                    <label for="tbyes" style="width:80px;">Yes</label>

                                    <?php }if($row_form_1['tuberculosis']==='no') {?>
    
                                    <input type="radio" name="tuberculosis" value="no" id="tbno" checked/>
                                    <label for="tbno" style="width:80px;">No</label>

                                    <?php }else{?>

                                    <input type="radio" name="tuberculosis" value="no" id="tbno" />
                                    <label for="tbno" style="width:80px;">No</label>
                                    <?php } ?> 
                                </div>
                            </div>

                            <div class="form-radio">
                            <label for="diabetes" class="form-label">Diabetes?</label>
                                <div class="form-radio-item">
                                    <?php if($row_form_1['diabetes']==='yes') {?>
                                    <input type="radio" name="diabetes" value="yes" id="dbyes" checked />
                                    <label for="dbyes" style="width:80px;">Yes</label>
                                    
                                    <?php }else{?>

                                    <input type="radio" name="diabetes" value="yes" id="dbyes" />
                                    <label for="dbyes" style="width:80px;">Yes</label>

                                    <?php }if($row_form_1['diabetes']==='no') {?>
    
                                    <input type="radio" name="diabetes" value="no" id="dbno" checked />
                                    <label for="dbno" style="width:80px;">No</label>
                                    <?php }else{?>
                                    <input type="radio" name="diabetes" value="no" id="dbno" />
                                    <label for="dbno" style="width:80px;">No</label>
                                    <?php } ?> 
                                </div>
                            </div>

							<div class="form-group">
                                <label for="other_serious_illness">Serious Illness</label>
                                <?php if($row_form_1['other_serious_illness']==="yes"){?>
                                <select class="form-control;valid" name="other_serious_illness" id="other_serious_illness">
                                        <option value="yes" selected>Yes</option>
                                        <option value="no">No</option>
                                        <option value="other">Others</option>
                                </select>
                                <?php } elseif($row_form_1['other_serious_illness']==='no') {?>
                                <select class="form-control;valid" name="other_serious_illness" id="other_serious_illness">
                                        <option value="yes" >Yes</option>
                                        <option value="no" selected>No</option>
                                        <option value="other">Others</option>
                                </select>
                                <?php }else{?>
                                <select class="form-control;valid" name="other_serious_illness" id="other_serious_illness">
                                        <option value="yes" >Yes</option>
                                        <option value="no" >No</option>
                                        <option value="other" selected>Others</option>
                                </select>
                                <?php } ?> 
                         </div>
                             
                                 <div class="form-textarea" id="OtherHDiv">
                                                  
                                     <label for="other_illness_desc" class="form-label">Other Serious Illness</label>
                                     <td><input type="text" id="OtherH" name="other_illness_desc" placeholder="Other Serious Illness" class="valid" value="<?php echo $row_form_1['other_illness_desc']; ?>"></td>
                                 </div>
				
                            <div class="form-radio">
                                <label for="inform_consent" class="form-label">Does patient give informed consent?</label>
                                <div class="form-radio-item">
                                <?php if($row_form_1['inform_consent']==='yes') {?>
                                    <input type="radio" name="inform_consent" value="yes" id="consyes" checked />
                                    <label for="consyes" style="width:80px;">Yes</label>
                                    <?php }else{?>
                                    <input type="radio" name="inform_consent" value="yes" id="consyes" />
                                    <label for="consyes" style="width:80px;">Yes</label>

                                    <?php }if($row_form_1['inform_consent']==='no') {?>
                                    <input type="radio" name="inform_consent" value="no" id="consno" checked />
                                    <label for="consno" style="width:80px;">No</label>
                                    <?php }else{?>
                                    <input type="radio" name="inform_consent" value="no" id="consno" />
                                    <label for="consno" style="width:80px;">No</label>
                                    <?php } ?> 
                                </div>
                            </div>

                        </div>

                            <label style="color:blue;"><u><b>Enrolment for Observations:</b></u></label>
                        
                            <div class="form-group">
                                <label for="allocate_study_no" class="form-label">Allocate Study Number</label>
                                <input type="text" name="allocate_study_no" id="allocate_study_no" placeholder="Study Number" value="<?php echo $row_form_1['allocate_study_no']; ?>" />
                            </div>

                            <div class="form-radio">
                                <label for="history_of_enl" class="form-label">History of ENL?</label>
                                    <div class="form-radio-item">
                                        <?php if($row_form_1['history_of_enl']==='yes') {?>
                                            <input type="radio" name="history_of_enl" value="yes" id="histyes" checked />
                                            <label for="histyes" style="width:80px;">Yes</label>
                                            <?php }else{?>
                                            <input type="radio" name="history_of_enl" value="yes" id="histyes" />
                                            <label for="histyes" style="width:80px;">Yes</label>

                                            <?php }if($row_form_1['history_of_enl']==='no') {?>    
                                            <input type="radio" name="history_of_enl" value="no" id="histno" checked />
                                            <label for="histno" style="width:80px;">No</label>
                                            <?php }else{?>
                                            <input type="radio" name="history_of_enl" value="no" id="histno" />
                                            <label for="histno" style="width:80px;">No</label>
                                        <?php } ?> 
                                    </div>
                            </div>
                            
                            <?php } ?>
                            

                            <input type="submit" value="Submit" name="submit" id="submit">
        				                <br>
                            <h4 id="result"></h4> 

                    <div class="fieldset-footer">
                        <span>Form 1 of 6</span>
                    </div>

                    </div>
                    
                <!-- </fieldset> -->
                </div>
            </form>        

        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
        </div>
        
    </div>

    <!-- JS -->
  <!--  <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  -->

   
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
            
			
		$("#other_serious_illness").change(function() {
            if ($(this).val() == "other") {
                $('#OtherHDiv').show();
            
            } else {
                $('#OtherHDiv').hide();
                
            }
            });
        $("#other_serious_illness").trigger("change");

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
   function MdtStartDate(thisform)
   {   
        var dateMDT = thisform.dateMDT.value;
        var dateRFT = thisform.dateRFT.value;
        var Age     = thisform.Age.value;
        var Weight  = thisform.Weight.value;
        var Height  = thisform.Height.value;
        var md = new Date();
        var tdate = new Date();
        var rftd =  new Date();
        md  = new Date(dateMDT).getFullYear();
        td  = new Date(tdate).getFullYear();
        rftm = new Date(dateRFT).getMonth();
        rfty = new Date(dateRFT).getFullYear();

        if(td-md == 0 || td-md < 0)
        {
            alert("date should be 24 months less than today");
            thisform.dateMDT.focus();
            return false;
        }
        if(rfty-md <= 0 || rftm > 7)
        {
            alert("date should be 12-18 months after starting date of MDT");
            thisform.dateRFT.focus();
            return false;
        }
        if(Age < 18)
        {
            alert("Age should be greater than 18 years");
            thisform.Age.focus();
            return false;
        }
        if(isNaN(Age))
        {
            alert("enter a valid age");
            thisform.Age.focus();
            return false;
        }
        if(Weight < 40)
        {
            alert("Weight should be greater than 40 kilograms");
            thisform.Weight.focus();
            return false;
        }
        if(isNaN(Weight))
        {
            alert("Enter a valid Weight");
            thisform.Weight.focus();
            return false;  
        }
        if(isNaN(Height))
        {
            alert("Enter a valid height");
            thisform.Weight.focus();
            return false;
        }

        return true;
    }

    </script>
    <script type="text/javascript">
        function calculateBMI()
        {
            var weight = document.getElementById('Weight').value;
            var height = document.getElementById('Height').value;
            var sqh    = height**2;
            var bmi    = weight/sqh;
            var bmi2 = bmi.toFixed(2);
            document.getElementById('BMI').value = bmi2;
            
        }

    </script>





</body>

</html>