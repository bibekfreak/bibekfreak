<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_P0ST['email'];
$password = $_POST['password'];

//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, password)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$firstName, $lastName, $email, $password);
    $stmt->execute();
    echo "registration Successfully....";
    $stmt->close();
    $conn->close();

}
?>