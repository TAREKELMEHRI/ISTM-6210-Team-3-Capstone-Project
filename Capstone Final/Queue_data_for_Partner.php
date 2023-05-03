<?php
// Connect to MySQL database
$servername = "72.167.58.111";
$username = "admin1";
$password = "admin";
$dbname = "savespotnow_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the data from the table
$sql = "SELECT @rank := @rank + 1 AS spot,
        name, phone_number, number_of_user
        FROM Queue, (SELECT @rank := 0) t
        ORDER BY JoinTime";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

// Output the data in the same format as the initial data
foreach ($data as $row) {
  echo "<tr>";
  echo "<td>" . $row['spot'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['phone_number'] . "</td>";
  echo "<td>" . $row['number_of_user'] . "</td>";
  echo "</tr>";
}

// Close the database connection
$conn->close();
?>
