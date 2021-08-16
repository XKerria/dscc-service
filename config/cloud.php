<?php

return [
    'oss' => [
        'sts_host' => env('OSS_STS_HOST', ''),
        'access_key' => env('OSS_ACCESS_KEY', ''),
        'access_secret' => env('OSS_ACCESS_SECRET', ''),
        'bucket_region' => env('OSS_BUCKET_REGION', ''),
        'bucket_name' => env('OSS_BUCKET_NAME', ''),
    ]
];
