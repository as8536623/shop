<?php


define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(dirname(__FILE__) . '/includes/lib_v_user.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

if($_CFG['is_distrib'] == 0)
{
	show_message('没有开启微信分销服务！','返回首页','index.php'); 
}

if($_SESSION['user_id'] == 0)
{
	ecs_header("Location: ./\n");
    exit;	 
}

$is_distribor = is_distribor($_SESSION['user_id']);
if($is_distribor != 1)
{
	show_message('您还不是分销商！','去首页','index.php');
	exit;
}


if (!$smarty->is_cached('v_user.dwt', $cache_id))
{
    assign_template();

    $position = assign_ur_here();
    $smarty->assign('page_title',      $position['title']);    // 页面标题
    $smarty->assign('ur_here',         $position['ur_here']);  // 当前位置

    /* meta information */
    $smarty->assign('keywords',        htmlspecialchars($_CFG['shop_keywords']));
    $smarty->assign('description',     htmlspecialchars($_CFG['shop_desc']));
	
	$user_info = get_user_info_by_user_id($_SESSION['user_id']); //用户信息，包括昵称和头像
	$user_money = get_user_money_by_user_id($_SESSION['user_id']); //用户余额
	$split_money = get_split_money_by_user_id($_SESSION['user_id']); //分成总金额
	$smarty->assign('user_info',$user_info);
	$smarty->assign('info',get_user_info($_SESSION['user_id']));
	$smarty->assign('user_money',$user_money);
	$smarty->assign('split_money',$split_money);
	$smarty->assign('user_id',$_SESSION['user_id']);
	
    /* 页面中的动态内容 */
    assign_dynamic('v_user');
}

$smarty->display('v_user.dwt', $cache_id);


?>