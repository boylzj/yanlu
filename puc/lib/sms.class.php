<?php

define('TOP_SDK_WORK_DIR',UC_DATADIR . 'cache_sms/');
define('TOP_SDK_DEV_MODE', FALSE);

require_once(UC_LIB_ROOT . 'message/tabao/TopSdk.php');

class sms{

    function __construct(){
        if(!defined('SMS_FREE_SIGN_NAME'))
            define('SMS_FREE_SIGN_NAME','【研路】');
        if(!defined('SMS_TYPE'))
            define('SMS_TYPE','normal')
    }
    
    /**
     * 发送短信
     * @param $phone 用户手机号
     * @param $code 验证码
     */
    public function send_message($phone, $code){
            $c = new TopClient;
            $c->appkey = SMS_APPKEY;
            $c->secretKey = SMS_CECRETKEY;
            $req = new AlibabaAliqinFcSmsNumSendRequest;
            $req->setExtend($msg);
            $req->setSmsType(SMS_TYPE);
            $req->setSmsFreeSignName(SMS_FREE_SIGN_NAME);
            $req->setSmsParam("{\"code\":\"$code\",\"product\":\"研路\"}");
            $req->setRecNum($phone);
            $req->setSmsTemplateCode(SMS_TEMPLATE_CODE);
            $resp = $c->execute($req);
    }

}
?>