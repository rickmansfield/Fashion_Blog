<?php include "db.php";?>
<?php include "functions.php";?>

<?php
if(isset($_POST['submit'])) {
UpdateTable();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
        <body>
            <div class="container">

                <div class="col-sm-6">
                    <h2>UPDATE DETAILS</h2>
                <form action="login_update.php" method="post">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <select name="id" id="">
                            <?php
                            showAllData();
                            ?>
                            
                        </select>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

                </form>
                </div>
            </div> 
        </body>
</html>