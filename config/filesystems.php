<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    | Supported: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => env('USE_SYMLINKS') ? storage_path('app/public') : public_path('storage'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

        /**
         * UPLOADS
         */

        'uploads_local' => [
            'driver' => 'local',
            'root' => storage_path('app/uploads'),
        ],

        'uploads_ftp' => [
            'driver' => 'ftp',
            'root' => env('UPLOADS_FTP_ROOT', '/'),
            'host' => env('UPLOADS_FTP_HOST'),
            'username' => env('UPLOADS_FTP_USERNAME'),
            'password' => env('UPLOADS_FTP_PASSWORD'),
            'port' => env('UPLOADS_FTP_PORT', 21),
            'passive' => env('UPLOADS_FTP_PASSIVE'),
            'ssl' => env('UPLOADS_FTP_SSL'),
        ],

        'uploads_dropbox' => [
            'driver' => 'dropbox',
            'root' => env('UPLOADS_DROPBOX_ROOT', '/'),
            'access_token' => env('UPLOADS_DROPBOX_ACCESS_TOKEN')
        ],

        'uploads_backblaze' => [
            'driver' => 'backblaze',
            'account_id' => env('UPLOADS_BACKBLAZE_ACCOUNT_ID'),
            'application_key' => env('UPLOADS_BACKBLAZE_APPLICATION_KEY'),
            'bucket' => env('UPLOADS_BACKBLAZE_BUCKET'),
        ],

        'uploads_s3' => [
            'driver' => 's3',
            'key' => env('UPLOADS_S3_KEY'),
            'secret' => env('UPLOADS_S3_SECRET'),
            'region' => env('UPLOADS_S3_REGION'),
            'bucket' => env('UPLOADS_S3_BUCKET'),
            'endpoint' => env('UPLOADS_S3_ENDPOINT'),
        ],

        'uploads_digitalocean' => [
            'driver' => 'digitalocean',
            'key' => env('UPLOADS_DIGITALOCEAN_KEY'),
            'secret' => env('UPLOADS_DIGITALOCEAN_SECRET'),
            'region' => env('UPLOADS_DIGITALOCEAN_REGION'),
            'bucket' => env('UPLOADS_DIGITALOCEAN_BUCKET'),
        ],

        'uploads_rackspace' => [
            'driver'    => 'rackspace',
            'username'  => env('UPLOADS_RACKSPACE_USERNAME'),
            'key'       => env('UPLOADS_RACKSPACE_KEY'),
            'container' => env('UPLOADS_RACKSPACE_CONTAINER'),
            'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
            'region'    => env('UPLOADS_RACKSPACE_REGION', 'IAD'),
            'url_type'  => 'publicURL',
        ],

        'legacy_local' => [
            'driver' => env('FILESYSTEM_DRIVER', 'local'),
            'root' => base_path(''),
        ]

    ],

];
