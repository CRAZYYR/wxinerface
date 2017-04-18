<?php
namespace Weixin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('你们好,我是机器人!','utf-8');
    }
    /**
     * 获取用户的 openId
     * @return [type] [description]
     */
   function getBaseInfo(){
   		//1.获取code
   		$appid='wx8c406df7ef92c8be';
   		$redirect_uri=urlencode('http://www.zscool.top/shuaizi.php/Weixin/Index/getUserOpenId');
   		$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".redirect_uri."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
   		header('location'.$url);
   		//2.获取网页授权的access_token
   		//3.l拉去用户的信息
   		
   }
   function getUserOpenId(){
   	$appid='wx8c406df7ef92c8be';
   	$appsecret='d8317ae9aa5015c798a15a77d20e8073';
   	$code=$GET['code'];
   		$url='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';

   		$res=$this->http_curl($url,'get');
   		dump($res);
   }

}