<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in to booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Konrad Fijałkowski">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
    <h1>Log in</h1>
    <form action="handleLogin.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Next</button>
    </body>
</html>