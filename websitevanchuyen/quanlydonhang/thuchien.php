<?php
print_r($_GET);
$manv=$_GET["manv"];
$madh=$_GET["madh"];

?>
<?php
	try{
	$pdh=new PDO("mysql:host=localhost;dbname=webchuyenhang","root","");
	$pdh->query("set name 'utf8'");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}
?>
<?php
	$stmt=$pdh->prepare("UPDATE donhang set Xuly='9' where IDdonhang='$madh'");
		
			$stmt->execute();
			$n = $stmt->rowCount();
	if($n>=1)
		{
				echo"Đã thực hiện";
				?>
                <br />
				 <a href='javascript:history.go(-3)'>Quay lại trang trước</a>
                 <?php
				}
			else
				echo"Thất bại";
		
	?>
            
