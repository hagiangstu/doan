 <?php
print_r($_GET);
$User=$_GET["User"];
$ten=$_GET["ten"];

?>
 <?php 
	try{
	$pdh=new PDO("mysql:host=localhost;dbname=webchuyenhang","root","");
	$pdh->query("set name 'utf8'");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}
		
			
			$stmt=$pdh->prepare("Delete FROM account where Username='$User' ");
			$stmt->execute();
			$n = $stmt->rowCount();
	if($n>=1)
		{
				echo"xóa thành công";
				?>
                <br />
                <tr><td><a href='javascript:history.go(-1)'>Quay lại trang trước</a></td></tr>
                <?php
				
				}
			else
				echo"xóa thất bại";
		
	
		
?>