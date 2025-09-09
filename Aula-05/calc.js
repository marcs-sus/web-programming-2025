function calculate() {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    const operation = document.getElementById('operation').value;
    let result;

    switch (operation) {
        case '+':
            result = num1 + num2;
            break;
        case '-':
            result = num1 - num2;
            break;
        case '*':
            result = num1 * num2;
            break;
        case '/':
            result = num1 / num2;
            break;
        case '^':
            result = Math.pow(num1, num2);
            break;
        default:
            result = 'Operação inválida';
    }

    const resultElement = document.getElementById('result');
    resultElement.textContent = `Resultado: ${result}`;

    if (result < 0) {
        resultElement.style.backgroundColor = 'red';
    } else if (result > 0) {
        resultElement.style.backgroundColor = 'green';
    } else if (result === 0) {
        resultElement.style.backgroundColor = 'gray';
    } else {
        resultElement.style.backgroundColor = 'white';
    }
}