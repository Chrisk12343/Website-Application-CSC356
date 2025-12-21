<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="jquery.js"></script>

    <!-- link to the global css file -->
    <link rel="stylesheet" href="jquery.css">   
    
</head>
<body>
    <main>
        <header>
          <?php include "menu.php";?>
          </header>
        <h1>About Us</h1>
        <h2> Our Mission</h2>
        <p> Our mission is to make video games fun and enjoyable for everyone</p>
        <!--our mission-->
        <h3>Meet the Developers</h3>
        <p>Christopher Krawczyk:Lead Graphics Designer.</p>
        <p>Jack Frost: Lead Programmer.</p>
        <p>Amy Roberston: Lead Artist.</p>
        <!---the devoplers-->

        <br>
        <br>
        <form id="survey" name="survey">            
            <label for="surv">How good do you think our new game is??</label>
            <select id="surv" name="surv">
                <option value="">Select an option:</option>
                <option value="5">Perfect</option>
                <option value="4">Somewhat Good</option>
                <option value="3">Neutral</option>
                <option value="2">Somewhat Bad</option>                
                <option value="1">Very Bad</option>
                <!--- these are the options that the person can choose from-->
            </select>
            <br>
            <br>

            <div id="FollowUp" class="hidden">
                <label for="txtFollowUp">Things to approve upon:</label>
                <textarea id="txtFollowUp" name="txtFollowUp" rows="10" cols="30"></textarea>
            </div>
            <br>
            <br>
            <!--- this section is the aprove upon section-->

            <label for="txtComments">Other Comments:</label>
            <textarea id="txtComments" name="txtComments" rows="10" cols="30"></textarea>
           
            <div id="CharCount" class="charcount">0/250 Characters</div>
            <!--if they have other comments-->

            <button>Submit Survey</button>
            <!---button to submit-->
        </form>

        
    </main>
</body>
</html>