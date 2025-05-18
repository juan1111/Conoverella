<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 Not Found</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background: #0d0d0d;
      color: #ffffff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }

    .container {
      max-width: 600px;
    }

    h1 {
      font-size: 6rem;
      color: #ff4c4c;
    }

    p {
      font-size: 1.5rem;
      margin-top: 10px;
      color: #cccccc;
    }

    a {
      display: inline-block;
      margin-top: 30px;
      padding: 10px 20px;
      background-color: #ff4c4c;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }

    a:hover {
      background-color: #e60000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <p>Oops! The page you're looking for doesn't exist.</p>
    <a href="index.php?pages=home">Go Back Home</a>
  </div>
</body>
</html>
