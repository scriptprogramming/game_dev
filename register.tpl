<!DOCTYPE html>

<html>
    <head>
        <title>Formular</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="post" action="register_post.php">
                <input type="text" name="user" value="" placeholder="Username" /><br>
                <input type="password" name="pw" value="" placeholder="Password" /><br>
                <select name="note">
                    <option disabled="disabled" selected="selected">Note waehlen</option>
                    <option value="1">sehr gut</option>
                    <option value="2">gut</option>
                    <option value="3">befriedigend</option>
                    <option value="4">ausreichend</option>
                    <option value="5">mangelhaft</option>
                    <option value="6">ungenuegend</option>
                </select><br>
                <input type="submit" value="Absenden" />
            </form>
        </div>
    </body>
</html>
