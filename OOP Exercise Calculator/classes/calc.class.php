<?php
    class Calc{
        public $operator;
        public $num1;
        public $num2;

        public function __construct(string $string, int $one, int $two) {
            $this->operator = $string;
            $this->num1 = $one;
            $this->num2 = $two;
        }
        public function calculator() {
            switch ($this->operator) {
                case "add":
                    return $this->num1 + $this->num2;
                case "sub":
                    return $this->num1 - $this->num2;
                case "mul":
                    return $this->num1 * $this->num2;
                case "div":
                    return $this->num1 / $this->num2;
                default:
                    echo "Invalid operator";
                    break;
            }
        }
    }