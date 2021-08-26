<?php
$servername = "localhost";
$username = "smarxieu_admin";
$password = ",Sh.9(co6pDN";
$dbname = "smarxieu_agent_portal";
$tablename = 'students';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $courses = $_POST['courses'];
    $institute = $_POST['institute'];
    $targeted_city = $_POST['targeted_city'];
    $visa_status = $_POST['visa_status'];
    $app_status = $_POST['app_status'];
    $address = $_POST['address'];
    $deposit_paid = $_POST['deposit_paid'];
    $offer_received = $_POST['offer_received'];
    $coe_received = $_POST['coe_received'];
    $tutionfees_paid = $_POST['tutionfees_paid'];
    $tut_amount = $_POST['tut_amount'];
    $tut_currency = $_POST['tut_currency'];
    $dep_amount = $_POST['dep_amount'];
    $dep_currency = $_POST['dep_currency'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO $tablename (name, email, phone, courses, institute, targeted_city, visa_status, app_status, address, deposit_paid, offer_received, coe_received, tutionfees_paid, tut_amount, tut_currency, dep_amount, dep_currency)
            VALUES ('$name', '$email', '$phone', '$courses', '$institute', '$targeted_city','$visa_status', '$app_status', '$address', '$deposit_paid', '$offer_received', '$coe_received', '$tutionfees_paid', '$tut_amount', '$tut_currency', '$dep_amount', '$dep_currency')";
        // use exec() because no results are returned
        $conn->exec($sql);
    } catch (PDOException $e) {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        exit(json_encode(array('code' => 1337, "message" => $sql . "<br>" . $e->getMessage())));
    }

    $conn = null;
    exit(json_encode(array("status" => 'success', "message" => 'form is successfully submitted')));
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $tablename = 'studentinfo';
        $statement = $conn->prepare("SELECT * FROM $tablename");
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        exit(json_encode($result));
    } catch (PDOException $e) {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        exit(json_encode(array('code' => 1337, "message" => $sql . "<br>" . $e->getMessage())));
    }

    $conn = null;
    exit(json_encode(array("status" => 'success', "message" => 'form is successfully submitted')));
}
