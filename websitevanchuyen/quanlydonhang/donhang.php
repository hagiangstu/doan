<?php
	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION["nhanvien"]))
	{
		header('location:../modul/dangnhap1.php');
	}
	
	

?>

<?php 
print_r($_GET);
$ten=$_GET["ten"];
?>
<?php 
	

	try{
	$pdh=new PDO("mysql:host=localhost;dbname=webchuyenhang","root","");
	$pdh->query("set name 'utf8'");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}?><?php
    
			$stmt=$pdh->prepare("Select * from account  JOIN nhanvien ON nhanvien.Username = account.Username
 								" );
			$stmt->execute();
			$r=$stmt->fetchAll();
			 foreach($r as $row1){
				 $Username=$row1["Username"];
				 $IDnv=$row1["IDnv"];
				 $loai=$row1["Loaiaccount"];
				 }
 //  print_r($IDnv);
   ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/trangchuaccount.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style/css.css" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>website vận chuyển</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../modul/modul/dangnhap1.php" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!-- InstanceBeginEditable name="content" -->
<div class="wrapper">
  <div class="header"><img src="../images/banner.jpg" width="1333" height="120" /></div>
  <div class="menu">
    <ul >
      <li><a href="indexnhanvien.php?ten=<?php echo $ten?>">Trang Chủ</a></li>
      <li><a href="#">Quy Trình Giao Hàng</a></li>
      <li><a href="#">Liên Hệ</a></li>
      <li><a href="indexnhanvien.php?ten=<?php echo $ten?>"><?php echo  "Xin chào ".$ten?></a></li>
      <li><a href="../modul/dangxuat.php">Đăng xuất</a></li>
      <li>&nbsp;</li>
      <li>&nbsp;</li>
      <li>&nbsp;</li>
     
    </ul>
  </div>
  <div class="content">
    <div class="left">
      <p style="text-align:center; background:#F00; color:#FFF; padding:10px; margin-top:1px">DANH SÁCH</p>
      <div class="danhsachmuc">
        <ul>
          <li><a href="donhang.php?ten=<?php echo $ten?>&id=<?php echo $IDnv ?> ">Quản lý đơn hàng</a></li>
        </ul>
      </div>
      <!--K?T THÚC M?C DANH SÁCH-->
      <p style="text-align:center; background:#F00; color:#FFF; padding:10px; margin-top:1px">CHĂM SÓC KHÁCH HÀNG</p>
      <div class="danhsachmuc">
        <p style="text-align:center; color:#000; margin:10px; font-size:15px">TỔNG ĐÀI: 0123 4321 123</p>
        <p style="text-align:center; color:#000; margin:10px; font-size:15px">ĐỊA CHỈ LIÊN HỆ: 123F/321 LÊ LỢI TPHCM</p>
      </div>
      <!--KẾT THÚC MỤC DANH SÁCH-->
      <img src="../images/icon2.png" width="279" height="231" /> <img src="../images/icon3.png" width="281" height="208" /> </div>
    <div class="right">
     <fieldset>Quản lý đơn hàng</fieldset>
       <form action="donhang.php?ten=<?php echo $ten?>&id=<?php echo $IDnv ?> " method="post">
       <table align="center">
       <div>
        <tr> <td> chọn loại đơn hàng</td> 
       		<td><select name="loai">
            		<option  value="1">Tất cả</option>
                    <option value="2">Chưa duyệt</option>
                    <option  value="3">Đã duyệt</option>
                    <option 	 value="4">Đã thực hiện</option>
             </select>
             <input type="submit" name="timloai" value="Tìm" /></td>
       </tr>
</table>
<table>
<tr><td><?php include "PHPdonhang.php"?></td></tr>
</table>
</div>
</div>
</div>
<!-- InstanceEndEditable -->
<div class="clear"></div>
    <div class="footer" >
    
	   <p>Công ty cổ phần dịch vụ giao hàng ShipperShop</p>
	   <p>Giấy CNĐKDN Số 0311 907 295 do Sở KH và ĐT TP.HCM cấp ngày 02/08/2012, cấp đổi lần 3 ngày 09/06/2014</p>
		

    </div>
</div>
</body>
<!-- InstanceEnd --></html>