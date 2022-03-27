

function checkInputs() {

    const nom = document.getElementById('nom');
    const prenom = document.getElementById('prenom');
    const cne = document.getElementById('cne');
    const cin = document.getElementById('cin');
    const address = document.getElementById('address');
    const state = document.getElementById('state');
    const city = document.getElementById('city');
    const filiere = document.getElementById('filiere');
    const years = document.getElementById('years');
    const password = document.getElementById('mdp');
    const password2 = document.getElementById('mdp2');

    var nbSuccess = 0;

    if (nom.value.trim() === '') {
        setError(nom, 'Please choose a nom.');

    } else {
        setSuccess(nom, 'look good');
        nbSuccess++;
    }

    if (prenom.value.trim() === '') {
        setError(prenom, 'Please choose a prenom.');

    } else {
        setSuccess(prenom, 'look good');
        nbSuccess++;
    }

    if (cne.value.trim() === '') {
        setError(cne, 'Please choose a cne.');

    } else {
        setSuccess(cne, 'look good');
        nbSuccess++;
    }

    if (cin.value.trim() === '') {
        setError(cin, 'Please choose a cin.');

    } else {
        setSuccess(cin, 'look good');
        nbSuccess++;
    }

    if (address.value.trim() === '') {
        setError(address, 'Please choose a address.');

    } else {
        setSuccess(address, 'look good');
        nbSuccess++;
    }

    if (state.value === 'NULL') {
        SelectsetError(state, 'Please choose a state.');

    } else {
        SelectsetSuccess(state, 'look good');
        nbSuccess++;
    }

    if (city.value === 'NULL') {
        SelectsetError(city, 'Please choose a city.');

    } else {
        SelectsetSuccess(city, 'look good');
        nbSuccess++;
    }

    if (filiere.value === 'NULL') {
        SelectsetError(filiere, 'Please choose a filiere.');

    } else {
        SelectsetSuccess(filiere, 'look good');
        nbSuccess++;
    }

    if (years.value === 'NULL') {
        SelectsetError(years, 'Please choose a years.');

    } else {
        SelectsetSuccess(years, 'look good');
        nbSuccess++;
    }

    if (password.value.trim() === '' || password.value.length < 8 || password.value.length > 20) {
        setError(password, 'Please choose a password.\n Must be 8-20 characters long.');

    } else {
        setSuccess(password, 'look good');
        nbSuccess++;
    }
    
    if (password2.value.trim() === '' || ( password2.value.trim() !=  password.value.trim() ) ) {
        setError(password2, 'Please choose a password méme.');

    } else {
        setSuccess(password2, 'look good');
        nbSuccess++;
    }

    // condition if tout champ is valid

    if (nbSuccess == 11) {
        return true;
    } else {
        return false;
    }
}

function setError(input, message) {
    const formOutline = input.parentElement; // .form-outline
    const small = formOutline.querySelector('small');

    // add error message inside small
    small.innerText = message;

    // add error class
    input.className = 'form-control form-control-lg is-invalid';
    small.className = 'invalid-feedback';

}

function setSuccess(input, message) {
    const formOutline = input.parentElement; // .form-outline
    const small = formOutline.querySelector('small');

    // add error message inside small
    small.innerText = message;

    // add error class
    input.className = 'form-control form-control-lg is-valid';
    small.className = 'valid-feedback';

}

function SelectsetError(input, message) {

    const formOutline = input.parentElement;
    const small = formOutline.querySelector('small');

    // add error message inside small
    small.innerText = message;

    // add error class
    input.className = 'form-select is-invalid';
    small.className = 'invalid-feedback';

}

function SelectsetSuccess(input, message) {
    const formOutline = input.parentElement;
    const small = formOutline.querySelector('small');

    // add error message inside small
    small.innerText = message;

    // add error class
    input.className = 'form-select is-valid';
    small.className = 'valid-feedback';


}