<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Member</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      text-align: center;
    }
    main {
      padding: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
      width: 300px;
      margin: 0 auto;
    }
    .row {
      margin-bottom: 10px;
    }
    label {
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"] {
      padding: 5px;
      width: 100%;
      font-size: large;
    }
    button,
    a.button {
      padding: 5px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
      font-size: large;
      text-decoration: none;
    }
    button:hover,
    a.button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <header>
    <h1>Login Member</h1>
  </header>
  <main>
    <form action="validasi.php" method="post">
      <div class="row">
        <label for="input-username">Username</label>
        <input type="text" name="username" id="input-username" autofocus required>
      </div>
      <div class="row">
        <label for="input-password">Password</label>
        <input type="password" name="password" id="input-password" required>
      </div>
      <div class="row">
        <button type="submit">Login</button>
      </div>
    </form>
  </main>
</body>
</html>