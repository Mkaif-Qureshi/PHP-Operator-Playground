<?php include('partials/menu.php')?>

<?php
    if(isset($_SESSION['result'])){
        echo $_SESSION['result'];
        unset($_SESSION['result']);
    }
?>

<form action="arithmatic-operation.php" method="POST">
    <h3>ARITHMATIC OPERATORS</h3><br><br>
    <label for="number1">NUMBER 1:</label>
    <input type="number" name="num1" id="number1"><br><br>

    <label for="number2">NUMBER 2:</label>
    <input type="number" name="num2" id="number2"><br><br>
    <div class="btn">

        <input type="submit" value="ADDITION (+)" name="add">
        <input type="submit" value="SUBTRACTION (-)" name="sub">
        <input type="submit" value="MULTIPLICATION (*)" name="mul">
        <input type="submit" value="DIVISION (/)" name="div">
        <input type="submit" value="MODULUS (%)" name="mod">
        <input type="submit" value="EXPONENTIAL (**)" name="exp">
    </div>

</form>


<?php include('partials/footer.php')?>