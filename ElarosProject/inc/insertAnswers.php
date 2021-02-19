<?php

include_once 'connection.php';

// Questions
$patientName = filter_input(INPUT_POST, 'patientName');
$nhsnumber = filter_input(INPUT_POST, 'nhsnumber');
$date = filter_input(INPUT_POST, 'date');
$time = filter_input(INPUT_POST, 'time');
$consent = filter_input(INPUT_POST, 'consent');
$open1 = filter_input(INPUT_POST, 'open1');
$open2= filter_input(INPUT_POST, 'open2');
$open2Detail = filter_input(INPUT_POST, 'open2Detail');


$q1aNow = filter_input(INPUT_POST, 'q1aNow');
$q1aPre = filter_input(INPUT_POST, 'q1aPre');
$q1bNow = filter_input(INPUT_POST, 'q1bNow');
$q1bPre = filter_input(INPUT_POST, 'q1bPre');
$q1cNow = filter_input(INPUT_POST, 'q1cNow');
$q1cPre = filter_input(INPUT_POST, 'q1cPre');

$q2a = filter_input(INPUT_POST, 'q2a');
$q2b = filter_input(INPUT_POST, 'q2b');
$q2c = filter_input(INPUT_POST, 'q2c');
$q2d = filter_input(INPUT_POST, 'q2d');

$q3a = filter_input(INPUT_POST, 'q3a');
$q3b = filter_input(INPUT_POST, 'q3b');
$q3c = filter_input(INPUT_POST, 'q3c');

$q4a = filter_input(INPUT_POST, 'q4a');
$q4bNow = filter_input(INPUT_POST, 'q4bNow');
$q4bPre = filter_input(INPUT_POST, 'q4bPre');

$q5a = filter_input(INPUT_POST, 'q5a');
$q5b = filter_input(INPUT_POST, 'q5b');
$q5c = filter_input(INPUT_POST, 'q5c');

$q6a = filter_input(INPUT_POST, 'q6a');
$q6bNow = filter_input(INPUT_POST, 'q6bNow');
$q6bPre = filter_input(INPUT_POST, 'q6bPre');

$q7a = filter_input(INPUT_POST, 'q7a');
$q7b = filter_input(INPUT_POST, 'q7b');
$q7c = filter_input(INPUT_POST, 'q7c');

$q8aNow = filter_input(INPUT_POST, 'q8aNow');
$q8aPre = filter_input(INPUT_POST, 'q8aPre');

$q9aNow = filter_input(INPUT_POST, 'q9aNow');
$q9aPre = filter_input(INPUT_POST, 'q9aPre');

$q10a = filter_input(INPUT_POST, 'q10a');
$q10b = filter_input(INPUT_POST, 'q10b');
$q10c = filter_input(INPUT_POST, 'q10c');
$q10d = filter_input(INPUT_POST, 'q10d');
$q10e = filter_input(INPUT_POST, 'q10e');

$q11a = filter_input(INPUT_POST, 'q11a');
$q11b = filter_input(INPUT_POST, 'q11b');

$q12aNow = filter_input(INPUT_POST, 'q12aNow');
$q12aPre = filter_input(INPUT_POST, 'q12aPre');


$q13aNow = filter_input(INPUT_POST, 'q13aNow');
$q13aPre = filter_input(INPUT_POST, 'q13aPre');


$q14aNow = filter_input(INPUT_POST, 'q14aNow');
$q14aPre = filter_input(INPUT_POST, 'q14aPre');

$q15aNow = filter_input(INPUT_POST, 'q15aNow');
$q15aPre = filter_input(INPUT_POST, 'q15aPre');
    
       
// Insert data into columns in the table         
$sql = "INSERT INTO answers (patientName, nhsnumber, date, time, consent, open1, open2, open2Detail, q1aNow, q1aPre, q1bNow, q1bPre, q1cNow, q1cPre,q2a, q2b, q2c, q2d, q3a, q3b, q3c, q4a, q4bNow, q4bPre, q5a, q5b, q5c, q6a, q6bNow, q6bPre, q7a, q7b, q7c, q8aNow,
        q8aPre, q9aNow, q9aPre, q10a, q10b, q10c, q10d, q10e, q11a, q11b, q12aNow, q12aPre, q13aNow, q13aPre, q14aNow, q14aPre, q15aNow, q15aPre)
        values ('$patientName', '$nhsnumber', '$date', '$time','$consent','$open1','$open2', '$open2Detail', '$q1aNow','$q1aPre','$q1bNow', '$q1bPre','$q1cNow', '$q1cPre','$q2a', '$q2b', '$q2c', '$q2d','$q3a', '$q3b', '$q3c','$q4a', '$q4bNow', '$q4bPre','$q5a', '$q5b', '$q5c' ,'$q6a', '$q6bNow', '$q6bPre','$q7a', '$q7b', '$q7c', '$q8aNow',
        '$q8aPre', '$q9aNow', '$q9aPre','$q10a', '$q10b', '$q10c', '$q10d', '$q10e','$q11a', '$q11b','$q12aNow', '$q12aPre', '$q13aNow', '$q13aPre', '$q14aNow', '$q14aPre', '$q15aNow', '$q15aPre')";
  
  

if ($conn->query($sql)){
     header('Location: https://elarosgroupb.000webhostapp.com/patient/home.php');

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
//$conn->close();
       
?>