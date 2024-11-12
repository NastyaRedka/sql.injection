<?php
$serverName = "localhost,1433";  // або IP контейнера з SQL Server
$connectionOptions = array(
    "Database" => "sql_injection",
    "Uid" => "sa",
    "PWD" => "N1astya_"
);

// Створення підключення
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
