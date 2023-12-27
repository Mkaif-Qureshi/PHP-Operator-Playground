<?php include('partials/menu.php'); ?>
<?php
    $indexed =array(str_split($_POST['indexed']));
    $var1= print_r($indexed);
    echo "---".$var1;
    $count=0;
    foreach($indexed as $a=>$key){
        echo $count++;
        echo $key;
        echo "<br>";
    }
?>