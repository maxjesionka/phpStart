<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>

<body>



    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='post'>

        <input type="number" name='num01' placeholder='number one'>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name='num02' placeholder='number two'>
        <button>Calculate</button>
    </form>


    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num01 = filter_input(INPUT_POST, 'num01', FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, 'num02', FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST['operator']);



        //error handlers
        $errors = false;
        if (empty($num01) || empty($num02)) {
            echo '<p>Fill all fields!</p>';
            $errors = true;
        }
        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo '<p>Write numbers!</p>';
            $errors = true;
        }

        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo '<p>Something went wrong!</p>';
            }
            echo '<p>' . $num01 . ' ' . $operator . ' ' . $num02 . '</p>';
            echo '<p>Result = ' . $value . '</p>';
        }
    }

    ?>





</body>

</html>