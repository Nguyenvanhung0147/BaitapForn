<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính hóa đơn tiền điện</title>
    <link rel="stylesheet" href="bai2.css">
</head>

<body>

<?php 
if(isset($_POST['chisocu']))  
    $chisocu=trim($_POST['chisocu']); 
else $chisocu=0;

$dongia = 2000;
$chuho = "XXX";

if(isset($_POST['chisomoi'])) 
    $chisomoi=trim($_POST['chisomoi']); 
else $chisomoi=0;

if(isset($_POST['tinh']))
        if (is_numeric($chisomoi) && is_numeric($chisocu))  
        {
            if($chisomoi>$chisocu)
            $thanhtoan=($chisomoi - $chisocu)*$dongia;
            else{
                echo "<font color='red'>Vui lòng nhập vào số hợp lệ! </font>"; 
                $thanhtoan="";
            }
        }
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $thanhtoan="";
            }
else $thanhtoan=0;
?>


<form align='center' action="bai2.php" method="post" name="Hoadontiendien">    
<table>
    <thead>
        <th colspan="2" align="center"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
    </thead>
    <tr><td>Tên chủ hộ:</td>
        <td><input type="text" name="chuho" value="<?php  echo $chuho;?> "/></td>
        
    </tr>
    <tr><td>Chỉ số cũ:</td>
     <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/></td>
     <td>(Kw)</td>
    </tr>
    <tr><td>Chỉ số mới:</td>
     <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/></td>
     <td>(Kw)</td>
    </tr>
    <tr><td>Đơn giá:</td>
     <td><input type="text" name="dongia" value="<?php  echo $dongia;?> "/></td>
     <td>(VND)</td>
    </tr>
    <tr><td>Số tiền thanh toán:</td>
     <td><input type="text" name="thanhtoan" disabled="disabled" value="<?php  echo $thanhtoan;?> "/></td>
     <td>(VND)</td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>

</body>
</html>
