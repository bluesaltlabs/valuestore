<?php

return [
    /*
    * The disk on which to store the valuestore JSON file by default. Choose
    * one or more of the disks you've configured in config/filesystems.php.
    */
    'disk_name' => env('VALUESTORE_DISK', 'local'),

    /*
    * The base path where the valuestore JSON files are stored by default.
    */
    'base_path' => env('VALUESTORE_PATH', '/valuestore'),

];
