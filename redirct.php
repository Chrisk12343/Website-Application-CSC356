<?php 
// user must be logged in to get to this page
session_start();
//if the user is not logged in it will bring back to login page
if ($_SESSION['username'] == ""){
    //add ina redirct to the intranet page
    header(header: "Location: Login.php");

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Workbook</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
     <link rel="stylesheet" href="main.css">
      <!---link to css page-->
</head>
<body>
    <header>
        <?php include "menu.php";?>
<!---includes the menu in this file -->
        <center>
        <h1>Welcome to Our Updates Page</h1>
        </center>
        <!--my h1 and center, centers whats ever inside it--->
    </header>
    <center>
    <main>
        <h4>New updates</h4>
       <ul id="ulTasks"></ul>
       <!--this makes it so it includes it on the page---->

    </main>
    </center>

    
    <script>
        // this waits til l all of the HTML elements have been rendered
        $(document).ready(function(){
            // make the ajax call
            $.ajax({
                url: "Redirct.json",
                method: "GET",
                dataType: "json",
                success: function(data){
                    // this loops through the data 
                    data.forEach(task => addTaskToUL(task.text, task.done));
                    // got rid of done so it wont show up false when loading it.
                },
                error: function(){
                    console.error("Could not load file");
                }
            }); 

            // this is a function that add tasks to the UL
            function addTaskToUL(task, done){
                let li = $('<li></li>').text(task );

                $('#ulTasks').append(li);
            }

        }); 
    </script>
</body>
</html>