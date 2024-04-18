<?php
if(!empty($_GET['o1']) && !empty($_GET['o2']) && !empty($_GET['op'])){
    $num1 = $_GET['o1'];
    $num2 = $_GET['o2'];
    $operand = $_GET['op'];
    $result = 0;
    if($operand == '+'){
        $result = $num1 + $num2;
    }
    if($operand == '-'){
        $result = $num1 - $num2;
    }
    if($operand == '*'){
        $result = $num1 * $num2;
    }
    if($operand == '/'){
        $result = $num1 / $num2;
    }
}
?>
<html>
    <head>

    </head>
    <body>
    <form action="z1.php" method="get">
    <section>
        <label>
            First operand
            <input type="text" name="o2">
        </label>
    </section>
    <section>
        <label>
            Second operand
            <input type="text" name="o1">
        </label>
    </section>
    <section>
        <label>
            Operation
        <select name="op">
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="+">+</option>
            <option value="-">-</option>
        </select>
        </label>
    </section>
        <input type="submit" name="sub">

</form>
    <div name="result">
        <?php
        if(!empty($result)){
            echo "Result: ". $result;
        }
        ?>
    </div>
</body>
</html>
