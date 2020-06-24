<?php

function set_active($uri, $output = "active")
{
    if( is_array($uri) ) {
        foreach ($uri as $u) {
            if (Route::is($u)) {
            return $output;
            }
        }
    } else {
        if (Route::is($uri)){
            return $output;
        }
    }
}

function set_nav_active($uri, $output = "nav-active")
{
    if( is_array($uri) ) {
        foreach ($uri as $u) {
            if (Route::is($u)) {
            return $output;
            }
        }
    } else {
        if (Route::is($uri)){
            return $output;
        }
    }
}