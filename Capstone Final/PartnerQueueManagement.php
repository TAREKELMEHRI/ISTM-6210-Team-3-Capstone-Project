<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Side Navbar</title>
	<link rel="stylesheet" href="PartnerDashboard.css">
	<script src="https://kit.fontawesome.com/d1ae8719e0.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      .table-container {
        border-radius: 5px;
        overflow: hidden;
      }
      table {
        border-collapse: collapse;
        width: 100%;
        background-color: #f0f8ff;
        border: 2px solid #000;
      }
      th, td {
        text-align: left;
        padding: 8px;
        border: 1px solid #000;
      }
      th {
        background-color: #0d74f5;
        color: #fff;
      }
      tr:nth-child(even) {
        background-color: #d7ecff;
      }
      body{
          box-sizing: border-box;
	    font-family: 'Quicksand', sans-serif;
        font-weight: 500;
        font-size: 1rem;
      }
    </style>
</head>

<?php
// Connect to MySQL database --------------------------------------------
$servername = "72.167.58.111";
$username = "admin1";
$password = "admin";
$dbname = "savespotnow_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the data from the Queue table in the database----------------
$sql = "SELECT @rank := @rank + 1 AS spot,
        name, phone_number, number_of_user
        FROM Queue, (SELECT @rank := 0) t
        ORDER BY JoinTime";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

// If the delete button is clicked
  if (isset($_POST["delete"])) {
    // Delete the row with the lowest spot value
    $sql_delete = "DELETE FROM Queue ORDER BY JoinTime ASC LIMIT 1";
    if (mysqli_query($conn, $sql_delete)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
// Close the database connection
$conn->close();
?>
<!-- Output table -->
<body>
	<script src="PartnerDashboard.js"></script>
	<div class="header1">
		<div class="side-nav">
			<h2 class="heading1">SaveSpot</h2>
			<p class="text1">Partner's Portal</p>
			<ul class="nav-links">
				<li><a href="FinalPartnerDashboard.php"><i class="fa-solid fa-user"></i><p>   Profile</p></a></li>
				<li><a href="#"><i class="fa-solid fa-list"></i><p>My Line</p></a></li>
				<li><a href="QRCodeGenerationPage.php"><i class="fa-solid fa-qrcode"></i><p>QR Code</p></a></li>
				<li><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i><p>Log Out</p></a></li>
				<div class="active">

				</div>
			</ul>
	</div>


				<div class="side-content">
		 	<h2 class="heading123">Create Your Company's Profile</h2>



				<form class="form">
					<h2 class="heading">Queue Management</h2>
                <div class="table-container">
					<table>
						<thead>
							<tr>
								<th>Spot Number</th>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Number of User</th>
							</tr>
						</thead>
						<tbody>
					    <?php foreach ($data as $row): ?>
					      <tr>
					        <td><?php echo $row['spot']; ?></td>
					        <td><?php echo $row['name']; ?></td>
					        <td><?php echo $row['phone_number']; ?></td>
					        <td><?php echo $row['number_of_user']; ?></td>
					      </tr>
					    <?php endforeach; ?>
					  </tbody>
					</table>
					<br>
				</div>
				
					<form method="post">
					  <input type="submit" class="form__button" name="delete" value="next customer">
					</form>


<!-- Use JavaScript to retrieve the data every 3 seconds -->
<script type="text/javascript">
  setInterval(function() {
    // Use AJAX to retrieve the data from the server
    $.ajax({
      url: 'Queue_data_for_Partner.php',
      type: 'POST',
      success: function(data) {
        // Replace the table body with the new data
        $('tbody').html(data);
      }
    });
  }, 3000); // 1 minute = 60,000 milliseconds therefore 3 second = 3000 ms
</script>
