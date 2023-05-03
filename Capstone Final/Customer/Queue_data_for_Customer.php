<?php
function getQueueData() {
    $servername = "72.167.58.111";
    $username = "admin1";
    $password = "admin";
    $dbname = "savespotnow_db";

    // Retrieve the data from the table
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT @rank := @rank + 1 AS spot,
            name, phone_number, number_of_user
            FROM Queue, (SELECT @rank := 0) t
            ORDER BY JoinTime";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    mysqli_close($conn);

    return json_encode($data);
}

if ($_POST['functionName'] == 'getQueueData') {
    echo getQueueData();
}
?>
