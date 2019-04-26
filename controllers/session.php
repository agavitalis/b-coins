<?php
session_start();    
    // Set session variables
    @$username = $_SESSION["username"] ;
    @$firstname = $_SESSION["firstname"] ;


    //for the bitcoins kene
    @$buy_amount = $_SESSION["amt"] ;
    @$buy_address = $_SESSION["add"];

?>