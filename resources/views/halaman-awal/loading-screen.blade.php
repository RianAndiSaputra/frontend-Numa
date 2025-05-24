<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading - SkyBooking</title>
    <style>
        :root {
            --primary-color: #ffffff;
            --secondary-color: #A0001C;
            --accent-color: #FF6B6B;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
            --white: #aa0000;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: var(--bg-light);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loading-container {
            width: 100%;
            max-width: 500px;
            height: 100vh;
            background: var(--white);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
        }

        .logo-container {
            margin-bottom: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-main img {
            width: 260px; /* Besarkan ukuran logo */
            height: auto;
            display: block;
        }

        .loading-animation {
            display: none; /* Hilangkan lingkaran animasi */
        }

        .loading-text {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-color);
            margin-top: 20px;
        }

        .loading-dots {
            display: inline-flex;
            margin-top: 10px;
        }

        .dot {
            width: 8px;
            height: 8px;
            background: var(--primary-color);
            border-radius: 50%;
            margin: 0 4px;
            opacity: 0.3;
        }

        .dot:nth-child(1) {
            animation: pulse 1.5s infinite;
        }
        .dot:nth-child(2) {
            animation: pulse 1.5s infinite 0.3s;
        }
        .dot:nth-child(3) {
            animation: pulse 1.5s infinite 0.6s;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.3; transform: scale(0.8); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        .progress-bar {
            width: 200px;
            height: 4px;
            background: var(--bg-light);
            border-radius: 2px;
            margin-top: 30px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
            animation: progress 2.5s ease-in-out forwards;
        }

        @keyframes progress {
            0% { width: 0%; }
            100% { width: 100%; }
        }

        @media (max-width: 500px) {
            .loading-container {
                padding: 15px;
            }

            .logo-main img {
                width: 100px;
            }

            .loading-text {
                font-size: 16px;
            }
        }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="loading-container">
        <div class="logo-container">
            <div class="logo-main">
                <img src="images/logo-numa.png" alt="Logo">
            </div>
        </div>
        <div class="loading-text">Memuat Aplikasi</div>
        <div class="loading-dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>
    </div>

    <script>
        lucide.createIcons();
        setTimeout(function () {
            window.location.href = '/login';
        }, 2500);
    </script>
</body>
</html>
