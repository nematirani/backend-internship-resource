<?php

function is_plaindrome(string $s1, string $s2): bool
{
    return strrev($s1) === $s2;
}

// var_dump(is_plaindrome('loop', 'pool'));
