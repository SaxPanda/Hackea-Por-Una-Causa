<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="styles/login-style.css">
    </head>
    <body>
        <div>
            <form action="includes/entity-register.inc.php" method="post">
                <div class="input-group">
                    <h2>Register an entity: </h2>
                    <br>
                    <!-- Organization name -->
                    <input class="input-group" type="text" name="ent-name" placeholder="Entity Name">
                    <br>
                    <!-- Organization description -->
                    <input class="input-group" type="text" name="ent-description" placeholder="Description">
                    <br>
                    <!-- Organization webpage -->
                    <input class="input-group" type="text" name="ent-webpage" placeholder="Website">
                    <br>
                    <!-- Organization phone -->
                    <input class="input-group" type="text" name="ent-phone" placeholder="Phone">
                    <br>
                    <!-- Organization email -->
                    <input class="input-group" type="text" name="ent-email" placeholder="Email">
                    <br>
                    <!-- Organization password -->
                    <input class="input-group" type="password" name="ent-passwd" placeholder="Password">
                    <br>
                    <!-- Register organization -->
                    <button class="btn" type="submit" name="submit">Register</button>
                    <div>
                      <br>
                      <p>Already a member? <a href="entity-login.php">Log in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
