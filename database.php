<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:database1.database.windows.net,1433; Database = database1", "aditya123", "Aditya@007");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "aditya123", "pwd" => "Aditya@007", "Database" => "database1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:database1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
