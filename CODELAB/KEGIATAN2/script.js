function calculate() {
    var num1 = parseInt(document.getElementById("num1").value);
    var num2 = parseInt(document.getElementById("num2").value);
    var result = num1 + num2;
    document.getElementById("result").textContent = result;
}

function reset() {
    document.getElementById("num1").value = '';
    document.getElementById("num2").value = '';
    document.getElementById("result").textContent = '0';
}
