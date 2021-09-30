<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính toán</title>
    <link rel="stylesheet" href="bai3.css">
</head>
<body>
<?php
   $pheptinh = $_REQUEST['radPT'];
   if(isset($_POST['sothunhat']))  
    $sothunhat=trim($_POST['sothunhat']); 
   else $sothunhat=0;

   if(isset($_POST['sothuhai']))  
    $sothuhai=trim($_POST['sothuhai']); 
   else $sothuhai=0;

        if (is_numeric($sothunhat) && is_numeric($sothuhai))
		{
			if(($_POST['radPT'])=='cộng'){
				$ketqua = $sothunhat+$sothuhai;
			}		
			else if(($_POST['radPT'])=='trừ'){	
				$ketqua = $sothunhat-$sothuhai;
			}
			else if(($_POST['radPT'])=='nhân'){
				$ketqua = $sothunhat*$sothuhai;
			}
			else if(($_POST['radPT'])=='chia'){
				if($sothuhai!=0){
					$ketqua = $sothunhat/$sothuhai;
				}
				else {
					$ketqua = 'Không thể chia hết cho 0';
				}		
			}				
		} 
        else {
            $sothunhat = 'Mời nhập số hợp lệ';
            $sothuhai = 'Mời nhập số hợp lệ';
            $ketqua='Mời nhập số hợp lệ';
        }
?>   
    <table>
        <thead>
            <th colspan="2" align="center"><h3>Phép Tính Hai Chữ Số</h3></th>
        </thead>
        <tr class="pt">
            <td>Phép tính đã chọn:<?php echo $pheptinh; ?></td>
        </tr>    
        <tr><td class="pheptinh">Số thứ nhất:</td>
            <td><input type="text" name="sothunhat" value="<?php echo $sothunhat?> "/></td>
        </tr> 
        <tr><td class="pheptinh">Số thứ hai:</td>
            <td><input type="text" name="sothunhat" value="<?php echo $sothuhai?> "/></td>
        </tr> 
        <tr><td class="pheptinh">Kết quả:</td>
            <td><input type="text" name="ketqua" value="<?php echo $ketqua?> "/></td>
        </tr> 
    </table>
    <a href="javascript:window.history.back(-1);">Tro ve trang truoc</a>
    <script src="" async defer></script>

 
</body>
</html>