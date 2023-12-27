<?php include('partials/menu.php')?>
<!-- php code for fuction which needs two input strings -->
<?php

    $s1 =$_POST['str2'];
    $s2 =$_POST['str3'];
    if(!empty($s1) && !empty($s2)){
        if(isset($_POST['strcmp'])){
            $res =strcmp($s1, $s2);
            if($res==0){
                $res1 = "String <b>$s1</b> is equal to String <b>$s2</b>";
            }elseif($res>0){
                $res1 = "String <b>$s1</b> is greater than String <b>$s2</b> by <b>$res</b> charecters";
            }else{
                $res1 = "String <b>$s1</b> is smaller than String <b>$s2</b> by <b>$res</b> charecters";
            }

            $_SESSION['result']="
                <form>
                <center>
                    <h1>RESULT</h1>
                    <h3>!case sensetive!</h3>
                    <div class'error'>$res1</div>
                </center>
                </form>";

        header("location:string.php");
        }
        elseif(isset($_POST['strcasecmp'])){
            $res =strcasecmp($s1, $s2);
            if($res==0){
                $res1 = "String <b>$s1</b> is equal to String <b>$s2</b>";
            }elseif($res>0){
                $res1 = "String <b>$s1</b> is greater than String <b>$s2</b> by <b>$res</b> charecters";
            }else{
                $res1 = "String <b>$s1</b> is smaller than String <b>$s2</b> by <b>$res</b> charecters";
            }

            $_SESSION['result']="
                <form>
                <center>
                    <h1>RESULT</h1>
                    <div class'error'>$res1</div>
                </center>
                </form>";

        header("location:string.php");
        }
        elseif(isset($_POST['substr_count'])){
            $res = substr_count($s1, $s2);
            if($res>=0){
                $res1= "<b>$s2</b> occurs <b>$res</b> times in String <b>$s1</b>";
            }else{
                $res1= "Not found!!!";
            }
            $_SESSION['result']="
                <form>
                <center>
                    <h1>RESULT</h1>
                    <div class'error'>$res1</div>
                </center>
                </form>";

            header("location:string.php");
        }
        elseif(isset($_POST['strpos'])){
            $res = strpos($s1, $s2);
            if($res>0){
                $res1= "Position of the first occurrence of <b>$s2</b> string<b>$s1: </b><b>$res</b>";
            }else{
                $res1= "Not found!!!";
            }
            $_SESSION['result']="
                <form>
                <center>
                    <h1>RESULT</h1>
                    <div class'error'>$res1</div>
                </center>
                </form>";

            header("location:string.php");
        }
    }else{
        $_SESSION['result']="
        <form>
        <center>
            <h1>RESULT</h1>
            <div class'error'>Both strings are required!!!</div>
        </center>
        </form>";
        header("location:string.php");
    }


?>