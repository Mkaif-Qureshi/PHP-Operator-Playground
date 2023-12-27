<?php include('partials/menu.php') ?>
<?php 
    //get the numbers
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if(empty($num1) && empty($num2)){
        $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'error'>Enter values!!!</div>
            </center>
            </form>";
            header("location:arithmatic.php");
    }
    else{
        if((isset($_POST["add"])) == TRUE){
            $res =$num1 + $num2;
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$num1 + $num2 = $res</div>
            </center>
            </form>";
            header("location:arithmatic.php");
        }
        elseif((isset($_POST["sub"])) == TRUE){
            $res =$num1 - $num2;
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$num1 - $num2 = $res</div>
            </center>
            </form>";
            header("location:arithmatic.php");
            echo "<br>$res";
        }
        elseif((isset($_POST["mul"])) == TRUE){
            $res =$num1 * $num2;
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$num1 * $num2 = $res</div>
            </center>
            </form>";
            header("location:arithmatic.php");
            echo "<br>$res";
        }
        elseif((isset($_POST["div"])) == TRUE){
            $res =$num1 / $num2;
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$num1 / $num2 = $res</div>
            </center>
            </form>";
            header("location:arithmatic.php");
            echo "<br>$res";
        }
        elseif((isset($_POST["mod"])) == TRUE){
            $res =$num1 % $num2;
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$num1 % $num2 = $res</div>
            </center>
            </form>";
            header("location:arithmatic.php");
            echo "<br>$res";
        }
        elseif((isset($_POST["exp"])) == TRUE){
            $res =$num1 ** $num2;
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'success'>num1 ** $num2 = $res</div>
            </center>
            </form>";
            header("location:arithmatic.php");
            echo "<br>$res";
        }
        else{
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'error'>Enter values!!!</div>
            </center>
            </form>";
            header("location:arithmatic.php");
        }
    }
 
?>