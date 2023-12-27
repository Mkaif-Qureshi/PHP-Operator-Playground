<?php include('partials/menu.php'); ?>
<?php
     $val =$_POST['num'];
    // echo "<br>";
     $prefix =$_POST['pre'];
    // echo "<br>";
     $postfix =$_POST['post'];
    // echo "<br>";
     $conv =$_POST['conv'];
    // echo "<br>";


        if(!empty($val) && $prefix!='none' && $postfix!='none' && $conv!='none'){
            // for meter to all other conversions
            if($prefix=="1"){
                if($conv=="f"){

                    $res=$val*3.28084;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res feets</b></div>";
                    }
                    else{
                        echo $res1="<div><b>Can't convert from liter</b></div>";
                    }
                }
                elseif($conv=="i"){
                    $res=$val*39.3701;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res inches</b></div>";
                    }
                    else{
                        echo $res1="<div><b>Can't convert from liter</b></div>";
                    }       
                }
                elseif($conv=="1"){
                    $res=$val*1;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res meter</b></div>";
                    }else{
                        echo $res1="<div><b>$val liter</b>=<b>$res liter</b></div>";
                    }
                }
                elseif($conv=="d"){
                    $res=$val/10;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res decimeter</b></div>";
                    }else{
                        echo $res1="<div><b>$val liter</b>=<b>$res deciliter</b></div>";
                    }
                }
                elseif($conv=="c"){
                    $res=$val/100;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res centimeter</b></div>";
                    }else{
                        echo $res1="<div><b>$val liter</b>=<b>$res centiliter</b></div>";
                    }
                }
                elseif($conv=="m"){
                    $res=$val/1000;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res milimeter</b></div>";
                    }else{
                        echo $res1="<div><b>$val liter</b>=<b>$res mililiter</b></div>";
                    }
                }
                elseif($conv=="D"){
                    $res=$val*10;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res Decameter</b></div>";
                    }else{
                        echo $res1="<div><b>$val liter</b>=<b>$res Decaliter</b></div>";
                    }
                }
                elseif($conv=="h"){
                    $res=$val*100;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res Hectometer</b></div>";
                    }else{
                        echo $res1="<div><b>$val liter</b>=<b>$res Hectoliter</b></div>";
                    }
                }
                elseif($conv=="k"){
                    $res=$val*1000;
                    if($postfix=='meter'){
                    echo $res1="<div><b>$val meter</b>=<b>$res Kilometer</b></div>";
                    }else{
                        echo $res1="<div><b>$val liter</b>=<b>$res Kiloliter</b></div>";
                    }
                }
                
            }
        }
        else{
            $_SESSION['result']="
            <form>
            <center>
                <h1>RESULT</h1>
                <div class'error'>Invalid Input!!!</div>
                <div> All fields are required...</div>
            </center>
            </form>";
            header("location:conversion.php");
        }
?>