<?php

// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;

// Write to file (silent)
$filename = "../includes/menukort/menukort_6.html";
$content = $_POST["text"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_6_pris.html";
$content = $_POST["price"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_6_beskrivelse.html";
$content = $_POST["description"];
$file->write($filename,$content);

// Redirect to form
header('Location: ../admin.php?success');