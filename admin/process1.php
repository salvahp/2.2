<?php

// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;

// Write to file (silent)
$filename = "menukort/menukort1.html";
$content = $_POST["text"];
$file->write($filename,$content);

// Redirect to form
header('Location: admin.php?success');