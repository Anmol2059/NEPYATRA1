<?php

$connection = mysqli_connect('localhost', 'root', '', 'nepyatra_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];


    $request = " insert into contact_form(name, email, phone, topic, message) values('$name','$email','$phone','$topic','$message') ";
    mysqli_query($connection, $request);

    header('location:index.php');
} else {
    echo 'something went wrong please try again!';
}