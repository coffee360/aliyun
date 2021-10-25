<?php

namespace Phpfunction\Aliyun;

use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;

/**
 * Dysms 短信
 * Class ExcelOut
 * @package Phpfunction\Aliyun
 */
class Dysms
{

    public $AccessKeyId     = '';
    public $AccessKeySecret = '';
    public $signature       = "";


    public function send($tel, $tpl_code, $msg = [])
    {
        $config = [
            'accessKeyId'     => $this->AccessKeyId,
            'accessKeySecret' => $this->AccessKeySecret
        ];

        $client = new Client($config);

        $sendSms = new SendSms();
        $sendSms->setSignName($this->signature);
        $sendSms->setPhoneNumbers($tel);
        $sendSms->setTemplateCode($tpl_code);
        $sendSms->setTemplateParam($msg);

        return json_encode($client->execute($sendSms), true);
    }

}
