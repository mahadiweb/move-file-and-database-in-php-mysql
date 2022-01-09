move or copy database from one table to other table..

<?php
$connection = mysqli_connect("localhost","root","","database1");

$qu = mysqli_query($connection, "INSERT INTO tbl1(nmae,email) SELECT (name,email) FROM tbl2"); //if you use all just set * in (name,email)

?>
