<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	

<?
	include "../common.php";

	$no = $_REQUEST['no'];
	$page = $_REQUEST['page'];
	$query="select * from faq where no14 = $no;";   
	$result = mysqli_query($db,$query);
	if(!$result) exit("에러:$query");
	$row = mysqli_fetch_array($result);
?>

<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body style="margin:0">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<form name="form1" method="post" action="faq_update.php?no=<?=$no;?>&page=<?=$page;?>">

<table width="600" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
		<td width="100" height="20" bgcolor="#CCCCCC" align="center">
			<font color="#142712">글제목</font>
		</td>
		<td width="500" height="20"  bgcolor="#F2F2F2">
			&nbsp <input type="text" name="title" value="<?=$row['title14'];?>" size="60">
		</td>
	</tr>
	<tr> 
		<td width="100" height="20" bgcolor="#CCCCCC" align="center">
			<font color="#142712">글내용</font>
		</td>
		<td width="500" height="20" bgcolor="#F2F2F2">
			&nbsp <textarea name="contents" rows="7" cols="65"><?=$row['contents14'];?></textarea>
		</td>
	</tr>
</table>
<br>
<table width="600" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="submit" value="등 록 하 기"> &nbsp;&nbsp
			<input type="button" value="이 전 화 면" onClick="javascript:history.back();">
		</td>
	</tr>
</table>

</form>

</center>

</body>
</html>