<?php
 $usernam=filter_input(INPUT_POST,"username");
 $password=filter_input(INPUT_POST,"password");
 if(!empty($usernam)){
if(!empty($password)){
$host = "localhost";
$dbusername ="root";
$dbpassword = "yes";
$dbname = "test3";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error()){
    die('Coonect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
    $sql = "INSERT INTO users (name,password) values('$username','$password')";
    if ($conn->query($sql)){
        echo "New record is inserted succesfully";
    }
    else {
        echo "Error:". $sql. "<br>". $conn->error  ;
    }
    $conn->close();
}
}
else{
    echo"password should not be empty";
    die();
}

 }
 else{
    echo"username should not be empty";
    die();
 }


?>