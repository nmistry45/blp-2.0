<?php
	
    $dbname='bombaoim_blp_db_';
    $dbhost='localhost';
    $dbpass='asdf1234';
    $dbuser='bombaoim_sakec';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}