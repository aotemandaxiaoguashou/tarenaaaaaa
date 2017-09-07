<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><script charset="utf-8" src="images/stat.htm" id="stat_script"></script><script charset="utf-8" src="images/kf_ivt.php" id="ivt_script"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>用户登录-CoolMarry-酷结网</title>
<meta name="Keywords" content="婚庆公司，婚礼策划，婚庆布置，婚庆策划，婚礼策划，婚庆用品，婚庆网，婚礼服务，酷结网">
<meta name="Description" content="酷结网是国内首家一站式婚庆服务网络直购平台,让新人直接选择心仪的婚礼策划师,婚礼主持,化妆师,摄影师,摄像师,花艺设计,婚纱摄影等,同样的婚礼最低的价格,帮助新">
<meta property="qc:admins" content="27723626566377451221636">
<link type="text/css" rel="stylesheet" href="/rd/Public/css/base.css">
<link type="text/css" rel="stylesheet" href="/rd/Public/css/style.css">
<link type="text/css" rel="stylesheet" href="/rd/Public/css/login_reg.css">
<script src="/rd/Public/js/jquery-1.js"></script>
<script src="/rd/Public/js/global.js"></script>
</head>
<body>
<div class="login-reg-header clearfix">
  <div class="logo"><a href="/rd/index.php/Home/index/index"><img src="/rd/Public/images/201409231029163368.gif"></a></div>
</div>
<div class="login-reg-box">
  <div class="login-reg-area login-bg">
    <div class="left-area">
      <h1>欢迎登陆</h1>
      <form action="/rd/index.php/Home/Login/do_login" method="post" id="loginForm" name="loginForm">
        <dl>
          <dt>用户名：</dt>
          <dd>
            <div class="txt-input">
              <input class="txt1" name="username" id="username" onblur="checkUsername();" type="text">
              <div class="icon"></div>
            </div>
            <p class="login-error">用户名错误 !</p>
          </dd>
        </dl>
        <dl>
          <dt>密码：</dt>
          <dd>
            <div class="txt-input">
              <input class="txt1" id="userpwd" value="" name="userpwd" onblur="checkPassword();" onkeydown="enterAuto(event);" autocomplete="off" type="password">
              <div class="icon icon1"></div>
            </div>
            <p class="login-error">密码错误 !</p>
          </dd>
        </dl>
       
        <div class="login-btn-box">
          <input value="" onclick="checkSubmit();" class="login-btn" type="submit">
        </div>
        <div class="login-btn-box">
          <div class="third">
            <h3>通过第三方登录</h3>
            <div class="third-pic">
              <a href="javascript:;" onclick="toQzoneLogin();"><img src="/rd/Public/images/qq.jpg"></a>
              <a href="javascript:;" onclick="toSinaLogin();"><img src="/rd/Public/images/sina.jpg"></a>
            </div>
          </div>
        </div>
        <div class="login-or-reg">
          <div class="icon-or">OR</div>
          还不是到酷结用户？3秒极速注册，享受一站式婚宴服务！<a href="/rd/index.php/Home/Login/reg">去免费注册&gt;&gt;</a>
        </div>
      </form>
    </div>
  </div>
</div>

  

<div class="contact">
  <div class="cont-box">
    <div class="tel">
      <span class="iconfont">󰀉</span> 客服热线<br>400-616-6000    </div>
    <div class="icon-box">
      <span class="iconfont">酷</span>
      <a href="http://weibo.com/coolmarry" target="_blank">关注我们</a>
    </div>
    <div class="icon-box">
      <span class="iconfont">结</span>
      <a href="https://wx.qq.com/" target="_blank">官方微信</a>
    </div>
    <div class="icon-box wx">
      <img src="/rd/Public/images/wx.gif" alt="wx">
    </div>
    <div class="contact-box">
      <div class="bg"></div>
      <strong>CONTACT US 联系我们</strong>
      <p>工作时间：09:00-20:00<br>(星期一至星期五，节假日除外)</p>
    </div>
  </div>
