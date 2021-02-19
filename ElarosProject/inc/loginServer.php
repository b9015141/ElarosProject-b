<?php
    session_start();
    ob_start();
    include_once 'connection.php';
    

    $error = "";
    $success = "";

    // Get values from form in login.php file
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    
    // Query the database for user
    if (isset($_POST['submitLogin'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = mysqli_query($conn, "SELECT count(*) as total from users where
                                 user = '" .$user."' and pass = '".$pass."'") or die(
                                mysqli_error($conn));

    $rw = mysqli_fetch_array($sql);

    if ($rw['total'] > 0){
        if ($user == 'user' && $pass=='pass'){
            header('Location: https://elarosgroupb.000webhostapp.com/admin/home.php');
            
        }
        else{
         $_SESSION['user'] = $user;
         header('Location: https://elarosgroupb.000webhostapp.com/patient/home.php');
        }
        

    }
    else{
        header('Location: https://elarosgroupb.000webhostapp.com/Login.php');
    } 
}
ob_end_flush();
?>