function formValidation() {
    document.getElementById("error").innerHTML = "";
    let isValid = true;

    const firstname = document.getElementById("firstname").value;
    const lastname = document.getElementById("lastname").value;
    const email = document.getElementById("email").value;
    const phoneNo = document.getElementById("phone").value;
    const dob = document.getElementById("dob").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmpassword").value;

    // Gender Validation
    const genderMale = document.querySelector('input[name="gender"][value="male"]').checked;
    const genderFemale = document.querySelector('input[name="gender"][value="female"]').checked;



    if (!genderMale && !genderFemale) {
        displayError("Please select your gender!");
        isValid = false;
    }

    if (firstname === "" || lastname === "" || email === "" || phoneNo === "" || password === "") {
        displayError("Please fill out all fields!");
        isValid = false;
    }

    const emailValidate = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailValidate.test(email)) {
        displayError("Invalid email format!");
        isValid = false;
    }

    const phoneValidate = /^[0-9]{11}$/;
    if (!phoneValidate.test(phoneNo)) {
        displayError("Phone number must be 11 digits!");
        isValid = false;
    }

    const passwordValidate = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{6,}$/;
    if (!passwordValidate.test(password)) {
        displayError("Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.");
        isValid = false;
    }

    if (password.length < 6) {
        displayError("Password must be at least 6 characters long!");
        isValid = false;
    }

    if (password !== confirmPassword) {
        displayError("Passwords do not match!");
        isValid = false;
    }

    return isValid;
}

function displayError(message) {
    document.getElementById("error").innerHTML = message;
}