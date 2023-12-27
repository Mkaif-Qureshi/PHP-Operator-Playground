<?php include('partials/menu.php')?>
<!-- php code for fuction which needs two input strings -->
<?php

    $s1 =$_POST['str4'];
    $s2 =$_POST['str5'];
    $s3 =$_POST['str6'];

    if(!empty($s1) && !empty($s2) && !empty($s3)){
        if(isset($_POST['str_replace'])){
            $res =str_replace($s2, $s3, $s1);
            $res1="Replaced String: <b>$res</b>";
            $_SESSION['result']="
            <form style='width: 80%;'>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$res1</div>
            </center>
            </form>";
            header("location:string.php"); 
        }
        elseif(isset($_POST['substr_replace'])){
            if(is_numeric($s3)){
            $res =substr_replace($s1, $s2, $s3);
            $res1="Replaced String: <b>$res</b>";
            $_SESSION['result']="
            <form style='width: 80%;'>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$res1</div>
            </center>
            </form>";
            header("location:string.php");
            }
        }
        elseif(isset($_POST['chunk_split'])){
            if(is_numeric($s3)){
            $res =chunk_split($s1, $s3, $s2);
            $res1="Spllited $s1 by $s3 chrecters: <b>$res</b>";
            $_SESSION['result']="
            <form style='width: 80%;'>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$res1</div>
            </center>
            </form>";
            header("location:string.php");
            }
        }
        elseif(isset($_POST['substr'])){
            if(is_numeric($s3)&& is_numeric($s2)){
            $res =substr($s1, $s2, $s3);
            $res1="Substring is: <b>$res</b>";
            $_SESSION['result']="
            <form style='width: 80%;'>
            <center>
                <h1>RESULT</h1>
                <div class'success'>$res1</div>
            </center>
            </form>";
            header("location:string.php");
            }
        }
    }
    else{
        $_SESSION['result']="
        <form>
        <center>
            <h1>RESULT</h1>
            <div class'error'>All 3 strings are required!!!</div>
        </center>
        </form>";
        header("location:string.php");
    }


?>