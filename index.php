<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        /* Navbar */
        .navbar {
            width: 100%;
            height: 70px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.15);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #667eea;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #667eea;
        }

        .login-btn {
            background: #667eea;
            color: white !important;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .login-btn:hover {
            background: #5568d9;
        }

        /* Home Content */
        .home {
            min-height: calc(100vh - 70px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home-box {
            background: white;
            padding: 55px 75px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            font-size: 42px;
            margin-bottom: 12px;
        }

        p {
            color: #666;
            font-size: 20px;
        }

        /* Mobile */
        @media (max-width: 700px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 14px;
            }

            .home-box {
                margin: 20px;
                padding: 40px 25px;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">

        <div class="logo">
            My Website
        </div>

        <ul class="nav-links">
            <li>
                <a href="index.php">Home</a>
            </li>

            <li>
                <a href="logout.php" class="login-btn">Logout</a>
            </li>
        </ul>

    </nav>

    <!-- Home Page -->
    <section class="home">

        <div class="home-box">
            <h1>Hi, Hello World 👋</h1>
            <p>Welcome to Home Page</p>
        </div>

    </section>

</body>
</html>