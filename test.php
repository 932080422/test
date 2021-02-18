<?php
namespace BB;
include_once ("goole/PHPGangsta/GoogleAuthenticator.php");
function getA(){
	return "a is not exit" ;
}
$ga = new PHPGangsta_GoogleAuthenticator();

// 创建新的"安全密匙SecretKey"
// 把本次的"安全密匙SecretKey" 入库,和账户关系绑定,客户端也是绑定这同一个"安全密匙SecretKey"
// 安全密匙SecretKey 可以和手机端绑定
$secret = $ga->createSecret();

echo "安全密匙SecretKey: " . $secret . "<br>";

$name = "123456";

//第一个参数是"标识",第二个参数为"安全密匙SecretKey" 生成二维码信息
$qrCodeUrl = $ga->getQRCodeGoogleUrl($name, $secret);

//Google Charts接口 生成的二维码图片,方便手机端扫描绑定安全密匙SecretKey
echo "Google Charts URL for the QR-Code: " . $qrCodeUrl . "<br>";
$oneCode = $ga->getCode($secret); //服务端计算"一次性验证码"
echo "服务端计算的验证码是:".$oneCode."<br>";
$a = rand(0);
?>
<img src="<?php echo $qrCodeUrl ?>">
<form method="get" action="/index.php">
	<div>
		<label>验证码:</label>
		<input name="code" value="" class=""/>
		<input type="hidden" name="secret" value="<?php echo $secret ?>">
	</div>
	<div>
		<button>提交</button>
	</div>
</form>
