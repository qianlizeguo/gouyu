<?php /* Smarty version Smarty-3.1.6, created on 2016-08-20 13:47:17
         compiled from "/Users/wuzeguo/workspace/gouyu/Tpl/Acp/index.html" */ ?>
<?php /*%%SmartyHeaderCode:127499381157b7ee7fc57348-63229479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf968130b76850fd0644e3e4ec22af58c097f35' => 
    array (
      0 => '/Users/wuzeguo/workspace/gouyu/Tpl/Acp/index.html',
      1 => 1471672034,
      2 => 'file',
    ),
    '8e2892026ea33ad48208d4644e2a84be371864f9' => 
    array (
      0 => '/Users/wuzeguo/workspace/gouyu/Tpl/acp.html',
      1 => 1471252521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127499381157b7ee7fc57348-63229479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57b7ee7ff38d1',
  'variables' => 
  array (
    'system_config' => 0,
    'version' => 0,
    'ui_navPosMod' => 0,
    'ui_layoutMod' => 0,
    'my_menu_file' => 0,
    'mod_id' => 0,
    'key' => 0,
    'menu' => 0,
    'first_level' => 0,
    'menu_list' => 0,
    'link' => 0,
    'unread_message_num' => 0,
    'action_title' => 0,
    'action_src' => 0,
    'head_title' => 0,
    'my_menu_list' => 0,
    'menu_no' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b7ee7ff38d1')) {function content_57b7ee7ff38d1($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/wuzeguo/workspace/gouyu/frame/Extend/Vendor/Smarty/plugins/modifier.truncate.php';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 - 管理中心 - <?php echo $_smarty_tpl->tpl_vars['system_config']->value['SHOP_TITLE'];?>
</title>
	<link rel="stylesheet" href="__ACPJS__/acpcomm.js?version=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">
	<link rel="stylesheet" href="__ACPCSS__/acpcomm-min.css">
	<link rel="stylesheet" href="__PLG__/jPops/jquery.jpops.min-v3.css">
	<link type="text/css" rel="stylesheet" href="__ACPCSS__/tip.css" />
</head>
<body id="body">

	<div class="header <?php if ($_smarty_tpl->tpl_vars['ui_navPosMod']->value=='fixed'){?>fixed<?php }?>" id="j-nav">
		<div class="layout blue clearfix <?php if ($_smarty_tpl->tpl_vars['ui_layoutMod']->value=='fixed'){?>fixed<?php }?>">
			<div class="brandWrap fl">
				<h1 class="logo">
					<a href="/"><img src="__PUBLIC__/Images/acp/logo.png"></a>
				</h1>
				<a href="javascript:;" class="brandTgl j-togggle-sidebar"><i class="ic16 ic-menu"></i></a>
			</div>
			<!-- end brandWrap -->
			<ul class="nav fl clearfix">
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['my_menu_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>
				<li class="nav-list">
					<a href="javascript:;" class="nav-list-main j-navsub-toggle <?php if ($_smarty_tpl->tpl_vars['mod_id']->value==$_smarty_tpl->tpl_vars['key']->value){?>active<?php }?>">
						<span><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>

							<?php if (isset($_smarty_tpl->tpl_vars['menu']->value['num'])&&$_smarty_tpl->tpl_vars['menu']->value['num']>0){?>
								(<b><?php echo $_smarty_tpl->tpl_vars['menu']->value['num'];?>
</b>)
							<?php }?>
						</span>
						<i class="navArrow ic8 ic-navarrow-down"></i>
					</a>
					<dl class="nav-list-sub">
					<?php  $_smarty_tpl->tpl_vars['menu_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_list']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_list']->key => $_smarty_tpl->tpl_vars['menu_list']->value){
$_smarty_tpl->tpl_vars['menu_list']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level']->value = $_smarty_tpl->tpl_vars['menu_list']->key;
?>
						<dt><?php echo $_smarty_tpl->tpl_vars['first_level']->value;?>
</dt>
						<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['link']->value['in_menu']==''&&!isset($_smarty_tpl->tpl_vars['link']->value['in_top'])){?>
							<dd>
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['mod_do_url'];?>
/mod_id/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>

									<?php if (isset($_smarty_tpl->tpl_vars['link']->value['num'])&&$_smarty_tpl->tpl_vars['link']->value['num']>0){?>
										(<b class="colorRed"><?php echo $_smarty_tpl->tpl_vars['link']->value['num'];?>
</b>)
									<?php }?>
								</a>
							</dd>
						<?php }?>
						<?php } ?>
					<?php } ?>
						</dl>
					<!-- end nav-list-sub -->
				</li>
			<?php } ?>
			</ul>
			<!-- end nav -->
			<ul class="nav fr mgr10 clearfix">
				<!-- 站内信先注释，加入站内信功能时去除注释 -->
                <!--<li class="nav-list">
                	<?php if ($_smarty_tpl->tpl_vars['unread_message_num']->value){?>
                    <a href="/AcpMessage/waiting_reply_message/mod_id/2" class="nav-list-main onlyicon">
                        <i class="navArrow ic16 ic-envelope"></i>
                    </a>
                    <span class="nav-mailcount">
                    	<?php echo $_smarty_tpl->tpl_vars['unread_message_num']->value;?>

                    </span>
                    <?php }else{ ?>
                    <a href="/AcpMessage/list_message/mod_id/2" class="nav-list-main onlyicon">
                        <i class="navArrow ic16 ic-envelope"></i>
                    </a>
                    <span class="nav-mailcount"></span>
                    <?php }?>
				</li>-->
                <li class="nav-list">
                    <a href="javascript:;" class="nav-list-main onlyicon j-navsub-toggle">
                        <i class="navArrow ic16 ic-cog"></i>
                    </a>
                    <dl class="nav-list-sub layoutCtrl algRight">
                        <dt>布局方式</dt>
                        <dd>
                            <a href="javascript:;" class="j-layoutCtrl" data-type="fluid"><i class="gicon-ok-sign <?php if ($_smarty_tpl->tpl_vars['ui_layoutMod']->value=='fixed'){?>white<?php }?>"></i>流式布局</a>
                        </dd>
                        <dd>
                            <a href="javascript:;" class="j-layoutCtrl" data-type="fixed"><i class="gicon-ok-sign <?php if ($_smarty_tpl->tpl_vars['ui_layoutMod']->value=='fluid'||$_smarty_tpl->tpl_vars['ui_layoutMod']->value==''){?>white<?php }?>"></i>固定宽度</a>
                        </dd>
                        <dt class="ie6hide">导航栏固定方式</dt>
                        <dd class="ie6hide">
                            <a href="javascript:;" class="j-navCtrl" data-type="default"><i class="gicon-ok-sign <?php if ($_smarty_tpl->tpl_vars['ui_navPosMod']->value=='fixed'){?>white<?php }?>"></i>默认</a>
                        </dd>
                        <dd class="ie6hide">
                            <a href="javascript:;" class="j-navCtrl" data-type="fixed"><i class="gicon-ok-sign <?php if ($_smarty_tpl->tpl_vars['ui_navPosMod']->value=='default'||$_smarty_tpl->tpl_vars['ui_navPosMod']->value==''){?>white<?php }?>"></i>固定</a>
                        </dd>
                    </dl>
                </li>
                <li class="nav-list">
                    <a href="javascript:;" class="nav-list-main onlyicon j-navsub-toggle">
                        <i class="navArrow ic16 ic-user"></i>
                    </a>
                    <dl class="nav-list-sub algRight">
                        <dd><a href="javascript:;"><?php echo smarty_modifier_truncate($_SESSION['user_info']['username'],15,"...",true);?>
</a></dd>
                        <dd><a href="/" target="_blank">首页</a></dd>
                        <dd><a href="/logout">退出</a></dd>
                    </dl>
                </li>
            </ul>
            <!-- end nav -->
		</div>
	</div>
	<!-- end header -->

	<div class="layout <?php if ($_smarty_tpl->tpl_vars['ui_navPosMod']->value=='fixed'){?>pdt40<?php }?> <?php if ($_smarty_tpl->tpl_vars['ui_layoutMod']->value=='fixed'){?>fixed<?php }?>" id="j-cont-ly">
		<div class="container clearfix">
			<div class="content fr">
				<div id="main">
					
<div class="main-head clearfix">
	<div class="fl">
        <span class="main-head-txt">欢迎您, <?php echo $_smarty_tpl->tpl_vars['display_name']->value;?>
</span>
	</div>
	<div class="fr">
	    <!--
		<a href="/AcpOrder/get_pre_pay_order_list/mod_id/1" class="clrblock clr-red">
			<i class="ic34 ic-signup"></i>
			<span class="clrblock-txt">待处理订单</span>
			<span class="clrblock-txt"><?php echo $_smarty_tpl->tpl_vars['unhandled_item']->value['unhandled_order_num'];?>
笔</span>
		</a>
		<a href="/AcpUser/audit_waiting/mod_id/2" class="clrblock clr-orange">
			<i class="ic34 ic-users"></i>
			<span class="clrblock-txt">待审核分销商</span>
			<span class="clrblock-txt"><?php echo $_smarty_tpl->tpl_vars['unhandled_item']->value['waiting_audit_num'];?>
个</span>
		</a>
		<a href="/AcpFinance/waiting_enter/mod_id/5" class="clrblock clr-green">
			<i class="ic34 ic-credit"></i>
			<span class="clrblock-txt">待确认入账</span>
			<span class="clrblock-txt"><?php echo $_smarty_tpl->tpl_vars['unhandled_item']->value['unhandled_account_apply_num'];?>
条</span>
		</a>
		<a href="/AcpSuggest/list_complain/mod_id/0" class="clrblock clr-blue">
			<i class="ic34 ic-aid"></i>
			<span class="clrblock-txt">待处理投诉</span>
			<span class="clrblock-txt"><?php echo $_smarty_tpl->tpl_vars['unhandled_item']->value['unhandled_complain_num'];?>
条</span>
		</a>
        -->
	</div>
</div> 

					<div class="breadcrumbs">
						<a href="/acp">首页</a>
                        <?php if ($_smarty_tpl->tpl_vars['action_title']->value){?>
                        <span class="ic8 ic-menuarrow-right"></span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['action_src']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['action_title']->value;?>
</a>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['head_title']->value){?>
                        <span class="ic8 ic-menuarrow-right"></span>
                        <a href="javascript:;" class="colorBlack"><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
</a>
                        <?php }?>
						<a href="javascript:;" class="closebrdc j-closebrdc"><i class="gicon-remove"></i></a>
					</div>
					<!-- end breadcrumbs -->
					<div class="main-content">
					
<style>
 ul,li { list-style-type:none;z-index:99999}
.select_box { width:100px; border:1px solid #ccc; padding-right:20px; padding-left:10px; background:url('__ACPIMAGES__/select_ul.gif') no-repeat 110px center; position:relative;}
.select_box span { cursor:pointer; display:block; line-height:25px; width:100%; height:25px; overflow:hidden;}
.select_box ul li { cursor:pointer;}
.son_ul { width:129px; position:absolute; left:0; top:25px; border:1px dashed #ccc; background:#fff;}
.son_ul li { display:block; line-height:25px; padding-left:10px; width:120px}
.hover_order { background:#368EE0;}
.hover_user{ background:#F8A31F;}
</style>

<div class="chartWrap">      
    <!--
    <div class="chartBox chartBox-blue">    
        <div class="cb-title">今日动态</div>      
        <div class="cb-contain" style='min-height:80px;'>
            今日新增订单 : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['order_today_total']->value)===null||$tmp==='' ? 0 : $tmp);?>
单</br>
            总共订单数量 : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['order_total']->value)===null||$tmp==='' ? 0 : $tmp);?>
单</br>
            今日新增用户 : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['today_num']->value)===null||$tmp==='' ? 0 : $tmp);?>
人</br>
            总共用户数量 : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['total_num']->value)===null||$tmp==='' ? 0 : $tmp);?>
人
        </div>      
    </div>      
    -->
    <div class="chartBox">      
        <div class="cb-title">系统信息</div>      
        <div class="cb-contain nopdd">  
            <table class="wxtables table-list">    
                <colgroup>    
                    <col width="100%">     
                </colgroup>    
                <tbody>
                    <tr><td>操作系统 : <?php echo $_smarty_tpl->tpl_vars['data']->value['OS_name'];?>
</td></tr>  
                    <tr><td>CPU 信息 : <?php echo $_smarty_tpl->tpl_vars['data']->value['cpu_model'];?>
</td></tr>  
                    <tr><td>PHP 版本 : <?php echo $_smarty_tpl->tpl_vars['data']->value['PHP_Version'];?>
</td></tr>  
                </tbody>    
            </table>  
        </div>      
    </div>      
</div> 

					</div>
					<!-- end main-content -->
				</div>
				<!-- end main -->
			</div>
			<!-- end content -->
			<div id="sidebar" class="fl">
				
					<?php  $_smarty_tpl->tpl_vars['menu_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_list']->_loop = false;
 $_smarty_tpl->tpl_vars['first_level'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['my_menu_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_list']->key => $_smarty_tpl->tpl_vars['menu_list']->value){
$_smarty_tpl->tpl_vars['menu_list']->_loop = true;
 $_smarty_tpl->tpl_vars['first_level']->value = $_smarty_tpl->tpl_vars['menu_list']->key;
?>
					<dl class="menulist">
						<dt>
							<a href="" class="j-togglemenu">
								<i class="meunarrow ic8 ic-menuarrow-down"></i>
								<?php echo $_smarty_tpl->tpl_vars['first_level']->value;?>

							</a>
						</dt>
						<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['link']->value['in_menu']==''){?>
								<dd>
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['mod_do_url'];?>
/mod_id/<?php echo $_smarty_tpl->tpl_vars['mod_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['link']->value['id']==$_smarty_tpl->tpl_vars['menu_no']->value){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['link']->value['num'])&&$_smarty_tpl->tpl_vars['link']->value['num']>0){?>
											(<b><?php echo $_smarty_tpl->tpl_vars['link']->value['num'];?>
</b>)
										<?php }?>
									</a>
								</dd>
							<?php }?>
						<?php } ?>
					</dl>
					<?php } ?>
				
			</div>
			<!-- end sidebar -->
		</div>
		<!-- end container -->
	</div>
	
	<!-- 提示层 by zhengzhen -->
	<p id="J_TipLayer" class="popTip" style="top: 110px; display: none;">
		<i></i>
		<span>正在加载，请稍后...</span>
	</p>
	<div id="J_TransMaskLayer" class="transMask" style="display: none;"></div>
	
	<script src="__JS__/jquery/jquery-1.8.3.min.js?version=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
	<script src="__ACPJS__/acpcomm-min.js?version=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
	<script src="__PLG__/jPops/jquery.jpops.min-v3.js?version=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
	<script type="text/javascript" src="__ACPJS__/tip.js?version=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
	
<script type="text/javascript" src="/Public/Plugins/Highcharts/highcharts.js?version=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script type="text/javascript" src="__ACPJS__/acp_index.js?version=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script type="text/javascript">
	var order_total	= '<?php echo $_smarty_tpl->tpl_vars['order_total']->value;?>
';
		order_subtitle = '<?php echo $_smarty_tpl->tpl_vars['order_subtitle']->value;?>
';
	    order_data_x = '<?php echo $_smarty_tpl->tpl_vars['order_data_x']->value;?>
';
	    order_data_y = '<?php echo $_smarty_tpl->tpl_vars['order_data_y']->value;?>
';
	
	var user_total	= '<?php echo $_smarty_tpl->tpl_vars['user_total']->value;?>
';
		user_subtitle = '<?php echo $_smarty_tpl->tpl_vars['user_subtitle']->value;?>
';
    	user_data_x = '<?php echo $_smarty_tpl->tpl_vars['user_data_x']->value;?>
';
    	user_data_y = '<?php echo $_smarty_tpl->tpl_vars['user_data_y']->value;?>
';
</script>

</body>
</html>
<?php }} ?>