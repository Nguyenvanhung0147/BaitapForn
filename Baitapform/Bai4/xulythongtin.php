<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Check Information</title>
        <link rel="stylesheet" href="bai4.css">
    </head>
    <body>

        <?php
            $sex = $_POST['radGT'];
            if(isset($_POST['name']))  
                $name=trim($_POST['name']); 
            else $name= 'Yêu cầu nhập Họ và tên !!!';
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $NATIONALITY = $_POST['NATIONALITY'];
            $web = $_POST['web'];
            $text = $_POST['text'];
        ?>
            <fieldset>
                <legend>Your information</legend>
                    Họ và tên:<?php echo $name?>
                    <br>
                    Địa Chỉ:<?php echo $address?>
                    <br>
                    SDT:<?php echo $phone?>
                    <br>
                    Giới tính:<?php echo $sex?>
                    <br>
                    Quốc Tịch:<?php echo $NATIONALITY?>
                    <br>
                    Các môn đã học:<?php echo $web?>
                    <br>
                    Ghi chú:<?php echo $text?>
            </fieldset>
    </body>
</html>