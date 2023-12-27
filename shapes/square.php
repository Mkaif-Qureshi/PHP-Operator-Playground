<?php include('partials/menu.php')?>

    <div class="heading"><h2>SQUARE</h2></div>

    <div class="sec3">
        
        <section>
        <div class="img section-img">
            <img src="../images/square.png" alt="square"><br>
        </div>
        </section>
        <div>
            <form action="square-result.php" class="shapes-form" method="post">
                <label for="square">Enter side of square: </label>
                <input type="number" name="val" id="square"  style="width: 25%;"><br><br>
                <center>
                <div class="btn">
                    <input type="submit" value="calculate">
                </div>
                </center>
            </form>
        </div>
        <div>
            <?php
                if(isset($_SESSION['result'])){
                    echo $_SESSION['result'];
                    unset($_SESSION['result']);
                }
            ?>
        </div>

    </div>
</body>
<!-- footer statrs -->
<?php include('../partials/footer.php')?>

