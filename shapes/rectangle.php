<?php include('partials/menu.php')?>

    <div class="heading"><h2>RECTANGLE</h2></div>

    <div class="sec3">
        <section>
            <div class="img section-img">
                <img src="../images/rectangle.png" alt="square"><br>
            </div>
        </section>

        <section>
            <div>
                <form action="square-result.php" class="shapes-form" method="post">
                    <label for="square">Enter length of rectangle: </label>
                    <input type="number" name="length" id="square"  style="width: 25%;"><br><br>
                    <label for="square">Enter width of rectangle: </label>
                    <input type="number" name="width" id="square"  style="width: 25%;"><br><br>
                    <center>
                    <div class="btn">
                        <input type="submit" value="calculate">
                    </div>
                    </center>
                </form>
            </div>
        </section>
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

