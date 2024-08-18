<?php
require 'Calculator.php';

$operator = $_POST['operator'];
$operandOne = $_POST['operand_one'];
$operandTwo = $_POST['operand_two'];

if(empty($operandOne) || empty($operandTwo) || empty($operator)) {

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['data' => [
        'error' => true,
        'message' => 'please select valid operators and operands before submitting'
    ]]);
    
    die;
}

$calculator = new Calculator($operator, $operandOne, $operandTwo);
$result = $calculator->calculate();

header('Content-Type: application/json; charset=utf-8');
echo json_encode(['data' => $result]);

die;