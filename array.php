<?php include('partials/menu.php')?>
<?php
    $count1 =$_POST['num1'];
    $count2 =$_POST['num2'];
    if(isset($_POST['submit']) && !empty($count1) && !empty($count2)){
        print "<form method='POST' action='array.php' class='form-arr'>";
        for($i=0; $i<$count1; $i++){
            print "<label>Enter number for element $i of 1st array element:</label>\t";
            print "<input type='text' name='txt$i' size=5 placeholder='value $i'>&nbsp&nbsp</br>";
        }

        for($i=0; $i<$count2; $i++){
            print "<label>Enter number for element $i of 2nd array element:</label>";
            print "<input type='text' name='txt$i' size=5 placeholder='value $i'>&nbsp&nbsp</br>";
        }

        print "<br><input type='submit' value='submit' class='btn'>";
        print "</form>";
    }
    else{
        // header("location: array1.php");
        print("Array is not yet build, [todo]");
    }
    $arr = array();
    if(isset($_POST['txt0'])){
        for($i=0; $i<5; $i++){
            $arr[$i] = $_POST['txt'.$i];
        }
        print "<pre>";
        print_r($arr);
        print "</pre>";
    }
?>
<?php include('partials/footer.php');?>