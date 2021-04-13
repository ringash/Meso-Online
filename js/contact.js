document.getElementById('submit').addEventListener("click", function(event) {
    event.preventDefault();
    validate();
})

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
    }
    //  else {
    //     alert('Do te degjohemi se shpejti!');
    // }
}