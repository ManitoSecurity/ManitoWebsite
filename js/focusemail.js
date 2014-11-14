function focusemail(input) {
    input.placeholder = "someone@email.com";
    $("#emailtext").addClass("orangeplaceholder");
}

function unfocusemail(input){
    input.placeholder = "join our email list";
    $("#emailtext").removeClass("orangeplaceholder");
}