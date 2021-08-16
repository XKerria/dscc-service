<?php

namespace App\Http\Controllers\Server;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use App\Http\Controllers\Controller;

class CloudController extends Controller {

    function sts() {
        $key = 'LTAI4GC4CXaKh1igeEREU665';
        $secret = 'slGVg1MGWlOOT9kbcbGqO93N9upeRw';
        $region = 'cn-chengdu';
        AlibabaCloud::accessKeyClient($key, $secret)->regionId($region)->asDefaultClient();
        try {
            $result = AlibabaCloud::rpc()
                ->product('Sts')
                ->scheme('https')
                ->version('2015-04-01')
                ->action('AssumeRole')
                ->method('POST')
                ->host('sts.aliyuncs.com')
                ->options([
                    'query' => [
                        'RegionId' => $region,
                        'RoleArn' => 'acs:ram::1447500320981548:role/oss-admin',
                        'RoleSessionName' => 'OSS-Admin',
                    ],
                ])
                ->request();
            return $result->toArray();
        } catch (ClientException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            echo $e->getErrorMessage() . PHP_EOL;
        }
    }
}
