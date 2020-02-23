<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/entityL-style.css">
        <title>Welcome</title>
    </head>
    <body>
        <div id="head">
            <p>Welcome</p>


            <a href="index.php"><button>Logout</button></a>
        </div>
        <hr>


        <div id="index-container">
          <div id="table-header" align="center">
            <div class="tabs"><a href="entity-logged.php">Donations</a></div>
            <div class="tabs"><a href="entity-logged-comm.php">Communication</a></div>
            <div class="tabs"><a href="entity-logged-posts.php">Posts</a></div>

          </div>

          <!-- TABLA  -->
          <table class="table-body">
            <div>
              <!-- Output organizations data into table -->
              <?php include_once 'includes/donation-table.inc.php'; ?>
            </div>
          </table>

        </div>
    </body>
</html>
