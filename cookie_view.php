<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?

	$cart = $_COOKIE[cart];
	$cart2 = explode("^", $cart);

	$no=$_REQUEST[no];
?>
<html>
<head>
<title>Cookie</title>
</head>
<body>

저장된 cookie값은 <font color="blue"><?=$cart2?></font>입니다.
&nbsp;&nbsp
<a href="cookie.html">돌아가기</a>

</body>
</html>
