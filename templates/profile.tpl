
{$Info}
<table id="t2">
    <tr>
        <th>Name</th>
        <th>Bestleistung</th>
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
                        <td>Password: </td><td><input type="password" name="PWord" value="" /></td>
                    </tr>
                    <tr>
                        <td>Neues Password:</td><td> <input type="password" name="PWfirst" value="" /></td>
                    </tr>
                    <tr>
                        <td>Password Wiederholen:</td><td> <input type="password" name="PWsecond" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Password ändern" name="changePW"  id="changePW" title="Neues Passwort speichern"/></td>
                        <td></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
