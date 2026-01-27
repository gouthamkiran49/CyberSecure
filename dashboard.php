<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['email'];
$username = explode('@', $email)[0];


// You can change this per page / per module later
$terminalCommand = "access --granted";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CyberSECURE | Dashboard</title>

    <!-- Fonts (same as index.html) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=JetBrains+Mono:wght@400;700&family=Manrope:wght@200..800&family=Archivo:wght@400..900&family=IBM+Plex+Mono:wght@400;600&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- CRT Scanline -->
<div class="scanline"></div>

<!-- NAVBAR -->
<nav class="navbar">
    <a href="index.html" class="logo">Cyber<span class="highlight">SECURE</span></a>
    <ul class="nav-links">
        <li><a href="#curriculum">Modules</a></li>
        <li><a href="logout.php" class="btn-nav">LOGOUT</a></li>
    </ul>
</nav>

<!-- DASHBOARD HERO -->
<section class="hero">
    <div class="auth-wrapper">
    <div class="dashboard-container">
        <div class="terminal-window">

                <!-- TERMINAL HEADER -->
                <div class="terminal-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>

                    <span class="terminal-title">
                        <?php echo htmlspecialchars($_SESSION['email']); ?>@cybersecure:~/dashboard
                    </span>
                </div>

                <!-- TERMINAL BODY -->
                <div class="terminal-body">

                    <p class="prompt-line">
                        <span class="user">
                            <?php echo htmlspecialchars($username); ?>
                        </span>
                        <span class="path">@node</span>:~$
                        <?php echo htmlspecialchars($terminalCommand); ?>
                    </p>

                    <h1 class="glitch">ACCESS GRANTED</h1>

                    <p class="typewriter">
                        Welcome to the CyberSECURE learning console.
                    </p>

                    <p class="system-status">
                        System Status:
                        <span class="status-ok">AUTHENTICATED</span>
                    </p>

                </div>

            </div>
            <!-- END TERMINAL WINDOW -->

        </div>
    </div>
</section>

<!-- DASHBOARD CONTENT -->
<section class="section-dark">
    <div class="container">

       <section id="curriculum"> <h2 class="section-title">YOUR <span class="highlight">MODULES</span></h2>
        <p class="section-desc">Continue your investigation. Progress is saved automatically.</p>

        <div class="grid-cards">

            <div class="card">
                <h3>Module 01</h3>
                <p>Foundations of Cybersecurity & Digital Forensics</p>
                <br>
                <span class="status-ok">STATUS: UNLOCKED</span>
            </div>

            <div class="card">
                <h3>Module 02</h3>
                <p>Offensive Security Awareness</p>
                <br>
                <span class="text-muted">STATUS: LOCKED</span>
            </div>

            <div class="card">
                <h3>Module 03</h3>
                <p>Defensive Security & Protection</p>
                <br>
                <span class="text-muted">STATUS: LOCKED</span>
            </div>

        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container center-text">
        <p class="footer-note">
            Secure session established · CyberSECURE Dashboard
        </p>
    </div>
</footer>

</body>
</html>