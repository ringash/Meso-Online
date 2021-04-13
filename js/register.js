function validateRegister() {
    var inputList = document.getElementsByClassName("input1");

<<<<<<< HEAD
    if (
        inputList[0].value == "" &&
        inputList[1].value == "" &&
        inputList[2].value == "" &&
        inputList[3].value == ""
    ) {
        alert("Nuk jane te mbushura te dhenat!");
        return false;
    } else if (inputList[0].value == "") {
        alert("Shenoni Username");
        return false;
    } else if (inputList[1].value == "") {
        alert("Shenoni Email");
        return false;
    } else if (inputList[2].value == "") {
        alert("Shenoni Password");
        return false;
    } else if (inputList[3].value == "") {
        alert("Shenoni Confirm Password");
        return false;
    } else if (inputList[2].value != inputList[3].value) {
        alert("Password dhe Confirm Password nuk jane te njejte!");
        return false;
    } else {
        return true;
    }
=======
function validate() {
    //register-form
    // if (inputList[0].value == "" && inputList[1].value == "" &&
    //     inputList[2].value == "" && inputList[3].value == "") {
    //     alert('Nuk jane te mbushura te dhenat!');
    // } else if (inputList[0].value == "") {
    //     alert('Shenoni Username');
    // } else if (inputList[1].value == "") {
    //     alert('Shenoni Email');
    // } else if (inputList[2].value == "") {
    //     alert('Shenoni Password');
    // } else if (inputList[3].value == "") {
    //     alert('Shenoni Confirm Password');
    // } else if (inputList[2].value != inputList[3].value) {
    //     alert('Password dhe Confirm Password nuk jane te njejte!');
    // } else {
    return true;
    // }
    //  else {
    //     alert('Regjistrimi u be me sukses!');
    // }
>>>>>>> 4d7884145e242fc709c723c09e168bfa612692ae
}