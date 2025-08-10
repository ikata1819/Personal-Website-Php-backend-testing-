<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Prepare statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            // Password correct — create session
            $_SESSION['user_id'] = $id;
            header("Location: index.php");
            exit;
        } else {
            // Wrong password
            echo "Incorrect password.";
        }
    } else {
        // User not found
        echo "User not found.";
    }
    $stmt->close();
}
$conn->close();
?>
