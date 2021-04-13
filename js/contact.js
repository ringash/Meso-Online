function validateContact() {
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
        alert("Shenoni Emrin");
        return false;
    } else if (inputList[1].value == "") {
        alert("Shenoni Email");
        return false;
    } else if (inputList[2].value == "") {
        alert("Shenoni Temen");
        return false;
    } else if (inputList[3].value == "") {
        alert("Shenoni Mesazhin");
        return false;
    } else {
        alert("Do te degjohemi se shpejti!");
        return true;
=======
function validate() {
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
>>>>>>> 4d7884145e242fc709c723c09e168bfa612692ae
    }
}