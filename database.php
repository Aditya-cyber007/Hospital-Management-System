<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:adityapratap620.database.windows.net,1433; Database = user", "hospital", "Aditya@007");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "hospital", "pwd" => "Aditya@007", "Database" => "user", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:adityapratap620.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
