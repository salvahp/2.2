<?php

// Load in the file system class
include 'filesystem.class2.php';
$file = new FileSystem;

// Write to file (silent)
$filename = "../includes/nyheder/nyhedstitel.html";
$content = $_POST["titelnyhed"];
$file->write($filename,$content);


// Write to file (silent)
$filename = "../includes/nyheder/nyhedstekst.html";
$content = $_POST["tekstnyhed"];
$file->write($filename,$content);


// Redirect to form
header('Location: ../nyheder.php?success');
?>