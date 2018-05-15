<?php

use mindtwo\Slugify\SluggerInterface;
use mindtwo\Slugify\WordPressSlugger;

/**
 * @param $string
 *
 * @return string
 */
if ( ! function_exists('slugify')) {
    function slugify($string = NULL) {
        if (function_exists('app') && app(SluggerInterface::class) instanceof SluggerInterface) {
            $instance = app(SluggerInterface::class);
        } else {
            $instance = new WordPressSlugger();
        }

        if ( ! is_null($string) && is_string($string)) {
            return $instance->generate($string);
        }

        return $instance;
    }
}
