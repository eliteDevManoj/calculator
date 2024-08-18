<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="calc.css" rel="stylesheet">
  </head>
  <body>
    <h1> Calculator!</h1>

    <div class="calculator">
        <form action="Controller.php" method="POST" id="calc-form">
            <div class="calculator__output">0</div>
            <div class="calculator__keys">
                
                <input id="operator" type="hidden" name="operator" value="">
                <input id="operand-one" type="hidden" name="operand_one" value="">
                <input id="operand-two" type="hidden" name="operand_two" value="">
                <input id="output-string" type="hidden" name="output_string" value="">

                <button type="button" id="operator-add" class="calculator__key calculator__key--operator" value="+">+</button>
                <button type="button" id="operator-subtract" class="calculator__key calculator__key--operator" value="-">-</button>
                <button type="button" id="operator-multiply" class="calculator__key calculator__key--operator" value="*">&times;</button>
                <button type="button" id="operator-divide" class="calculator__key calculator__key--operator" value="/">÷</button>
                <button type="button" class="calculator__key operand" value="7">7</button>
                <button type="button" class="calculator__key operand" value="8">8</button>
                <button type="button" class="calculator__key operand" value="9">9</button>
                <button type="button" class="calculator__key operand" value="4">4</button>
                <button type="button" class="calculator__key operand" value="5">5</button>
                <button type="button" class="calculator__key operand" value="6">6</button>
                <button type="button" class="calculator__key operand" value="1">1</button>
                <button type="button" class="calculator__key operand" value="2">2</button>
                <button type="button" class="calculator__key operand" value="3">3</button>
                <button type="button" class="calculator__key operand" value="0">0</button>
                <button type="button" class="calculator__key operand" value=".">.</button>
                <button type="button" class="calculator__key" id="clear-display">AC</button>
                <button class="calculator__key calculator__key--enter" type="submit">=</button>
            </div>
        </form>
    </div>

    <script src="jquery.js"></script>
    <script src="calc.js"></script>
  </body>
</html>