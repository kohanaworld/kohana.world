<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'js' => array(

        // scripts minimization
        'min' => (Kohana::$environment == Kohana::PRODUCTION),

        // building all scripts in one file by types (external, inline, onload)
        'build' => (Kohana::$environment == Kohana::PRODUCTION),
    ),
    'css' => array(

        // styles minimization
        'min' => (Kohana::$environment == Kohana::PRODUCTION),

        // building all styles in one file by types (external, inline)
        'build' => (Kohana::$environment == Kohana::PRODUCTION),
    ),

    // Full path to site DOCROOT
    'path' => realpath(DOCROOT) . DIRECTORY_SEPARATOR,

    // Path to copy static files that are not build in one file
    'url' => '/media/static/',

    // Path to styles and scripts builds
    'cache' => '/media/cache/',

    // Host address (base or CDN)
    'host' => URL::base(FALSE, TRUE),
);