
<?php 
print_r($_GET);
$ten=$_GET["ten"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/trangchuaccount.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style/css.css" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>website vận chuyển</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="modul/modul/dangnhap1.php" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!-- InstanceBeginEditable name="content" -->
<div class="wrapper">
  <div class="header"><img src="images/banner.jpg" width="1333" height="120" /></div>
  <div class="menu">
    <ul >
      <li><a href="trangchuaccount.php?ten=<?php echo $ten?>">Trang Chủ</a></li>
      <li><a href="#">Quy Trình Giao Hàng</a></li>
      <li><a href="#">Liên Hệ</a></li>

      <li><?php 
	 if(!isset($_SESSION)) session_start();
	   echo  "Xin chào ".$ten;
	   ?>
       </li>
      <li><a href="modul/dangxuat.php">Đăng xuất</a></li>
      <li>&nbsp;</li>
      <li>&nbsp;</li>
      <li>&nbsp;</li>
      <li class="timkiem">
        
      </li>
    </ul>
  </div>
  <div class="content">
    <div class="left">
      <p style="text-align:center; background:#F00; color:#FFF; padding:10px; margin-top:1px">DANH SÁCH</p>
      <div class="danhsachmuc">
        <ul>
          	<ul>
                    <li><a href="#">ĐIỀU KHOẢN VÀ CHÍNH SÁCH</a></li>
                    <li><a href="#">THÔNG TIN ƯU ĐÃI VÀ KHUYẾN MÃI</a></li>
                </ul>
        </ul>
      </div>
      <!--K?T THÚC M?C DANH SÁCH-->
      <p style="text-align:center; background:#F00; color:#FFF; padding:10px; margin-top:1px">CHĂM SÓC KHÁCH HÀNG</p>
      <div class="danhsachmuc">
        <p style="text-align:center; color:#000; margin:10px; font-size:15px">TỔNG ĐÀI: 0123 4321 123</p>
        <p style="text-align:center; color:#000; margin:10px; font-size:15px">ĐỊA CHỈ LIÊN HỆ: 123F/321 LÊ LỢI TPHCM</p>
      </div>
      <!--KẾT THÚC MỤC DANH SÁCH-->
      <img src="images/icon2.png" width="279" height="231" /> <img src="images/icon3.png" width="281" height="208" /> </div>
    <div class="right">
    	<p style="text-align:center; background:#F00; color:#FFF; padding:10px; margin-top:1px">THÔNG TIN CẦN BIẾT</p>
            <p style="text-align:justify; font-size:150%; padding:10px">Hiện nay việc vận chuyển hàng hóa cũng là một nhu cầu không thể thiếu trong đời sống của chúng ta. Xã hội hiện nay càng nhộn nhịp bởi các dịch vụ mua bán và trao đổi hàng hóa, việc vận chuyển những món hàng khi chúng ta hoàn tất việc mua bán,trao đổi cũng không kém.</p>
          <p style="text-align:justify; font-size:150%; padding:10px">Hãy đến với chúng tôi nếu bạn không có đủ thời gian để vận chuyển. Với phương châm làm việc NHANH-GỌN-LẸ và luôn đặt UY TÍN lên hàng đầu thì các khách hàng hãy yên tâm những món hàng của các bạn từ giá trị cao đến giá trị thấp sẽ luôn được vận chuyển một cách tận tình nhất.</p>
            <img src="images/icon1.png" width="831" height="307" />
            <div class="thongtingiaca">
            	
            </div> 
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