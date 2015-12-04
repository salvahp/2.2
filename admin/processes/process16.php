<?php

// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;

// Write to file (silent)
$filename = "../includes/menukort/menukort_16.html";
$content = $_POST["text"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_16_pris.html";
$content = $_POST["price"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_16_beskrivelse.html";
$content = $_POST["description"];
$file->write($filename,$content);

// Redirect to form
header('Location: ../admin.php?success');