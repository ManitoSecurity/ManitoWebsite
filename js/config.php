<?php
    //Variables for connecting to your database.
    //These variable values come from your hosting account.
    $hostname = "manitodatabase.db.11597876.hostedresource.com";
    $username = "manitodatabase";
    $dbname   = "manitodatabase";

    //These variable values need to be changed by you before deploying
    $password = "PatrickNowacki1!";
    $usertable = "manitoEmail";
    $yourfield = "email";

    //Connecting to your database
    mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");

?>