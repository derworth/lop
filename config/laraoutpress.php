<?php
return [
    /*
   |--------------------------------------------------------------------------
   | LaraOutPress Settings
   |--------------------------------------------------------------------------
   |
   | LaraOutPress is disabled by default, when enabled is set to true in app.php.
   | You can override the value by setting enable to true or false instead of null.
   |
   */

    // Is this library is enable or not.
    'enabled' => env('VRKANSAGARA_COMPRESS_ENABLED', false),

    // Do we are debug the data
    'debug' => env('VRKANSAGARA_COMPRESS_DEBUG', false),

    // Do we are obfuscate inline js
    'obfuscate' => env('VRKANSAGARA_COMPRESS_OBFUSCATE', false),

    // In which environment compression work.
    'target_environment' => env('VRKANSAGARA_COMPRESS_ENVIRONMENT', ''),

    // Exclude routes from the compression
    'exclude_routes' => [
        'api/*',
    ]

];
