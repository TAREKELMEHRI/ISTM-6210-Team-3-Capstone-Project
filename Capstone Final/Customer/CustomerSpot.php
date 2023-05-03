<?php
session_start();
// Collect values of input fields
$Name = $_POST['name'];
$Phone = $_POST['phone'];
$User_Number = $_POST['user#'];


$_SESSION['Name'] = $Name;
$_SESSION['Phone'] = $Phone;
$_SESSION['User_Number'] = $User_Number;

// Connect to MySQL database
$servername = "72.167.58.111";
$username = "admin1";
$password = "admin";
$dbname = "savespotnow_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// The SQL to insert the new record
$sql_insert = "INSERT INTO Queue (name, phone_number, number_of_user)
VALUES ('$Name', '$Phone', '$User_Number')";

// Execute the INSERT statement
mysqli_query($conn, $sql_insert);

// Close the MySQL connection
mysqli_close($conn);
?>

<html>
<head>
  <title>Customer Spot</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="Customer.css">
</head>
<body>
  <div class="container">

    <form  action="CustomerFinal.php" method="post">
      <h1 class="form__title">Congrats! <?php echo $Name?>,You are in now! </h1>

      <div class="form__input-group">
        <h3 class="text-center">Your current Spot is:</h3>
        <h1 class="text-center" id="spot"></h1>
      </div>
      <div class="form__input-group">
        <h3 class="text-center">Your estimate wait time is:</h3>
        <h1 class="text-center" id="time"></h1>
      </div>

          <button class="form__button_red" type="SUBMIT" >Leave Queue Now</button>
    </form>

  </div>
</body>
</html>





<script>
$(document).ready(function() {
    setInterval(function() {
        $.ajax({
            url: 'Queue_data_for_Customer.php',
            type: 'POST',
            data: {functionName: 'getQueueData'},
            success: function(response) {
                // check the console for the entire queue
                console.log(response);
                // here is where the magic happen!
                var incoming_data = JSON.parse(response);
                var key = incoming_data.findIndex(item => item.phone_number === "<?php echo $Phone; ?>");
                var The_Spot = incoming_data[key].spot;
                var wtime = The_Spot * 5;
                $("#spot").text(The_Spot);
                $("#time").text(wtime +" minutes");
            }
        });
    }, 5000); // 5000 = 5s
});
</script>
