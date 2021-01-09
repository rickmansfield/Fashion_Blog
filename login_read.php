<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
        echo "We are connected";    
    } else {
        die("Database connection failed");
    }

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query,);
    
    if(!$result) {
         die('Query Failed' . mysqli_error($connection));
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
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <pre>
                                <?php
                                    print_r($row);
                                ?>
                            </pre>
                            <?php
                        } 
                            ?>
                </div>
            </div> 
        </body>
</html>