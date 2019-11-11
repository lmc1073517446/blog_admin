<?php

namespace App\Libraries;


class Github{

    public $client_id;
    public $client_secret;

    public function __construct($clientId, $clientSecret)
    {
        $this->client_id = $clientId;
        $this->client_secret = $clientSecret;
    }


    public function getAccessToken($code){
        $url = "https://github.com/login/oauth/access_token";
        $data= [
            'client_id' => $this->client_id,
            'client_secret'=>$this->client_secret,
            'code' => $code
        ];
        $res = curlPost($url, $data);
        parse_str($res, $accessToken);
        if(!isset($accessToken['access_token'])){
            return -2001;
        }
        return $accessToken['access_token'];
    }

}
