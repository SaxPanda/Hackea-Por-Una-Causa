<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/index-style.css">
        <title>Home</title>
    </head>
    <body>
        <div id="head">
          <p>There should be a name here</p>
            <a href="choose-login.php"><button>Log in</button></a>
            <a href="choose-register.php"><button>Sign up</button></a>
        </div>

        <div id="donatechild">
          <p>Donate to a Non-Profit Organization:</p>
        </div>

        <div id="index-container">
          <div id="table-header">
            Registered Entities
            <!-- <hr> -->
          </div>

          <!-- TABLA  -->
          <table class="table-body">
          <div>
            <!-- Output organizations data into table -->
            <?php include_once 'includes/entity-table.inc.php'; ?>
          </div>
            <tr>
              <div>
              <td colspan="1" class="org-desc"></td>

              <td colspan="2"></td>
              </div>
            </tr>
            <tr>
              <div>
              <td colspan="1" class="org-desc"> </td>

              <td colspan="2"> </td>
              </div>
            </tr>
          </table>

        </div>
    </body>
</html>
