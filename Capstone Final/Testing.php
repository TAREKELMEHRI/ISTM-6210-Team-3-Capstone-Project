<?php
$servername = "72.167.58.111";
    $username = "admin1";
    $password = "admin";
    $dbname = "savespotnow_db";
    
    $user = 'Test';
    $pass = 'test';

    // Retrieve the data from the table
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT ID FROM `Partner_users` WHERE (username = '$user' AND password = '$pass') or (email = '$user' AND password = '$pass')";
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$id = $row['ID'];
		echo $id;

?>