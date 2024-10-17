<?php

namespace Bfg\Task;

/**
 * Class PinGenerator
 * 
 * @package Bfg\Task
 */
class PinGenerator extends Pin
{
    use Traits\IsPalindrome;
    use Traits\IsRepeating;
    use Traits\IsSequence;

    /**
     * Check if the pin is valid or not
     * 
     * @param array $pin
     * 
     * @return bool
     */
    public function isValid(array $pin): bool
    {
        return $this->isRepeating($pin) || $this->isSequence($pin) || $this->isPalindrome($pin);
    }

    /**
     * Generate pins
     * 
     * @param int $totalNumberOfPin = 5
     * @param int $length = 4
     * 
     * @return array
     * 
     * @throws \Exception
     */
    public function generate(int $totalNumberOfPin = 5, int $length = 4): array
    {
        // validate the input length of pin
        if($length < 2){
            throw new \Exception("The pin length must be at least 2");
        }

        
        // validate the total number of pin
        if($totalNumberOfPin > (10**$length)/2){
            throw new \Exception("unable to generate $totalNumberOfPin unique pins with length $length");
        }

        // it will store the generated pins
        $pins = [];


        // generate the pins
        for ($i = 0; $i < $totalNumberOfPin; $i++) {

            // generate a pin
            $pin = $this->generatePin($length, $pins);

            // check if the pin is valid
            if ($this->isValid($pin)) {
                $i--;
                continue;
            }

            // convert the pin to a string
            $pin = implode('', $pin);

            // check if the pin is already generated
            if(in_array($pin, $pins)){
                $i--;
                continue;
            }

            // store the pin
            $pins[] = $pin;
        }

    
        // return the generated pins
        return $pins;
    }

}
