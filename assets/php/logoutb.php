<?php

session_start();
session_unset();
session_destroy();

// header("location:../../modules/login.php");
echo('<script>location.href = "../../modules/login.php"</script>');

?>