<?php
	// $true_url = "http://121.42.194.207";
	$true_url = "http://dev.open.api.highfaner.com";

	//登录接口
	$api['addMo'] = array('url'=>'/Commodity/Commodity/add_modity','type'=>'post','info'=>'add');
	$api['login'] = array('url'=>'/User/Login/index','type'=>'post','info'=>'账号密码登录');
	$api['signup'] = array('url'=>'/User/Register/index','type'=>'post','info'=>'用户注册');
	$api['getcode'] = array('url'=>'/User/User/getCode','type'=>'post','info'=>'获取验证码');
	$api['resetpwd'] = array('url'=>'/User/User/resetPwdForPhone','type'=>'post','info'=>'重置验证码');
	$api['label'] = array('url'=>'/Commodity/Label/list_label','type'=>'post','info'=>'获取标签');
	$api['list'] = array('url'=>'/Commodity/Commodity/list_modity','type'=>'post','info'=>'商品列表');
	$api['addcommodity'] = array('url'=>'/Commodity/Commodity/add_modity','type'=>'post','info'=>'添加商品');
	$api['addlabel'] = array('url'=>'/Commodity/Label/add_label','type'=>'post','info'=>'添加标签');
	$api['getcommodity'] = array('url'=>'/Commodity/Commodity/find_modity','type'=>'post','info'=>'商品详情');
	$api['addcomm'] = array('url'=>'/Commodity/Commodity/add_comment','type'=>'post','info'=>'addcomm');
	$api['like'] = array('url'=>'/Commodity/Commodity/add_like','type'=>'post','info'=>'like');
	$api['zan'] = array('url'=>'/Commodity/Commodity/add_comment_zan','type'=>'post','info'=>'zan');
	$api['dellike'] = array('url'=>'/Commodity/Commodity/del_like','type'=>'post','info'=>'dellike');
	$api['delcommodity'] = array('url'=>'/Commodity/Commodity/del_modity','type'=>'post','info'=>'delcommodity');
	$api['modify'] = array('url'=>'/User/User/modifyEmail','type'=>'post','info'=>'delcommodity');
	$api['info'] = array('url'=>'/User/User/getInfo','type'=>'post','info'=>'info');
	$api['emailcode'] = array('url'=>'/User/User/getEmailCode','type'=>'post','info'=>'emailcode');
	$api['modifyuser'] = array('url'=>'/User/User/modifyUserInfo','type'=>'post','info'=>'modifyuser');
	$api['resetemail'] = array('url'=>'/User/User/resetPwdForEmail','type'=>'post','info'=>'resetemail');
	$api['followuser'] = array('url'=>'/User/User/followUser','type'=>'post','info'=>'followuser');
	$api['delfollow'] = array('url'=>'/User/User/cancelFollowUser','type'=>'post','info'=>'delfollow');
	$api['getmsg'] = array('url'=>'/Message/SystemInfo/getList','type'=>'post','info'=>'getmsg');
	$api['addshop'] = array('url'=>'/order/shop/add_shop','type'=>'post','info'=>'addshop');
	$api['shoplist'] = array('url'=>'/order/shop/list_shop','type'=>'post','info'=>'shoplist');
	$api['delshop'] = array('url'=>'/order/shop/del_shop','type'=>'post','info'=>'delshop');
	$api['order'] = array('url'=>'/order/order/add_order','type'=>'post','info'=>'order');
	$api['dianzan'] = array('url'=>'/commodity/Commodity/add_zan','type'=>'post','info'=>'order');
	$api['shanzan'] = array('url'=>'/commodity/Commodity/del_zan','type'=>'post','info'=>'order');
	$api['listzan'] = array('url'=>'/commodity/commodity/list_comment','type'=>'post','info'=>'order');
	$api['plist'] = array('url'=>'/commodity/Commodity/list_merber','type'=>'post','info'=>'order');
	$api['tuijian'] = array('url'=>'/message/foreachimg/get_tuijian','type'=>'post','info'=>'order');
	$api['slider'] = array('url'=>'/message/foreachimg/get_img','type'=>'post','info'=>'order');
	// $api['vieworder'] = array('url'=>'/order/order/look_order','type'=>'post','info'=>'vieworder');
	$api['zhaop'] = array('url'=>'/message/edition/leav_message','type'=>'post','info'=>'order');
	$api['match'] = array('url'=>'/activity/match/get_detail','type'=>'post','info'=>'match');
	$api['bm'] = array('url'=>'/Activity/MatchTe/sign_up','type'=>'post','info'=>'bm');
	$api['bmi'] = array('url'=>'/Activity/MatchTe/get_info','type'=>'post','info'=>'bm');
	$api['user_vidoes'] = array('url'=>'/Videos/Videos/get_user_videos','type'=>'post','info'=>'pgc');
	$api['match'] = array('url'=>'/activity/match/get_detail','type'=>'post','info'=>'match');
	$api['fbh'] = array('url'=>'/Activity/MatchTe/sign_up_fbh','type'=>'post','info'=>'fbh');
	$api['imgCode'] = array('url'=>'/Basic/ImgVerify/getCode','type'=>'post','info'=>'图片验证码');
?>
