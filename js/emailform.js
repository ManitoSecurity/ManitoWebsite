$('#emailform')
    .on('valid', function() {
        // Handle the submission of the form
        var email       = document.getElementById("emailtext").value;
        var emailbutton = document.querySelector("#smallemailsubmit");

        if(email == ""){
            document.getElementById("emailtext").focus();
            document.getElementById("emailtext").placeholder = "someone@email.com";
        }

        else{
            emailbutton.style.background = "#c3c3c3";
            emailbutton.style.color = "white";
            emailbutton.innerHTML = "...";
            $.ajax({
                type: "POST",
                url: "js/databaseconnect.php",
                data: {email: email},
                success: function(data){
                    emailbutton.style.background = "#2bb29d";
                    emailbutton.style.color = "white";
                    emailbutton.innerHTML = "✓";
                }
            });
        }

});