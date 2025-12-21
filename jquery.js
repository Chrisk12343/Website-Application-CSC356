 // waits until DOM has fully loaded
$(document).ready(function(){
    //an event handler for when the person changes the value
    $('#surv').change(function(){
        //  option 1 or 2
        if ($(this).val() == "1" || $(this).val() == "2" || $(this).val() == "3" || $(this).val() == "4"){
            // show the hidden div comment area
            $('#FollowUp').slideDown();
        }
        // for any other option, disappear the extra comment area
        else{
            $('#FollowUp').slideUp();
        }
    }); 

    // counts the characters in the comment box
    $('#txtComments').on('input', function(){
        // max number of charcters
        let maxChars = 250;
        // gives us the number in the text area
        let currChars = $(this).val().length;

        // update the div 
        $('#CharCount').text(`${currChars}/${maxChars} Characters`);

        // if the max number of characters have succeded 
        if (currChars > maxChars){
            // changes text color to red
            $('#CharCount').css('color', 'red');
        }
        else{
            // text color is gray
            $('#CharCount').css('color', 'gray');
        }

    }); 

}); 