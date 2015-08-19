<!Doctype html>

<html>

    <head>
        <title>Das Quiz-Index</title>
        <link rel="stylesheet" href="./styles/generalStyle.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        {$Info}
        <table id="t1">
            <tr>
                <th>Login</th>
                <th>Registrieren</th>
            </tr>
            <tr>
                <td>   
                    <form id="login" method="post" action="./login_post.php">
                        <table>

                            <tr>
                                <td>Name:</td> 
                                <td><input type="text" name="logName" value="" size="20" /></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="logPW" value="" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Login" name="login" id="subLogin" /></td>
                            </tr>
                        </table>
                    </form>
                </td>
                <td>
                    <form id="register" method="post" action="./register_post.php">
                        <table>
                            <tr>
                                <td>Name:</td> 
                                <td><input type="text" name="regName" value="" /></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td> <input type="password" name="regPWfirst" value="" /> </td>
                            </tr>
                            <tr>
                                <td>Repeat Password:</td>
                                <td> <input type="password" name="regPWsecond" value="" /> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Registrieren" name="reglogin" id="regLogin" /></td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
        <div id="label">
            Willkommen zu unserem Quiz!<br>
            Wenn du zum ersten mal hier bist musst du dich registrieren!<br>
            Wähle dazu einen Nickname und ein Password, gib sie im Formular auf der rechten Seite ein,<br>
            und klicke danach auf [Registrieren]!<br>
            Danach kannst du dich sofort mit deinem Nicknamen und Password auf der linken Seite einloggen!
        </div>
    </body>
</html>

