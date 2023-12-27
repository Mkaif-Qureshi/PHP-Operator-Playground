<?php include('partials/menu.php')?>
<?php
    $bool1= $_POST['var1'];
    $bool2= $_POST['var2'];

    if($bool1=='TRUE' && $bool2=='TRUE'){
        $bool1 = TRUE;
        $bool2 = TRUE;
    }
    elseif($bool1=='FALSE' && $bool2=='TRUE'){
        $bool1 = FALSE;
        $bool2 = TRUE;
    }
    elseif($bool1=='TRUE' && $bool2=='FALSE'){
        $bool1 = TRUE;
        $bool2 = FALSE;
    }
    elseif($bool1=='FALSE' && $bool2=='FALSE'){
        $bool1 = FALSE;
        $bool2 = FALSE;
    }
    elseif($bool1=='TRUE'){
        $bool1 = TRUE;
    }
    elseif($bool1== 'FALSE'){
        $bool1 =FALSE;
    }
    else{
        $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'error'>Enter values!!!</div>
            </center>
            </form>";
        header("location:logical.php");
    }
if(is_bool($bool1) && is_bool($bool2)){
    if((isset($_POST["and"])) == TRUE){
        $res =$bool1 && $bool2;
        $_SESSION['result']="
        <form>
        <center>
            <h1>RESULT</h1>
            <h4>True if both values are true</h4>
            <div>$bool1 AND $bool2 = $res</div><br>
            <div>$bool1 && $bool2 = $res</div>
            </center>
            </form>";
            header("location:logical.php");
        }
    elseif((isset($_POST["or"])) == TRUE){
            $res =$bool1 || $bool2;
            $_SESSION['result']="
            <form>
            <center>
            <h1>RESULT</h1>
            <h4>True if either one value is  true</h4>
            <div>$bool1 OR $bool2 = $res</div>
            <div>$bool1 || $bool2 = $res</div>
        </center>
        </form>";
        header("location:logical.php");
        
    }
    elseif((isset($_POST["xor"])) == TRUE){
        $res =$bool1 xor $bool2;
        $_SESSION['result']="
        <form>
        <center>
        <h1>RESULT</h1>
        <h4>True if either one value is true, but not both</h4>
        <div>$bool1 XOR $bool2 = $res</div>
    </center>
    </form>";
    header("location:logical.php");
    }
}
elseif(is_bool($bool1)){    
    if((isset($_POST["not"])) == TRUE){
        $res =!$bool1;
        $_SESSION['result']="
        <form>
        <center>
        <h1>RESULT</h1>
        <h4>True if $x is not true</h4>
        <div>!$bool1 = $res</div>
    </center>
    </form>";
    header("location:logical.php");
}
}
else{
    $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'error'>Invalid Input!!!</div>
            </center>
            </form>";
        header("location:logical.php");
}
?>