
    <html>

    <head>
        <meta charset="UTF-8" viewport="width=device-width, initial-scale=1">
        <title>
            User Login Page
        </title>
        <link rel="stylesheet" href="userlogin.css">
    </head>

    <body>
        <center>
            <div class="up">
                <h1>Login Page</h1>
                <fieldset>
                    <form action="login.php" method="POST">
                        <table>
                            <tr>
                                <th>
                                    <label for="username">User Name</label>
                                </th>
                                <td>
                                    <input type="text" name="uname" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="password">Password</label>
                                </th>
                                <td>
                                    <input type="password" name="pd" required>
                                </td>
                            </tr>
                        </table>
                        <button type="submit">Login</button>
                        <a href="registerForm.php">Create a New Account</a>
                    </form>
                </fieldset>
            </div>
        </center>

    </body>

    </html>