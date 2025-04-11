<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="http://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/remixicon@4.1.0/fonts/remixicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
            font-family: "Poppins", sans-serif;
        }

        :root {
            --bg-color: #ffffff;
            --text-color: #000000;
            --main-color: #f0f0f0;
            --other-color: #ffc633;
            --second-color: #616060;

            --h1-font: 5.5rem;
            --h2-font: 3.5rem;
            --p-font: 1rem;
        }

        body {
            min-height: 100vh;
            background-color: var(--bg-color);
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            background: var(--bg-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .logo {
            font-size: 20px;
            color: var(--text-color);
            transition: transform 0.5s;
        }

        .logo:hover {
            color: #263f37c5;
            transform: translateY(-5px);
        }

        .navbar a {
            font-size: 20px;
            margin-right: 15px;
            color: var(--text-color);
            transition: transform 0.5s;
        }

        .navbar a:hover {
            color: #263f37c5;
            transform: translateY(-5px);
        }

        .social-icons a {
            font-size: 20px;
            margin-right: 15px;
            color: var(--text-color);
            transition: transform 0.5s;
        }

        .social-icons a:hover {
            color: #263f37c5;
            transform: translateY(-5px);
        }

        .menu-toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .header {
                padding: 5px 10px 1px;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                font-size: 18px;
            }

            .menu-toggle {
                display: block;
                font-size: 24px;
                cursor: pointer;
                color: var(--text-color);
            }

            .navbar {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: var(--bg-color);
                margin-top: 10px;
            }

            .navbar a {
                font-size: 16px;
                margin: 5px 0;
                padding: 10px;
            }

            .social-icons {
                display: none;
                flex-direction: row;
                margin-top: 10px;
                width: 100%;
            }

            .social-icons a {
                font-size: 18px;
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/home" class="logo">Motor Market</a>
        <i class="fa-solid fa-bars menu-toggle" onclick="toggleMenu()"></i>
        <nav class="navbar">
            <a href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/home">Home</a>
            <a href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/cars">Car Listing</a>
            <a href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/home#about">About us</a>
            <a href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/home#contact">Contact</a>
        </nav>
        <div class="social-icons">
            <a href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/motormarket/login">
                <i class="fa-solid fa-user"></i> LogIn
            </a>
        </div>
    </header>

    <script>
        function toggleMenu() {
            const navbar = document.querySelector('.navbar');
            const socialIcons = document.querySelector('.social-icons');
            const isVisible = navbar.style.display === 'flex';

            navbar.style.display = isVisible ? 'none' : 'flex';
            socialIcons.style.display = isVisible ? 'none' : 'flex';
        }
    </script>
</body>
</html>
