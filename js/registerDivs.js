function show(number) {
  var format = document.getElementsByClassName("forma");
  if (number == 0) {
    format[0].classList.add("shown");
    format[0].classList.remove("hidden");

    format[1].classList.add("hidden");
    format[1].classList.remove("shown");
  } else if (number == 1) {
    format[1].classList.add("shown");
    format[1].classList.remove("hidden");

    format[0].classList.add("hidden");
    format[0].classList.remove("shown");
  }
}