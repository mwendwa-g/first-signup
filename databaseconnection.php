<?php

/*<?php htmlspecialchars($_SERVER["PHP_SELF"]?)> */

    $db_server = ""; /*server name */
    $db_user = "root";
    $db_pass = "";
    $db_name = "personal";
    $conn = "";

    

    /*checking connection validity */

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Sorry! Could not connect. Try again Later";
    }

?>
