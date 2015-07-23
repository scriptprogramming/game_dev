<!Doctype html>

<html>

    <head>
        <title>Das Quiz-Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table>
            <td>   
                <form id="login" method="post" action="./scripts/login_post.php">
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
                <form id="register" method="post" action="./scripts/register_post.php">
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
                            <td><input type="submit" value="Register" name="reglogin" id="regLogin" /></td>
                        </tr>
                    </table>
                </form>
            </td>
        </table>
    </body>
</html>

