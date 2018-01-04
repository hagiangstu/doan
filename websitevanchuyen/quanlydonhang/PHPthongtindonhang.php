
<?php

print_r($_GET);
$ma=$_GET["ma"];
$id=$_GET["nv"];
$xl=$_GET["xl"];
?>

<?php 
	
	try{
	$pdh=new PDO("mysql:host=localhost;dbname=webchuyenhang","root","");
	$pdh->query("set name 'utf8'");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}
		
		
			$stmt=$pdh->prepare("Select * from donhang	JOIN hinhthucchuyen ON donhang.Hinhthucchuyen = 		      	   																		hinhthucchuyen.Maloai
																JOIN thanhtoan ON donhang.Thanhtoan = thanhtoan.Maloaitt
																JOIN loaihang ON donhang.Loaihang = loaihang.Maloaihang																
																		 where IDdonhang=".$ma);
			$stmt->execute();
			$r=$stmt->fetchAll();
					
?>

<table border="1">

<tr align="center">
	<td>ID đơn hàng</td>
    <td>Loại hàng</td>
    <td>Khối lượng</td>
    <td>Thu hộ</td>
    <td>Hình thức chuyển</td>
    <td>Mô tả</td>
    <td>Thanh toán</td>
    <td>Cước phí</td>
    <td colspan="2" >Cập nhật</td>
    
</tr>
 <tr></tr>
<?php foreach($r as $row1){
				
					$ID=$row1["IDdonhang"];
					$loaihang=$row1["Tenhang"];
					$khoiluong=$row1["Khoiluong"];
					$thuho=$row1["Thuho"];
					$hinhthucchuyen=$row1["Tenloai"];
					$mota=$row1["Mota"];
					$thanhtoan=$row1["Tenloaitt"];
					$cuocphi=$row1["Cuocphi"];
					if($xl==7){
					?>
					<tr><td><?php echo "$ID"?></td>
        			<td><?php echo "$loaihang"?></td>
        			<td><?php echo "$khoiluong"?>kg</td>
        			<td><?php echo "$thuho"?></td>
        			<td><?php echo "$hinhthucchuyen"?></td>
					<td><?php echo "$mota"?></td>
        			<td><?php echo "$thanhtoan"?></td>
                    <td><?php echo "$cuocphi"?></td>
                    
					<td><a href="xoa.php?madh=<?php echo $ID?>">Xóa</a></td>
                    <td><a href="duyet.php?manv=<?php echo $id?> & madh=<?php echo $ID?> "/a>Duyệt</td>
                    <td><a href='javascript:history.go(-2)'>Quay lại trang trước</a></td></tr>
                   <?php
				 }
				 else if($xl==8) 
				 {
					?>
							 <tr><td><?php echo "$ID"?></td>
        			<td><?php echo "$loaihang"?></td>
        			<td><?php echo "$khoiluong"?>kg</td>
        			<td><?php echo "$thuho"?></td>
        			<td><?php echo "$hinhthucchuyen"?></td>
					<td><?php echo "$mota"?></td>
        			<td><?php echo "$thanhtoan"?></td>
                    <td><?php echo "$cuocphi"?></td>
                    
				
                    <td><a href="xoa.php?madh=<?php echo $ID?>">Xóa</a></td>
                    <td><a href="thuchien.php?madh=<?php echo $ID?> & manv=<?php echo $id?>"/a>Thực hiện</td>
                    <td><a href='javascript:history.go(-2)'>Quay lại trang trước</a></td>
					<?php 
					}
					 else if($xl==9) 
				 {
					?>
							 <tr><td><?php echo "$ID"?></td>
        			<td><?php echo "$loaihang"?></td>
        			<td><?php echo "$khoiluong"?>kg</td>
        			<td><?php echo "$thuho"?></td>
        			<td><?php echo "$hinhthucchuyen"?></td>
					<td><?php echo "$mota"?></td>
        			<td><?php echo "$thanhtoan"?></td>
                    <td><?php echo "$cuocphi"?></td>
                    
				
                    <td><a href="xoa.php?madh=<?php echo $ID?>">Xóa</a></td>
                    <td><a href='javascript:history.go(-2)'>Quay lại trang trước</a></td>
					<?php 
					}
					}
				   ?>
                   
                    </table>
