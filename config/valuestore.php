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

    // todo: add the ability to cache values on retrieval?
    //       The cache would need to be cleared when editing values.

];
