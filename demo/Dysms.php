<?php

require "../vendor/autoload.php";


class AliDySms
{

    private $app = null;


    public function __construct()
    {
        $app                  = new \Phpfunction\Aliyun\Dysms();
        $app->signature       = "衡水***";
        $app->AccessKeyId     = "LTAI5***";
        $app->AccessKeySecret = "I8dYLq***";

        $this->app = $app;
    }


    /**
     * 汽车保养提醒
     */
    public function send($tel, $tpl_code, $msg)
    {
        return $this->app->send($tel, $tpl_code, $msg);
    }


}


$code = rand(1000, 9999);

return (new AliDySms())->send('13520***', 'SMS_226***', ['code' => $code]);




