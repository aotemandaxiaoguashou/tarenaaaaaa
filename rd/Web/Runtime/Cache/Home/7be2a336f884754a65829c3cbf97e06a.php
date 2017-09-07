<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head><script charset="utf-8" src="images/stat.htm" id="stat_script"></script><script charset="utf-8" src="images/kf_ivt.php" id="ivt_script"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>注册新用户-CoolMarry-酷结网</title>
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
  <div class="login-reg-area">
    <div class="left-area reg-box">
      <h1>欢迎注册</h1>
      <form action="/rd/index.php/Home/Login/do_reg" method="post" id="useradd" class="padding_10">
        <dl>
          <dt><em>*</em>用户名：</dt>
          <dd>
            <div class="txt-input">
              <input class="txt1" name="username" id="user_name" onblur="checkUsername()" type="text">
              <div class="icon"></div>
            </div>
            <p class="login-error">用户名错误!</p>
          </dd>
        </dl>
		<dl>
          <dt><em>*</em>邮箱名：</dt>
          <dd>
            <div class="txt-input">
              <input class="txt1" name="email" id="user_email" onblur="checkEmail();" type="text">
              <div class="icon"></div>
            </div>
            <p class="login-error">邮箱名错误!</p>
          </dd>
        </dl>
        <dl>
          <dt><em>*</em>设置密码：</dt>
          <dd>
            <div class="txt-input">
              <input class="txt1" name="userpwd" id="pwd" onblur="checkPwd();" type="password">
              <div class="icon icon1"></div>
            </div>
            <p class="login-error">密码格式错误！密码长度最少为6位!</p>
          </dd>
        </dl>
        <dl>
          <dt><em>*</em>确认密码：</dt>
          <dd>
            <div class="txt-input">
              <input class="txt1" name="reuserpwd" id="pwd2" onblur="checkPwd2();" type="password">
              <div class="icon icon1"></div>
            </div>
            <p class="login-error">两次输入的密码不一致！</p>
          </dd>
        </dl>
        <dl>
          <dt><em>*</em>验证码：</dt>
          <dd>
            <div class="txt-input3">
              <input class="txt3" name="code" id="captcha" onblur="checkCaptcha();" type="text">
            </div>
            <div class="reg-confirm">
              <img src="/rd/index.php/Home/Login/code" onclick="this.src = this.src+'?'+Math.random()" alt="验证码">
            </div>
            <p class="login-error">验证码错误！</p>
          </dd>
        </dl>
        <div class="txt-input2">
          <label><input checked="checked" type="checkbox">我已阅读并同意</label>&nbsp;&nbsp;<a href="http://www.coolmarry.cn/reg.php?act=show_zcxy" target="_blank">《酷结协议》</a>
        </div>
        <div class="login-btn-box">
          <input value="" onclick="checkSubmit();" class="login-btn reg-btn" type="submit">
        </div>
      </form>
    </div>
    <div class="right-area">
      <div class="icon-or">OR</div>
      已有账号，<a href="/rd/index.php/Home/Login/login">去登陆</a>
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
    <script src="/rd/Public/images/seallogo.dll"></script><span style="display:inline-block;position:relative;width:auto;"><a href="https://ss.knet.cn/verifyseal.dll?sn=e141103110105557699ypu000000&amp;ct=df&amp;a=1&amp;pa=0.5440700057763527" id="kx_verify" tabindex="-1" target="_blank" kx_type="图标式" style="display:inline-block;"><img src="/rd/Public/images/cnnic.png" style="border:none;" oncontextmenu="return false;" alt="可信网站"></a></span>
    <a href="https://search.szfw.org/cert/l/CX20141031005807005872" target="_blank"><img src="/rd/Public/images/x4.gif" alt="诚信网站"></a>

  </p>
</div>

<script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
<!--
<script src="http://kxlogo.knet.cn/seallogo.dll?sn=e141103110105557699ypu000000&size=0"></script>
-->
<script type="text/javascript" src="/rd/Public/images/kf.php"></script>


