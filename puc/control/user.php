<?php
/**
 * 用户注册登录等操作代码
 * @author d-boy
 */


class usercontrol extends base {


	function __construct() {
		$this->usercontrol();
	}

	function usercontrol() {
		parent::__construct();
		$this->load('user');
	}

    /**
     *  注册 第一步
     */
    function onreg1(){
        $authkey = md5(UC_KEY.$_SERVER['HTTP_USER_AGENT'].$this->onlineip);

		$this->load('user');
		$username = getgpc('username', 'P');
		$password = getgpc('password', 'P');
		$iframe	  = getgpc('iframe') ? 1 : 0;

		$isfounder = intval(getgpc('isfounder', 'P'));
		/*
		echo $sid = $this->sid_encode('admin');
		echo $this->sid_decode($sid);
		*/
		$rand = rand(100000, 999999);
		$seccodeinit = rawurlencode($this->authcode($rand, 'ENCODE', $authkey, 180));
		$errorcode = 0;

        if($this->submitcheck()) {
        
        }

        
    }
}

 ?>