<?php
$db_connection = mysqli_connect("localhost", "root", "", "gynimas");
if (!$db_connection)
    die("Mysql database unreachable: " . mysqli_error($db_connection));

$messages_data = file_get_contents('darbuotojai.json');
$messages_array = json_decode($messages_data, true);
foreach ($messages_array as $message) {
    $nr = $message['Nr'];
    $name = $message['Vardas'];
    $last_name = $message['Pavarde'];
    $job_title = $message['Pareigos'];
    $salary = $message['Atlyginimas'];

    $sql = "INSERT INTO darbuotojai (`Tabelio_nr`, `Pavarde`, `Vardas`, `Pareigos`, `Atlyginimas`) VALUES ('{$nr}', '{$last_name}', '{$name}', '{$job_title}', '{$salary}')";
    var_dump($sql);
    if (mysqli_query($db_connection, $sql)) {
        echo "Darbuotojai prideti sekmingai\n";
    } else {
        echo "Error: " . mysqli_error($db_connection);
    }
}
