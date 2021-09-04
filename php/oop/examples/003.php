<?php

// error handling


// approach 1

// $error = null;

// if ($x === false) {
//     $error = 'x moshkel dare';
// }


// if ($error) {
//     echo $error;
// } else {
//     echo 'ok shod';
// }


// approach 2

class MyError extends Exception
{

}

$a = 'a';

try {
    if ($a !== 'p') {
        throw new MyError;
    }
} catch(MyError $e) {
    var_dump('Nahod');
} finally {
    var_dump(__LINE__);
}
