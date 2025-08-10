<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Basic validation (you can add more)
    if (empty($name) || empty($username) || empty($email) || empty($password)) {
        echo "Please fill all fields.";
        exit;
    }

    // Check if username or email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Username or email already taken.";
        $stmt->close();
        exit;
    }
    $stmt->close();

    // Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        // Registration success — auto login
        $_SESSION['user_id'] = $stmt->insert_id;
        header("Location: index.php");
        exit;
    } else {
        echo "Registration failed. Please try again.";
    }
    $stmt->close();
}
$conn->close();
?>
