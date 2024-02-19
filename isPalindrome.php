<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    static function isPalindrome($x) {
        return $x == strrev($x);
    }
}

echo(Solution::isPalindrome(121) ? "True" : "False");
echo(Solution::isPalindrome(-121) ? "True" : "False");
echo(Solution::isPalindrome(10) ? "True" : "False");
