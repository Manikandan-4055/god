<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    // Collect and sanitize the input data
    $companyName = htmlspecialchars(trim($_POST['companyname']));
    $companyAddress = htmlspecialchars(trim($_POST['companyaddress']));
    $totalExperiences = htmlspecialchars(trim($_POST['totalexperiences']));
    $role = htmlspecialchars(trim($_POST['role']));

    // Here you would typically save the data to a database
    // For demonstration, we'll just display the information
    echo "<h2>Experience Details Submitted</h2>";
    echo "<p><strong>Company Name:</strong> $companyName</p>";
    echo "<p><strong>Company Address:</strong> $companyAddress</p>";
    echo "<p><strong>Total Experiences:</strong> $totalExperiences</p>";
    echo "<p><strong>Role:</strong> $role</p>";
    
    // Include any additional logic for saving to a database if needed
} else {
    echo "Invalid request method.";
}
?>
