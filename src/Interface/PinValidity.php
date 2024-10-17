<?php

namespace Bfg\Task\Interface;

interface PinValidity {

    /**
     * Check if the pin is valid or not
     * 
     * @param array $pin
     * 
     * @return bool
     */
    public function isValid(array $pin): bool;

}