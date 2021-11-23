function validateForm() {

    let first = document.getElementById('firstName').value.trim();
    let last = document.getElementById('lastName').value.trim();
    if (first == "") {
        alert("Name must be filled out");
        return false;
    }
    if (last == "") {
        alert("Name must be filled out");
        return false;
    }

    let city = document.getElementById('city').value.trim();
    if (city == "") {
        alert("City must be filled out");
        return false;
    }

    let country = document.getElementById('country').value.trim();
    if (country == "") {
        alert("Country must be filled out");
        return false;
    }

    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let email = document.getElementById('email').value.trim();
    if (!(re.test(email))) {
        alert("Email must be valid format");
        return false;
    }

    let pass = document.getElementById('password').value.trim();
    let repeat = document.getElementById('password-repeat').value.trim();
    let minLength = 8;
    if ((pass < minLength) || (repeat < minLength)) {
        alert("Password must be greater than 8 characters")
        return false;
    } else if (pass !== repeat) {
        alert("Passwords must match")
        return false;
    }
}