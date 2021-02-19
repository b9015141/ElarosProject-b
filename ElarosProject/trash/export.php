<?php
include_once 'connection.php';

if(isset($_POST["export"])){
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    
    $output = fopen("php://output", "w");
    fputcsv($output, array('patientId', 'patientName','nhsnumber','langauge','ethnicity','gender','dateofbirth','height','weight','smoker','street','city','postcode','phone','email','dateAdded'));
    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
    
    $output = fopen("php://output", "w");
    fputcsv($output, array('', '','','','','','','','','','','','','','','',''));
    $query = "SELECT * FROM ";
    $result = mysqli_query($conn, $query);
    
    for ($x = 0; $x <= 5; $x++) {
        fputcsv($output, "");
    } 
    fclose($output);
    
    
    
    
    
    $output = fopen("php://output", "w");
    fputcsv($output, array('answerId','patientName', 'nhsnumber', 'date', 'time', 'consent', 'open1', 'open2', 'open2Detail', 'q1aNow', 'q1aPre', 'q1bNow', 'q1bPre', 'q1cNow', 'q1cPre','q2a', 'q2b', 'q2c', 'q2d', 'q3a', 'q3b', 'q3c', 'q4a', 'q4bNow', 'q4bPre', 'q5a', 'q5b', 'q5c', 'q6a', 'q6bNow', 'q6bPre', 'q7a', 'q7b', 'q7c', 'q8aNow',
        'q8aPre', 'q9aNow', 'q9aPre', 'q10a', 'q10b', 'q10c', 'q10d', 'q10e', 'q11a', 'q11b', 'q12aNow', 'q12aPre', 'q13aNow', 'q13aPre', 'q14aNow', 'q14aPre', 'q15aNow', 'q15aPre'));
    $query = "SELECT * FROM answers";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
    
    
}
?>