<?php
	// $true_url = "http://121.42.194.207";
	$true_url = "http://dev.open.api.highfaner.com";

	//登录接口
	$api['login'] = array('url'=>'/User/Login/index','type'=>'post','info'=>'账号密码登录');
	$api['signup'] = array('url'=>'/User/Register/index','type'=>'post','info'=>'用户注册');
	$api['getcode'] = array('url'=>'/User/User/getCode','type'=>'post','info'=>'获取验证码');
	$api['resetpwd'] = array('url'=>'/User/User/resetPwdForPhone','type'=>'post','info'=>'重置密码');
	$api['modifyuser'] = array('url'=>'/User/User/modifyUserInfo','type'=>'post','info'=>'完善信息');
	$api['imgCode'] = array('url'=>'/Basic/ImgVerify/getCode','type'=>'post','info'=>'图片验证码');
	$api['activity'] = array('url'=>'/Activity/index/getDetail','type'=>'post','info'=>'活动详情');
	$api['avideos'] = array('url'=>'/Videos/Videos/activity_videos','type'=>'post','info'=>'活动详情视频');
	$api['video'] = array('url'=>'/Videos/Videos/get_videos_data','type'=>'post','info'=>'视频详情');
	$api['ugc'] = array('url'=>'/Videos/Videos/get_ugc_videos','type'=>'post','info'=>'UGC');
	$api['people'] = array('url'=>'/Videos/find/get_people','type'=>'post','info'=>'达人');
	$api['pgc'] = array('url'=>'/Videos/Videos/get_pgc_videos','type'=>'post','info'=>'pgc');
	$api['info'] = array('url'=>'/User/User/getInfoForUserId','type'=>'post','info'=>'pgc');
	$api['classes'] = array('url'=>'/curriculum/index/get_curriculum_preview','type'=>'post','info'=>'pgc');
	$api['bm'] = array('url'=>'/Activity/MatchTe/sign_up','type'=>'post','info'=>'bm');

	$api['user_vidoes'] = array('url'=>'/Videos/Videos/get_user_videos','type'=>'post','info'=>'pgc');
	$api['match'] = array('url'=>'/activity/match/get_detail','type'=>'post','info'=>'match');

?>
