<?php include('partials/menu.php') ?>
<form action='array.php' method="POST" style="width: 43%;">
    <label for='num'>Enter number of elements in 1st array :</label>&nbsp;
    <input type='number' id='num' name="num1" style="width: 23%;"><br><br>

    <label for='num'>Enter number of elements in 2nd array :</label>
    <input type='number' id='num' name="num2" style="width: 23%;"><br><br>

    <center>
        <div class="btn center">
        <input type='submit' value='submit' name='submit'>
        </div>
    </center>
</form>

<?php include('partials/footer.php'); ?>