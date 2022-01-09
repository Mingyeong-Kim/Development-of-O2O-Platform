<?php
    $conn_DB = mysql_connect('13.125.32.59','test','testtest');
    if(!$conn_DB){
        die("MYSQL Error".mysql_error());
    }
?>