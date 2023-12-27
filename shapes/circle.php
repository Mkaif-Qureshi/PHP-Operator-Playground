<?php include('partials/menu.php')?>

    <div class="heading"><h2>CIRCLE</h2></div>

    <div class="sec3">
        <section>
            <div class="img section-img">
                <img src="../images/circle.png" alt="square"><br>
            </div>
        </section>

        <section>
            <div>
                <form action="square-result.php" class="shapes-form" method="post">
                    <label for="circle">Enter radius for circle: </label>
                    <input type="number" name="r" id="circle"  style="width: 20%;"><br><br>
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

