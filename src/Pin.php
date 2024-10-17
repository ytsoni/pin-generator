<?php

namespace Bfg\Task;

/**
 * Class Pin
 * 
 * @package Bfg\Task
 */
abstract class Pin implements Interface\PinValidity
{

    /**
     * Generate a pin
     * 
     * @param int $length
     * 
     * @return array
     */
    protected function generatePin(int $length): array
    {
        $pin = [];

        for ($i = 0; $i < $length; $i++) {
            $pin[$i] = random_int(0, 9);
        }

        return $pin;
    }
}