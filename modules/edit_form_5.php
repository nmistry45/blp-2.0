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
$f5id = $_GET['f5id'];

$result_form_5 = mysqli_query($conn, "SELECT * from form5 where pid = $id and f5id = $f5id");

while ($row_form_5 = mysqli_fetch_assoc($result_form_5)) {
    $result_form5_checkBox2 = mysqli_query($conn, "SELECT * from form5_checkbox2 where f5id = $f5id");
    $result_form5_checkBox = mysqli_query($conn, "SELECT * from form5_checkbox where f5id = $f5id");

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
                <?php
                $result_form_5_1 = mysqli_query($conn, "SELECT patient_name, study_no from form1 where pid = $id");
                while ($row_form_5_1 = mysqli_fetch_assoc($result_form_5_1)) {
                ?>
                    <form method="POST" id="signup-form" class="signup-form" onsubmit="return checkDate(this)" action="../assets/php/update_form_5.php?pid=<?php echo $id; ?>&f5id=<?php echo $f5id ?>" enctype="multipart/form-data">
                        <div class="form-group" style="margin-top: 20px">
                            <label for="patient_name" class="form-label" style="margin-left: 130px; font-size: 20px; color:blue;"><u><b>Patient Name:</b></u></label>
                            <label for="op_patient_name" class="form-label" style="margin-left: -20px; font-size: 20px; color:blue;"><u><b><?php echo $row_form_5_1['patient_name']; ?></b></u></label>
                            <label for="study_no" class="form-label" style="margin-left: 215px; font-size: 20px; color:blue;"><u><b>Study Number:</b></u></label>
                            <label for="op_study_no" class="form-label" style="margin-left: -100px; font-size: 20px; color:blue;"><u><b><?php echo $row_form_5_1['study_no']; ?></b></u></label>
                        </div>
                    <?php } ?>

                    <hr>
                    <h3><span class="title_text">
                            <center><b>5. Clinical Record Sheet<b></center>
                        </span></h3>
                    <hr>

                    <!-- <fieldset> -->

                    <div class="form-row" style="padding-left: 70px ;margin-top: 9px;">
                        <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                            <label for="date" class="form-label">Date</label>&ensp;&nbsp;
                            <input style="margin-left: 13px;" type="date" name="date" id="date" value="<?php echo $row_form_5['date']; ?>" />
                        </div>
                        <div class="form-group" style="padding-left: 76px;margin-top: 9px;">
                            <label for="time_point" class="form-label">Time point</label>
                            <input type="text" name="time_point" id="time_point" placeholder="time_point " size="4" value="<?php echo $row_form_5['time_point']; ?>" />no.of weeks since randomisation
                        </div>
                    </div>

                    <div class="fieldset-content">
                        <div class="form-group">


                            <label for="staff_name" class="form-label">Staff Name</label>
                            <input type="text" name="staff_name" id="staff_name" placeholder="Staff Name" value="<?php echo $row_form_5['staff_name']; ?>" />

                        </div>

                        <div class="form-group">
                            <label for="patient_since_last_visit" class="form-label">How was Patient Since Last Visit</label>&ensp;&nbsp;
                            <textarea name="patient_since_last_visit" id="patient_since_last_visit" placeholder="Describe Here"><?php echo $row_form_5['patient_since_last_visit']; ?></textarea>
                        </div>

                        <div class="form-row" style="padding-left: 39px ;margin-top: 5px;">
                            <div class="form-group" style="padding-left: -100px ;margin-top: 5px;">
                                <label for="current_medication" class="form-label"><b>Current Medication (i.e. during past 1 week): </b></label>
                                <input type="text" name="current_medication" id="current_medication" value="<?php echo $row_form_5['current_medication']; ?>" />
                            </div>
                            <div class="form-group" style="padding-left: 70px; margin-top: 9px;">
                                <label for="weight_5" class="form-label">Weight</label>
                                <input type="text" name="weight_5" id="weight_5" value="<?php echo $row_form_5['weight_5']; ?>" /> kg
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="current_medication" class="form-label" style="color: black;"><b>Actually Received Total: </b></label>
                        </div>

                        <div class="form-group">
                            <label for="prednisolone_5" class="form-label">Predisolone:</label>&ensp;&nbsp;
                            <input type="text" name="prednisolone_5" id="prednisolone_5" placeholder="Medication during past 1 week" value="<?php echo $row_form_5['prednisolone_5']; ?>" />
                        </div>

                        <div class="form-group">
                            <label for="clofazimine_vitamins" class="form-label">Clofazimine/Vitamins:</label>&ensp;&nbsp;
                            <input type="text" name="clofazimine_vitamins" id="clofazimine_vitamins" placeholder="Medication during past 1 week" value="<?php echo $row_form_5['clofazimine_vitamins']; ?>" />
                        </div>

                        <div class="form-group" style="padding-left:34px">
                            <label for="physical_assessment" class="form-label" style="color: blue;"><u><b>Physical Assessment: </u></b></label>
                        </div>

                        <div class="fieldset-content">
                            <div class="form-group">
                                <div class="form-radio">
                                    <label for="nfa_5" class="form-label">NFA</label>&ensp;&nbsp;
                                    <div class="form-radio-item">
                                        <?php if ($row_form_5['nfa_5'] === 'yes') { ?>
                                            <input type="radio" name="nfa_5" value="yes" id="yes" checked />
                                            <label for="yes" style="width:80px;">Yes</label>

                                        <?php } else { ?>
                                            <input type="radio" name="nfa_5" value="yes" id="yes" />
                                            <label for="yes" style="width:80px;">Yes</label>

                                        <?php }
                                        if ($row_form_5['nfa_5'] === 'no') { ?>
                                            <input type="radio" name="nfa_5" value="no" id="no" checked />
                                            <label for="no" style="width:80px;">No</label>

                                        <?php } else { ?>
                                            <input type="radio" name="nfa_5" value="no" id="no" />
                                            <label for="no" style="width:80px;">No</label>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="new_nfi_5" class="form-label">NFI</label>&ensp;&nbsp;
                                <?php if ($row_form_5['new_nfi_5'] == "yes") { ?>
                                    <select class="form-control;valid" name="new_nfi_5" id="new_nfi_5">
                                        <option value="yes" selected>Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                <?php } else { ?>
                                    <select class="form-control;valid" name="new_nfi_5" id="new_nfi_5">
                                        <option value="yes">Yes</option>
                                        <option value="no" selected>No</option>
                                    </select>
                                <?php } ?>
                            </div>

                            <div class="form-textarea" id="IfyesHDiv">
                                <label for="if_yes" class="form-label">If Yes?</label>&ensp;&nbsp;
                                <td><input type="text" id="IfyesH" name="if_yes" placeholder="If yes?" class="valid" value="<?php echo $row_form_5['if_yes']; ?>"></td>
                            </div>


                            <div class="form-group" style="padding-left:34px">
                                <label for="eess_score_5">EESS</label>&ensp;

                                <input type="range" style="border:1px solid;background-color: lightblue;" name="eess_score_5" id="eess_score_5" min="0" max="30" value="<?php echo $row_form_5['eess_score_5']; ?>" onchange="show_value2(this.value)" />
                                <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
                                <span id="slider_value2" style="color:black;font-weight:bold;"></span>

                                <style type="text/css">
                                    #eess_score_5 {
                                        height: 0px;
                                        -webkit-appearance: none;
                                        border-radius: 5px;
                                        background-color: black;
                                        box-shadow: inset 0 3px 18px rgba(0, 0, 0, 0.6);
                                    }

                                    #eess_score_5::-webkit-slider-thumb {
                                        -webkit-appearance: none;
                                        width: 40px;
                                        height: 40px;
                                        background-color: white;
                                        border-radius: 50%;
                                        cursor: pointer;
                                        outline: none;
                                    }

                                    #eess_score_5::-webkit-slider-thumb:hover {
                                        box-shadow: 0 0 0 3px black,
                                            0 0 0 6px white;
                                    }

                                    #eess_score_5:active::-webkit-slider-thumb {
                                        box-shadow: 0 0 0 3px black,
                                            0 0 0 6px white;
                                    }
                                </style>

                                <script type="text/javascript">
                                    function show_value2(x) {
                                        document.getElementById("slider_value2").innerHTML = x;
                                    }
                                </script>
                                <br>
                            </div>
                            <div class="form-row">
                                <div class="form-group" style="padding-left: 39px ;margin-top: 9px;">
                                    <label for="bp" class="form-label">BP</label>
                                    <input type="bp" name="bp" id="bp" value="<?php echo $row_form_5['bp']; ?>" />
                                </div>
                                <div class="form-group" style="padding-left: 60px;">
                                    <label for="bsl" class="form-label">BSL(if steroids taken >=24 weeks)</label>
                                    <input type="text" name="bsl" id="bsl" placeholder="BSL" value="<?php echo $row_form_5['bsl']; ?>" />
                                </div>
                            </div>

                            <div class="form-group" style="padding-left:15px">
                                <label for="adverse_effect_prednisolone">Checklist for Adverse Effects of Prednisolone</label>&ensp;&ensp;&ensp;
                                <div class="container">

                                    <!-- <form   method="POST" id="signup-form" class="signup-form" action="form-66.php">-->
                                    <div class="row">
                                        <?php while ($row_form5_checkBox = mysqli_fetch_assoc($result_form5_checkBox)) { ?>
                                            <?php if ($row_form5_checkBox['Mild_Indigestion'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[0]" value="yes" style="padding-left:4px;margin-top:9px" checked>Mild Indigestion
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[0]" value="yes" style="padding-left:4px;margin-top:9px">Mild Indigestion
                                                </label>

                                            <?php }
                                            if ($row_form5_checkBox['Peptic_Ulcer'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px;margin-top:9px" checked>Peptic Ulcer
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[1]" value="yes" style="padding-left:4px;margin-top:9px">Peptic Ulcer
                                                </label>
                                            <?php }
                                            if ($row_form5_checkBox['Striae'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[2]" value="yes" style="padding-left:4px;margin-top:9px" checked>Striae
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[2]" value="yes" style="padding-left:4px;margin-top:9px">Striae
                                                </label>
                                            <?php }
                                            if ($row_form5_checkBox['Herpes_Zoster'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px;margin-top:9px" checked>Herpes Zoster
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_predni[3]" value="yes" style="padding-left:4px;margin-top:9px">Herpes Zoster
                                                </label>
                                            <?php } ?>

                                    </div>

                                    <div class="row">
                                        <?php if ($row_form5_checkBox['Hyperglycaemia'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[4]" value="yes" style="padding-left:4px;margin-top:9px" checked>Hyperglycaemia
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[4]" value="yes" style="padding-left:4px;margin-top:9px">Hyperglycaemia
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Hypertension'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[5]" value="yes" style="padding-left:4px;margin-top:9px" checked>Hypertension
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[5]" value="yes" style="padding-left:4px;margin-top:9px">Hypertension
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Malaena'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[6]" value="yes" style="padding-left:4px;margin-top:9px" checked>Malaena
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[6]" value="yes" style="padding-left:4px;margin-top:9px">Malaena
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Glaucoma'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[7]" value="yes" style="padding-left:0px;margin-top:9px" checked>Glaucoma
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[7]" value="yes" style="padding-left:0px;margin-top:9px">Glaucoma
                                            </label>
                                        <?php } ?>


                                    </div>
                                    <div class="row">
                                        <?php if ($row_form5_checkBox['Truncal_Obesity'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[8]" value="yes" style="padding-left:4px;margin-top:9px" checked>Truncal Obesity
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[8]" value="yes" style="padding-left:4px;margin-top:9px">Truncal Obesity
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Osteoporosis'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[9]" value="yes" style="padding-left:4px;margin-top:9px" checked>Osteoporosis
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[9]" value="yes" style="padding-left:4px;margin-top:9px">Osteoporosis
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Moon_Face'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[10]" value="yes" style="padding-left:4px;margin-top:9px" checked>Moon Face
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[10]" value="yes" style="padding-left:4px;margin-top:9px">Moon Face
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Psychosis'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[11]" value="yes" style="padding-left:4px;margin-top:9px" checked>Psychosis
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[11]" value="yes" style="padding-left:4px;margin-top:9px">Psychosis
                                            </label>
                                        <?php } ?>

                                    </div>
                                    <div class="row">
                                        <?php if ($row_form5_checkBox['Gastrointestinal_bleeding'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[12]" value="yes" style="padding-left:4px;margin-top:9px" checked>Gastrointestinal Bleeding
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[12]" value="yes" style="padding-left:4px;margin-top:9px">Gastrointestinal Bleeding
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Haematemesis'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[13]" value="yes" style="padding-left:4px;margin-top:9px" checked>Haematemesis
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[13]" value="yes" style="padding-left:4px;margin-top:9px">Haematemesis
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Extensive_Ringworm'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[14]" value="yes" style="padding-left:4px;margin-top:9px" checked>&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[14]" value="yes" style="padding-left:4px;margin-top:9px">&nbsp;&nbsp;&nbsp;&nbsp;Extensive Ringworm
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox['Acne'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[15]" value="yes" style="padding-left:4px;margin-top:9px" checked>Acne
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_predni[15]" value="yes" style="padding-left:4px;margin-top:9px">Acne
                                            </label>
                                        <?php } ?>
                                    <?php } ?>

                                    </div>

                                    <!--</form>-->
                                </div>
                            </div>

                            <div class="form-group" style="padding-left:15px">
                                <label for="adverse_effect_clofazimine">Checklist for Adverse Effects of Clofazimine</label>&ensp;&ensp;&ensp;

                                <div class="container">

                                    <!--<form>	-->
                                    <div class="row">
                                        <?php while ($row_form5_checkBox2 = mysqli_fetch_assoc($result_form5_checkBox2)) { ?>
                                            <?php if ($row_form5_checkBox2['Mild_Indigestion'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[0]" value="yes" style="padding-left:4px;margin-top:9px" checked>Mild Indigestion
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[0]" value="yes" style="padding-left:4px;margin-top:9px">Mild Indigestion
                                                </label>

                                            <?php }
                                            if ($row_form5_checkBox2['Vomiting'] === 'y') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[1]" value="yes" style="padding-left:4px;margin-top:9px" checked>Vomiting
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[1]" value="yes" style="padding-left:4px;margin-top:9px">Vomiting
                                                </label>
                                            <?php }
                                            if ($row_form5_checkBox2['Nausea'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[2]" value="yes" style="padding-left:4px;margin-top:9px" checked>Nausea
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[2]" value="yes" style="padding-left:4px;margin-top:9px">Nausea
                                                </label>
                                            <?php }
                                            if ($row_form5_checkBox2['Abdominal_Pain'] === 'yes') { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[3]" value="yes" style="padding-left:4px;margin-top:9px" checked>Abdominal Pain
                                                </label>
                                            <?php } else { ?>
                                                <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                    <input type="checkbox" name="adverse_clofa[3]" value="yes" style="padding-left:4px;margin-top:9px">Abdominal Pain
                                                </label>
                                            <?php } ?>
                                    </div>


                                    <div class="row">
                                        <?php if ($row_form5_checkBox2['Diarrhoea,Acute'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[4]" value="yes" style="padding-left:4px;margin-top:9px" checked>Diarrhoea, Acute
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[4]" value="yes" style="padding-left:4px;margin-top:9px">Diarrhoea, Acute
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox2['Ichthyosis'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[5]" value="yes" style="padding-left:4px;margin-top:9px" checked>Ichthyosis
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[5]" value="yes" style="padding-left:4px;margin-top:9px">Ichthyosis
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox2['Weight_loss'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[6]" value="yes" style="padding-left:4px;margin-top:9px" checked>Weight Loss
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[6]" value="yes" style="padding-left:4px;margin-top:9px">Weight Loss
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox2['Conjuctiva'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[7]" value="yes" style="padding-left:4px;margin-top:9px" checked>Conjuctiva
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[7]" value="yes" style="padding-left:4px;margin-top:9px">Conjuctiva
                                            </label>
                                        <?php } ?>

                                    </div>


                                    <div class="row">
                                        <?php if ($row_form5_checkBox2['Persistent_Indigestion'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[8]" value="yes" style="padding-left:4px;margin-top:9px" checked>Persistent<br> Indigestion
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[8]" value="yes" style="padding-left:4px;margin-top:9px">Persistent<br> Indigestion
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox2['Diarrhoea,Chronic'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[9]" value="yes" style="padding-left:4px;margin-top:9px" checked>Diarrhoea,<br> Chronic
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[9]" value="yes" style="padding-left:4px;margin-top:9px">Diarrhoea,<br> Chronic
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox2['Chronic_Dysentery'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[10]" value="yes" style="padding-left:4px;margin-top:9px" checked>Chronic <br>Dysentery
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[10]" value="yes" style="padding-left:4px;margin-top:9px">Chronic <br>Dysentery
                                            </label>
                                        <?php }
                                            if ($row_form5_checkBox2['Skin_Discolouration'] === 'yes') { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[11]" value="yes" style="padding-left:4px;margin-top:9px" checked>Skin<br> Discolouration
                                            </label>
                                        <?php } else { ?>
                                            <label class="checkbox-inline" style="padding-left:4px;margin-top:9px">
                                                <input type="checkbox" name="adverse_clofa[11]" value="yes" style="padding-left:4px;margin-top:9px">Skin <br>Discolouration
                                            </label>
                                        <?php } ?>
                                    <?php } ?>

                                    </div>

                                    <!--	</form>-->
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="patient_worse" class="form-label">Is Patient Worse:</label>&nbsp;&nbsp;
                                <input type="text" name="patient_worse" id="patient_worse" placeholder="Describe condition" value="<?php echo $row_form_5['patient_worse']; ?>" />
                            </div>

                            <div class="form-group" style="padding-left:0px">
                                <label for="time_since_flare_began">Time Since Flare Began</label>&ensp;
                                <input type="text" name="time_since_flare_began" id="time_since_flare_began" value="<?php echo $row_form_5['time_since_flare_began']; ?>" placeholder="Number of Days / Number of Weeks" />
                            </div>

                            <label style="color:blue;"><u><b>Treatment Prescribed:</u></b></label>

                            <div class="form-group">
                                <label for="dp" class="form-label">(a) Continue Standard Steroid Course</label>
                                <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">

                                    <tbody>
                                        <tr class="tr-header">
                                            <th> Dose</th>
                                            <th> Duration</th>
                                            <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>

                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="dose_std_course" class="valid" value="<?php echo $row_form_5['dose_std_course']; ?>"></td>
                                            <td><input type="text" name="dura_std_course" class="valid" value="<?php echo $row_form_5['dura_std_course']; ?>"></td>
                                            <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>


                                    </tbody>

                                </table>

                            </div>

                            <div class="form-group">
                                <label for="dp" class="form-label">(b)Additional Prednisolone</label>
                                <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">

                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Dose</th>
                                            <th>Duration</th>
                                            <!---  <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>-->
                                        </tr>

                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="dose_add_predni" class="valid" value="<?php echo $row_form_5['dose_add_predni']; ?>"></td>
                                            <td><input type="text" name="dura_add_predni" class="valid" value="<?php echo $row_form_5['dura_add_predni']; ?>"></td>
                                            <!--- <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>-->
                                        </tr>


                                    </tbody>

                                </table>

                            </div>


                            <div class="form-group">
                                <label for="advised_admission" class="form-label">Advised Admission:</label>
                                <input type="text" name="advised_admission" id="advised_admission" placeholder="Describe condition" value="<?php echo $row_form_5['advised_admission']; ?>" />
                            </div>

                            <div class="form-group" style="padding-left: 0px ;margin-top: 9px;">
                                <label for="date_of_next_assessment_5" class="form-label">Date of Next Assessment:</label>&ensp;&ensp;&nbsp;
                                <input style="margin-left: -18px;" type="date" name="date_of_next_assessment_5" id="date_of_next_assessment_5" value="<?php echo $row_form_5['date_of_next_assessment_5']; ?>" />
                            </div>

                        <?php } ?>

                        <input type="submit" value="Update" name="submit" id="submit">
                        <br>
                        <h4 id="result"></h4>
                        <h4 id="result1"></h4>

                        <div class="fieldset-footer">
                            <span>Form 5 of 8</span>
                        </div>

                        </div>

                        <!-- </fieldset> -->

                    </form>

            </div>

            <div class="copy w3ls">
                <p>&copy; 2019 Bombay Leprosy Project </p>
            </div>

        </div>

        <!-- JS -->


        <script type="text/javascript">
            function checkDate(thisform) {
                var date1 = thisform.date.value;
                var assesdate = thisform.date_of_next_assessment_5.value;
                if (date1 >= assesdate) {
                    alert("Date of assessment should be greater than date of form");
                    thisform.date_of_next_assessment_5.focus();
                    return false;
                }
                var clofa5 = [];
                $('.get_value1').each(function() {
                    if ($(this).is(":checked")) {
                        clofa5.push($(this).val());
                    }
                });
                clofa5 = clofa5.toString();
                $.ajax({
                    url: "../assets/php/clofa5.php",
                    method: "POST",
                    data: {
                        clofa5: clofa5
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });

                var predni5 = [];
                $('.get_value').each(function() {
                    if ($(this).is(":checked")) {
                        predni5.push($(this).val());
                    }
                });
                predni5 = predni5.toString();
                $.ajax({
                    url: "../assets/php/predni5.php",
                    method: "POST",
                    data: {
                        predni5: predni5
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });

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