function loginValidation() {
    document.getElementById("error").innerHTML = ""; 
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let valid = true;

    if (email === "" || password === "") {
        displayloginError("Fill out all login fields!");
        valid = false;
    }

    let emailValidate = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (!emailValidate.test(email)) {
        displayloginError("Invalid email address");
        valid = false;
    }

    if (password.length < 6) {
        displayloginError("Password must be at least 6 characters");
        valid = false;
    }

    const passwordValidate = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

    if (!passwordValidate.test(password)) {
        displayloginError("Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.");
        valid = false;
    }

    return valid;
}
function displayloginError(errorMessage) {
    document.getElementById("error").innerHTML = errorMessage;
}
