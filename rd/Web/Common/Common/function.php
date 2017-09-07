<?php
	/*
	* 自定义函数库
	*/
	
	//该函数是根据无限分类中path字段内出现的“-”个数来进行输出缩进
	//模板里使用示例：{:countPath($cat['path'])}{$cat.catname}
	function countPath($path){
		$num=substr_count($path,"-");
		return str_repeat('&nbsp;',$num*5).'|--';
	}

	
	//结合邮箱配置
	//加密函数
	function encrypt($data) 
	{ 
		$key    =   md5('jianfan'); 
		$x      =   0; 
		$len    =   strlen($data); 
		$l      =   strlen($key); 
		$char='';
		$str='';
		for ($i = 0; $i < $len; $i++) 
		{ 
			if ($x == $l)  
			{ 
				$x = 0; 
			} 
			$char .= $key{$x}; 
			$x++; 
		} 
		for ($i = 0; $i < $len; $i++) 
		{ 
			$str .= chr(ord($data{$i}) + (ord($char{$i})) % 256); 
		} 
		return base64_encode($str); 
	}

	//解密函数
	function decrypt($data) 
	{ 
		$key =  md5('jianfan'); 
		$x = 0; 
		$data = base64_decode($data); 
		$len = strlen($data); 
		$l = strlen($key);
		$char='';
		$str='';
	 
		for ($i = 0; $i < $len; $i++) 
		{ 
			if ($x == $l)  
			{ 
				$x = 0; 
			} 
			$char .= substr($key, $x, 1); 
			$x++; 
		} 
		for ($i = 0; $i < $len; $i++) 
		{ 
			if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))) 
			{ 
				$str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1))); 
			} 
			else 
			{ 
				$str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1))); 
			} 
		} 
		return $str; 
	}


	/**
	 * 邮件发送函数
	 * @param $to           收件人邮箱
	 * @param $subject      信件主题标题
	 * @param $content      信件内容
	 * @param $emial_user   发件人邮件
	 * @param $emial_pwd    发件人邮箱密码
	 * @param $company      发件人公司名称
	 * @return    			最后返回的布尔值
	 */
	function sendMail($to, $subject, $content,$email_user,$email_pwd,$company) {

		//加载进来
		Vendor('PHPMailer.PHPMailerAutoload');
		 
		 $mail = new PHPMailer();                //实例化
		 
		 $mail->IsSMTP();                       // 启用SMTP
		 $mail->Host=C('MAIL_HOST');            //smtp服务器的名称
		 $mail->SMTPAuth = C('MAIL_SMTPAUTH');  //启用smtp认证
		 $mail->Username = $email_user;          //你的邮箱名
		 $mail->Password = $email_pwd ;          //邮箱密码
		 $mail->From = $email_user;              //发件人地址（也就是你的邮箱地址）
		 $mail->FromName = $company;            //发件人姓名
		 $mail->AddAddress($to,"name");         //收件人邮箱
		 $mail->WordWrap = 50;                  //设置每行字符长度
		 $mail->Encoding = base64;
		 $mail->CharSet = "utf-8";
		 $mail->IsHTML(C('MAIL_ISHTML'));       // 是否HTML格式邮件
		 $mail->CharSet=C('MAIL_CHARSET');      //设置邮件编码
		 $mail->Subject =$subject;              //邮件主题
		 $mail->Body = $content;                //邮件内容
		 $mail->AltBody = "邮件出现了一些小问题，给你照成不便，请见谅！"; //邮件正文不支持HTML的备用显示

		//dump($mail->ErrorInfo);//exit;OK
		 if(!$mail->Send()) {
			return false;
			//底下是错误信息，开发中用于测试
			echo "Mailer Error: " . $mail->ErrorInfo;
		   
		 } else {
			//echo "成功了";
			return true;
		 }
	}
	
	//该函数实现根据中文字符串截取,默认截取255个字
	function strdel($str,$start=0,$length=255,$encode='utf-8'){
		$str=strip_tags($str,"<br><br/>");
		$str=mb_substr($str,$start,$length,$encode);
		$len=mb_strlen($str);
		if($len<=$length){
			return $str;
		}
		else{
			return str_pad($str,($len+3),"...");
		}
		
	}
	
	
	
	
	/**
    *   定制分页样式
    *   @param $obj  实例化分页的对象
    *
    */
    function stylepage($obj){
        //样式定义
        $obj->setConfig('header','<a class="prev">共 %TOTAL_ROW% 条记录</a></li>');
        $obj->setConfig('prev','上一页');
        $obj->setConfig('next','下一页');
        $obj->setConfig('first','第一页');
        $obj->setConfig('last','尾页');
        $obj->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %END% %DOWN_PAGE%');
    }
	