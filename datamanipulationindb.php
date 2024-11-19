<?php
    include("databaseconnection.php");

    /*inserting data to a php table 

    $email = "testemail3@gmail.com";
    $username = "testor3";
    $password = "password3";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO first (email, username, password) VALUES ('$email', '$username', '$hash')";

    try{
        mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception){
        echo"could not register you";
    }
        */

    /*retrieving a single row of data
    $sql = "SELECT * FROM first WHERE password = 'password2'";
    $result = mysqli_query($conn, $sql);

 
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["username"] . "<br>";
        echo $row["email"] . "<br>";
        echo $row["time"] . "<br>";
    }
    else{
        echo"That user does not exist!";
    } */

    $sql = "SELECT * FROM first";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["username"] . "<br>";
            echo $row["email"] . "<br>";
            echo $row["time"] . "<br>";
            echo $row["password"] . "<br>";
        };
        
    }
    else{
        echo"That user does not exist!";
    }     


    mysqli_close($conn);
?>

