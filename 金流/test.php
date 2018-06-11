<?php
$new_ord_no = "20180604173037";
$all_paid = '10000';
// $ChkValue=strtoupper(sha1($web.$pwd.$all_paid));
$ChkValue=MD5($new_ord_no.'42750898'.$all_paid.'4g54fm67fgvb1j2x8p54d3jq7ergve4c');

//刷卡程式  BuySafe
// echo "<form method='post' name='keyinorderm' action='./cart_trade_chk.php?buysafeord=1&errmsg2=' id='keyinorderm'>";
echo "<form method='post' name='keyinorderm' action='https://gomypay.asia/Shopping/creditpay_query.asp' id='keyinorderm' >";
echo "<input type='hidden' name='e_orderno' value='".$new_ord_no."'>";	//訂單編號
echo "<input type='hidden' name='e_url' value='http://localhost/test/test.php'>";	//回傳網址
echo "<input type='hidden' name='e_no' value='42750898'>";	//商店代號
echo "<input type='hidden' name='e_money' value='".$all_paid."'>";	//交易金額
echo "<input type='hidden' name='str_check' value='".$ChkValue."'>";	//驗證密碼

echo "<input type='submit'>";

if((isset($_POST['str_ok']))){
echo $_POST['str_ok'];
}


 ?>
