<?php
$_SESSION['order']['order_trade_kind']=66;

	// 紅陽
	$_SESSION['web_credit']='redsun'; //returnURL 會用到

	// 商家代號 store_id
	if($_SESSION['order']['order_trade_kind']==20){
		$web="";
		$pwd="";
		// $ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
		$ChkValue=MD5($new_ord_no.'42750898'.$all_paid.'4g54fm67fgvb1j2x8p54d3jq7ergve4c');
		//刷卡程式  BuySafe
		// echo "<form method='post' name='keyinorderm' action='./cart_trade_chk.php?buysafeord=1&errmsg2=' id='keyinorderm'>";
		echo "<form method='post' name='keyinorderm' action='https://gomypay.asia/Shopping/creditpay.asp' id='keyinorderm' >";
		echo "<input type='hidden' name='e_orderno' value='".$new_ord_no."'>";	//訂單編號
		echo "<input type='hidden' name='e_url' value='".$base_url."/Cart_trade_chk.php'>";	//回傳網址
		echo "<input type='hidden' name='e_backend_url' value=''>";	//對帳網址
		echo "<input type='hidden' name='e_no' value='42750898'>";	//商店代號
		echo "<input type='hidden' name='e_storename' value=''>";	//商店名稱
		echo "<input type='hidden' name='e_Lang' value='BIG5'>";	//語言
		echo "<input type='hidden' name='e_Cur' value='NT'>";	//支付幣別
		echo "<input type='hidden' name='e_money' value='".$all_paid."'>";	//交易金額
		echo "<input type='hidden' name='str_check' value='".$ChkValue."'>";	//驗證密碼
		echo "<input type='hidden' name='e_name' value='".$_SESSION['manifest']['mb_name']."'>";	//消費者姓名
		echo "<input type='hidden' name='e_telm' value='".$_SESSION['manifest']['TEL3']."'>";	//消費者手機
		echo "<input type='hidden' name='e_email' value='".$_SESSION['manifest']['email']."'>";	//消費者Email
		echo "<input type='hidden' name='e_info' value='".$_SESSION['manifest']['email']."'>";	//商品資訊


		echo "<input type='hidden' name='web' value='".$web."'>";	  //store_id
		echo "<input type='hidden' name='MN' value='".$all_paid."'>";
		// echo "<input type='hidden' name='MN' value='5'>";
		echo "<input type='hidden' name='online' value='1'>";
		echo "<input type='hidden' name='OrderInfo' value=''>";
		echo "<input type='hidden' name='sna' value='".$_SESSION['manifest']['mb_name']."'>";
		echo "<input type='hidden' name='uI' value='".$_SESSION['mb']['boss_id']."'>";
		echo "<input type='hidden' name='sdt' value='".$_SESSION['manifest']['TEL3']."'>";
		echo "<input type='hidden' name='sd' value='".$_SESSION['manifest']['address']."'>";
		echo "<input type='hidden' name='email' value=''>";
		echo "<input type='hidden' name='Td' value='".$new_ord_no."'>";
		echo "<input type='hidden' name='ChkValue' value='".$ChkValue."'>";
		echo "</form>";
		echo "<script type='text/javascript'>";
		echo "document.getElementById('keyinorderm').submit();";
		echo "</script>";
	}else if($_SESSION['order']['order_trade_kind']==66){
		//銀聯
		$web="";
		$pwd="";
		$ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
		echo "<form method='post'  id='keyinorder6' name='keyinorder6' action='https://www.esafe.com.tw/Service/Etopm.aspx' >";
		echo "<input type='hidden' name='web' value='".$web."'>";  //store_id
		$cn_paid_money=round($all_paid/4);
		echo "<input type='hidden' name='MN' value='".$cn_paid_money."'>";
		// echo "<input type='hidden' name='MN' value='10'>";
		echo "<input type='hidden' name='online' value='1'>";
		echo "<input type='hidden' name='OrderInfo' value='dz-enzyme'>";
		echo "<input type='hidden' name='sna' value=''>";
		echo "<input type='hidden' name='sdt' value=''>";
		echo "<input type='hidden' name='email' value=''>";
		echo "<input type='hidden' name='note1' value=''>";
		echo "<input type='hidden' name='note2' value=''>";
		echo "<input type='hidden' name='Td' value='".$new_ord_no."'>";
		echo "<input type='hidden' name='ChkValue' value='".$ChkValue."'>";
		echo "</form>";
		echo "<script type='text/javascript'>";
		echo "document.getElementById('keyinorder6').submit();";
		echo "</script>";
	}else if($_SESSION['order']['order_trade_kind']==80){
		//支付寶  AliPay 繳款金額 為台幣 ， 不可有小數點和千位符號 。
		$web="";
		$pwd="";
		$ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
		echo "<form method='post'  id='keyinorder6' name='keyinorder6' action='https://www.esafe.com.tw/Service/Etopm.aspx' >";
		echo "<input type='hidden' name='web' value='".$web."'>";  //store_id
		echo "<input type='hidden' name='MN' value='".$all_paid."'>";
		// echo "<input type='hidden' name='MN' value='10'>";
		echo "<input type='hidden' name='OrderInfo' value='".$new_ord_no."'>";
		echo "<input type='hidden' name='sna' value='".$_SESSION['mb']['mb_name']."'>";
		echo "<input type='hidden' name='sdt' value='".$_SESSION['mb']['tel3']."'>";
		echo "<input type='hidden' name='email' value='".$_SESSION['manifest']['email']."'>";
		echo "<input type='hidden' name='note1' value=''>";
		echo "<input type='hidden' name='note2' value=''>";
		echo "<input type='hidden' name='Td' value='".$new_ord_no."'>";
		echo "<input type='hidden' name='ChkValue' value='".$ChkValue."'>";
		echo "</form>";
		echo "<script type='text/javascript'>";
		echo "document.getElementById('keyinorder6').submit();";
		echo "</script>";
	}else if($_SESSION['order']['order_trade_kind']==70){
		//全家超商代碼 PayCode
		$web="";
		$pwd="";
		$ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
		echo "<form method='post'  id='keyinorder6' name='keyinorder6' action='https://www.esafe.com.tw/Service/Etopm.aspx' >";
		echo "<input type='hidden' name='web' value='".$web."'>";  //store_id
		echo "<input type='hidden' name='MN' value='".$all_paid."'>";
		// echo "<input type='hidden' name='MN' value='10'>";
		echo "<input type='hidden' name='online' value='1'>";
		echo "<input type='hidden' name='OrderInfo' value='dz-enzyme'>";
		$ymd=date('Ymd',mktime(0,0,0,date('m'),date('d')+30,date('Y')));
		echo "<input type='hidden' name='DueDate' value='".$ymd."'>";
		echo "<input type='hidden' name='BillDate' value='".date('Ymd')."'>";
		echo "<input type='hidden' name='UserNo' value='".$_SESSION['mb']['mb_no']."'>";
		// echo "<input type='hidden' name='ChkValue' value='".$ChkValue."'>";
		echo "</form>";
		echo "<script type='text/javascript'>";
		echo "document.getElementById('keyinorder6').submit();";
		echo "</script>";
	}else if($_SESSION['order']['order_trade_kind']==40){
		//webATM
		$web="";
		$pwd="";
		$ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
		echo "<form method='post'  id='keyinorder6' name='keyinorder6' action='https://www.esafe.com.tw/ASP3/etopm.asp' >";
		echo "<input type='hidden' name='web' value='".$web."'>";  //store_id
		echo "<input type='hidden' name='MN' value='".$all_paid."'>";
		// echo "<input type='hidden' name='MN' value='10'>";
		echo "<input type='hidden' name='online' value='1'>";
		echo "<input type='hidden' name='OrderInfo' value='dz-enzyme'>";
		echo "<input type='hidden' name='sna' value=''>";
		echo "<input type='hidden' name='sdt' value=''>";
		echo "<input type='hidden' name='email' value=''>";
		echo "<input type='hidden' name='note1' value=''>";
		echo "<input type='hidden' name='note2' value=''>";
		echo "<input type='hidden' name='Td' value='".$new_ord_no."'>";
		echo "<input type='hidden' name='ChkValue' value='".$ChkValue."'>";
		echo "</form>";
		echo "<script type='text/javascript'>";
		echo "document.getElementById('keyinorder6').submit();";
		echo "</script>";
	}else if($_SESSION['order']['order_trade_kind']==60){
		//超商條碼代收 24Payment
		$web="";
		$pwd="";
		$ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
		echo "<input type='hidden' name='ChkValue' value='".$ChkValue."'>";
		echo "<script type='text/javascript'>";
		echo "window.open('https://www.esafe.com.tw/asp3/etopm_utf8.asp?online=1&web=".$web."&ChkValue=".$ChkValue; //store_id
		echo "&DueDate=".date('Ymd',mktime(0,0,0,date('m'),date('d')+30,date('Y')))."";
		$trade_nums=count($_SESSION['cart']);
		for($i=0;$i<$trade_nums;$i++){
			echo "&ProductName".($i+1)."=".$_SESSION['cart'][$i]['prod_name']."";
			echo "&ProductQuantity".($i+1)."=".$_SESSION['cart'][$i]['nums']."";
			if($_SESSION['mb']['isLogin']==0){
				echo "&ProductPrice".($i+1)."=".$_SESSION['cart'][$i]['normal_price'];
			}else{
				echo "&ProductPrice".($i+1)."=".$_SESSION['cart'][$i]['comp_price'];
			}
		}
		echo "&ProductName".($trade_nums+1)."=運費";
		echo "&ProductQuantity".($trade_nums+1)."=1";
		echo "&ProductPrice".($trade_nums+1)."=".$_SESSION['order']['trade_money'];
		echo "&UserNo=".$_SESSION['mb']['mb_no']."";
		echo "&BillDate=".date('Ymd')."";
		echo "&MN=".$all_paid."";
		echo "&sna=".$_SESSION['manifest']['mb_name']."";
		echo "&sdt=".$_SESSION['manifest']['TEL3']."";
		echo "&td=".$new_ord_no."&OrderInfo=繳費存根請您妥善保管，以便存查。";
		echo "&uI=".$_SESSION['mb']['boss_id']."";
		echo "&email=".trim($_SESSION['mb']['email'])."&note1=&note2=','payment');";
		echo "</script>";

		if((isset($_SESSION['tmp_mb']['boss_id']))&&(strlen(trim($_SESSION['tmp_mb']['boss_id']))>0)){
			//使用者自行入會
			if($_SESSION['mb']['isLogin']==0){
				$towh="./mbst/joinmb_3.php?mb_no=".$_SESSION['tmp_mb']['mb_no']."&ordno=".$new_ord_no.$le_msg;
			}else{
			//線上推薦入會
				$towh="./mbst/join_3.php?mb_no=".$_SESSION['tmp_mb']['mb_no']."&ordno=".$new_ord_no.$le_msg;
			}
			toUrl($towh);
			unset($_SESSION['tmp_mb']);
			unset($_SESSION['join_prod_num']);

		}else{
			unset($_SESSION['no_double']);
		// 	toAlert("訂單資料已新增","cart_trade_success.php?ordno=".$new_ord_no.$le_msg);
			toUrl("cart_trade_success.php?ordno=".$new_ord_no.$le_msg);
		}
	}else{
		$new_ord_no=$_SESSION['order']['order_no'];
		if($_SESSION['order']['order_trade_kind']==3){
			$le_msg="&paydata=1";	//要列匯款資訊的
		}else{
			$le_msg="";
		}
		if((isset($_SESSION['tmp_mb']['boss_id']))&&(strlen(trim($_SESSION['tmp_mb']['boss_id']))>0)){
			//使用者自行入會
			if($_SESSION['mb']['isLogin']==0){
				$towh="./mbst/joinmb_3.php?mb_no=".$_SESSION['tmp_mb']['mb_no']."&ordno=".$new_ord_no.$le_msg;
			}else{
			//線上推薦入會
				$towh="./mbst/join_3.php?mb_no=".$_SESSION['tmp_mb']['mb_no']."&ordno=".$new_ord_no.$le_msg;
			}
			toUrl($towh);
			unset($_SESSION['tmp_mb']);
			unset($_SESSION['join_prod_num']);

		}else{
			unset($_SESSION['no_double']);
		// 	toAlert("訂單資料已新增","cart_trade_success.php?ordno=".$new_ord_no.$le_msg);
			toUrl("cart_trade_success.php?ordno=".$new_ord_no.$le_msg);
		}
	}

?>
