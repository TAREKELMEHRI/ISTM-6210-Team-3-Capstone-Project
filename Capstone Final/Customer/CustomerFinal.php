<?php
session_start();
$Name = $_SESSION['Name'];
$Phone = $_SESSION['Phone'];
$User_Number = $_SESSION['User_Number'];


    $servername = "72.167.58.111";
    $username = "admin1";
    $password = "admin";
    $dbname = "savespotnow_db";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql_delete_2 = "DELETE FROM Queue WHERE phone_number = '$Phone'";

    mysqli_query($conn, $sql_delete_2);
    mysqli_close($conn);
?>

<html>
<head>
  <title>Customer Spot</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Customer.css">
</head>
<body>
  <div class="container">

    <form  action="CustomerSpot.php" method="post">

      <div class="form__input-group">
        <h1 class="form__title">Thank you! <Br> <?php echo $Name?><Br>We wish to see you agian! </h1>
      </div>
        <input type="hidden" name="name" value="<?php echo $Name ?>">
        <input type="hidden" name="phone" value="<?php echo $Phone ?>">
        <input type="hidden" name="user#" value="<?php echo $User_Number ?>">

          <button class="form__button" type="SUBMIT">Change your mind?<br><br>Click me one more time</button>
    </form>

  </div>
</body>
</html>
