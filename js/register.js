document.getElementById('submit').addEventListener("click", function(event) {
    event.preventDefault();
    validate();
})

function validate() {
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
    }
//  else {
//     alert('Regjistrimi u be me sukses!');
// }
}