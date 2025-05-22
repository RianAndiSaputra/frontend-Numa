<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>SkyBooking</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(135deg, #8B0000, #A0001C);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .mockup-mobile {
      width: 375px;
      height: 100vh;
      background-color: transparent;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .logo-container {
      text-align: center;
      width: 100%;
      padding: 30px;
    }

    .logo {
      width: 100%;
      max-width: 340px;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    @media (max-width: 400px) {
      .mockup-mobile {
        width: 100%;
      }

      .logo {
        max-width: 90%;
      }
    }
  </style>
</head>
<body>
  <div class="mockup-mobile">
    <div class="logo-container">
      <img src="/images/logo-numa.png" alt="SkyBooking Logo" class="logo">
    </div>
  </div>

  <script>
    setTimeout(function() {
      window.location.href = "/login";
    }, 2000);
  </script>
</body>
</html>
