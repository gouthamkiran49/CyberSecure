<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initiate Protocol | CyberSecure</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=JetBrains+Mono:wght@400;700&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css"> 

    <!-- Page-specific styles -->
    <style>
        .auth-wrapper {
            min-height: calc(100vh - 80px); /* navbar height */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .form-group { margin-bottom: 20px; }

        .form-input { 
            width: 100%;
            padding: 15px;
            background: #000;
            border: 1px solid #333; 
            color: var(--primary);
            font-family: 'JetBrains Mono', monospace;
            outline: none;
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 10px rgba(0,255,65,0.2);
        }

        .auth-links {
            margin-top: 20px;
            text-align: center;
            font-family: 'Manrope';
            font-size: 0.9rem;
        }

        .auth-links a {
            color: var(--text-muted);
            text-decoration: underline;
        }

        .auth-links a:hover {
            color: var(--accent);
        }
    </style>
</head>

<body>

<!-- CRT Scanline -->
<div class="scanline"></div>

<!-- NAVBAR -->
<nav class="navbar">
    <a href="index.html" class="logo">
        Cyber<span class="highlight">SECURE</span>
    </a>
</nav>

<!-- CENTERED SIGNUP AREA -->
<div class="auth-wrapper">
    <div class="auth-container">

        <div class="terminal-window">
            <div class="terminal-header">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
                <span class="terminal-title">hex@cybersecure:~/register</span>
            </div>

            <div class="terminal-body">
                <p class="prompt-line">
                    <span class="user">hexvoid@node</span>:<span class="path">~</span>$ ./create_identity.sh
                </p>

                <h2 style="color:#fff; font-family:'Manrope'; margin-bottom:20px;">
                    SIGN UP
                </h2>

                <form action="register_logic.php" method="POST">
                    <div class="form-group">
                        <label class="prompt-line" style="display:block; margin-bottom:5px;">
                            Email
                        </label>
                        <input type="email" name="email" class="form-input" placeholder="user@domain.com" required>
                    </div>

                    <div class="form-group">
                        <label class="prompt-line" style="display:block; margin-bottom:5px;">
                            Password
                        </label>
                        <input type="password" name="password" class="form-input" placeholder="********" required>
                    </div>

                    <button type="submit" class="btn-primary" style="width:100%;">
                        REGISTER
                    </button>
                </form>

                <div class="auth-links">
                    <p>
                        <a href="login.php">Already have credentials?</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>