<?php 

session_start();

$code=$_GET['code'];

$state=$_GET['state'];
/*
$appid = 'wx92970832ecad238a';

$appsecret ='37c36d9099ee7635fe1f4ea5230412db';

*/


if($code)
{
/*
    $state=str_replace("△","&",$state);
    if(strrpos($state,'&')!==false){
        $pos=strrpos($state,'&');
        $temp=substr($state, $pos+1);
        $t=explode("=", $temp);
        $appsecret=$t[1];
        $state=substr($state, 0 , $pos);
    }
    if(strrpos($state,'&')!==false){
        $pos=strrpos($state,'&');
        $temp=substr($state, $pos+1);
        $t=explode("=", $temp);
        $appid=$t[1];
        $state=substr($state, 0 , $pos);
    }
    */
	$back_openid_arr=get_openid($appid,$appsecret,$code);

	setcookie("xaphp_sopenid",$back_openid_arr['openid'],time()+864000,'/');	
	
	//echo "location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state)."";exit;

	//echo "location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state)."&sopenid=".$back_openid_arr['openid'];exit;
/*
	if(strpos($state,'?')!==false){
	    header("location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state)."&sopenid=".$back_openid_arr['openid']."&"  );
	}else{
	    header("location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state)."?sopenid=".$back_openid_arr['openid']  );
	}
	*/
	header("location:http://".$_SERVER['HTTP_HOST'].str_replace("△","&",$state)."&code=".$code);//."&sopenid=".$back_openid_arr['openid']

}

else

{

	echo "未授权";

}


function get_openid($appid,$appsecret,$code)

{

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code");

	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

	curl_setopt($ch, CURLOPT_AUTOREFERER, 1);

	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$tmpInfo = curl_exec($ch);

	if(curl_errno($ch))

	{

		return curl_error($ch);

	}

	curl_close($ch);

	return json_decode($tmpInfo,true);

}



?>