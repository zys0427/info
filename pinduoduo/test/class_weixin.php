<?php

class class_weixin
{
    var $appid ;
    var $appsecret ;

    //构造函数，获取Access Token
    public function __construct($appid = NULL, $appsecret = NULL)
    {
        if($appid && $appsecret){
            
            $this->appid = $appid;
            
            $this->appsecret = $appsecret;
            
        }else{
        	 
            echo "appid或appsecret为空";
            
            return ;
        }
        
    }
    public function getAccessToken(){
        
        if(empty($_COOKIE['access_token'])){
            
            $code=$_GET['code'];
            
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$this->appid."&secret=".$this->appsecret;
            
            $tmpInfo=$this->httpGet($url);
            
            $info=json_decode($tmpInfo,true);
            
            setcookie("access_token",$info['access_token'],time()+7000,'/');            
            
            return $info['access_token'];         

        }else{
            
        	return $_COOKIE['access_token'];
        	
        }
    	
    }
    public function getSignature($timestamp='14999923234') {
        
        $jsapiTicket = $this->getJsApiTicket();
    
        // 注意 URL 一定要动态获取，不能 hardcode.
        //$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        /*
        if(($pos=strrpos($_SERVER[REQUEST_URI], "from"))!==false){
            $uri=substr($_SERVER[REQUEST_URI],0,$pos-1);
        }else{
            $uri=$_SERVER[REQUEST_URI];
        }*/
        
        $url = "http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]."";
    
        
        $nonceStr = $timestamp;//$this->createNonceStr();
    
        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        return $signature;
    }
    public function getJsApiTicket() {
        // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
        
        if(empty($_COOKIE['access_token'])){
            
            $accessToken = $this->getAccessToken();
            
            $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
            
            $res = json_decode($this->httpGet($url));
            
            $jsapi_ticket = $res->ticket;
            
            if ($jsapi_ticket) {
                
                setcookie("jsapi_ticket",$jsapi_ticket,time()+7000,'/');
                
            }
            
            return $jsapi_ticket;
            
        }else{
        	
            return $_COOKIE['jsapi_ticket'];
        }
        
    }
    
    public function createNoncestr( $length = 32 )
    
    {
    
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
    
        $str ="";
    
        for ( $i = 0; $i < $length; $i++ )  {
    
            $str.= substr($chars, mt_rand(0, strlen($chars)-1), 1);
    
        }
    
        return $str;
    
    }
    
    
    protected function httpGet($url, $data = null)
    {
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $tmpInfo = curl_exec($ch);
        
        if(curl_errno($ch))
        
        {
        
            return curl_error($ch);
        
        }
        
        curl_close($ch);
        
        return $tmpInfo;
    }
}
?>