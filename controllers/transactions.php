<?php
include('connection.php');
include('session.php');

if(!isset($username)){

    echo "Login to make transactions with CashexchangePro";
}
else if(isset($username) && $_POST["action"] == "b_b"){

        $password = md5($_POST["pwd"]);

        $sql = "SELECT * FROM users Where `email`='$username' and `password`='$password'";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // Set session variables
            $_SESSION["amt"] = $_POST["amt"];
            $_SESSION["add"] = $_POST["ad"];

            echo 1;
         
    }
    else{
        echo "Incorrect password, transactions cannot be completed";
    }
}

else if(isset($username) && $_POST["action"] == "s_s"){

        $password = md5($_POST["pwd"]);

        $sql = "SELECT * FROM users Where `email`='$username' and `password`='$password'";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // Set session variables
            $_SESSION["amt"] = $_POST["amt"];
            $_SESSION["add"] = $_POST["ad"];

            echo 1;
         
    }
    else{
        echo "Incorrect password, transactions cannot be completed";
    }
}

?>	