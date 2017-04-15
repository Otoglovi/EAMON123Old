<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14-Apr-17
 * Time: 01:33 AM
 */
include("dbConnect.php"); //Establishing connection with database

print " dbhost - " . $connectstr_dbhost . "<br>";
print " dbname- " . $connectstr_dbname . "<br>";
print " dbusername- " . $connectstr_dbusername . "<br>";
print " dbpassword- " . $connectstr_dbpassword . "<br>";

//check if the username and password have values
/*if (empty($_POST["username"]))
{
    echo "No username entered";
}elseif (empty($_POST["password"]))
{
    echo "No password entered";
}else*/
if (empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required";
}else {
    //assign local variables to the parameters passed in via the POST
    $username = $_POST['username'];
    $password = $_POST['password'];


//create an SQL statement ( a query) that selects the uid of a
// user who has the username and password entered
    $sql = "SELECT uid FROM users WHERE username = '$username' AND
password = '$password'";

//set up a variable, "result", to hold the result of the query
    $result = mysqli_query($db, $sql);

//check how big the result is; i.e. no viable user found or more than
//one user found
    if (mysqli_num_rows($result) == 1) {
        header("location: home.php"); //Redirect to another page
    } else {
        echo "Incorrect username or password";
    }
}

$result ->close();
$db ->close();

?>