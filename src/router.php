<?php
// demo 2
require 'vendor/autoload.php';

use Say\Hello;
// demo 2

// demo 3
use Write\Emoji;

if ($_SERVER["REQUEST_URI"] == '/emoji') {
    echo new Emoji();
    exit;
}
// demo 3

// demo 1
if ($_SERVER["REQUEST_URI"] == '/hello') {
    echo new Hello();
} else { 
    echo "<p>Welcome to PHP</p>";
}
// demo 1