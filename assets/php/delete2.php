<?php 

include('connection.php');
$id= $_GET['pid'];

$result = mysqli_query($conn,"DELETE from form1 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form1_contact where pid='$id'");
$result = mysqli_query($conn,"DELETE from form2 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form2_checkbox where pid='$id'");
$result = mysqli_query($conn,"DELETE from form2_checkbox2 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form2_others where pid='$id'");
$result = mysqli_query($conn,"DELETE from form3 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form3_others where pid='$id'");
$result = mysqli_query($conn,"DELETE from form4 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form4_checkbox where pid='$id'");
$result = mysqli_query($conn,"DELETE from form4_checkbox2 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form5 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form5_checkbox where pid='$id'");
$result = mysqli_query($conn,"DELETE from form5_checkbox2 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form6 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form6_checkbox where pid='$id'");
$result = mysqli_query($conn,"DELETE from form6_checkbox2 where pid='$id'");
$result = mysqli_query($conn,"DELETE from form6_checkbox3 where pid='$id'");

echo"<script>
    alert('Deleted Successfully');
    document.location.href = '../../modules/searchindex2.php';
    </script>
    ";

?>