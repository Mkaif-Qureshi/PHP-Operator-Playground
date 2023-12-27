<?php session_start(); ?>
<?php 
    $val = $_POST['val'];//for square
    $length = $_POST['length'];//for rectangle
    $width = $_POST['width'];//for rectangle
    $side = $_POST['side'];//for triangle
    $r = $_POST['r'];//for circle
    $a = $_POST['a'];//for cube
    $l = $_POST['len'];//for cuboid
    $b = $_POST['bre'];//for cuboid
    $h = $_POST['hei'];//for cuboid
    $r1 = $_POST['r1'];//for cylinder
    $h1 = $_POST['h1'];//for cylinder
    $r2 = $_POST['r2'];//for sphere
    $r3 = $_POST['r3'];//for hemisphere
        if(isset($val) && $val>0){
            $area = round(pow($val, 2), 2);
            $perimeter = round($val*4, 2);
            $diagonal = round(sqrt(2)*$val, 2);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Area: $area</b> unit sq.<br><b>Perimeter: $perimeter</b> unit <br><b>Diagonal: $diagonal</b> unit</div>
            </form>";
            header("location: square.php");
        }
        elseif(isset($length) && isset($width)  && $length>0 && $width>0){
            $area = round($length*$width, 2);
            $perimeter = round(($length*2) + ($width*2), 2);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Area: $area</b> unit sq.<br><b>Perimeter: $perimeter</b> unit </div>
            </form>";
            header("location: rectangle.php");
        }
        elseif(isset($side)&& $side>0){
            $area = round((sqrt(3)/4) * pow($side, 2), 2);
            $perimeter = round(3*$side, 2);
            $height = round((sqrt(3)/2) * $side, 2);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Area: $area</b> unit sq.<br><b>Perimeter: $perimeter</b> unit <br><b>Height: $height</b> unit </div>
            </form>";
            header("location: triangle.php");
        }
        elseif(isset($r)&& $r>0){
            $diameter = round(2*$r, 3);
            $area = round(pi() * pow($r, 2), 3);
            $circumference = round(pi()* $diameter, 3);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Area≈ $area</b> unit sq.<br><b>Circumference≈ $circumference</b> unit <br><b>Diameter: $diameter </b> unit </div>
            </form>";
            header("location: circle.php");
        }
        elseif(isset($a)&& $a>0){
            $v = round(pow($a, 3),3);
            $tsa = round(6 * pow($a, 2),3);
            $csa = round(4 * pow($a, 2),3);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Volume: $v</b> unit cu.<br><b>Total Surface Area: $tsa</b> unit sq. <br><b>Curved Surface area: $csa </b> unit sq. </div>
            </form>";
            header("location: cube.php");
        }
        elseif(isset($l)&& isset($b) && isset($h)&& $l>0 && $b>0 && $h>0){
            $v = round($l*$b*$h, 2);
            $tsa = round(2 *(($l*$b)+($b*$h)+($h*$l)), 2);
            $csa =round((2*$h)*($l*$b), 2);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1>            </center>
            <div class'success'><b>Volume: $v</b> unit cu.<br><b>Total Surface Area: $tsa</b> unit sq. <br><b>Curved Surface area: $csa </b> unit sq. </div>
            </form>";
            header("location: cuboid.php");
        }
        elseif(isset($r1)&& isset($h1)&& $r1>0 && $h1>0){
            $v = round(pi()* pow($r1, 2) *$h1, 2);
            $tsa = round(2 * pi()*$r1*$h1, 2);
            $csa =round((2* pi()* $r1)* ($r1+$h1), 2);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Volume: $v</b> unit cu.<br><b>Total Surface Area: $tsa</b> unit sq. <br><b>Curved Surface area: $csa </b> unit sq. </div>
            </form>";
            header("location: cylinder.php");
        }
        elseif(isset($r2)&& $r2>0){
            $v = round((4/3)*(pi()*pow($r2, 3)), 2);
            $tsa = round(4 * pi()*pow($r2, 2), 2);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Volume: $v</b> unit cu.<br><b>Total Surface Area and Curved Surface area: $tsa</b> unit sq. <br></div>
            </form>";
            header("location: sphere.php");
        }
        elseif(isset($r3)&& $r3>0){
            $v = round((2/3)*(pi()*pow($r3, 3)), 2);
            $tsa = round(3 * pi()*pow($r3, 2), 2);
            $csa = round(2 * pi()*pow($r3, 2), 2);
            $_SESSION['result']= "
            <form class='result'>
            <center><h1>RESULT</h1></center>
            <div class'success'><b>Volume: $v</b> unit cu.<br><b>Total Surface Area: $tsa</b> unit sq. <br><b>Curved Surface area: $csa </b> unit sq. </div>
            </form>";
            header("location: hemisphere.php");
        }
        else{
            $_SESSION['result']= "
                <form class='result'>
                <center><h1>RESULT</h1>
                <div class='error'>invalide input!!!</div>
                </center>
                </form>";
                header("location: square.php");
        }

?>
<!-- is_int() will return true if the value type is integer. ctype_digit() will return true if the type is string but the value of the string is an integer. -->