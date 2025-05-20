<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = hash('sha256', $_POST['password']); // Hashing for comparison

    $stmt = $conn->prepare("SELECT id, username, role FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Invalid username or password.'); window.location.href='index.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

