<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 //connect to the server
$connection = mysql_connect("localhost","root","root") or die(mysql_error());
//select the database
mysql_select_db("first", $connection);
?>
