<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      list-style: none;
      border: none;
      outline: none;
      font-family: "Poppins", sans-serif;
    }

    :root {
      --nav_back_color: rgba(255, 225, 255, 0.1);
      --bg_color: #171f2b;
      --second_bg: #1f2733;
      --third_bg: #2d3542;
      --main_color: rgba(24, 244, 252, 0.952);
      --main_color2: rgb(250, 215, 20);
      --main_color3: #8804ff;
      --main_color4: #f19a3e;
      --main_color5: #3af2af;
      --nav_color: rgb(40, 250, 21);
      --white_color: #fff;
      --tab_list_color: #7c8594;
      --resume_color: #b3efff;
      --crsl-bg: transparent;
      --box-bg: #1e272e;
      --box-shadow: #0000001c;
      --box-shadow-border: #0000000f;
      --box-border: #fff;
    }

    body {
      height: 100vh;
      background: var(--bg_color);
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
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .auth-box h2 {
      margin-bottom: 25px;
      font-weight: 700;
      font-size: 32px;
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group input,
    .input-group textarea {
      width: 100%;
      padding: 15px;
      background: rgba(0, 0, 0, 0.05);
      border: none;
      border-radius: 10px;
      color: #333;
      font-size: 16px;
      outline: none;
      resize: none;
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

    .input-group input:focus+label,
    .input-group input:valid+label,
    .input-group textarea:focus+label,
    .input-group textarea:valid+label {
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
      color: #00ffe5;
      text-decoration: none;
    }

    .links a:hover {
      text-decoration: underline;
    }

    .success-message {
      color: green;
      margin-bottom: 15px;
      font-size: 15px;
    }
  </style>
</head>

<body>

  <div class="auth-box">
    <h2>Contact Me</h2>

    <?php if (!empty($success)): ?>
      <div class="success-message"><?php echo $success; ?></div>
    <?php endif; ?>

    <form action="" method="POST">
      <div class="input-group">
        <input type="text" name="name" required>
        <label>Your Name</label>
      </div>

      <div class="input-group">
        <input type="email" name="email" required>
        <label>Your Email</label>
      </div>

      <div class="input-group">
        <textarea name="message" rows="5" required></textarea>
        <label>Your Message</label>
      </div>

      <button type="submit">Send Message</button>
    </form>

    <div class="links">
      <a href="index.php"><i class="fas fa-home"></i> Back to Home</a>
    </div>
  </div>

</body>

</html>