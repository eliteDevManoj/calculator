<?php

class Calculator {

    private $operator;
    private $operandOne;
    private $operandTwo;

    public function __construct($operator, $operandOne, $operandTwo) {

        $this->operator = $operator;
        $this->operandOne = $operandOne;
        $this->operandTwo = $operandTwo;
    }

    public function calculate(){

        if($this->operator == '+') {

            return $this->add();
        }

        if($this->operator == '-'){

            return $this->subtract();
        }

        if($this->operator == '*'){

            return $this->multiply();
        }

        if($this->operator == "/"){

            return $this->divide();
        }
        else{

            return [
                'error' => true,
                'message' => "Please select a valid operator"
            ];
        }
    }

    public function add(){

        $firstOperator = isset($this->operandOne) ? (float) $this->operandOne : 0;
        $secondOperator = isset($this->operandTwo) ? (float) $this->operandTwo : 0;

        $result = $firstOperator + $secondOperator;

        return [
            "success" => true,
            "result" => $result,
        ];
    }

    public function subtract(){

        $firstOperator = isset($this->operandOne) ? (float) $this->operandOne : 0;
        $secondOperator = isset($this->operandTwo) ? (float) $this->operandTwo : 0;

        $result = $firstOperator - $secondOperator;

        return [
            "success" => true,
            "result" => $result,
        ];
    }

    public function multiply(){

        $firstOperator = isset($this->operandOne) ? (float) $this->operandOne : 0;
        $secondOperator = isset($this->operandTwo) ? (float) $this->operandTwo : 0;

        $result = $firstOperator * $secondOperator;

        return [
            "success" => true,
            "result" => $result,
        ];
    }

    public function divide(){

        $firstOperator = isset($this->operandOne) ? (float) $this->operandOne : 0;
        $secondOperator = isset($this->operandTwo) ? (float) $this->operandTwo : 0;

        $result = $firstOperator / $secondOperator;

        return [
            "success" => true,
            "result" => $result,
        ];
    }
}