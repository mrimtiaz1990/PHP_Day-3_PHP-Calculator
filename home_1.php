<?php
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
</head>

<body>
    <div style="background-color: darkkhaki; color: darkslategrey; margin-left: 20%; margin-right: 20%; border-radius: 10%;" align="center">
        <table align="center">
            <form action="" method="post">
                <tr>
                    <td colspan="4" align="center">
                        <h1>PHP Calculator</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="">
                            <strong>Enter 1st Number: </strong>
                        </label>
                    </td>
                    <td colspan="2">
                        <input type="number" name="num1" placeholder="Enter 1st Number">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="">
                            <strong>Enter 2nd Number: </strong>
                        </label>
                    </td>
                    <td colspan="2">
                        <input type="number" name="num2" placeholder="Enter 2nd Number">
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="left">
                        <h2>Operators</h2>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <input type="submit" name="Addition" value=" Plus: (+) ">
                    </td>
                    <td>
                        <input type="submit" name="Subtruction" value=" Minus: (-) ">
                    </td>
                    <td>
                        <input type="submit" name="Multiplication" value=" Multiply: (x) ">
                    </td>
                    <td>
                        <input type="submit" name="Division" value=" Divided: (/) ">
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <input type="submit" name="mDivision" value=" Divided: A(x/y) ">
                    </td>
                    <td>
                        <input type="submit" name="Exponentiation" value=" Power: (x*) ">
                    </td>
                    <td>
                        <input type="submit" name="Modulus" value=" Reminder: (%) ">
                    </td>
                    <td>
                        <input type="submit" name="Root" value=" Square Root">
                    </td>
                </tr>

                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name="greaterThan" value=" Large Number (>) ">
                    </td>
                    <td colspan="2">
                        <input type="submit" name="lessThan" value=" Small Number (<) ">
                    </td>
                </tr>
            </form>
        </table>
        <table style="font-weight: bold; font-size: 200%;">
            <tr>
                <td align="center">
                    <?php

                    $numOne = $_POST["num1"];
                    $numTwo = $_POST["num2"];
                    $myCal = new Calculator;

                    if (isset($_POST["Addition"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->Addition($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["Subtruction"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->Subtruction($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["Multiplication"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->Multiplication($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["Division"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->Division($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["mDivision"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->mDivision($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["Exponentiation"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->Exponentiation($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["Modulus"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->Modulus($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["Root"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->Root($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["greaterThan"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->greaterThan($numOne, $numTwo);
                        }
                    } elseif (isset($_POST["lessThan"])) {
                        if (empty($numOne) || empty($numTwo)) {
                            echo "<p style='color:red;'>Number One and Number Two are required</p>";
                        } else {
                            $myCal->lessThan($numOne, $numTwo);
                        }
                    } else {
                        echo "Error";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>


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