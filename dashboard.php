
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$username = htmlspecialchars($_SESSION['username'] ?? 'Reader');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibFlow | Library Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard">

   
    <aside class="sidebar">
        <a href="dashboard.php" class="brand">
            <span class="brand-icon">L</span>
            <span>Lib<span class="brand-light">Flow.</span></span>
        </a>

        <p class="menu-label">MAIN MENU</p>

        <nav class="navigation">
            <a href="dashboard.php" class="nav-link active">
                <span>▦</span> Dashboard
            </a>
            <a href="#books" class="nav-link">
                <span>▤</span> Browse Books
            </a>
            <a href="#borrowings" class="nav-link">
                <span>↗</span> My Borrowings
            </a>
            <a href="#activity" class="nav-link">
                <span>◷</span> Borrowing History
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="quote-card">
                <span class="quote-icon">❝</span>
                <p>A room without books is like a body without a soul.</p>
                <small>— Cicero</small>
            </div>

            <a href="logout.php" class="nav-link logout">
                <span>⇥</span> Log Out
            </a>
        </div>
    </aside>

 
    <main class="main-content">

        <header class="topbar">
            <div class="page-heading">
                <p class="eyebrow">YOUR PERSONAL LIBRARY</p>
                <h1>Dashboard <span class="heading-dot">.</span></h1>
            </div>

            <div class="profile">
                <div class="profile-avatar">
                    <?= strtoupper(substr($username, 0, 1)) ?>
                </div>
                <div class="profile-info">
                    <strong><?= $username ?></strong>
                    <span>Library Member</span>
                </div>
            </div>
        </header>

       
        <section class="welcome-banner">
            <div class="welcome-text">
                <span class="welcome-tag">A LITTLE ESCAPE THROUGH BOOKS</span>
                <h2>Welcome back, <?= $username ?>! ☕</h2>
               
                <a href="#books" class="primary-btn">Explore Books <span>→</span></a>
            </div>

           
        
        