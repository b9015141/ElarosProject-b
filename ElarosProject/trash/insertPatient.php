<?php

include_once 'connection.php';

// Answer variables
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');

$patientName = $firstname." ".$lastname;
$nhsnumber = filter_input(INPUT_POST, 'nhsnumber');
$language = filter_input(INPUT_POST, 'language');
$ethnicity = filter_input(INPUT_POST, 'ethnicity');
$gender = filter_input(INPUT_POST, 'gender');
$dateofbirth = filter_input(INPUT_POST, 'dateofbirth');

$height = filter_input(INPUT_POST, 'height');
$weight = filter_input(INPUT_POST, 'weight');
$smoker = filter_input(INPUT_POST, 'smoker');
$street = filter_input(INPUT_POST, 'street');
$city = filter_input(INPUT_POST, 'city');
$postcode = filter_input(INPUT_POST, 'postcode');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');

// Insert data into columns in the table         
$sql = "INSERT INTO patients (patientName, nhsnumber, language, ethnicity, gender, dateofbirth, height, weight, smoker, street, city, postcode, phone, email)
        values ('$patientName', '$nhsnumber', '$language', '$ethnicity', '$gender', '$dateofbirth', '$height','$weight', '$smoker', '$street', '$city', '$postcode', '$phone', '$email')";

if ($conn->query($sql)){
    header('Location: https://elarosgroupb.000webhostapp.com/dashboard.php');

}
else{
echo "Error: ". $sql ."
". $conn->error;
}