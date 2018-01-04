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
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}
 $sm=postIndex("sm");
 $id=postIndex("id");


print_r($id);

 ?>
<form action="duyet.php?manv=<?php echo $manv?> & madh=<?php echo $madh?>" method="post">
<table>
<tr><td>Nhân viên vận chuyển:</td><td><input  type="text" name="id" required /></td></tr>
</br>

 <tr><td><input type="submit" name="sm" value="thêm" /></td>

</tr>
</table>
</form>

 

 <?php

		if (isset($_POST["sm"])){
		
			$stmt=$pdh->prepare("UPDATE donhang set IDnvchuyenhang='$id',Xuly='8',IDnvquanlydonhang='$manv',Ngayduyetdon=CURRENT_TIME() where IDdonhang='$madh'");
		
			$stmt->execute();
			$n = $stmt->rowCount();
	if($n>=1)
		{
				echo"duyệt thành công";
				?>
                <br />
               <a href='javascript:history.go(-4)'>Quay lại trang trước</a>
                <?php
				}
			else
				echo"duyệt thất bại";
		}
	
		
?>