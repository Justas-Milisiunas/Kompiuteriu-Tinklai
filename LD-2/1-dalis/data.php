<?php
$db_connection = mysqli_connect("localhost", "root", "", "kompiuteriu-tinklai");
if (!$db_connection)
    die("Mysql database unreachable: " . mysqli_error($db_connection));

if ($_POST) {
    insert_message();
}

function get_messages()
{
    global $db_connection;

    $sql = "SELECT * FROM messages";
    $result = mysqli_query($db_connection, $sql);
    return mysqli_fetch_all($result);
}

function insert_message()
{
    global $db_connection;

    $current_date = date("Y-m-d");

    $ip = get_client_ip();
    $sql = "INSERT INTO messages (`name`, `email`, `message`, `receiver-email`, `ip`, `date`) 
            VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['message']}', '{$_POST['receiver-email']}', '{$ip}', '{$current_date}')";
    var_dump($sql);
    $result = mysqli_query($db_connection, $sql);

    if ($result == true)
        header("Location: index.php");
    else
        var_dump($result);
}

function get_client_ip()
{
    return $_SERVER['REMOTE_ADDR'] === '::1' ? '127.0.0.1' : $_SERVER['REMOTE_ADDR'];
}