<?php
    include_once 'connection.php';
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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    <link href="/images/elaros.jpg" rel="icon"/>
    
</head>
<body>
    <nav>
        <div class="logo">
            <h4><a href="home.php">ELAROS</a></h4>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">HOME</a></li>
            <li><a href="index.php">QUESTIONNAIRE</a></li>
            <li><a href="dashboard.php">DASHBOARD</a></li>
            <li><a href="Login.php">LOGOUT</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav> 
    
    <form method="post" action="export.php">
        <input type="submit" name="export" id="export" value="CSV Export"/>
    </form>
    
    <h5>Add New Patient</h5>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Overview')">Overview</button>
        <button class="tablinks" onclick="openCity(event, 'Personal')">Personal</button>
    </div>

    <form id= "dashboardForm" action = "insertPatient.php" method="POST">

        <div id="Overview" class="tabcontent">
            <div class = "patientForm">
                <h2>Overview Form</h2>
                <label for="fname" name="fnamelabel">First Name</label>
                <input type="text" name = "firstname" required><br>
                <label for="lname"name="lnamelabel">Last Name</label>
                <input type="text" name = "lastname" required><br>
                <label for="nhsnum"name="nhslabel">NHS Number</label>
                <h8>Format: 123-645-6478</h8>
                <input type="tel" name = "nhsnumber"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                <label for="language"name="languagelabel">Language</label>
                <select name="language">
                    <option value="English">English</option>
                    <option value="French">French</option>
                    <option value="German">German</option>
                    <option value="Italian">Italian</option>
                    <option value="Spanish">Spanish</option>
                </select>
                <label for="ethnicity"name="ethnicitylabel">Ethnicity</label>
                 <select name="ethnicity">
                    <option value="White">White</option>
                    <option value="Asian">Asian</option>
                    <option value="African">African</option>
                </select>
                <label for="gender"name="genderlabel">Gender</label>
                <input type="radio" name="gender" value="male" required>
                <label for="gender"name="male">male</label>
                <input type="radio"  name="gender" value="female" required>
                <label for="gender"name="female">Female</label>
                <input type="date" name = "dateofbirth"  required>
                <input type="submit" class="tablinks" onclick="openCity(event, 'Personal')" value="Save" name="submitOverview">

            </div>
        </div>

        <div id="Personal" class="tabcontent">
            <div class="personalForm">
                <h2>Personal Form</h2>
                <label for="height">Height (CM)</label>
                <input type="number" name = "height" required>
                <label for="weight">Weight (KG)</label>
                <input type="text" name = "weight" required>
                <label for="smoker">Smoker</label>
                <select name="smoker">
                    <option value="none">Never</option>
                    <option value="none">occasionally</option>
                    <option value="none">Daily</option>
                </select>
                <label for ="medicalhistory">Medical History</label>
                <label for ="medicalhistorySet">None Set</label>
                <label for="street">Street</label>
                <input type="text" name = "street" required>
                <label for="city">City</label>
                <input type="text" name = "city" required>
                <label for="postcode">Postcode</label>
                <input type="text" name = "postcode" required>
                <label for="telephone">Telephone</label>
                <input type="tel" name = "phone" required>
                <label for="email">Email</label>
                <input type="email" name = "email" required> 
                <input type="submit" value="Save" name="submitPersonal">
            </div> 
        </div>

    </form>

<script src="/scripts/nav.js"></script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
   <h5>View Patients</h5>
   
    <table id="patientTable">
        <tr>
            <th>NHS Number</th>
            <th>Name</th> 
            <th>Age (D.O.B)</th>  
            <th>Ethnicity</th>  
            <th>Gender</th>
            <th>Added</th>
        <tr>
        
        <?php
            $sql = "SELECT * from patients";
            $result = $conn->query($sql);


            if ($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    $today = date("Y-m-d");
                    $dateofbirth = $row['dateofbirth'];
                    $diff = date_diff(date_create($dateofbirth),date_create($today));
                    $age = $diff->format('%y');
                    $dob = $age." "."(".$dateofbirth.")";
                    $name = $row['lastname'].", ".$row['firstname'];
                    
                   

                    
                    echo "<tr><td>" . $row['nhsnumber'] . "</td><td>" . $row['patientName']. "</td><td>". $dob ."</td><td>". $row['ethnicity'] ."</td><td>". $row['gender'] ."</td><td>".$row[dateAdded]. "</td></tr>";  
                    $i++;
                }
            }

            mysql_close(); 
            ?>
    </table>
    
</body>
</html>

