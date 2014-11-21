<?php
    //include db configuration file
    include_once("config.php");
    $email = $_POST['email'];
    echo $_POST['emailtext'];
    echo "$email";
    // Insert sanitize string in record
    $insert_row = $mysqli->query("INSERT INTO manitoEmail(email) values('".$_POST['email']."')");

    if($insert_row)
    {
         //Record was successfully inserted, respond result back to index page
          $my_id = $mysqli->insert_id; //Get ID of last inserted row from MySQL
          $mysqli->close(); //close db connection

    }else{

        //header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
        header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
        exit();
    }
?>