<?php
    include_once 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/questionnaire.css">
    <link rel="stylesheet" href="/css/navbar.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="/scripts/jquery-3.4.1.js"></script>  
    <script src='/scripts/script.js' type="text/javascript"></script>
    <script src='/scripts/fullpage.js' type="text/javascript"></script>

    <title>COVID-19 Questionnaire</title>
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

<form method="POST" action="insertQuestion.php">
<div class="grid">
    <div class="question">
        <h2>Patient Name</h2>
        <input type="text" id="patientName" name="patientName" required><br>
        <h2>NHS Number</h2>
        <input type="text"id="nhsnumber" name="nhsnumber"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
        <h2>Date</h2>
        <input type="date" id="date" name="date" required value="<?php echo date('Y-m-d') ?>">
        <h2>Time</h2>
        <input type="time" id="time" name="time" required value="<?= date('H:i'); ?>">  
    </div>
    <div id="PNBtn">
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>

<div class="grid">
    <div class="question">
        <p>
        We are getting in touch with people who have persistent health problems after having had a diagnosis of COVID-19 (coronavirus disease). The purpose of this questionnaire is to find out if you are experiencing problems related to your recent illness with COVID-19. Your responses will be recorded in your clinical notes. We will use this information to monitor your symptoms, offer treatments and assess response to treatment.</p><br>
        <p>This questionnaire will take around 15 minutes. If there are any topics you don’t want to talk about you can chose not to respond.</p><br>
        <p></p>Do you consent for this information to be used for audit and research as well ?</p> 
        <input type="radio" id="consent" name="consent" value="y" required>
        <label for="consent">Yes</label><br>
        <input type="radio" id="consent" name="consent" value="n" required>
        <label for="consent">No</label><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
    
</div>

<div class="grid">
    <div class="question">
         <h1>Opening Questions</h1>
        <p>
        Have you had any medical problems related to COVID-19 that needed hospital admission? 
        </p>
        <input type="radio" id="open1" name="open1" value="y" required>
        <label for="open1">Yes</label><br>
        <input type="radio" id="open1" name="open1" value="n" required>
        <label for="open1">No</label><br>
        <p>Have you used any other health services to manage COVID-19 symptoms (e.g. your GP?)</p>
        <input type="radio" id="open2" name="open2" value="y" required>
        <label for="open2">Yes</label><br>
        <input type="radio" id="open2" name="open2" value="n" required>
        <label for="open2">No</label><br></br>
        <p>Details:</p>
        <input type="text" id="open2Detail" name="open2Detail"><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>

<div class="grid">
    <div class="question">
        <h1>1. Breathlessness</h1>
            <p>
            On a scale of 0-10, with 0 being not breathless at all, and 10 being extremely breathless, how breathless are you:
            (n/a if does not perform this activity)
            </p>

            <h2> a) At rest?</h2>
            <input type="number" min="0" max="10" id="q1aNow" name="q1aNow" placeholder= "Now" required><br>
            <input type="number" min="0" max="10" id="q1aPre" name="q1aPre" placeholder= "Pre" required><br>

            <h2> b) On dressing yourself?</h2>
            <input type="number" min="0" max="10" id="q1bNow" name="q1bNow" placeholder = "Now" required><br>
            <input type="number" min="0" max="10" id="q1bPre" name="q1bPre" placeholder = "Pre" required><br>

            <h2> c) On walking up a flight of stairs</h2>
            <input type="number" min="0" max="10" id="q1cNow" name="q1cNow" placeholder = "Now" required><br>
            <input type="number" min="0" max="10" id="q1cNow" name="q1cPre" placeholder = "Pre" required><br>
        </div>
        <div id="PNBtn">
            <button id="prevBtn" onclick="showPrev()">Show Prev</button>
            <button id="nextBtn" onclick="showNext()">Show Next</button>
        </div>
    </div>
</div>

<div class="grid">
    <div class="question">
        <h1>2. Cough/ throat sensitivity/ voice change </h1>
        <p>Have you got any of the below symptoms that is new since contracting the illness? </p>
        <h2>Cough/throat sensitivity</h2>
        <input type="radio" id="q2a" name="q2a" value="y" required>
        <label for="q2aYes">Yes</label><br>
        <input type="radio" id="q2a" name="q2a" value="n" required>
        <label for="q2aYes">No</label><br>
        <h2>Voice Change</h2>
        <input type="radio" id="q2b" name="q2b" value="y" required>
        <label for="q2b">Yes</label><br>
        <input type="radio" id="q2b" name="q2b" value="n" required>
        <label for="q2b">No</label><br>
        <h2>Noisy Breathing</h2>
        <input type="radio" id="q2c" name="q2c" value="y" required>
        <label for="q2c">Yes</label><br>
        <input type="radio" id="q2c" name="q2c" value="n" required>
        <label for="q2c">No</label><br>
        <p>
                    Rate the severity of this problem (0 being not present, 10 being severe and life
                    disturbing)
        </p>
        <input type="number" min="0" max="10" id="q2d" name="q2d" r placeholder= "0-10" equired><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>

