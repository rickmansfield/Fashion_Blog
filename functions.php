<?php include "db.php";?>

<?php
function createRows(){
    global $connection;
if(isset($_POST['submit'])){
    //echo "good job";
    $username = $_POST['username'];
    $password = $_POST['password'];

/*    echo $username . " " . $password;

    if($username && $password){
        echo "Hi " . $username . " Your password" . $password . " is safe";
    } else {
        echo "Who are you and what is your password choice";
    }
*/

/* 
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if($connection){
            echo "We are connected";    
        } else {
            die("Database connection failed");
        }
*/

    $query = "INSERT INTO users(username, password) ";
    $query .="VALUES ('$username', '$password') ";

    $result = mysqli_query($connection, $query,);
    if(!$result) {
        die('Query Failed' . mysqli_error($connection));
    } else {
        echo "Record Created Successfully!";
    }

    } 
}
?>

<?php
function showAllData() {
     global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query,);
    
    if(!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
     }
}
function UpdateTable(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo "Pefect! Your records are updated as of " . date("r");
    }
}

function deleteRows(){ 
   global $connection;
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];
   $query = "DELETE FROM users ";
   $query .= "WHERE id = $id ";
   $result = mysqli_query($connection, $query);
   if(!$result) {
       die("QUERY FAILED" . mysqli_error($connection));
   }
}

?>