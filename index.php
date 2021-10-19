<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

$bessie = new Cow('Hello, Wilder!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;