<div class="grid">
    <div class="question">
        <h1>3. Swallowing/ nutrition</h1>
        <p>Are you having difficulties eating, drinking or swallowing such as coughing, choking or avoiding any food or drinks?</p>
        <input type="radio" id="q3a" name="q3a" value="y" required>
        <label for="q3a">Yes</label><br>
        <input type="radio" id="q3a" name="q3a" value="n" required>
        <label for="q3a">No</label><br>
        <p>Rate the severity of swallowing problem (0 being no symptom, 10 being severe and life disturbing)</p>
        <input type="number" min="0" max="10" id="q3b" name="q3b"  placeholder= "0-10" required><br>
        <p>Are you or your family concerned that you have ongoing weight loss or any ongoing nutritional concerns as a result of Covid-19?</p>
        <input type="radio" id="q3c" name="q3c" value="y" required>
        <label for="q3c">Yes</label><br>
        <input type="radio" id="q3c" name="q3c" value="n" required>
        <label for="q3c">No</label><br>
    </div> 
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
    
<div class="grid">
    <div class="question">
       <h1>4. Fatigue</h1>
        <p>Do you become fatigued more easily compared to before your illness?</p>
        <input type="radio" id="q4a" name="q4a" value="y" required>
        <label for="q4a">Yes</label><br>
        <input type="radio" id="q4a" name="q4a" value="n" required>
        <label for="q4a">No</label><br>
        <p>Rate the severity of fatigue (0 being not present, 10 being severe and life disturbing)</p>
        <input type="number" min="0" max="10" id="q4bNow" name="q4bNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q4bPre" name="q4bPre" placeholder = "Pre" required><br> 
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>

<div class="grid">
    <div class="question">
        <h1>5. Continence</h1>
        <p>Since your illness are you having any new problems with:</p>
        <p>controlling your bowel</p>
        <input type="radio" id="q5a" name="q5a" value="y" required>
        <label for="q5a">Yes</label><br>
        <input type="radio" id="q5a" name="q5a" value="n" required>
        <label for="q5a">No</label><br>
        <p>controlling your bladder</p>
        <input type="radio" id="q5b" name="q5b" value="y" required>
        <label for="q5b">Yes</label><br>
        <input type="radio" id="q5b" name="q5b" value="n" required>
        <label for="q5b">No</label><br>
        <p>Rate the severity of continence problem (0 being not present, 10 being severe and life disturbing)</p>
        <input type="number" min="0" max="10" id="q5c" name="q5c" placeholder= "0-10" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>

<div class="grid">
    <div class="question">
        <h1>6. Pain/discomfort</h1>
        <p>Have you got any pain that is new since contracting the illness?</p>
        <input type="radio" id="q6a" name="q6a" value="y" required>
        <label for="q6a">Yes</label><br>
        <input type="radio" id="q6a" name="q6a" value="n" required>
        <label for="q6a">No</label><br>
        <p>Rate the severity of pain (0 being no pain or discomfort, 10 being severe and life disturbing pain)</p>
        <input type="number" min="0" max="10" id="q6bNow" name="q6bNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q6bPre" name="q6bPre" placeholder = "Pre" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
    
<div class="grid">
    <div class="question">
        <h1>7. Cognition</h1>
        <p>Since your illness have you had new or worsened difficulty with:</p>
        <p>concentrating?</p>
        <input type="radio" id="q7a" name="q7a" value="y" required>
        <label for="q7a">Yes</label><br>
        <input type="radio" id="q7a" name="q7a" value="n" required>
        <label for="q7a">No</label><br>
        <p>Short term memory?</p>
        <input type="radio" id="q7b" name="q7b" value="y" required>
        <label for="q7b">Yes</label><br>
        <input type="radio" id="q7b" name="q7b" value="n" required>
        <label for="q7b">No</label><br>
        <p>Rate the severity of cognition problem (0 being not present, 10 being severe and life disturbing)</p>
        <input type="number" min="0" max="10" id="q7c" name="q7c" placeholder= "0-10" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
    
<div class="grid">
    <div class="question">
        <h1>8. Anxiety</h1>
        <p>
            On a 0-10 scale, how severe is any anxiety you are experiencing?
            0 means I am not anxious, 10 means I have extreme anxious.
        </p>
        <input type="number" min="0" max="10" id="q8aNow" name="q8aNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q8aPre" name="q8aPre" placeholder = "Pre" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
    
</div>
<div class="grid">
    <div class="question">
        <h1>9. Depression</h1>
        <p>
        On a 0-10 scale, how severe is any depression you are experiencing?
        0 means I am not depressed, 10 means I have extreme depression.
        </p>
        <input type="number" min="0" max="10" id="q9aNow" name="q9aNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q9aPre" name="q9aPre" placeholder = "Pre" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
    

