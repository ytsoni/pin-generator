<?php
namespace Bfg\Task\Traits;

trait isPalindrome{

    /**
     * Check if the pin is a palindrome
     * 
     * @param array $pin
     * 
     * @return bool
     */
    public function isPalindrome(array $pin): bool
    {
        $n = count($pin);

        // validate the pin length
        if($n < 2){
            return false;
        }

        for ($i = 0; $i < $n / 2; $i++) {

            // check the digits from the start and end
            if ($pin[$i] != $pin[$n - $i - 1]) {
                return false;
            }
        }

        // print_r("Palindrome detected: " . implode("", $pin) . "\n");

        return true;
    }
}