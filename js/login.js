function validateLogin() {
    var inputList = document.getElementsByClassName('input1');

    if (inputList[0].value == "" && inputList[1].value == "") {
        alert('Nuk jane te mbushura te dhenat!');
        return false;
    } else if (inputList[0].value == "") {
        alert('Shenoni Username');
        return false;
    } else if (inputList[1].value == "") {
        alert('Shenoni Password');
        return false;
    } else {
        return true;
    }
}