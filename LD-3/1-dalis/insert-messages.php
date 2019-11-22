<?php
$db_connection = mysqli_connect("localhost", "root", "", "zinutes");
if (!$db_connection)
    die("Mysql database unreachable: " . mysqli_error($db_connection));

$messages_data = file_get_contents('zinutes.json');
$messages_array = json_decode($messages_data, true);
foreach ($messages_array as $message) {
    $name = $message['name'];
    $email = $message['email'];
    $msg = $message['message'];
    $receiver_email = $message['receiver-email'];
    $ip = $message['ip'];
    $date = $message['date'];

    $sql = "INSERT INTO messages (`name`, `email`, `message`, `receiver_email`, `ip`, `date`) VALUES ('{$name}', '{$email}', '{$msg}', '{$receiver_email}', '{$ip}', '{$date}')";
    if (mysqli_query($db_connection, $sql)) {
        echo "Message successfully written\n";
    } else {
        echo "Error: " . mysqli_error($db_connection);
    }
}
