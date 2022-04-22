<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
// sql to create table
/*
$sql = "CREATE TABLE forms (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    addr VARCHAR(50) NOT NULL
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/

//checking if form is submitted
if (isset($_POST['submit'])) {
    //checking if all the field has a value
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address'])) {

        //using name from input tag to acces value
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $addr = $_POST['address'];

        //query to insert into table forms
        $query = "INSERT INTO forms(username, email, phone,addr) values('$name', '$email','$phone','$addr')";

        //running the query
        $run = mysqli_query($conn, $query);
        if ($run) {
            echo "Form submitted succesfully";
        } else {
            echo "Form not submitted";
        }
    } else {
        echo "All fields required!";
    }
}
mysqli_close($conn);
