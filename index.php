<?php
declare(strict_types = 1);

require_once('vendor/autoload.php');

use Bfg\Task\PinGenerator;

$obj = new PinGenerator;

try {
    
    $pins = $obj->generate(6, 3);
    var_dump($pins);

} catch (Exception $e) {
    
    echo $e->getMessage();
}

