<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>tinh dien tich HCN</title>
    <link rel="stylesheet" href="bai1.css">
</head>

<body>

<?php 
if(isset($_POST['chieudai']))  
    $chieudai=trim($_POST['chieudai']); 
else $chieudai=0;



if(isset($_POST['chieurong'])) 
    $chieurong=trim($_POST['chieurong']); 
else $chieurong=0;

if(isset($_POST['tinh']))
        if (is_numeric($chieudai) && is_numeric($chieurong))  

            $dientich=$chieudai * $chieurong;

        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dientich="";
            }
else $dientich=0;
?>


<form align='center' action="index.php" method="post" name="hinhchunhat">    
<table>
    <thead>
        <th colspan="2" align="center"><h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3></th>
    </thead>
    <tr><td>Chiều dài:</td>
     <td><input type="text" name="chieudai" value="<?php  echo $chieudai;?> "/></td>
    </tr>
    <tr><td>Chiều rộng:</td>
     <td><input type="text" name="chieurong" value="<?php  echo $chieurong;?> "/></td>
    </tr>
    <tr><td>Diện tích:</td>
     <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>

</body>
</html>