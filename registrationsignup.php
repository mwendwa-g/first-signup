<?php
    include("databaseconnection.php");
?>


<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo"username is empty";
        }
        elseif(empty($password)){
            echo"password is empty";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO tableone (username, password) VALUES ('$username', '$hash')";

            try{
                mysqli_query($conn, $sql);
                echo"you are now registered";
            }
            catch(mysqli_sql_exception){
                echo"That username is taken";
            }
        }
    }


    mysqli_close($conn);
?>
