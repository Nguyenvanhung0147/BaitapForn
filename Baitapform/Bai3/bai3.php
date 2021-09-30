<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính toán</title>
    <link rel="stylesheet" href="bai3.css">
</head>

<body>




	<form action="Xuly.php" name="myform" method="post">
	<table>
	<thead>
        <th colspan="2" align="center"><h3>Phép Tính Hai Chữ Số</h3></th>
    </thead>
	<tr class="pt"><td>Chọn Phép Tính</td>
    <td>
		<input type="radio" name="radPT" value="cộng"<?php if(isset($_POST['radPT'])&&$_POST['radPT']=='cộng') echo 'checked="checked"';?> checked/>Cộng
		<input type="radio" name="radPT" value="trừ" <?php if(isset($_POST['radPT'])&&$_POST['radPT']=='trừ') echo 'checked="checked"';?>/>Trừ
		<input type="radio" name="radPT" value="nhân" <?php if(isset($_POST['radPT'])&&$_POST['radPT']=='nhân') echo 'checked="checked"';?>/>Nhân
		<input type="radio" name="radPT" value="chia" <?php if(isset($_POST['radPT'])&&$_POST['radPT']=='chia') echo 'checked="checked"';?>/>Chia
	</td>
	</tr>
	<tr><td class="pheptinh">Số thứ nhất:</td>
     <td><input type="text" name="sothunhat" value="0 "/></td>
    </tr>
	<tr><td class="pheptinh">Số thứ hai:</td>
     <td><input type="text" name="sothuhai" value="0"/></td>
    </tr>
	<tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
	</table>	
</form>


</body>
</html>