<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/generalStyle.css">
        <title>Profil</title>
    </head>
    <body>
        {$Info}
        <table id="t2">
            <tr>
                <th>Name</th>
                <th>Punkte</th>
                <th>Password ändern</th>
            </tr>
            <tr>
                <td>
                    {$name}
                </td>
                <td>
                    {$punkte}
                </td>
                <td>
                    <form method="post" name="changePW" action="./changePW.php">
                        <table>
                            <tr>
                                <td>Password: </td><td><input type="password" name="PWold" value="" /></td>
                            </tr>
                            <tr>
                                <td>Neues Password:</td><td> <input type="password" name="PWfirst" value="" /></td>
                            </tr>
                            <tr>
                                <td>Password Wiederholen:</td><td> <input type="password" name="PWsecond" value="" /></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Password Ändern" name="changePW"  id="changePW"/></td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>


