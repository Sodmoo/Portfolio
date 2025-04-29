<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* styles яг таныхтай ижил байна */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            height: 100vh;
            background: #171f2b;
            font-family: 'Outfit', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .auth-box {
            background: #fff;
            border-radius: 20px;
            padding: 50px 40px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: #333;
            animation: slideIn 1s ease;
        }
        @keyframes slideIn {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .auth-box h2 {
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 32px;
        }
        .input-group { position: relative; margin-bottom: 20px; }
        .input-group input, .input-group select {
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.05);
            border: none;
            border-radius: 10px;
            color: #333;
            font-size: 16px;
            outline: none;
        }
        .input-group label {
            position: absolute;
            top: 50%;
            left: 15px;
            color: #aaa;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: 0.3s;
        }
        .input-group input:focus + label,
        .input-group input:valid + label,
        .input-group select:focus + label,
        .input-group select:valid + label {
            top: -8px;
            left: 10px;
            font-size: 12px;
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 6px;
            border-radius: 5px;
            color: #00ffe5;
        }
        .auth-box button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #00ffe5, #00b3ff);
            color: #1d1d1d;
            font-weight: bold;
            font-size: 18px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 0 15px #00ffe5;
            margin-top: 25px;
        }
        .auth-box button:hover {
            background: linear-gradient(135deg, #00b3ff, #00ffe5);
            box-shadow: 0 0 20px #00b3ff, 0 0 30px #00ffe5;
        }
        .links {
            margin-top: 20px;
            font-size: 14px;
        }
        .links a {
            color: #4010c3;
            text-decoration: none;
            font-size: 20px;
        }
        .links a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
            font-size: 15px;
        }
        .custom-select select {
            appearance: none;
            background: rgba(0, 0, 0, 0.05) url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gray"><polygon points="0,0 20,0 10,10"/></svg>') no-repeat right 15px center;
            background-size: 12px;
            padding-right: 40px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="auth-box">
        <h2>Login</h2>

        <?php if (!empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="input-group">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>

            <div class="input-group">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>


            <button type="submit">Login</button>
        </form>

        <div class="links">
            <a href="index.php">Go Back</a>
        </div>
    </div>

</body>
</html>