</div><div class="help-center w">
  <div class="help-box clearfix">
      <dl>
      <dt>关于我们</dt>
               	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-44.html">酷结愿景</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-45.html">酷结大事记</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-22.html">酷结介绍</a></dd>
	      	      
    </dl>
        <dl>
      <dt>帮助中心</dt>
               	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-46.html">售后流程</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-25.html">支付流程</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-3.html">购买流程</a></dd>
	      	      
    </dl>
        <dl>
      <dt>消费担保</dt>
               	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-47.html">实名认证与签订合同</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-51.html">保证金机制与担保机制</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-52.html">价格透明与全网最低</a></dd>
	      	      
    </dl>
        <dl>
      <dt>联系我们</dt>
               	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-49.html">商务合作</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-50.html">加入我们</a></dd>
	      	           	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-23.html">服务监督</a></dd>
	      	      
    </dl>
        <dl>
      <dt>法律声明</dt>
               	      <dd><a target="_blank" href="http://www.coolmarry.cn/help-48.html">协议文本</a></dd>
	      	      
    </dl>
      </div>
</div><div id="footer">
  <div class="bot-nav">
      <a href="http://www.coolmarry.cn/links.html">友情链接</a>    </div>
  <p class="copyright">北京酷结网络技术有限公司&nbsp;&nbsp; 400-616-6000&nbsp;Copyright&nbsp;<a href="http://www.coolmarry.cn/%E2%80%9Dmailto:www.coolmarry.com%E2%80%9D">COOLMARRY</a> &nbsp;All Rights Reserved&nbsp; 京ICP备14040451号-1   京公网安备110105002103  100020     <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253323250'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s9.cnzz.com/z_stat.php%3Fid%3D1253323250%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253323250"><a href="http://www.cnzz.com/stat/website.php?web_id=1253323250" target="_blank" title="站长统计"><img src="/rd/Public/images/pic.gif" border="0" hspace="0" vspace="0"></a></span><script src="/rd/Public/images/z_stat.php" type="text/javascript"></script><script src="/rd/Public/images/core.php" charset="utf-8" type="text/javascript"></script>
    </p><p class="attestation">
    <a><img src="/rd/Public/images/x1.gif" alt="img"></a>
    <a><img src="/rd/Public/images/x2.gif" alt="img"></a>
    <script src="/rd/Public/images/seallogo.dll"></script><span style="display:inline-block;position:relative;width:auto;"><a href="https://ss.knet.cn/verifyseal.dll?sn=e141103110105557699ypu000000&amp;ct=df&amp;a=1&amp;pa=0.35737048668353766" id="kx_verify" tabindex="-1" target="_blank" kx_type="图标式" style="display:inline-block;"><img src="/rd/Public/images/cnnic.png" style="border:none;" oncontextmenu="return false;" alt="可信网站"></a></span>
    <a href="https://search.szfw.org/cert/l/CX20141031005807005872" target="_blank"><img src="/rd/Public/images/x4.gif" alt="诚信网站"></a>

  </p>
</div>

<script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
<script type="text/javascript" src="/rd/Public/images/kf.php"></script>

<script>
	//sina登陆
	function toSinaLogin()
	{
		window.location.href="https://api.weibo.com/oauth2/authorize?client_id=2290400231&response_type=code&redirect_uri="+'http://tdrz.easyec.cn/Sina/callback.php?back_url=http://www.coolmarry.cn/?p1';
	}
	//qq登陆
	function toQzoneLogin()
	{
		window.location.href="http://kujie.easyec.com.cn/qq/oauth/qq_login.php?back_url=http://www.coolmarry.cn/?p1";
	}
	
	var username_msg = new Array();
	var userpwd_msg  = new Array();
	username_msg[0]  = '请输入E-mail/用户名';
	userpwd_msg[0]   = '请输入密码';
	function checkUsername()
	{
		var username = $('#username').val();
		if( username == '')
		{
			$('#username').parent().next().html(username_msg[0]);
			$('#username').parent().next().css('visibility','visible');
			return false;
		}
	}
	function checkPassword()
	{
		var userpwd = $('#userpwd').val();
		if( userpwd == '')
		{
			$('#userpwd').parent().next().html(userpwd_msg[0]);
			$('#userpwd').parent().next().css('visibility','visible');
			return false;
		}
	}
	function checkSubmit()
	{
		if(false == checkUserName()) return false;
		if(false == checkPassword()) return false;
		<!-- $("#loginForm").submit(); -->
	}
	//回车提交登陆事件
	function enterAuto(evt)
	{
		var evt=evt?evt:(window.event?window.event:null);//兼容IE和FF
		if (evt.keyCode==13)
		{
			checkSubmit();
		}
	}
</script>  
</body></html>