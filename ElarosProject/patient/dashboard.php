<?php
    session_start();
    include_once '../inc/connection.php';
    include_once '...inc/loginServer.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/dashboard.css">

    <script type="text/javascript" src="/scripts/jquery-3.4.1.js"></script>  
    <script src='/scripts/script.js' type="text/javascript"></script>
    <script src='/scripts/fullpage.js' type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    <link href="/images/elaros.jpg" rel="icon"/>
    
</head>
<?php

$name = $_SESSION['user'];
$sql = "SELECT * FROM answers WHERE patientName = '$name'";
$result = $conn->query($sql);


while ($row = mysqli_fetch_array($result)){
   $pre = $pre.'"'.$row['q1aPre'].'"'.','.'"'.$row['q4bPre'].'"'.','.'"'.$row['q6bPre'].'"'.','.'"'.$row['q8aPre'].'"'.','.'"'.$row['q9aPre'].'"'.','.'"'.$row['q12aPre'].'"'.','.'"'.$row['q13aPre'].'"'.','.'"'.$row['q14aPre'].'"'.','.'"'.$row['q15aPre'].'"';
   
   $now = $now.'"'.$row['q1aNow'].'"'.','.'"'.$row['q4bNow'].'"'.','.'"'.$row['q6bNow'].'"'.','.'"'.$row['q8aNow'].'"'.','.'"'.$row['q9aNow'].'"'.','.'"'.$row['q12aNow'].'"'.','.'"'.$row['q13aNow'].'"'.','.'"'.$row['q14aNow'].'"'.','.'"'.$row['q15aNow'].'"';
}





?>

<body>
    <nav>
        <div class="logo">
            <h4><a href="home.php">ELAROS</a></h4>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">HOME</a></li>
            <li><a href="questionnaire.php">QUESTIONNAIRE</a></li>
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="../Login.php">LOGOUT</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav> 
    
<canvas id="chart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Breathlessness', 'Cough/throat sensitivity/voice change','Fatigue', 'Pain/Discomfort', 'Anxiety','Depression','Mobility','Personal Care','Other Activities of Daily Living','Social Role'],
        datasets: [
            {
            label: 'Pre-covid',
            data: [<?php echo $pre;?> ],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        },{
            label: 'Now',
            data: [<?php echo $now;?> ],
            backgroundColor: 'rgba(179,181,198,0.2)',
            borderColor: 'rgba(179,181,198,1)',
            borderWidth: 1
        }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


</body>
</html>

