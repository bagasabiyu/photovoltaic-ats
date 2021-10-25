<?php
include('connection.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$voltats = $_GET["voltats"];
$currentats = $_GET["currentats"];
$powerats = $_GET["powerats"];
$energypln = $_GET["energypln"];
$tarif = $_GET["tarif"];
$voltpln = $_GET["voltpln"];
$currentpln = $_GET["currentpln"];
$powerpln = $_GET["powerpln"];
$tegangandc1 = $_GET["tegangandc1"];
$tegangandc2 = $_GET["tegangandc2"];
$currentdc = $_GET["currentdc"];

$sql = "INSERT INTO data (voltats, currentats, powerats, energypln, tarif, voltpln, currentpln, powerpln, tegangandc1, tegangandc2, currentdc) VALUES ('".$voltats."','".$currentats."','".$powerats."','".$energypln."','".$tarif."','".$voltpln."','".$currentpln."','".$powerpln."','".$tegangandc1."','".$tegangandc2."','".$currentdc."');";

if ($conn->query($sql) === TRUE) {
    echo "Temperature Saved Successfully!";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}


$conn->close();
?>