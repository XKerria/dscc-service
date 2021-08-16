<?php


/**
 * 对微信小程序用户加密数据的解密示例代码.
 *
 * @copyright Copyright (c) 1998-2014 Tencent Inc.
 */

namespace App\Libs\Wechat;


use App\Exceptions\WechatDecryptException;
use Illuminate\Support\Arr;

class DataCrypt {
    private $appid;

    public function __construct($appid) {
        $this->appid = $appid;
    }

    /**
     * @throws WechatDecryptException
     */
    public function decryptData($data) {
        $encryptedData = Arr::get($data, 'encryptedData');
        $iv = Arr::get($data, 'iv');
        $sessionKey = Arr::get($data, 'session_key');

        if (strlen($sessionKey) != 24) {
            throw new WechatDecryptException('Illegal Aes Key', ErrorCode::$IllegalAesKey);
        }

        $aesKey = base64_decode($sessionKey);

        if (strlen($iv) != 24) {
            throw new WechatDecryptException('Illegal Iv', ErrorCode::$IllegalIv);
        }

        $aesIV = base64_decode($iv);
        $aesCipher = base64_decode($encryptedData);
        $result = openssl_decrypt($aesCipher, "AES-128-CBC", $aesKey, OPENSSL_RAW_DATA, $aesIV);
        $dataObj = json_decode($result);

        if ($dataObj == NULL) {
            throw new WechatDecryptException('Illegal Buffer', ErrorCode::$IllegalBuffer);
        }

        if ($dataObj->watermark->appid != $this->appid) {
            throw new WechatDecryptException('Illegal Buffer', ErrorCode::$IllegalBuffer);
        }

        return json_decode($result, true);
    }

}

