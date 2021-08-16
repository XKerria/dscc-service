<?php


namespace App\Services;


use App\Libs\Wechat\DataCrypt;
use Illuminate\Support\Facades\Http;

class WechatService {
    private string $appId;
    private string $appSecret;

    public function __construct() {
        $this->appId = config('wechat.app_id');
        $this->appSecret = config('wechat.app_secret');
    }

    public function session(string $code) {
        $url = 'https://api.weixin.qq.com/sns/jscode2session';
        return json_decode(Http::get($url, [
            'appid' => $this->appId,
            'secret' => $this->appSecret,
            'grant_type' => 'authorization_code',
            'js_code' => $code
        ]), true);
    }

    public function decryptPhoneNumber(array $data, string $sessionKey) {
        $crypter = new DataCrypt($this->appId, $sessionKey);
        return $crypter->decryptData($data);
    }

    public function decrypt(array $data) {
        $crypter = new DataCrypt($this->appId);
        return $crypter->decryptData($data);
    }
}
