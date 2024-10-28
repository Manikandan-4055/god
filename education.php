<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize the input data
    $collegeName = htmlspecialchars(trim($_POST['collegename']));
    $degree = htmlspecialchars(trim($_POST['degree']));
    $course = htmlspecialchars(trim($_POST['course']));
    $percentage = htmlspecialchars(trim($_POST['percentage']));

    // +2 details
    $plus2SchoolName = htmlspecialchars(trim($_POST['schoolname']));
    $plus2Group = htmlspecialchars(trim($_POST['group']));
    $plus2PassOutYear = htmlspecialchars(trim($_POST['passoutyear']));
    $plus2Mark = htmlspecialchars(trim($_POST['mark']));

    // 10th details
    $tenthSchoolName = htmlspecialchars(trim($_POST['schoolname']));
    $tenthMark = htmlspecialchars(trim($_POST['mark']));
    $tenthPassOutYear = htmlspecialchars(trim($_POST['passoutyear']));

    // Here you would typically save the data to a database
    // For demonstration, we'll just display the information
    echo "<h2>Education Details Submitted</h2>";
    echo "<h3>College Information</h3>";
    echo "<p><strong>College Name:</strong> $collegeName</p>";
    echo "<p><strong>Degree:</strong> $degree</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Percentage:</strong> $percentage</p>";
    
    echo "<h3>+2 Details</h3>";
    echo "<p><strong>School Name:</strong> $plus2SchoolName</p>";
    echo "<p><strong>Group:</strong> $plus2Group</p>";
    echo "<p><strong>Pass Out Year:</strong> $plus2PassOutYear</p>";
    echo "<p><strong>Mark:</strong> $plus2Mark</p>";

    echo "<h3>10th Details</h3>";
    echo "<p><strong>School Name:</strong> $tenthSchoolName</p>";
    echo "<p><strong>Mark:</strong> $tenthMark</p>";
    echo "<p><strong>Pass Out Year:</strong> $tenthPassOutYear</p>";

    // Include any additional logic for saving to a database if needed
} else {
    echo "Invalid request method.";
}
?>
