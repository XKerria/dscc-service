<?php


namespace App\Services;


use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

class OssBucketService extends AbstractBucketService {
    protected string $access_key;
    protected string $access_secret;
    protected string $bucket_region;
    protected string $sts_host;

    public function __construct() {
        $this->access_key = config('cloud.oss.access_key');
        $this->access_secret = config('cloud.oss.access_secret');
        $this->bucket_region = config('cloud.oss.bucket_region');
        $this->sts_host = config('cloud.oss.sts_host');
    }

    function sts() {
        AlibabaCloud::accessKeyClient($this->access_key, $this->access_secret)->regionId($this->bucket_region)->asDefaultClient();
        try {
            $result = AlibabaCloud::rpc()
                ->product('Sts')
                ->scheme('https')
                ->version('2015-04-01')
                ->action('AssumeRole')
                ->method('POST')
                ->host($this->sts_host)
                ->options([
                    'query' => [
                        'RegionId' => $this->bucket_region,
                        'RoleArn' => 'acs:ram::1447500320981548:role/oss-admin',
                        'RoleSessionName' => 'OSS-Admin',
                    ],
                ])
                ->request();
            return $result->toArray();
        } catch (ClientException | ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
            return null;
        }
    }
}
