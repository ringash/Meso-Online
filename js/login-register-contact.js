document.getElementById('submit').addEventListener("click", function(event) {
    event.preventDefault();
    validate();
})

function validate(number) {
    var inputList = document.getElementsByClassName('input1');
    if (number == 0) {
        //login-form
        if (inputList[0].value == "" && inputList[1].value == "") {
            alert('Nuk jane te mbushura te dhenat!');
        } else if (inputList[0].value == "") {
            alert('Shenoni Username');
        } else if (inputList[1].value == "") {
            alert('Shenoni Password');
        } else {
            alert('Kycja u be me sukses!');
        }
    } else if (number == 1) {
        //register-form
        if (inputList[0].value == "" && inputList[1].value == "" &&
            inputList[2].value == "" && inputList[3].value == "") {
            alert('Nuk jane te mbushura te dhenat!');
        } else if (inputList[0].value == "") {
            alert('Shenoni Username');
        } else if (inputList[1].value == "") {
            alert('Shenoni Email');
        } else if (inputList[2].value == "") {
            alert('Shenoni Password');
        } else if (inputList[3].value == "") {
            alert('Shenoni Confirm Password');
        } else if (inputList[2].value != inputList[3].value) {
            alert('Password dhe Confirm Password nuk jane te njejte!');
        } else {
            alert('Regjistrimi u be me sukses!');
        }
    } else if (number == 2) {
        //contact-form
        if (inputList[0].value == "" && inputList[1].value == "" &&
            inputList[2].value == "" && inputList[3].value == "") {
            alert('Nuk jane te mbushura te dhenat!');
        } else if (inputList[0].value == "") {
            alert('Shenoni Emrin');
        } else if (inputList[1].value == "") {
            alert('Shenoni Email');
        } else if (inputList[2].value == "") {
            alert('Shenoni Temen');
        } else if (inputList[3].value == "") {
            alert('Shenoni Mesazhin');
        } else {
            alert('Do te degjohemi se shpejti!');
        }
    } 
}