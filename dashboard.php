<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Dashboard - LibFlow</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.auth-container {
    background-color: #ffffff;
    width: 100%;
    max-width: 420px;
    padding: 40px 35px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.auth-form {
    display: none;
}

.auth-form.active {
    display: block;
}

.auth-form h2 {
    color: #2d3748;
    text-align: center;
    font-size: 26px;
    font-weight: 700;
}

.subtitle {
    text-align: center;
    color: #718096;
    font-size: 14px;
    margin-top: 5px;
    margin-bottom: 25px;
}

.input-group {
    margin-bottom: 18px;
}

.input-group label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #4a5568;
    margin-bottom: 6px;
}

.input-group input {
    width: 100%;
    padding: 12px 14px;
    font-size: 14px;
    border: 1px solid #cbd5e0;
    border-radius: 6px;
    outline: none;
    transition: all 0.2s ease-in-out;
}

.input-group input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
}

.submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #667eea;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.2s ease;
    margin-top: 10px;
}

.submit-btn:hover {
    background-color: #5a67d8;
}

.submit-btn.register-btn {
    background-color: #48bb78;
}

.submit-btn.register-btn:hover {
    background-color: #38a169;
}

.switch-text {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #718096;
}

.switch-text a {
    color: #667eea;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease;
}

.switch-text a:hover {
    color: #4c51bf;
    text-decoration: underline;
}
    </style>
</head>
<body>

    <div class="dashboard-card">
        <h1>Welcome <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p>You have Successfully Login to your dashboard.</p>
        <a href="logout.php" class="logout-btn">Log Out</a>
    </div>

</body>
</html>