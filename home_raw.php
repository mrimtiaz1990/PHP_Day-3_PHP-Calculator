<?php
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
</head>

<body>
    <h1>PHP Calculator</h1>
    <form action="" method="post">
        <label for="">Enter 1st Number</label>
        <input type="number" name="num1" placeholder="Enter 1st Number">
        <br>
        <label for="">Enter 2nd Number</label>
        <input type="number" name="num2" placeholder="Enter 2nd Number">
        <br>
        <input type="submit" name="Addition" value=" Plus: (+) ">
        <input type="submit" name="Subtruction" value=" Minus: (-) ">
        <input type="submit" name="Multiplication" value=" Multiply: (x) ">
        <input type="submit" name="Division" value=" Divided: (/) ">
        <input type="submit" name="mDivision" value=" Divided: A(x/y) ">
        <input type="submit" name="Exponentiation" value=" Power: (x*) ">
        <input type="submit" name="Modulus" value=" Reminder: (%) ">
        <input type="submit" name="Root" value=" Square Root">
        <input type="submit" name="greaterThan" value=" Large Number (>) ">
        <input type="submit" name="lessThan" value=" Small Number (<) ">
    </form>
    <?php
    
    $numOne = $_POST["num1"];
    $numTwo = $_POST["num2"];
    $myCal = new Calculator;

    if (isset($_POST["Addition"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->Addition($numOne, $numTwo);
        }
    } elseif (isset($_POST["Subtruction"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->Subtruction($numOne, $numTwo);
        }
    } elseif (isset($_POST["Multiplication"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->Multiplication($numOne, $numTwo);
        }
    } elseif (isset($_POST["Division"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->Division($numOne, $numTwo);
        }
    } elseif (isset($_POST["mDivision"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->mDivision($numOne, $numTwo);
        }
    } elseif (isset($_POST["Exponentiation"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->Exponentiation($numOne, $numTwo);
        }
    } elseif (isset($_POST["Modulus"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->Modulus($numOne, $numTwo);
        }
    } elseif (isset($_POST["Root"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->Root($numOne, $numTwo);
        }
    } elseif (isset($_POST["greaterThan"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->greaterThan($numOne, $numTwo);
        }
    } elseif (isset($_POST["lessThan"])) {
        if (empty($numOne) || empty($numTwo)) {
            echo "Number One and Number Two are required";
        } else {
            $myCal->lessThan($numOne, $numTwo);
        }
    } 
    else {
        echo "Error";
    }
    ?>

</body>

</html>



<!-- <?php
        $num01 = $_POST["num1"];
        $num02 = $_POST["num2"];

        if (empty($num01) || empty($num02)) {
            echo "Both Numbers are required";
        } elseif (isset($_POST["Addition"])) {
            $muCal = new Calculator;
            $myCal->Addition($num01, $num02);
        }
        ?> -->