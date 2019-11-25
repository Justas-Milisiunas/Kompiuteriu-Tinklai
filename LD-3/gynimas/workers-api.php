<?php

// Gets request parameters
$title = isset($_GET['title']) ? $_GET['title'] : null;
$salary = isset($_GET['salary']) ? $_GET['salary'] : null;

// Tries to connect to mysql database
$db_connection = mysqli_connect("localhost", "root", "", "gynimas");
if (!$db_connection)
    die("Mysql database unreachable: " . mysqli_error($db_connection));

// Builds sql based on given parameters
$sql = "";

if ($title != null) {
    $sql = "SELECT * FROM darbuotojai WHERE Pareigos = '{$title}'";
} else {
    echo "Pareigos neduotos";
    return;
}

if ($salary != null) {
    $sql .= " AND Atlyginimas >= '{$salary}'";
}

// Fetches data from database, converts to json
$results = $db_connection->query($sql);
$response = $results->fetch_all(MYSQLI_ASSOC);
echo json_encode($response);

