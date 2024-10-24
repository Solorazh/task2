<?php
$variable = [];

if (is_int($variable)) {
    echo 'int';
} elseif (is_float($variable)) {
    echo 'float';
} elseif (is_bool($variable)) {
    echo 'bool';
} elseif (is_string($variable)) {
    echo 'string';
} elseif (is_null($variable)) {
    echo 'null';
} elseif (get_debug_type($variable)) {
    echo 'other';
}   
   