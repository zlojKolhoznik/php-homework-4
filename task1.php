<form method="get">
    <input type="number" name="num1" id="num1" placeholder="First number">
    <input type="number" name="num2" id="num2" placeholder="Second number">
    <input type="text" name="action" id="action" placeholder="Action sign">
    <input type="submit" value="Calculate">
</form>
<?php
function calculate($num1, $num2, $action) {
    if ($action == '/' && $num2 == 0) {
        return "<strong style='color: red'>DivisionByZero error</strong>";
    }
    switch ($action) {
        case '+': return $num1 + $num2;
        case '-': return $num1 - $num2;
        case '*': return $num1 * $num2;
        case '/': return $num1 / $num2;
        case '^': return pow($num1, $num2);
        default: return "<strong style='color: red'>IncorrectOperationError</strong>";
    }
}
if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["action"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $action = $_GET["action"];
    echo "$num1 $action $num2 = " . calculate($num1, $num2, $action);
}
