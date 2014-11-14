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
            $.ajax({
                type: "POST",
                url: "js/databaseconnect.php",
                data: "email="+email,
                success: function(data){
                    alert(data);
                    emailbutton.style.background = "#2bb29d";
                    emailbutton.style.color = "white";
                    emailbutton.innerHTML = "✓";
                }
            });
        }

});