<script>
var validatePrompt = {
  username:{
    succeed:"正确",
    isNull:"请输入4-20位字符，可由英文、数字及“_”、“-”组成用户名",
    error:{
      beUsed:"该用户名已被使用，请使用其它用户名注册，如果您是，请<a href='login.html'>登录</a>",
      badLength:"用户名长度只能在4-20位字符之间",
      badFormat:"用户名只能由中文、英文、数字及“_”、“-”组成"
    }
  },
	email:{
    succeed:"正确",
    isNull:"请输入邮箱",
    error:{
      beUsed:"该邮箱已被使用，请更换其它邮箱",
      badFormat:"邮箱格式不正确",
      badLength:"您填写的邮箱过长，邮件地址只能在50个字符以内"
    }
  },
  pwd:{
    succeed:"正确",
    isNull:"请输入6-16位字符，可由英文、数字及“_”、“-”组成密码",
    error:{
      badLength:"密码长度只能在6-16位字符之间",
      badFormat:"密码只能由英文、数字及“_”、“-”组成"
    }
  },
  pwd2:{
    succeed:"正确",
    isNull:"请再次输入密码",
    error:{
      badFormat:"两次输入密码不一致"
    }
  },
  
  xieyi:{
    onFocus:"",
    succeed:"",
    isNull:"请先阅读并同意协议",
    error:""
  },
  captcha:{
    succeed:"正确",
    isNull:"请输入验证码",
    error:{
      badCode:"验证码错误"
    }
  },
  empty:{
    onFocus:"",
    succeed:"",
    isNull:"",
    error:""
  }
};
var flag = false;
function checkUsername()
{	

  if(!$('#user_name').val())
  {
    $('#user_name').parents('div').next(".login-error").html(validatePrompt.username.isNull);
    $('#user_name').parents('div').next(".login-error").css('visibility','visible');
    return false;
  }

  if( !(/^[a-z0-9_-]{4,20}$/).test($('#user_name').val()) )
  {
    $('#user_name').parents('div').next(".login-error").html(validatePrompt.username.error.badFormat);
    $('#user_name').parents('div').next(".login-error").css('visibility','visible');
    return false;
  }
  else
  {	
	
   $.post("/rd/index.php/Home/Login/checkuser",{username:$('#user_name').val()},function (data){
      if(data == 'success')
      {
        $('#user_name').parents('div').next(".login-error").html(validatePrompt.username.error.beUsed);
        $('#user_name').parents('div').next(".login-error").css('visibility','visible');
        flag = false;
        return false;
      }
      else
      {
		$('#user_name').parents('div').next(".login-error").html(validatePrompt.username.succeed);
        $('#user_name').parents('div').next(".login-error").css("visibility","hidden");
        flag = true;
      }
    });
  }
}
function checkEmail(){
  if(!$('#user_email').val())
  {
    $('#user_email').parents('div').next(".login-error").html(validatePrompt.email.isNull);
    $('#user_email').parents('div').next(".login-error").css('visibility','visible');
    return false;
  }

  if( !( /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/).test($('#user_email').val()) )
  {
    $('#user_email').parents('div').next(".login-error").html(validatePrompt.email.error.badFormat);
    $('#user_email').parents('div').next(".login-error").css('visibility','visible');
    return false;
  }
  else
  {
    $.post("/rd/index.php/Home/Login/checkemail",{email:$('#user_email').val()},function (data){
      if(data == 'success')
      {
        $('#user_email').parents('div').next(".login-error").html(validatePrompt.email.error.beUsed);
        $('#user_email').parents('div').next(".login-error").css('visibility','visible');
        flag = false;
        return false;
      }
      else
      {

        $('#user_email').parents('div').next(".login-error").html(validatePrompt.email.succeed);
        $('#user_email').parents('div').next(".login-error").css("visibility","hidden");
        flag = true;
      }
    });
  }
}
//check password 1
function checkPwd()
{
  if(!$("#pwd").val())
  {
    $("#pwd").parents('div').next(".login-error").html(validatePrompt.pwd.isNull);
    $("#pwd").parents('div').next(".login-error").css('visibility','visible');
    return false;
  }
  if($("#pwd").val().length < 6 || $("#pwd").val().length > 16)
  {
    $("#pwd").parents('div').next(".login-error").html(validatePrompt.pwd.error.badLength);
    $("#pwd").parents('div').next(".login-error").css('visibility','visible');
    return false;
  }
  if(!(/^[A-Za-z0-9_-]+$/).test($("#pwd").val()))
  {
    $("#pwd").parents('div').next(".login-error").html(validatePrompt.pwd.error.badFormat);
    $("#pwd").parents('div').next(".login-error").css('visibility','visible');
    return false;
  }
  else
  {
    $("#pwd").parents('div').next(".login-error").html(validatePrompt.pwd.succeed);
    $("#pwd").parents('div').next(".login-error").css("visibility","hidden");
    return true;
  }
}
//check password 2
function checkPwd2()
{
  var pwdfs = $("#pwd").val();
  if(!$("#pwd2").val()){
    $("#pwd2").parents('div').next(".login-error").html(validatePrompt.pwd2.isNull);
    $("#pwd2").parents('div').next(".login-error").css('visibility','visible');
    return false;
  }else{
    if($("#pwd2").val() != pwdfs){
      $("#pwd2").parents('div').next(".login-error").html(validatePrompt.pwd2.error.badFormat);
      $("#pwd2").parents('div').next(".login-error").css('visibility','visible');
      return false;
    }else{
      $("#pwd2").parents('div').next(".login-error").html(validatePrompt.pwd2.succeed);
      $("#pwd2").parents('div').next(".login-error").css("visibility","hidden");
      return true;
    }
  }
}
//check Captcha
function checkCaptcha(){
  var captcha=$('#captcha').val();
  if(!captcha){
    $('#captcha').parents('div').nextAll(".login-error").html(validatePrompt.captcha.isNull);
    $('#captcha').parents('div').nextAll(".login-error").css("visibility","visible");
  }
}
//check xieyi
function xieyi()
{
  if($("#xieyi").attr('checked')){
    //$("#xieyi").parents('div').next(".login-error").html(validatePrompt.xieyi.isNull);
    alert(validatePrompt.xieyi.isNull);
    //$("#xieyi").parents('div').next(".login-error").css("color","red");
    return false;
  }else{
    $("#xieyi").parents('div').next(".login-error").html('');
    return true;
  }
}
function checkSubmit()
{

  if(false == checkUsername()) return false;
  if(false == flag) return false;
  if(false == checkPwd()) return false;
  if(false == checkPwd2()) return false;
  if(false == checkCaptcha()) return false;
  if(false == xieyi()) return false;
  <!-- $("#useradd").submit(); -->
}
function showContent(){
  $("#content").show();
}
</script>
</body></html>