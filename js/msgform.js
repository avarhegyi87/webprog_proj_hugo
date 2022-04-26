var fields = {};

class User {
    constructor(firstName, lastName, gender, email, newsletter, question) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.gender = gender;
        this.email = email;
        this.newsletter = newsletter;
        this.question = question;
    }
}

function sendContact() {
    fields.gender = getGender();

    if (isValid()) {
        let usr = new User(firstName.value, lastName.value, fields.gender.value,
            email.value, newsletter.checked);

        alert(`${usr.firstName} thanks for contacting us.`)
        return true;
    } else {
        alert("Error in the form.")
        return false;
    }
}

function getGender() {
    return document.querySelector('input[name="gender"]:checked')
}

function isNotEmpty(value) {
    if (value == null || typeof value == 'undefined') return false;
    return (value.length > 0);
}

function isEmail(email) {
    let regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    return regex.test(String(email).toLowerCase());
}

function fieldValidation(field, validationFunction) {
    if (field == null) return false;

    let isFieldValid = validationFunction(field.value)
    if (!isFieldValid) {
        field.className = 'placeholderRed';
    } else {
        field.className = '';
    }

    return isFieldValid;
}

function isValid() {
    var valid = true;

    valid &= fieldValidation(fields.firstName, isNotEmpty);
    valid &= fieldValidation(fields.lastName, isNotEmpty);
    valid &= fieldValidation(fields.gender, isNotEmpty);
    valid &= fieldValidation(fields.email, isEmail);
    valid &= fieldValidation(fields.question, isNotEmpty);

    return valid;
}

document.addEventListener("DOMContentLoaded", function () {
    fields.firstName = document.getElementById('firstName');
    fields.lastName = document.getElementById('lastName');
    fields.email = document.getElementById('email');
    fields.newsletter = document.getElementById('newsletter');
    fields.question = document.getElementById('question');
})