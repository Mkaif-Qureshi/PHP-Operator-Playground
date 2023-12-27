<?php include('partials/menu.php') ?>
<!-- php code for fuctions that needs only one input string -->
<?php
    $s1=$_POST['str1'];
    if(!empty($s1)){
    if(isset($_POST['strlen'])){
        $res =strlen($s1);
        $_SESSION['result']="
        <form>
        <center>
            <h1>RESULT</h1>
            <div class'sucess'>Length of </br><b>$s1</b></br> string is </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");
    }
    elseif(isset($_POST['str_word_count'])){
        $res =str_word_count($s1);
        $_SESSION['result']="
        <form style='width: 40%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>Number of words in </br><b>$s1</b></br> string is/are </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
    elseif(isset($_POST['strrev'])){
        $res =strrev($s1);
        $_SESSION['result']="
        <form style='width: 40%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>Reverse of </br><b>$s1</b></br> string is </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
    elseif(isset($_POST['count_chars'])){
        $res =count_chars($s1, 3);
        $_SESSION['result']="
        <form style='width: 40%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>All unique characters used in</br><b>$s1</b></br> string are </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
    elseif(isset($_POST['lcfirst'])){
        $res =lcfirst($s1);
        $_SESSION['result']="
        <form style='width: 80%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>Returning </br><b>$s1</b></br> string with first charecter lower case </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
    elseif(isset($_POST['strtoupper'])){
        $res =strtoupper($s1);
        $_SESSION['result']="
        <form style='width: 80%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>Uppercase of </br><b>$s1</b></br> string </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
    elseif(isset($_POST['strtolower'])){
        $res =strtolower($s1);
        $_SESSION['result']="
        <form style='width: 80%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>Lowercase of </br><b>$s1</b></br> string </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
    elseif(isset($_POST['ucfirst'])){
        $res =ucfirst($s1);
        $_SESSION['result']="
        <form style='width: 80%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>First character in</br><b>$s1</b></br> string to uppercase: </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
    elseif(isset($_POST['ucwords'])){
        $res = ucwords($s1);
        $_SESSION['result']="
        <form style='width: 80%;'>
        <center>
            <h1>RESULT</h1>
            <div class'success'>First character of each word in </br><b>$s1</b></br> string with uppercase: </br><b>$res</b></div>
        </center>
        </form>";
        header("location:string.php");        
    }
}else{
    $_SESSION['result']="
    <form>
    <center>
        <h1>RESULT</h1>
        <div class'error'>Enter a String!!!</div>
    </center>
    </form>";
    header("location:string.php");
}
?>
