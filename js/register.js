function validateRegister() {
    var inputList = document.getElementsByClassName("input1");

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
}