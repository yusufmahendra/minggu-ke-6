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