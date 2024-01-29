<?php
session_start();
include_once 'DB.php';

$bank = $_POST['banks'];
$brhname = $_POST['brname'];
$brhno = $_POST['brno'];
$accno = $_POST['accno'];
$toa = $_POST['toa'];

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO banks (bank_name, branch_name, branch_no, acc_no, acc_type)
         VALUES ('$bank', '$brhname', '$brhno', '$accno', '$toa')";

// Prepare the statement
$stmt = $connect->prepare($sql);

if ($stmt) {
    // Bind the parameters
    $stmt->bind_param("sssss", $bank, $brhname, $brhno, $accno, $toa);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Signup Successful.";
        header('Location: Claim3.html?CLAIM=success');
        exit;
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $connect->error;
}

$connect->close();
?>