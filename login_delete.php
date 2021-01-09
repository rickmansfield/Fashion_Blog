<?php include "db.php";?>
<?php include "functions.php";?>

<?php
if(isset($_POST['submit'])) {
deleteRows();
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
                    <h1 class="text-center">Delete Records</h1>
                    <h3 class="text-center">Warning deletion is PERMANENT</h3>
                <form action="login_delete.php" method="post">

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

                    <input class="btn btn-primary" type="submit" name="submit" value="DELETE">

                </form>
                </div>
            </div> 
        </body>
</html>