

function validInput() {
    const cne = document.getElementById('cne');
    const password = document.getElementById('mdp');

    var nbSuccess = 0;

    if (cne.value.trim() === '') {
        setError(cne, 'Please choose a cne.');

    } else {
        setSuccess(cne, 'look good');
        nbSuccess++;
    }

    if (password.value.trim() === '' || password.value.length < 8 || password.value.length > 20) {
        setError(password, 'Please choose a password.');

    } else {
        setSuccess(password, 'look good');
        nbSuccess++;
    }

    // condition if tout champ is valid

    if (nbSuccess == 2) {
        return true;
    }else{
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