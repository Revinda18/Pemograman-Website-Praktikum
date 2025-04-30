function appendToResult(value) {
    const resultField = document.getElementById('result');
    resultField.value += value;
}

function clearAll() {
    const resultField = document.getElementById('result');
    resultField.value = '';
}

function calculateResult() {
    const resultField = document.getElementById('result');
    try {
        const result = eval(resultField.value.replace('^', '**').replace('\\', '/'));
        resultField.value = result;
    } catch (error) {
        resultField.value = 'Error';
    }
}
