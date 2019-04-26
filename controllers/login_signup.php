<?php
include('connection.php');
include('session.php');

//check for login
if($_POST['action'] == 'signup'){

    //required variables
    $f_name = test_input($_POST["fname"]);
    $l_name = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $country = test_input($_POST["country"]);
    $password = md5($_POST["pass"]);

    $sql = "SELECT * FROM users Where `email`='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // check avaliaaability of email
        echo "Choosen email already taken";
         
    }else{
        
        $sql = "INSERT INTO users (`first_name`, `last_name`, `email`, `password`,`country`)
        VALUES ('$f_name','$l_name','$email','$password','$country')";

        if ($conn->query($sql) === TRUE) {
            // // Start the session
            // session_start();

            // Set session variables
            $_SESSION["username"] =$email;

            $_SESSION["firstname"] =$f_name;

            echo "ok";

        }else {

            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        
    }

}




if($_POST['action'] == 'login'){

     $email = test_input($_POST["email"]);
      $password = md5($_POST["pass"]);

    $sql = "SELECT * FROM users Where `email`='$email' and `password`='$password' ";
    $result = $conn->query($sql);
   // $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        
        $_SESSION["username"] =$email;

        $row = $result->fetch_assoc() ;
        $_SESSION["firstname"] = $row["first_name"];
    
      echo 'ok';
    }else{

        echo "Incorect Username or Password";
    }

}
//for validation purpose
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>