<?php include('partials/menu.php') ?>
<style>
    form input[type=number]{
            width: 90px;
        }
</style>
<?php
    if(isset($_SESSION['result'])){
        echo $_SESSION['result'];
        unset($_SESSION['result']);
} ?>
<form action="convert.php" method="POST" style="width: 50%;">
        <h3>CONVERSION</h3><br><br>
    <label for="val">VALUE:</label>
    <input type="number" name="num" id="val">
    <select id="val1" name="pre">
        <option value="none">-Pre-</option>
        <option value="f" disabled="disabled">feet</option>
        <option value="i" disabled="disabled">inche</option>
        <option value="m" disabled="disabled">Milli</option>
        <option value="c" disabled="disabled">Centi</option>
        <option value="d" disabled="disabled">Deci</option>
        <option value="1">1</option>
        <option value="D" disabled="disabled">Deca</option>
        <option value="h" disabled="disabled">Hecto</option>
        <option value="k" disabled="disabled">Kilo</option>
        
    </select>
    <select id="val1" name="post">
        <option value="none">-Post-</option>
        <option value="meter">Meter</option>
        <option value="liter">Liter</option>
    </select>
    CONVERT TO
    <select id="var1" name="conv">
        <option value="none">-select-</option>
        <option value="f">feet</option>
        <option value="i">inche</option>
        <option value="m">Milli</option>
        <option value="c">Centi</option>
        <option value="d">Deci</option>
        <option value="1">1</option>
        <option value="D">Deca</option>
        <option value="h">Hecto</option>
        <option value="k">Kilo</option>

    </select><br><br>
    <center class="btn"><input type="submit" value="CONVERT" name="convert"></center>

</form>
<?php include('partials/footer.php') ?>
