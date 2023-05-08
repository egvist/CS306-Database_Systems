<?php 

include "config.php"; 

if (!empty($_POST['username'])&&!empty($_POST['password'])){ 
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    $sql_statement = "INSERT INTO users(U_name, u_password) VALUES ('$username','$password')"; 
    $result = mysqli_query($db, $sql_statement);
    include "index.php";
} 
else 
{

    include "signup_page.php";
   
}

?>
