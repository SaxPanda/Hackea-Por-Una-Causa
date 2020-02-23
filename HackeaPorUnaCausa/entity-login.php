<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="styles/login-style.css">
    </head>
    <body>
        <div>
            <form action="includes/entity-signin.inc.php" method="post">
                <div class="input-group">
                    <h2>Welcome</h2>
                    <br>
                    <input class="input-group" type="text" name="ent_email" placeholder="Email">
                    <br>
                    <input class="input-group" type="password" name="ent_password" placeholder="Password">
                    <br>
                    <button class="btn" type="submit" name="submit">Log in</button>
                    <div>
                      <br>
                      <p>Not registered yet? <a href="entity-register.php">Sign up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
