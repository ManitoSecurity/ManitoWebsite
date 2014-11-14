<?php
    //include db configuration file
    include_once("config.php");

    // Insert sanitize string in record
    $insert_row = $mysql->query("INSERT INTO manitoEmail(email) values('email')");
    alert($insert_row);

    if($insert_row)
    {
         //Record was successfully inserted, respond result back to index page
          $my_id = $mysqli->insert_id; //Get ID of last inserted row from MySQL
          echo '<li id="item_'.$my_id.'">';
          echo '<div class="del_wrapper"><a href="#" class="del_button" id="del-'.$my_id.'">';
          echo '<img src="images/icon_del.gif" border="0" />';
          echo '</a></div>';
          echo $contentToSave.'</li>';
          $mysqli->close(); //close db connection

    }else{

        //header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
        header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
        exit();
    }
?>