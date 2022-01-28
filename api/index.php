<?php

// get text
if (!isset($_GET['t']) or empty($_GET['t'])) {
    // default
    $custom_text = "AV";
} else {
    // custom text
    $custom_text = $_GET['t'];
}

// get background color
if (!isset($_GET['bg']) or empty($_GET['bg'])) {
    // default blue
    $bgcolor = "#1972d1";
} else {
    // custom bg
    $bgcolor = $_GET['bg'];
}

// get text color
if (!isset($_GET['c']) or empty($_GET['c'])) {
    // default blue
    $color = "#ffffff";
} else {
    // custom color
    $color = $_GET['c'];
}

// get image size
if (!isset($_GET['s']) or empty($_GET['s'])) {
    // default size
    $image_size = 150;
} else {
    if (isNumeric($_GET['s']) != false) {
        // custom size
        if ($_GET['s'] > 300 || $_GET['s'] < 100) { // max size 300 min size 100
            $image_size = 150;
        } else {
            $image_size = $_GET['s'];
        }
    } else {
        $image_size = 150;
    }
}


// Create the image
$image = imagecreate($image_size, $image_size);

// background color with hex
hexColorAllocate($image, $bgcolor);

// Define color
$font_color = hexColorAllocate($image, $color);

// The text to draw
$text = substr(strtoupper($custom_text), 0, 2);
// Replace path by your own font path
$font_path = realpath('.././font/arial.ttf');


// Set font size
$font_size = getFontSize($image_size);

//define image width
$image_width = imagesx($image);

//create text box to cented the text
$text_box = imagettfbbox($font_size, 0, $font_path, $text);
$text_width = $text_box[2] - $text_box[0]; // lower right corner - lower left corner
$text_height = $text_box[3] - $text_box[1];

// centerd the text horizontal
$x = ($image_width / 2) - ($text_width / 2);

// vertical
$y = getY($image_size);

// Print Text On Image
imagettftext($image, $font_size, 0, $x, $y, $font_color, $font_path, $text);

// Set the content-type
header('Content-Type: image/png');


// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($image);
imagedestroy($image);

// usable function
function hexColorAllocate($image, $hex)
{
    $hex = ltrim($hex, '#');
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));
    return imagecolorallocate($image, $r, $g, $b);
}

function getFontSize($image_size)
{
    return $image_size * (33.3 / 100);
}

function getY($image_size)
{
    return $image_size * (66.6 / 100);
}

function isNumeric($num)
{
    if (ctype_digit($num)) {
        return $num;
    } else {
        return false;
    }
}
