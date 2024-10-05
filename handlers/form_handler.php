<?php
include("../db/config.php");

// checking if the submit button is clicked

if(isset($_POST['form'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $DOB = $_POST['DOB'];
        $nationality = $_POST['nationality'];
        $account_number = $_POST['account_number'];

        // print_r($email);

        try{

        // creating the userID
        $userId = uniqid("user_", true);

        // inserting the user data into the database
        $query = "INSERT INTO USER (`user_id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `DOB`, `nationality`, `account_number`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssisssi", $userId, $firstname, $lastname, $email, $phonenumber, $address, $DOB, $nationality, $account_number);
        $stmt->execute();

        if (!$stmt) {
            throw new Exception("ERROR");
        }

        // if the registration was successful, redirect back to the form

        header("Location: ../index.php");


    } catch (Exception $e) {
        echo "ERR";
    }
}



?>