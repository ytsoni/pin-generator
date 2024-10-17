<?php

namespace Bfg\Task\Traits;

trait IsSequence {
    /**
     * Check if the pin is a sequence
     * 
     * @param array $pin
     * 
     * @return bool
     */
    public function isSequence(array $pin): bool
    {
        $n = count($pin);
        
        for ($i = 0; $i < $n - 1; $i++) {

            // Check if the pin is a sequence or reverse sequence
            if ($pin[$i] + 1 != $pin[$i + 1] && $pin[$i]-1 != $pin[$i + 1]) {
                return false;
            }
        }
        
        return true;
    }
}