<?php
header('Content-Type: text/plain');

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$id = $_POST['id'];
$department = $_POST['department'];
$batch = $_POST['batch'];
$exam_type = $_POST['exam_type'];
$course_name = $_POST['course_name'];
$course_code = $_POST['course_code'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO registrations (name, student_id, department, batch, exam_type, course_name, course_code, email, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $name, $id, $department, $batch, $exam_type, $course_name, $course_code, $email, $phone);

// Execute SQL statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
