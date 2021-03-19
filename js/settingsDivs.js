function show(number) {
    var format = document.getElementsByClassName("table");
    var indexShownTable = null;
    for (var i = 0; i < format.length; i++) {
        if (format[i].classList.contains("shown")) {
            indexShownTable = i;
        }
    }
    if (number == 0) {
        format[0].classList.replace("hidden", "shown");
        format[indexShownTable].classList.replace("shown", "hidden");
    } else if (number == 1) {
        format[1].classList.replace("hidden", "shown");
        format[indexShownTable].classList.replace("shown", "hidden");
    } else if (number == 2) {
        format[2].classList.replace("hidden", "shown");
        format[indexShownTable].classList.replace("shown", "hidden");
    } else if (number == 3) {
        format[3].classList.replace("hidden", "shown");
        format[indexShownTable].classList.replace("shown", "hidden");
    } else if (number == 4) {
        format[4].classList.replace("hidden", "shown");
        format[indexShownTable].classList.replace("shown", "hidden");
    }
}