<?php
include "config.php"; // Makes mysql connection
$username = isset($_POST['u_name']) ? $_POST['u_name'] : '';
$password = isset($_POST['u_password']) ? $_POST['u_password'] : '';

if($username=="admin"&&$password == "1")
{
    include "admin.php";

}
else if($username == "" || $password=="")
{
    include "index.php";
}
else
{
    $sql_statement = "SELECT * FROM Users WHERE U_name ='$username' AND u_password ='$password'";
    $result = mysqli_query($db, $sql_statement);
    $row = mysqli_fetch_assoc($result);
    if($row!='')
    {
        include "welcome.php";
        
    }
    else
    {
        include "index.php";
    }
}
?>