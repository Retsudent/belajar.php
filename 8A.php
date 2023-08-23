fungsi dicrement
<?php
function myTest() {
    static $x = 9;
    echo $x;
    $x--;
}

myTest() ;//menjalankan fungsi mytest
myTest() ;
myTest() ;
myTest() ;
myTest() ;
?>