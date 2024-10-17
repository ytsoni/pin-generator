<?php

namespace Bfg\Task\Traits;

trait IsRepeating{

    /**
     * Check if the pin is repeated with the same digit
     * 
     * @param array $pin
     * 
     * @return bool
     */
    public function isRepeating(array $pin): bool
    {
        $n = count($pin);

        // validate the pin length
        if($n < 2){
            return false;
        }

        for ($i = 0; $i < $n - 1; $i++) {

            // check if the pin is repeated
            if ($pin[$i] == $pin[$i + 1]) {
                return true;
            }
        }
        
        return false;
    }
}