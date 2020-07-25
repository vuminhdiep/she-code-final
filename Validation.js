function validation() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var message = document.getElementById("message");
    var birthday = document.getElementById("birthday");
    var error = document.getElementById("error");
    var border = document.getElementById("name").style.border;
    var errorList = "<ul>";

    // Check name requirements.
    if (!(name.value.length > 0)) {
        name.style.borderColor = "red";
        errorList += "<li>Missing full name.</li>"
    } else {
        name.style.border = border;
    }

    // Check email requirements.
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
    if (!(email.value.length > 0) || !(emailPattern.test(email.value))) {
        email.style.borderColor = "red";
        errorList += "<li>Invalid or missing email address.</li>"
    } else {
        email.style.border = border;
    }

    // Check birthday requirements.
    if (!(birthday.value.length > 0)) {
        birthday.style.borderColor = "red";
        errorList += "<li>Invalid or missing birth date.</li>"
    } else {
        birthday.style.border = border;
    }

    // Check message requirements.
    if (!(message.value.length > 0)) {
        message.style.borderColor = "red";
        errorList += "<li>Missing message.</li>"
    } else {
        message.style.border = border;
    }

    if (errorList === "<ul>"){
        document.getElementById("form").submit();
    }

    error.innerHTML = errorList + "</ul>";

}