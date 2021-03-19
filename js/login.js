document.getElementById('submit').addEventListener("click", function(event) {
    event.preventDefault();
    validate();
})

function validate() {
    var inputList = document.getElementsByClassName('input1');
        //login-form
        if (inputList[0].value == "" && inputList[1].value == "") {
            alert('Nuk jane te mbushura te dhenat!');
            return false;
        } else if (inputList[0].value == "") {
            alert('Shenoni Username');
            return false;
        } else if (inputList[1].value == "") {
            alert('Shenoni Password');
            return false;
        }
        //  else {
        //     alert('Kycja u be me sukses!');
        // }
}