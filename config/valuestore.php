<?php

return [
    /*
    * The disk on which to store the valuestore JSON files by default. Choose
    * one or more of the disks you've configured in config/filesystems.php.
    */
    'disk_name' => env('VALUESTORE_DISK', 'local'),

    /*
    * The base path where the valuestore JSON files are stored by default.
    */
    'base_path' => env('VALUESTORE_PATH', '/valuestore'),

    /*
     * Whether or not to delete empty valuestore JSON files if they are empty.
     */
    'keep_empty_files' => env('VALUESTORE_KEEP_EMPTY', false),

    /*
     * Whether or not to place valuestore JSON files in environment-based subdirectories.
     */
    'store_by_env' => env('VALUESTORE_STORE_BY_ENV', false),

    // todo: add the ability to save backup(s), x number of versions back?

];
