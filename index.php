
<?php 	
include	'connect.php';


if (isset($_POST['name'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
  $sql = "INSERT INTO category ('name', 'email', 'number','address') VALUES ($name, $email, $number,$address)";
 $them 	= mysqli_query($conn, $sql);
 echo $sql;
 var_dump($them);

}
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container main">
		<form action="" method="POST" role="form">
			<legend>Đăng Ký </legend>

			<div class="form-group">
				<label for="">Họ Và Tên:</label>
				<input type="text" class="form-control" name="name" placeholder="Vui Lòng Nhập">
			</div>
			<div class="form-group">
				<label for="">Email:</label>
				<input type="text" class="form-control" name="email" placeholder="Vui Lòng Nhập">
			</div>
			<div class="form-group">
				<label for="">Số Điện Thoại:</label>
				<input type="NUMBER" class="form-control" name="number" placeholder="Vui Lòng Nhập">
			</div>
			<?php  
                $cat = mysqli_query($conn, "SELECT * FROM nv4_vi_location_province")
			 ?>
			 	<div class="form-group">
			 		<label for="">Địa Chỉ:</label>
                <select name="address" >
                	<option value="">Thành Phố</option>
                	<?php foreach ($cat as $key) :?>
                	<option > <?php echo $key['title']?></option>
                <?php endforeach; ?>
                </select>

   
                <?php  $catt = mysqli_query($conn, "SELECT * FROM nv4_vi_location_district ")  ?>
                 <select name="address" >
                	<option value="">Quận, Huyện</option>
                	<?php foreach ($catt as $pro) :?>
                	<option > <?php echo  $pro['title']?></option>
                <?php endforeach; ?>
                </select>

                   <?php  $cats = mysqli_query($conn, "SELECT * FROM nv4_vi_location_ward ")  ?>
                 <select name="address" >
                	<option value="">Phường,Xã</option>
                	<?php foreach ($cats as $cats) :?>
                	<option > <?php echo  $cats['title']?></option>
                <?php endforeach; ?>
                </select>
                  </div>	
                    <div class="form-group">  
                    	 <button type="submit" class="btn btn-primary">Thực hiện</button>
                 </div>	

		</div>


	</form>


</div>
</body>
</html>
