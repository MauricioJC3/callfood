function calculate() {
    secondOperand = parseFloat(document.getElementById('display').textContent);
    let result;

    switch (currentOperator) {
        case '+':
            result = firstOperand + secondOperand;
            break;
        case '-':
            result = firstOperand - secondOperand;
            break;
        case '*':
            result = firstOperand * secondOperand;
            break;
        case '/':
            if (secondOperand !== 0) {
                result = firstOperand / secondOperand;
            } else {
                result = "Error: Division by zero";
            }
            break;
        default:
            result = "Error";
            break;
    }

    updateDisplay(result);
}