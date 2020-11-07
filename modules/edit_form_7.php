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
$misid = $_GET['misid'];
$result_form7 = mysqli_query($conn, "SELECT * from form7 where pid = $id and misid = $misid");

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
      <?php $pid = $_GET['pid'];
      $result_form_7_1 = mysqli_query($conn, "SELECT patient_name, study_no from form1 where pid = $pid");
      while ($row_form7_1 = mysqli_fetch_assoc($result_form_7_1)) {
      ?>
        <form method="POST" id="signup-form" class="signup-form" action="../assets/php/update_form_7.php?pid=<?php echo $pid; ?>&misid=<?php echo $misid ?>" enctype="multipart/form-data">
          <div class="form-group" style="margin-top: 20px">
            <label for="patient_name" class="form-label" style="margin-left: 130px; font-size: 20px; color:blue;"><u><b>Patient Name:</b></u></label>
            <label for="op_patient_name" class="form-label" style="margin-left: -20px; font-size: 20px; color:blue;"><u><b><?php echo $row_form7_1['patient_name']; ?></b></u></label>
            <label for="study_no" class="form-label" style="margin-left: 215px; font-size: 20px; color:blue;"><u><b>Study Number:</b></u></label>
            <label for="op_study_no" class="form-label" style="margin-left: -100px; font-size: 20px; color:blue;"><u><b><?php echo $row_form7_1['study_no']; ?></b></u></label>
          </div>
        <?php } ?>

        <hr>
        <h3>
          <span class="title_text">
            <center><b>7. Miscellaneous Notes by Research Staff</b></center>
          </span>
        </h3>
        <hr>

        <div class="form-group" style="padding-left:34px;">
          <label class="form-label"></label>
          <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
            <tbody>
              <tr class="tr-header">
                <th>Date</th>
                <th>Staff Name</th>
                <th>Comments</th>
                <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>
              </tr>
              <?php
              if (mysqli_num_rows($result_form7) > 0) {
                while ($row_form7 = mysqli_fetch_assoc($result_form7)) {
              ?>
                  <tr style="padding: 2px;">
                    <td><input type="date" name="date_form_7[]" class="valid" style="width: 185px;" value="<?php echo $row_form7['date_form_7']; ?>"></td>
                    <td><input type="text" name="staff_name_7[]" class="valid" value="<?php echo $row_form7['staff_name_7']; ?>"></td>
                    <td><input type="textarea" name="comments_7[]" class="valid" value="<?php echo $row_form7['comments_7']; ?>"></td>
                    <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>
                  </tr>
                <?php }
              } else { ?>
                <tr style="padding: 2px;">
                  <td><input type="date" name="date_form_7[]" class="valid" style="width: 185px;" value=""></td>
                  <td><input type="text" name="staff_name_7[]" class="valid" value=""></td>
                  <td><input type="textarea" name="comments_7[]" class="valid" value=""></td>
                  <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>
                </tr>
              <?php } ?>

            </tbody>

          </table>
        </div>

        <input type="submit" value="Update" name="submit" id="submit">
        <br>
        <div class="fieldset-footer">
          <span>Form 7 of 8</span>
        </div>
        <h4 id="result"></h4>
        </form>
    </div>
    <div class="copy w3ls">
      <p>&copy; 2019 Bombay Leprosy Project </p>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      $('#addMore6').on('click', function() {
        var data = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
        data.find("input").val('');
      });
      $(document).on('click', '.remove6', function() {
        var trIndex1 = $(this).closest("tr").index();
        if (trIndex1 > 1) {
          $(this).closest("tr").remove();
        } else {
          alert("Sorry!! Can't remove first row!");
        }
      });
    });
  </script>
</body>

</html>