function valform(){
        //this is the function
            let form = document.frmlogin;
            //called back to the id of the form
            let username= form.textusername.value.trim();
            //i made it so full name would equal the name i gave my question
             let password= form.textpass.value.trim();
    
                //i made it so cats age would equal the name i gave my question
            let message = document.getElementById("divmessage3")
             //this is so the error pops up in the div
             let errors = [];
             //creates an array to store any errors
           
           

            if(username.length == 0){
                 errors.push("Enter your Username.");
              
            }
            if(password.length == 0){
                 errors.push("Enter your Passwortd.");
              
            }
              
              
             
            //all of this adds an error message to the array


         
          
    if (errors.length > 0) {
        message.innerHTML = errors.join("<br>");
        return false; // Stop submission and shows all the errors
    }
       return true;
       //nothing happens if everything is correct

        }
        