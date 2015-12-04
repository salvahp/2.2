<?php

// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;

// Write to file (silent)
$filename = "../includes/menukort/menukort_1.html";
$content = $_POST["text"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_1_pris.html";
$content = $_POST["price"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_1_beskrivelse.html";
$content = $_POST["description"];
$file->write($filename,$content);

//
// Her kommer menupunkt 2
//
// Write to file (silent)
$filename = "../includes/menukort/menukort_2.html";
$content = $_POST["text"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_2_pris.html";
$content = $_POST["price"];
$file->write($filename,$content);

// Write to file (silent)
$filename = "../includes/menukort/menukort_2_beskrivelse.html";
$content = $_POST["description"];
$file->write($filename,$content);

//
// Her kommer menupunkt 3
//

//
// Her kommer menupunkt 4
//

//
// Her kommer menupunkt 5
//

//
// Her kommer menupunkt 6
//

//
// Her kommer menupunkt 7
//

//
// Her kommer menupunkt 8
//

//
// Her kommer menupunkt 9
//

//
// Her kommer menupunkt 10
//


//
// Her kommer menupunkt 11
//

//
// Her kommer menupunkt 12
//

//
// Her kommer menupunkt 13
//

//
// Her kommer menupunkt 14
//

//
// Her kommer menupunkt 15
//

//
// Her kommer menupunkt 16
//



// Redirect to form
header('Location: ../admin.php?success');