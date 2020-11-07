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
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Database Form For Extra Clofa Study </h2>
            <?php $pid = $_GET['pid'];
            $result_form_8 = mysqli_query($conn, "SELECT patient_name, study_no from form1 where pid = $pid");
            while ($row_form_8 = mysqli_fetch_assoc($result_form_8)) {
            ?>
                <form method="POST" id="signup-form" class="signup-form" action="../assets/php/form-88.php?pid=<?php echo $pid; ?>" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top: 20px">
                        <label for="patient_name" class="form-label" style="margin-left: 130px; font-size: 20px; color:blue;"><u><b>Patient Name:</b></u></label>
                        <label for="op_patient_name" class="form-label" style="margin-left: -20px; font-size: 20px; color:blue;"><u><b><?php echo $row_form_8['patient_name']; ?></b></u></label>
                        <label for="study_no" class="form-label" style="margin-left: 215px; font-size: 20px; color:blue;"><u><b>Study Number:</b></u></label>
                        <label for="op_study_no" class="form-label" style="margin-left: -100px; font-size: 20px; color:blue;"><u><b><?php echo $row_form_8['study_no']; ?></b></u></label>
                    </div>
                <?php } ?>
                <hr>
                <h3>
                    <span class="title_text">
                        <center><b>8. Checklist for Adverse Effects</b></center>
                    </span>
                </h3>
                <hr>

                <div class="fieldset-content">
                    <div class="fieldset-content">

                        <div class="form-group" style="margin-top: 9px">
                            <label for="adverse_effect_prednisolone">Checklist for Adverse Effects of Prednisolone</label>
                            <div class="container">

                                <table cellpadding="2px" cellspacing="2px">

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[0]" value="yes"></td>
                                        <td>Mild Indigestion(ie relieved by antacid)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[1]" value="yes"> </td>
                                        <td>Severe/Persistent Indigestion,suggestive of a peptic ulcer </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[2]" value="yes"> </td>
                                        <td>Any evidence of peptic ulcer from investigations such as gastroscopy or imaging, if done.</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[3]" value="yes"> </td>
                                        <td>Evidence of Gastrointestinal bleeding- haematemesis, melaena, FOB positive if done.</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[4]" value="yes"> </td>
                                        <td>Hypertension(new or uncontrolled)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[5]" value="yes"> </td>
                                        <td>Hyperglycaemia/new diagnosis of diabetes mellitus</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[6]" value="yes"> </td>
                                        <td>Glaucoma(must get intra ocular pressure checked if eye pain/declining vision)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[7]" value="yes"> </td>
                                        <td>Psychosis(considered by physician/psychiatrist to be Steroid induced)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[8]" value="yes"> </td>
                                        <td>Fragility fracture or other evidence of osteoporosis (eg dexascan shows more than 2 SD below normal)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[9]" value="yes"> </td>
                                        <td>Moon Face,Truncal Obesity,Striae</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[10]" value="yes"> </td>
                                        <td>Acne(if not a teenager)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[11]" value="yes"> </td>
                                        <td>Extensive Ringworm</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[12]" value="yes"> </td>
                                        <td>Herpes Zoster</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[13]" value="yes"> </td>
                                        <td>Delayed wound healing(compared with normal for type of wound)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[14]" value="yes"> </td>
                                        <td>Tb- new or reactivated,pulmonary/extrapulmonary</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_predni[15]" value="yes"> </td>
                                        <td>Strongyloides hyperinfestation syndrome</td>
                                    </tr>

                                </table>


                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 40px">
                            <label for="adverse_effect_prednisolone">Checklist for Adverse Effects of Clofazimine</label>
                            <div class="container">

                                <table cellpadding="2px" cellspacing="2px">

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[0]" value="yes"></td>
                                        <td>Nausea</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[1]" value="yes"> </td>
                                        <td>Vomiting </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[2]" value="yes"> </td>
                                        <td>Indigestion mild,responds to antacid.</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[3]" value="yes"> </td>
                                        <td>Severe/persistent indigestion suggestive of gastric ulceration</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[4]" value="yes"> </td>
                                        <td>Severe abdominal pain,suggestive of "acute abdomen",which might be due to clofazimine crystal deposition</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[5]" value="yes"> </td>
                                        <td>Diarrhoea,acute</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[6]" value="yes"> </td>
                                        <td>Diarrhoea,chronic</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[7]" value="yes"> </td>
                                        <td>Chronic Dysentery (blood and mucous in stools, tenesmus)</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[8]" value="yes"> </td>
                                        <td>Skin discolouration</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[9]" value="yes"> </td>
                                        <td>Discolouration of conjunctiva/tears</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[10]" value="yes"> </td>
                                        <td>Ichthyosis</td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" name="adverse_clofa[11]" value="yes"> </td>
                                        <td>Weight loss (if present,consider malabsorption as well as other possible causes)</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <input type="submit" value="Save" name="submit" id="submit">
                        <br>
                        <h4 id="result"></h4>

                        <div class="fieldset-footer">
                            <span>Form 8 of 8</span>
                        </div>
                    </div>
                </div>
                </form>

        </div>

        <div class="copy w3ls">
            <p>&copy; 2019 Bombay Leprosy Project </p>
        </div>
    </div>

</body>

</html>