<?php

session_start();

include('logout.php');
include('../assets/php/connection.php');

if (!isset($_SESSION['id'])) {
    echo "<script>
    alert('Please Login');
    document.location.href = 'login.php';
    </script>
    ";
}

$id = $_GET['pid'];

$result_form_1 = mysqli_query($conn, "SELECT * from form1 where pid = $id");
$result_form_1_contact_no = mysqli_query($conn, "SELECT * from form1_contact where pid = $id");
$result_form1_checkBox = mysqli_query($conn, "SELECT * from form1_checkbox where pid = $id");

while ($row_form_1 = mysqli_fetch_assoc($result_form_1)) {
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
        <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/faviconsBLP/android-icon-192x192.png">
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

        <!-- Main css -->
        <!--
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
                <h2>Database Form For Extra Clofa Study </h2>

                <form method="POST" id="signup-form" class="signup-form" action="../assets/php/update_form_1.php?pid=<?php echo $id; ?>" onsubmit="return MdtStartDate(this)" enctype="multipart/form-data">


                    <div class="form-group" style="margin-top: 20px">
                        <label for="patient_name" class="form-label">Patient Name</label>

                        <input type="text" style="width: 259px" name="patient_name" id="patient_name" placeholder="" value="<?php echo $row_form_1['patient_name']; ?>" />

                        <label for="study_no" class="form-label">Study Number</label>

                        <input type="text" style="width: 259px" name="study_no" id="study_no" placeholder="" value="<?php echo $row_form_1['study_no']; ?>" />
                    </div>

                    <hr>
                    <h3>
                        <span class="title_text">
                            <center><b>1. Initial Assessment Sheet</b></center>
                        </span>
                    </h3>
                    <hr>

                    <!-- <fieldset> -->

                    <div class="form-row" style="padding-left: 41px ;margin-top: 9px;">
                        <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                            <label for="date" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input style="margin-left: 13px;" type="date" name="date" id="formDate" value="<?php echo $row_form_1['date']; ?>" />
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
                            <label for="clinic_regno" class="form-label">Clinic Registration Number</label>
                            <input type="text" name="clinic_regno" id="clinic_regno" placeholder="Registration No" value="<?php echo $row_form_1['clinic_regno']; ?>" />
                        </div>

                        <div class="form-textarea">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" placeholder="address"><?php echo $row_form_1['address']; ?></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="Contact1" class="form-label">Contact No.</label>
                                <table style="padding-left: 41px ;" id="tb7" class="form-label">
                                    <tbody>
                                        <?php
                                        while ($row_form_1_contact_no = mysqli_fetch_assoc($result_form_1_contact_no)) { ?>
                                            <tr class="tr-header">
                                                <th><input type="number" name="Contact[]" id="Contact[]" value=<?php echo $row_form_1_contact_no['contact_no'];  ?> /></th>
                                                <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore7" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                                <th>&ensp; </th>
                                                <th><a href='javascript:void(0);' style="font-size:18px;" class='remove7' title="Remove"><span class='fa fa-minus'></span></a></th>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email_id" class="form-label">E-Mail ID:</label>
                            <input type="email" name="email_id" id="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="E-Mail ID" value="<?php echo $row_form_1['email_id']; ?>" />
                        </div>

                        <div class="form-row" style="padding-left: 22px;">
                            <div class="form-group" style="padding-left: 15px;">
                                <label for="local_staff_contact" class="form-label" style="padding-left: 15px">Local Staff Contact for this Subject:</label>
                                <input type="text" name="local_staff_contact" id="local_staff_contact" placeholder="Local Staff Contact" value="<?php echo $row_form_1['local_staff_contact']; ?>" />
                                <label for="staff_mobile_no" class="form-label" style="padding-left: 18px">Staff Mobile Number:</label>
                                <input type="text" name="staff_mobile_no" id="staff_mobile_no" placeholder="Staff Mobile Number" value="<?php echo $row_form_1['staff_mobile_no']; ?>" />
                            </div>
                        </div>

                        <div class="form-row" style="padding-left: 25px;">
                            <div class="form-group" style="padding-left: 25px;">
                                <label for="dateMDT" class="form-label" style="padding-left: 55px">Date of Starting MDT</label>
                                <input style="margin-left: 0px;" type="date" name="dateMDT" id="dateMDT" value="<?php echo $row_form_1['dateMDT']; ?>" />
                                <label for="dateRFT" class="form-label" style="padding-left: 110px">Date of RFT</label>
                                <input style="margin-left: 0px;" type="date" name="dateRFT" id="dateRFT" value="<?php echo $row_form_1['dateRFT']; ?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="SmearDiagnosis">Smear at Diagnosis</label>
                            <input type="range" style="border:1px solid;background-color: lightblue;" name="SmearDiagnosis" id="SmearDiagnosis" min="0" max="6" value="<?php echo $row_form_1['SmearDiagnosis']; ?>" onchange="show_value2(this.value)">
                            <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
                            <style type="text/css">
                                #SmearDiagnosis {
                                    height: 0px;
                                    -webkit-appearance: none;
                                    border-radius: 5px;
                                    background-color: black;
                                    box-shadow: inset 0 3px 18px rgba(0, 0, 0, 0.6);
                                }

                                #SmearDiagnosis::-webkit-slider-thumb {
                                    -webkit-appearance: none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #SmearDiagnosis::-webkit-slider-thumb:hover {
                                    box-shadow: 0 0 0 3px black,
                                        0 0 0 6px white;
                                }

                                #SmearDiagnosis:active::-webkit-slider-thumb {
                                    box-shadow: 0 0 0 3px black,
                                        0 0 0 6px white;
                                }
                            </style>
                            <script type="text/javascript">
                                function show_value2(x) {
                                    document.getElementById("slider_value2").innerHTML = x;
                                }
                            </script>
                        </div>

                        <div class="form-row" style="padding-left: 27px ;margin-top: 9px;">
                            <div class="form-group" style="padding-left: 27px ;margin-top: 9px;">
                                <label for="SmearDate" class="form-label">Smear Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <input style="margin-left: 13px;" type="date" name="SmearDate" id="SmearDate" value="<?php echo $row_form_1['SmearDate']; ?>" />
                            </div>
                        </div>

                        <div class="rows">

                            <label style="color:blue;"><u><b>Eligibility Criteria for Screening:</b></u></label>

                            <div class="form-row" style="padding-left: 8px;">
                                <div class="form-radio">
                                    <label for="mdiag" class="form-label">Withing 24 Months of Diagnosis?</label>
                                    <div class="form-radio-item">
                                        <?php if ($row_form_1['mdiag'] === 'yes') { ?>
                                            <input type="radio" name="mdiag" value="yes" id="24myes" checked />
                                            <label for="24myes" style="width:80px;">Yes</label>

                                        <?php } else { ?>
                                            <input type="radio" name="mdiag" value="yes" id="24myes" />
                                            <label for="24myes" style="width:80px;">Yes</label>

                                        <?php }
                                        if ($row_form_1['mdiag'] === 'no') { ?>

                                            <input type="radio" name="mdiag" value="no" id="24mno" checked />
                                            <label for="24mno" style="width:80px;">No</label>

                                        <?php } else { ?>
                                            <input type="radio" name="mdiag" value="no" id="24mno" />
                                            <label for="24mno" style="width:80px;">No</label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-radio" style="padding-left: 40px;">
                                    <label for="type" class="form-label">Type:</label>
                                    <div class="form-radio-item">
                                        <?php if ($row_form_1['type'] === 'new') { ?>
                                            <input type="radio" name="type" value="new" id="new" checked />
                                            <label for="new" style="width:80px;">New</label>
                                        <?php } else { ?>
                                            <input type="radio" name="type" value="new" id="new" />
                                            <label for="new" style="width:80px;">New</label>
                                        <?php }
                                        if ($row_form_1['type'] === 'on_rx') { ?>
                                            <input type="radio" name="type" value="on_rx" id="on_rx" checked />
                                            <label for="on_rx" style="width:80px;">On RX</label>
                                        <?php } else { ?>
                                            <input type="radio" name="type" value="on_rx" id="on_rx" />
                                            <label for="on_rx" style="width:80px;">On RX</label>
                                        <?php }
                                        if ($row_form_1['type'] === 'rft') { ?>
                                            <input type="radio" name="type" value="rft" id="rft" checked />
                                            <label for="rft" style="width:80px;">RFT</label>
                                        <?php } else { ?>
                                            <input type="radio" name="type" value="rft" id="rft" />
                                            <label for="rft" style="width:80px;">RFT</label>
                                        <?php }
                                        if ($row_form_1['type'] === 'relapse') { ?>
                                            <input type="radio" name="type" value="relapse" id="relapse" checked />
                                            <label for="relapse" style="width:80px;">Relapse</label>
                                        <?php } else { ?>
                                            <input type="radio" name="type" value="relapse" id="relapse" />
                                            <label for="relapse" style="width:80px;">Relapse</label>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row" style="padding-left: 70px;">
                                <div class="form-group" style="padding-left: 60px;">
                                    <label for="Age" class="form-label">Age?</label>
                                    <input type="text" name="Age" id="Age" placeholder="Age" value="<?php echo $row_form_1['Age']; ?>" />
                                </div>
                                <div class="form-group" style="padding-left: 80px;">
                                    <label for="sex">Sex</label>
                                    <?php if ($row_form_1['sex'] == "male") { ?>
                                        <select class="form-control;valid" name="sex" id="sex">
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    <?php } else { ?>
                                        <select class="form-control; valid;" name="sex" id="sex">
                                            <option value="male">Male</option>
                                            <option value="female" selected>Female</option>
                                        </select>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-row" style="padding-left: 20px;">
                                <div class="form-group" style="padding-left: 65px;">
                                    <label for="Weight" class="form-label">Weight?</label>
                                    <input type="text" name="Weight" id="Weight" onchange="calculateBMI()" placeholder="Weight in kilograms" value="<?php echo $row_form_1['Weight']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="Height" class="form-label">Height?</label>
                                    <input type="text" name="Height" id="Height" onchange="calculateBMI()" placeholder="Height in meters" value="<?php echo $row_form_1['Height']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="BMI" class="form-label">BMI?</label>
                                    <input type="text" name="BMI" id="BMI" onchange="calculateBMI()" placeholder="BMI Score" value="<?php echo $row_form_1['BMI']; ?>" />
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="any_contra_indication_steroids" class="form-label">Any contra-indications to steroids/to clofazimine?</label>
                                <div class="form-radio-item">
                                    <?php if ($row_form_1['any_contra_indication_steroids'] === 'yes') { ?>
                                        <input type="radio" name="any_contra_indication_steroids" value="yes" id="contrayes" checked />
                                        <label for="contrayes" style="width:80px;">Yes</label>

                                    <?php } else { ?>
                                        <input type="radio" name="any_contra_indication_steroids" value="yes" id="contrayes" />
                                        <label for="contrayes" style="width:80px;">Yes</label>

                                    <?php }
                                    if ($row_form_1['any_contra_indication_steroids'] === 'no') { ?>

                                        <input type="radio" name="any_contra_indication_steroids" value="no" id="contrano" checked />
                                        <label for="contrano" style="width:80px;">No</label>

                                    <?php } else { ?>
                                        <input type="radio" name="any_contra_indication_steroids" value="no" id="contrano" />
                                        <label for="contrano" style="width:80px;">No</label>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="able_to_attend_regularly" class="form-label">Able to Attend Regularly?</label>
                                <div class="form-radio-item">
                                    <?php if ($row_form_1['able_to_attend_regularly'] === 'yes') { ?>
                                        <input type="radio" name="able_to_attend_regularly" value="yes" id="attendyes" checked />
                                        <label for="attendyes" style="width:80px;">Yes</label>

                                    <?php } else { ?>
                                        <input type="radio" name="able_to_attend_regularly" value="yes" id="attendyes" />
                                        <label for="attendyes" style="width:80px;">Yes</label>

                                    <?php }
                                    if ($row_form_1['able_to_attend_regularly'] === 'no') { ?>

                                        <input type="radio" name="able_to_attend_regularly" value="no" id="attendno" checked />
                                        <label for="attendno" style="width:80px;">No</label>

                                    <?php } else { ?>
                                        <input type="radio" name="able_to_attend_regularly" value="no" id="attendno" />
                                        <label for="attendno" style="width:80px;">No</label>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="not_pregnant" class="form-label">Not Pregnant?</label>
                                <div class="form-radio-item">
                                    <?php if ($row_form_1['not_pregnant'] === 'yes') { ?>
                                        <input type="radio" name="not_pregnant" value="yes" id="pregyes" checked />
                                        <label for="pregyes" style="width:80px;">Yes</label>

                                    <?php } else { ?>
                                        <input type="radio" name="not_pregnant" value="yes" id="pregyes" />
                                        <label for="pregyes" style="width:80px;">Yes</label>

                                    <?php }
                                    if ($row_form_1['not_pregnant'] === 'no') { ?>

                                        <input type="radio" name="not_pregnant" value="no" id="pregno" checked />
                                        <label for="pregno" style="width:80px;">No</label>

                                    <?php } else { ?>
                                        <input type="radio" name="not_pregnant" value="no" id="pregno" />
                                        <label for="pregno" style="width:80px;">No</label>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group" id="check">
                                <label for="other_illnesses">Other Illnesses:</label>
                                <div class="container">

                                    <div class="row">
                                        <?php while ($row_form1_checkBox = mysqli_fetch_assoc($result_form1_checkBox)) { ?>
                                            <?php if ($row_form1_checkBox['HIV'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;">
                                                    <input type="checkbox" name="other[0]" value="yes" style="padding-left:8px" checked>HIV
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;">
                                                    <input type="checkbox" name="other[0]" value="yes" style="padding-left:8px">HIV
                                                </label>
                                            <?php }
                                            if ($row_form1_checkBox['Chronic_Moderate/Severe_Renal_Impairment'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px">
                                                    <input type="checkbox" name="other[1]" value="yes" style="padding-left:8px" checked>Chronic Moderate/Severe Renal Impairment
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px">
                                                    <input type="checkbox" name="other[1]" value="yes" style="padding-left:8px">Chronic Moderate/Severe Renal Impairment
                                                </label>
                                            <?php }
                                            if ($row_form1_checkBox['Tuberculosis'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px">
                                                    <input type="checkbox" name="other[2]" value="yes" style="padding-left:8px" checked>Tuberculosis
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px">
                                                    <input type="checkbox" name="other[2]" value="yes" style="padding-left:8px">Tuberculosis
                                                </label>
                                            <?php } ?>
                                    </div>
                                    <div class="row">
                                        <?php if ($row_form1_checkBox['Cancer'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px">
                                                <input type="checkbox" name="other[3]" value="yes" style="padding-left:8px" checked>Cancer
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px">
                                                <input type="checkbox" name="other[3]" value="yes" style="padding-left:8px">Cancer
                                            </label>
                                        <?php }
                                            if ($row_form1_checkBox['Uncontrolled_Type-1_Diabetes'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px">
                                                <input type="checkbox" name="other[4]" value="yes" style="padding-left:8px" checked>&ensp;&ensp;&ensp;&ensp;Uncontrolled Type-1 Diabetes
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px">
                                                <input type="checkbox" name="other[4]" value="yes" style="padding-left:8px">&ensp;&ensp;&ensp;&ensp;Uncontrolled Type-1 Diabetes
                                            </label>
                                        <?php }
                                            if ($row_form1_checkBox['Other_Illness'] === 'yes') { ?>
                                            <label for="chkpassport" class="checkbox-inline" style="padding-left:4px">
                                                <input type="checkbox" name="other[5]" value="yes" id="chkpassport" onclick="ShowHideDiv(this)" style="padding-left:30px" checked />Other Illness
                                            </label>
                                        <?php } else { ?>
                                            <label for="chkpassport" class="checkbox-inline" style="padding-left:4px">
                                                <input type="checkbox" name="other[5]" value="yes" id="chkpassport" onclick="ShowHideDiv(this)" style="padding-left:30px" />Other Illness
                                            </label>
                                        <?php } ?>
                                    <?php } ?>
                                    <hr />

                                    </div>
                                </div>
                            </div>

                            <div id="others" style="display: none; padding-left: 182px;">
                                Others:
                                <input type="text" class="get_value3" value="<?php echo $row_form_1['others']; ?>" name="others" id="txtPassportNumber" />
                                &ensp;
                            </div>

                            <div class="form-group">
                                <label for="long_term" class="form-label">Long Term Medication for Other Illness:</label>
                                <input type="text" name="long_term" id="long_term" value="<?php echo $row_form_1['long_term']; ?>" />
                            </div>

                            <div class="form-radio">
                                <label for="inform_consent" class="form-label">Does Patient Give Informed Consent?</label>
                                <div class="form-radio-item">
                                    <?php if ($row_form_1['inform_consent'] === 'yes') { ?>
                                        <input type="radio" name="inform_consent" value="yes" id="consyes" checked />
                                        <label for="consyes" style="width:80px;">Yes</label>
                                    <?php } else { ?>
                                        <input type="radio" name="inform_consent" value="yes" id="consyes" />
                                        <label for="consyes" style="width:80px;">Yes</label>

                                    <?php }
                                    if ($row_form_1['inform_consent'] === 'no') { ?>
                                        <input type="radio" name="inform_consent" value="no" id="consno" checked />
                                        <label for="consno" style="width:80px;">No</label>
                                    <?php } else { ?>
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
                                <?php if ($row_form_1['history_of_enl'] === 'yes') { ?>
                                    <input type="radio" name="history_of_enl" value="yes" id="histyes" checked />
                                    <label for="histyes" style="width:80px;">Yes</label>
                                <?php } else { ?>
                                    <input type="radio" name="history_of_enl" value="yes" id="histyes" />
                                    <label for="histyes" style="width:80px;">Yes</label>

                                <?php }
                                if ($row_form_1['history_of_enl'] === 'no') { ?>
                                    <input type="radio" name="history_of_enl" value="no" id="histno" checked />
                                    <label for="histno" style="width:80px;">No</label>
                                <?php } else { ?>
                                    <input type="radio" name="history_of_enl" value="no" id="histno" />
                                    <label for="histno" style="width:80px;">No</label>
                                <?php } ?>
                            </div>
                        </div>

                    <?php } ?>


                    <input type="submit" value="Update" name="Submit" id="submit">
                    <br>
                    <h4 id="result"></h4>

                    <div class="fieldset-footer">
                        <span>Form 1 of 8</span>
                    </div>

                    </div>

                    <!-- </fieldset> -->
            </div>
            </form>

            <div class="copy w3ls">
                <p>&copy; 2019 Bombay Leprosy Project </p>
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
            $(function() {
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
                    if (trIndex1 > 1) {
                        $(this).closest("tr").remove();
                        document.getElementById("tb").deleteRow(trIndex1);
                        document.getElementById("tb").deleteRow(trIndex1);
                        document.getElementById("tb").deleteRow(trIndex1 - 1);
                        document.getElementById("tb").deleteRow(trIndex1 - 2);
                        document.getElementById("tb").deleteRow(trIndex1 - 3);

                    } else {
                        alert("Sorry!! Can't remove first row!");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function() {
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
                    if (trIndex1 > 1) {
                        $(this).closest("tr").remove();
                        document.getElementById("tb1").deleteRow(trIndex1);
                        document.getElementById("tb1").deleteRow(trIndex1);
                        document.getElementById("tb1").deleteRow(trIndex1 - 1);
                        document.getElementById("tb1").deleteRow(trIndex1 - 2);
                        document.getElementById("tb1").deleteRow(trIndex1 - 3);

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


            $(function() {
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
                    if (trIndex1 > 1) {
                        $(this).closest("tr").remove();
                        document.getElementById("tb6").deleteRow(trIndex1);
                        document.getElementById("tb6").deleteRow(trIndex1);
                        document.getElementById("tb6").deleteRow(trIndex1 - 1);
                        document.getElementById("tb6").deleteRow(trIndex1 - 2);
                        document.getElementById("tb6").deleteRow(trIndex1 - 3);
                        document.getElementById("tb6").deleteRow(trIndex1 - 4);
                        document.getElementById("tb6").deleteRow(trIndex1 - 5);
                    } else {
                        alert("Sorry!! Can't remove first row!");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function() {
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
                    if (trIndex1 > 1) {
                        $(this).closest("tr").remove();
                        document.getElementById("tb5").deleteRow(trIndex1);
                        document.getElementById("tb5").deleteRow(trIndex1);
                        document.getElementById("tb5").deleteRow(trIndex1 - 1);
                    } else {
                        alert("Sorry!! Can't remove first row!");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function() {
                $('#addMore7').on('click', function() {
                    var data = $("#tb7 tr:eq(0)").clone(true).appendTo("#tb7");
                    data.find("input").val('');
                });
                $(document).on('click', '.remove7', function() {
                    var trIndex1 = $(this).closest("tr").index();
                    if (trIndex1 > 0) {
                        $(this).closest("tr").remove();
                        document.getElementById("tb7").deleteRow(trIndex1);
                    } else {
                        alert("Sorry!! Can't remove first row!");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            function MdtStartDate(thisform) {
                var dateForm = thisform.date.value;
                var dateMDT = thisform.dateMDT.value;
                var dateRFT = thisform.dateRFT.value;
                var Age = thisform.Age.value;
                var Weight = thisform.Weight.value;
                var Height = thisform.Height.value;
                var study_no = thisform.study_no.value;
                var allocate_study_no = thisform.allocate_study_no.value;
                var phoneno = /^\d{10}$/;
                var staff_mobile_no = thisform.staff_mobile_no.value;
                var BMI = thisform.BMI.value;

                var q = new Date(dateForm);
                var z = new Date(dateMDT);
                var x = new Date(dateRFT);

                var dtm = q.getTime() - z.getTime();
                var ddm = dtm / (1000 * 3600 * 24);
                if (ddm > 731) {
                    alert("Date Should Be Less than 24 months");
                    thisform.dateMDT.focus();
                    return false;
                }

                var dtr = x.getTime() - z.getTime();
                var ddr = dtr / (1000 * 3600 * 24);
                if (ddr < 365) {
                    alert("Date Should Be Greater than 12 months");
                    thisform.dateRFT.focus();
                    return false;
                }

                if (ddr > 548) {
                    alert("Date Should Be Less than 18 months");
                    thisform.dateRFT.focus();
                    return false;
                }

                if (Age < 18) {
                    alert("Age Should Be Greater than 18 years");
                    thisform.Age.focus();
                    return false;
                }
                if (Age > 60) {
                    alert("Age Should Be Less than 60 years");
                    thisform.Age.focus();
                    return false;
                }
                if (isNaN(Age)) {
                    alert("Enter a Valid Age");
                    thisform.Age.focus();
                    return false;
                }
                if (Weight < 40) {
                    alert("Weight Should Be Greater than 40 kilograms");
                    thisform.Weight.focus();
                    return false;
                }
                if (isNaN(Weight)) {
                    alert("Enter a Valid Weight");
                    thisform.Weight.focus();
                    return false;
                }
                if (isNaN(Height)) {
                    alert("Enter a Valid Height");
                    thisform.Weight.focus();
                    return false;
                }
                if (study_no != allocate_study_no) {
                    alert("Study Number should be same as Allocate Study Number");
                    thisform.study_no.focus();
                    thisform.allocate_study_no.focus();
                    return false;
                }
                if (!staff_mobile_no.match(phoneno)) {
                    alert("Enter Valid 10-digit Staff Mobile Number");
                    thisform.staff_mobile_no.focus();
                    return false;
                }
                if (document.getElementById('24mno').checked) {
                    alert("Not Eligible as Not Within 24 Months of Diagnosis");
                    document.getElementById('24mno').focus();
                    return false;
                }
                if (document.getElementById('contrano').checked) {
                    alert("Cannot Have Contra-indications");
                    document.getElementById('contrano').focus();
                    return false;
                }
                if (BMI < 18.5) {
                    alert("BMI Should be Greater Than 18.5");
                    thisform.BMI.focus();
                    return false;
                }
                if (document.getElementById('pregno').checked) {
                    alert("Not Eligible as The Patient is Pregnant");
                    document.getElementById('pregno').focus();
                    return false;
                }
                if (document.getElementById('attendno').checked) {
                    alert("Not Eligible as The Patient is Not Being Able To Attend Regularly");
                    document.getElementById('attendno').focus();
                    return false;
                }
                if (document.getElementById('consno').checked) {
                    alert("Not Eligible as The Patient Does Not Provide Informed Consent");
                    document.getElementById('consno').focus();
                    return false;
                }

                return true;
            }
        </script>
        <script type="text/javascript">
            function calculateBMI() {
                var weight = document.getElementById('Weight').value;
                var height = document.getElementById('Height').value;
                var sqh = height ** 2;
                var bmi = weight / sqh;
                var bmi2 = bmi.toFixed(2);
                document.getElementById('BMI').value = bmi2;

            }
        </script>
        <script type="text/javascript">
            function ShowHideDiv(chkpassport) {
                var others = document.getElementById("others");
                others.style.display = chkpassport.checked ? "block" : "none";
            }
        </script>

    </body>

    </html>