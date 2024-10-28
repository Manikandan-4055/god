<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize the input data
    $presentAddress = htmlspecialchars($_POST['presentaddress']);
    $permanentAddress = htmlspecialchars(trim($_POST['permanentaddress'])); 
    // Removed extra space
    $panNumber = htmlspecialchars($_POST['pannumber']);
    $aadharNumber = htmlspecialchars($_POST['aadharnumber']);
    $fatherName = htmlspecialchars($_POST['fathername']);
    $age = htmlspecialchars($_POST['age']);
    $dateOfBirth = htmlspecialchars($_POST['dateofbirth']);

    // Display the collected data
    echo "<h2>Submitted Personal Details</h2>";
    echo "<p><strong>Present Address:</strong> $presentAddress</p>";
    echo "<p><strong>Permanent Address:</strong> $permanentAddress</p>";
    echo "<p><strong>Pan Number:</strong> $panNumber</p>";
    echo "<p><strong>Aadhar Number:</strong> $aadharNumber</p>";
    echo "<p><strong>Father Name:</strong> $fatherName</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Date of Birth:</strong> $dateOfBirth</p>";
} else {
    echo "No data submitted.";
}
?>
