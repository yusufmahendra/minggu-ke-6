<?php
    echo date("l");

?>
<br>
<?php
    echo time();

?>
<br>
<?php
    echo date(
        "l, d-M-Y",
    time() +
          60 * 60 * 60 * 24 * 100  
);

?>
<br>
<?php
    echo date(
        "l, d-M-Y",
    time() +
          60 * 60 * 60 * 24 * 1000  
);

?>
<br>
<?php
    echo date(
        "l, d-M-Y",
    time() -
          60 * 60 * 60 * 24 * 500  
);

?>
<br>

<?php
$d=mktime(04, 35, 30, 9, 26, 2001);
echo "Tanggal Lahir Saya Adalah " . date("Y-m-d h:i:sa", $d);
?>

