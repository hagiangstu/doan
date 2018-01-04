
<?php
print_r($_GET);
$ten=$_GET["ten"]; 
$User=$_GET["User"];
?>

 <?php
 try{
	$pdh=new PDO("mysql:host=localhost;dbname=webchuyenhang","root","");
	$pdh->query("set name 'utf8'");
	}
	catch(Exception $e){
		echo $e->getMessage(); exit;
	}
		
			/*$stmt=$pdh->prepare(" SELECT * FROM  account where Username='$ten'");
			$stmt->execute();
			$r=$stmt->fetchAll();
			?>
			<?php 
				foreach($r as $row1){
					$Username=$row1["Username"];
					$Password=$row1["Password"];
					$Tenkh=$row1["Tenkh"];
					$Diachi=$row1["Diachi"];
					$Gioitinh=$row1["Gioitinh"];
					$Sdt=$row1["Sdt"];
					$Email=$row1["Email"];
					$Ngaysinh=$row1["Ngaysinh"];
					$Loaikh=$row1["Loaikh"];
					
                    
		
		}	*/
		//print_r($r);
	
			?>
            <?php
			function checkPass($string)
{
	if(strlen($string)>=8){
		if (preg_match("/^([AZ-az])([\w_\.!@#$%^&*()]+)*$/",$string)) 
		  return true;
		return false;
	}
	else return false;
}
            ?>
		<?php
        function postIndex($index, $value="")
        {
            if (!isset($_POST[$index]))	return $value;
            return trim($_POST[$index]);
        }
         $sm=postIndex("sm");
         $Password=md5(postIndex("Password"));
		 $Password1=md5(postIndex("Password1"));
         ?>
	
    
	<form action="doimatkhau.php?ten=<?php echo $ten?> & User=<?php echo $User?>" method="post" >
           
            <table align="center">
             <tr><td>Username:</td><td><input  type="text" value="<?php echo "$User"?>" name="Username"</td></tr>
           	<tr><td>Password  :</td><td><input type="password" name="Password" required></td></tr></br>
            <tr><td>Nhập lại Password  :</td><td><input type="password" name="Password1" required></td></tr></br>
            <hr />
             
            
            <tr><td><input type="submit" name="sm" value="Sửa"</td></tr>
            </table>
            <?php
           	$err= "";
if ($sm !="")
{
	
	if ($Password!= $Password1) 	{$err .="Mật khẩu và mật khẩu nhập lại không khớp. <br>";}
	/*if (checkPass($Password)==false) 
			{$err.="Mật khẩu phải có 8 ký tự, có ít nhất 1 ký tự số và 1 ký tự Hoa và 1 ký tự Thường <br>";}
	*/
}
	if($err != "")
	{
	echo $err;
	}
	else
			if(isset($_POST["sm"])){
			$stmt=$pdh->prepare(" UPDATE account set Password='$Password' where Username='$User'");
			$stmt->execute(); 
			
			$n=$stmt->rowCount();
			if($n>=1)
		{
				echo"cập nhật thành công";
				}
			else
				echo"cập nhật thất bại";
		
		
}
?>