<?php include('partials/menu.php') ?>
<?php
    if(isset($_SESSION['result'])){
        echo $_SESSION['result'];
        unset($_SESSION['result']);
    }
?>

<form action="logical-operations.php" method="POST" style="width: 38%">
    <h3>LOGICAL OPERATORS</h3><br><br>
    <label for="var1">VARIABLE 1:</label>
    <select id="var1" name="var1">
        <option value="none">-select-</option>
        <option value="TRUE">1</option>
        <option value="FALSE">0</option>
    </select>

    <label for="var2">VARIABLE 2:</label>
    <select id="var1" name="var2">
        <option value="none">-select-</option>
        <option value="TRUE">1</option>
        <option value="FALSE">0</option>
    </select><br><br>
    <div class="btn">
    <input type="submit" value="AND (&&)" name="and">
    <input type="submit" value="OR (||)" name="or">
    <input type="submit" value="XOR" name="xor">
    <input type="submit" value="NOT (!)" name="not">
</div>
</form>

<?php include('partials/footer.php') ?>