<div class="grid">
    <div class="question">
        <h1>10. PTSD Screen</h1>
        <p>a) Have you had any unwanted memories of your illness or hospital admission whilst you were awake, so not counting dreams? </p>
        <input type="radio" id="q10a" name="q10a" value="y" required>
        <label for="q10a">Yes</label><br>
        <input type="radio" id="q10a" name="q10a" value="n" required>
        <label for="q10a">No</label><br>

        <p>b) Have you had any unpleasant dreams about your illness or hospital admission? </p>
        <input type="radio" id="q10b" name="q10b" value="y" required>
        <label for="q10b">Yes</label><br>
        <input type="radio" id="q10b" name="q10b" value="n" required>
        <label for="q10b">No</label><br>

        <p>c) Have you tried to avoid thoughts or feelings about your illness or hospital admission?</p>
        <input type="radio" id="q10c" name="q10c" value="y" required>
        <label for="q10c">Yes</label><br>
        <input type="radio" id="q10c" name="q10c" value="n" required>
        <label for="q10c">No</label><br>

        <p>Rate the severity of these stress problems (0 being not present, 10 being severe and life disturbing)</p>
        <input type="number" min="0" max="10" id="q10d" name="q10d" placeholder= "0-10" required><br>

        <p>Are you currently having thoughts about harming yourself in any way?</p>
        <input type="radio" id="q10e" name="q10e" value="y" required>
        <label for="q10e">Yes</label><br>
        <input type="radio" id="q10e" name="q10e" value="n" required>
        <label for="q10e">No</label><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>

<div class="grid">
    <div class="question">
        <h1>11. Communication</h1>
        <p>Since your illness have you had new or worsened difficulty with communication/word finding difficulty/ understanding others?</p>
        <input type="radio" id="q11a" name="q11a" value="y" required>
        <label for="q11a">Yes</label><br>
        <input type="radio" id="q11a" name="q11a" value="n" required>
        <label for="q11a">No</label><br>
        <p>Rate the severity of communication problem (0 being not present, 10 being severe and life disturbing)</p>
        <input type="number" min="0" max="10" id="q11b" name="q11b" placeholder= "0-10" required><br> 
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>

<div class="grid">
    <div class="question">
        <h1>12. Mobility</h1>
        <p>
            On a 0-10 scale, how severe are any problems you have in walking about?
            Or moving about if normally mobilise using aids<br><br>
            0 means no problems, 10 means severe or completely unable to walk about.
        </p>
        <input type="number" min="0" max="10" id="q12aNow" name="q12aNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q12aPre" name="q12aPre" placeholder = "Pre" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
   
<div class="grid">
    <div class="question">
        <h1>13. Personal Care</h1>
        <p>
        On a 0-10 scale, how severe are any problems you have in personal cares such as using toilet, washing and dressing yourself?
         0 means no problems, 10 means completely unable to do or fully dependent on others to help.
        </p>
        <input type="number" min="0" max="10" id="q13aNow" name="q13aNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q13aPre" name="q13aPre" placeholder = "Pre" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
     

<div class="grid">
    <div class="question">
       <h1>14.  Other Activities of Daily Living</h1>
        <p>On a 0-10 scale, how severe are any problems you have in do your usual activities, such as your household work, leisure activities, work, study or shopping ?<br><br>
        <p>0 means no problems, 10 means completely unable to do or fully dependent on others to help.</p>
        <input type="number" min="0" max="10" id="q14aNow" name="q14aNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q14aPre" name="q14aPre" placeholder = "Pre" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <button id="nextBtn" onclick="showNext()">Show Next</button>
    </div>
</div>
    
</div>
<div class="grid">
    <div class="question">
         <h1>15. Social Role</h1>
        <p>On a 0-10 scale, how severe are any problems you have in looking after loved ones and leisure activities that are related to your illness (and not the social distancing/lockdown measures) ?</p>
        <input type="number" min="0" max="10" id="q15aNow" name="q15aNow" placeholder = "Now" required><br>
        <input type="number" min="0" max="10" id="q15aPre" name="q15aPre" placeholder = "Pre" required><br>
    </div>
    <div id="PNBtn">
        <button id="prevBtn" onclick="showPrev()">Show Prev</button>
        <input id="nextBtn" type="submit" value="Submit">  
    </div>
</div>

</form>




<script>
       var visibleDiv = 0;
    function showDiv()
    {
        $(".grid").hide();
        $(".grid:eq("+visibleDiv+")").show();
    }
    
    showDiv();
    
    function showNext()
    {
        if (visibleDiv==$(".grid").length-1)
        {
            visibleDiv = 0;
        }
        else{
            visibleDiv++;
        }
        showDiv();
    }
    
        function showPrev()
    {
        if (visibleDiv==0)
        {
            visibleDiv = $(".grid").length-1;
        }
        else{
            visibleDiv--;
        }
        showDiv();
    }
</script>
<script src="/scripts/nav.js"></script>
</body>
</html>