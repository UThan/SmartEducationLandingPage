<?php
$servername = "localhost";
$username = "smarxieu_admin";
$password = ",Sh.9(co6pDN";
$dbname = "smarxieu_agent_portal";
$tablename = 'studentinfo';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $conn->query("SELECT * FROM $tablename")->fetchAll();

    foreach ($data as $row) {
        echo $row['name'] . "<br />\n";
    }
    $conn = null;
} catch (PDOException $e) {
    header('HTTP/1.1 500 Internal Server Error');
    header('Content-Type: application/json; charset=UTF-8');
    $conn = null;
    exit(json_encode(array('code' => 1337, "message" => $sql . "<br>" . $e->getMessage())));
}
