<?php
//connecting to database
$database = "grcacgre_grc";
$username = "grcacgre_grcuser";
$password = "Sarah@1995";
$hostname = "localhost";
$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem.");