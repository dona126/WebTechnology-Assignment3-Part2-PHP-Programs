<?php
// Opening file for read only
$newFile = fopen("wtAssignment.txt", "r") or die("Sorry! The file can't be opened.");

// Reading from a file and displaying the file contents
echo fread($newFile,filesize("wtAssignment.txt"));

// Closing file
fclose($newFile);
?> 
