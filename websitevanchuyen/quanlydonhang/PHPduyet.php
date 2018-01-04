
<?php

print_r($_GET);
$ma=$_GET["manv"];
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
 
print_r($sm);
print_r($id);

 ?>
 <?php

		if (isset($_POST["sm"])){
		
			$stmt=$pdh->prepare("UPDATE donhang set IDnvquanlydonhang=".$ma.",Xuly='8' ,IDnvchuyenhang= '$id'			                                where IDdonhang=".$madh);
			//$arr=array(":id"=>$_POST["id"]);
			$stmt->execute();
			$n = $stmt->rowCount();
	if($n>=1)
		{
				echo"duyệt thành công";
				}
			else
				echo"duyệt thất bại";
		}
	
	
?>