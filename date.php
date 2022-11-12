<?php
    echo date("l");

?>
<?php
    echo time();

?>
<?php
    echo date(
        "l, d-M-Y",
    time() +
          60 * 60 * 60 * 24 * 100  
);

?>
<?php
    echo date(
        "l, d-M-Y",
    time() +
          60 * 60 * 60 * 24 * 1000  
);

?>