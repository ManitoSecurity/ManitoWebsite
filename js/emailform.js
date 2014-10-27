$('#emailform')
    .on('valid', function() {
        // Handle the submission of the form
        var email = document.getElementById("emailtext").value;
        var emailbutton = document.querySelector("#smallemailsubmit");

        if(email == ""){
        }
        else{
            emailbutton.style.background = "#2bb29d";
            emailbutton.style.color = "white";
            emailbutton.innerHTML = "✓";
        }

});