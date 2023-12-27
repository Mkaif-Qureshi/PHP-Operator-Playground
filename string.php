<?php include('partials/menu.php')?>

<?php
    if(isset($_SESSION['result'])){
        echo $_SESSION['result'];
        unset($_SESSION['result']);
    }
?>

<br><h3>STRING FUNCTIONS</h3>
<div class="container"  style="width: 93%;">
<form action="string-functions.php" method="POST" class="str-form">
        <br>
        <label for="s1">STRING :</label>
        <input type="text" name="str1" placeholder="Enter first string" id="s1"><br><br>
        
        <div class="btn">
            <input type="submit" name="strlen" value='Str-length'>
            <input type="submit" name="str_word_count" value='Str Word Count'>
            <input type="submit" name="strrev" value='Str Reverse'>
            <input type="submit" name="count_chars" value='Count Charecters'>
            <input type="submit" name="lcfirst" value='First Charecter Lower'>
            <input type="submit" name="strtoupper" value='Uppercase'>
            <input type="submit" name="strtolower" value='Lowercase'>
            <!-- <input type="submit" name="str_split" value='Str Split'> -->
            <input type="submit" name="ucfirst" value='First Charecter upper'>
            <input type="submit" name="ucwords" value='First char upper of words'>
        </div>
        <br><br>
        
    </form>
    <form action="string-functions2.php" class="str-form" method="POST">
        <label for="s1">STRING 1:</label>
        <input type="text" name="str2" placeholder="Enter a string" id="s2"><br><br>
        
        <label for="s2">STRING 2:</label>
        <input type="text" name="str3" placeholder="Enter second string" id="s3"><br><br>
        
        <div class="btn">
            <input type="submit" name="strcmp" value='Strcmp()'>
            <input type="submit" name="strcasecmp" value='strcasecmp()'>
            <input type="submit" name="substr_count" value=' Substr_Count()'>
            <input type="submit" name="strpos" value='Strpos()'>
        </div>
    </form>
</div>
<div class="container" style="width: 93%;">
<form action="string-functions3.php" class="str-form" method="POST">
        <label for="s1">STRING 1:</label>
        <input type="text" name="str4" placeholder="Enter first string" id="s2"><br><br>
        
        <label for="s1">STRING 2:</label>
        <input type="text" name="str5" placeholder="Enter second string" id="s2"><br><br>
        
        <label for="s2">STRING 3:</label>
        <input type="text" name="str6" id="s3"><br><br>
        <div class="btn">
            <input type="submit" name="str_replace" value='Str Replace()'>
            <input type="submit" name="substr_replace" value='Substr_Replace()'>
            <input type="submit" name="chunk_split" value='Chunk_Split'>
            <input type="submit" name="substr" value='Sub str'>
            
        </div>
    </form><br>
    <form action="" class="str-form">
        <h3>INSTRUCTIONS</h3>
    <details>
        <summary><b>str replace</b></summary>
        <p><b>string 1:</b> Enter Your String</p>
        <p><b>string 2:</b> Enter string to be serach</p>
        <p><b>String 3:</b> Enter replace string value</p>
    </details><br>
    <details>
    <summary><b>substr replace</b></summary>
        <p><b>string 1:</b> Specify the string to check</p>
        <p><b>string 2:</b> Specify the string to insert/replace</p>
        <p><b>String 3:</b> Specify where to start replacing in the string.(NUMERIC VALUE ONLY)</p>
    </details><br>
    <details>
    <summary><b>chunk split</b></summary>
        <p><b>string 1:</b> Specify the string to split</p>
        <p><b>string 2:</b> A string that defines what to place at the end of each chunk. Default is \r\n</p>
        <p><b>String 3:</b> A number that defines the length of the chunks. Default is 76(NUMERIC VALUE ONLY)</p>
    </details><br>
    <details>
    <summary><b>sub str</b></summary>
        <p><b>string 1:</b> Specify the string to return a part of</p>
        <p><b>string 2:</b> Specify where to start in the string(numeric value only)</p>
        <p><b>String 3:</b> Specify the length of the returned string. Default is to the end of the string.</p>
    </details>
    </form>
</div>

    <?php include('partials/footer.php')?>