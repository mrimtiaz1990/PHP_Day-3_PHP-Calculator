<?php
class Calculator{
    public function Addition($numOne, $numTwo)
    {
        echo "1st Number + 2nd Number = " .($numOne+$numTwo);
    }
    public function Subtruction($numOne, $numTwo)
    {
        echo "1st Number - 2nd Number = " . ($numOne - $numTwo);
    }
    public function Multiplication($numOne, $numTwo)
    {
        echo "1st Number x 2nd Number = " . ($numOne * $numTwo);
    }
    public function Division($numOne, $numTwo)
    {
        echo "1st Number / 2nd Number = " . ($numOne / $numTwo);
    }
    public function mDivision($numOne, $numTwo)
    {
        echo "1st Number / 2nd Number = " . (($numOne-($numOne%$numTwo)) / $numTwo). " & Reminder = " .($numOne % $numTwo);
    }
    public function Exponentiation($numOne, $numTwo)
    {
        echo "1st Number x^ 2nd Number = " . ($numOne ** $numTwo);
    }
    public function Modulus($numOne, $numTwo)
    {
        echo "1st Number / 2nd Number (Reminder) = " . ($numOne % $numTwo);
    }
    public function Root($numOne, $numTwo)
    {
        echo "1st Number Root = ". sqrt($numOne). " <br> 2nd Number Root = " . sqrt($numTwo);
    }
    public function greaterThan($numOne, $numTwo)
    {
        if($numOne>$numTwo){
            echo "Large Number Between 1st & 2nd Number = ".$numOne ;
        }else{
            echo "Large Number Between 1st & 2nd Number = " . $numTwo;
        }
    }
    public function lessThan($numOne, $numTwo)
    {
        if ($numOne < $numTwo) {
            echo "Small Number Between 1st & 2nd Number = " . $numOne;
        } else {
            echo "Small Number Between 1st & 2nd Number = " . $numTwo;
        }
    }
}
?>