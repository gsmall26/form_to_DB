<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "root";  // Default username for XAMPP MySQL is 'root'
$password = "";  // Default password is an empty string
$dbname = "mini_application";  // Use your mini_application database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Get the data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Step 3: Insert data into the 'form_information' table
$sql = "INSERT INTO form_information (name, email, message, submission_date) 
        VALUES ('$name', '$email', '$message', NOW())";

// Step 4: Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
