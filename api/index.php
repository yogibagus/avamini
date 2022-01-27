<?php
// init text
if (!isset($_GET['text']) or empty($_GET['text'])) {
    // default
    $custom_text = "AV";
} else {
    // custom text
    $custom_text = $_GET['text'];
}

// init background
if (!isset($_GET['bg']) or empty($_GET['bg'])) {
    // default
    $bg = "bg-blue";
} else {
    // custom text
    $bg = $_GET['bg'];
    if ($bg == "dark") {
        $bg = "bg-dark";
    } else if ($bg == "blue") {
        $bg = "bg-blue";
    } else if ($bg == "yellow") {
        $bg = "bg-yellow";
    } else if ($bg == "red") {
        $bg = "bg-red";
    } else if ($bg == "light") {
        $bg = "bg-light";
    } else if ($bg == "green") {
        $bg = "bg-green";
    } else if ($bg == "pink") {
        $bg = "bg-pink";
    } else {
        // if bg not exist
        $bg = "bg-blue";
    }
}

// Create Image From Existing File
$image = imagecreatefrompng('.././img/' . $bg . '.png');

// Allocate A Color For The Text
$white = imagecolorallocate($image, 255, 255, 255);

// Allocate A Color For The Text
$black = imagecolorallocate($image, 0, 0, 0);

// Set Path to Font File
$font_path = realpath('.././font/arial.ttf');

// Set Text to Be Printed On Image
$text = substr(strtoupper($custom_text), 0, 2);

// Set font size
$font_size = 30;

//define image width
$image_width = imagesx($image);

//create text box to cented the text
$text_box = imagettfbbox($font_size, 0, $font_path, $text);
$text_width = $text_box[2] - $text_box[0]; // lower right corner - lower left corner
$text_height = $text_box[3] - $text_box[1];

// centerd the text horizontal
$x = ($image_width / 2) - ($text_width / 2) - 100;

// vertical
$y = 65;

// Print Text On Image
imagettftext($image, $font_size, 0, $x + 100, $y, $white, $font_path, $text);

ob_clean();

//Set the Content Type
header('Content-Type: image/png');

// Send Image to Browser
imagepng($image);

// clear memory
imagedestroy($image);
