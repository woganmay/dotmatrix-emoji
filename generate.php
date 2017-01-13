<?php

// The available characters in this font
// 01234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ.,:;'\"(!?)+-*/=

$string = "Aww yeah :partyparrot:";

$slack = array_map(function($c){
    
    $token = null;
    
    switch($c)
    {
        case '.': $token = 'led-period'; break;
        case ',': $token = 'led-comma'; break;
        case ':': $token = 'led-colon'; break;
        case ';': $token = 'led-scolon'; break;
        case "'": $token = 'led-lsquo'; break;
        case '"': $token = 'led-quot'; break;
        case '(': $token = 'led-lparen'; break;
        case '!': $token = 'led-excl'; break;
        case '?': $token = 'led-ques'; break;
        case ')': $token = 'led-rparen'; break;
        case '+': $token = 'led-plus'; break;
        case '-': $token = 'led-dash'; break;
        case '*': $token = 'led-star'; break;
        case '/': $token = 'led-slash'; break;
        case '=': $token = 'led-equal'; break;
        case ' ': $token = 'led-space'; break;
        default: $token = 'led-' . strtolower($c); break;
    }
    
    return ":$token:";
    
}, str_split($string));

echo implode(null, $slack);