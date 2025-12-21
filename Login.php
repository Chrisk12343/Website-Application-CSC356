<?php
//when working with the session the code should start the the beggiening of the page
session_start();



//php code that will check to see if form has submited
//messaage to see if login is succefull or not 
$message="";
//check to see if the form is submitted
if($_SERVER['REQUEST_METHOD'] =='POST'){
    //include the database file 
    require_once 'db_connection.php';
    //varible to hold the username
    $username = $_POST ['textusername'];
    //varible to hold the password
    $password = $_POST ['textpass'];
    //echo"user" . $username . "<BR>";
   // echo"pass" . $password . "<BR>";


    //query the database for the username and password
    $sql = "SELECT Firstname,userid FROM employee WHERE Username = '$username' AND password = '$password' ";
    //echo"sql=" . $sql . "<BR>";

    //run the query
    $result = mysqli_query($db_conn, $sql);
    //convert the query to an array
    $User = mysqli_fetch_array(result: $result);
    //check if the user logged in correctly
    if (isset($User)){
        $message = "Login Successfull";
        //set up a varible to indicate they have logged in
        $_SESSION['username'] = $username;
        //redirct page
         header(header: "Location: redirct.php");
    }
    //be vaugue for hackers
    else{
        $message = "Login not Successfull";
         $_SESSION['username'] ="";

    }
    //username: root
    //password: rick
   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats Login Page</title>
      <link rel="stylesheet" href="main.css">
       <script src= "loginjs.js"></script>
      <!---link to css page-->
</head>
<body>
    <header>
        <?php include "menu.php";?>
<!---includes the menu in this file -->
        <center>
        <h1>Our Login Page!</h1>
        </center>
        <!--my h1 and center, centers whats ever inside it--->
    </header>
     
    <main>
        <center>
        <h2>Login with your username and password to view our updates early</h2>
        <!--my h2-->
        <p> <?php echo $message; ?> </p>
         </center>
        <!--my message-->
      
      
         
        <form name = "frmlogin" id = "frmlogin" method = "post" action = "Login.php" onsubmit="return valform();">
           
            <div>
                <label for = "textusername"> UserName: </label>
                <input type="text" id="textusername" name="textusername" >
                <!---user name input-->
            </div>
             <div>
                <label for = "textpass"> Password: </label>
                <input type="password" id="textpass" name="textpass" >
                <!---password input-->
            </div>
            <div>
            <!---add the button to submit-->
            <button type="submit" id = "bttn">Login!</button>
            </div>
            <center>
           <p id="divmessage3" class= "div3">

           </p>
           </center>
           <!--- adds a place for the error message to go-->
           

        </form>
       
    </main>
      
</body>
</html>