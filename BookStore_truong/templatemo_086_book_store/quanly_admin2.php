<?php 
session_start();
if(isset($_SESSION["taikhoan"]) && $_SESSION["admin"]==2)
{
	echo '<h1 style="color:red;">Chào - '. $_SESSION["taikhoan"]. '<a href="logout.php">Đăng xuất</a></h1>';
}
else
{
	header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Nhập ADMIN</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body >	
	<div id="templatemo_container">
		<br>
	<h1>TRANG QUẢN LÝ CỦA ADMIN QUẢN TRỊ KINH DOANH</h1>
		<div id="sidebar">		
			<ul id="main-nav">  				
				<li>
					<a href="xuly_donhang.php" class="nav-top-item">
						Xử Lý Đơn Hàng
					</a>
					<ul>
				
					</ul>
				</li>				
				<li>
					<a href="quanly_khachhang.php" class="nav-top-item">
						Quản Lý Khách Hàng
					</a>
					<ul>
					
					</ul>
				</li>
				<li>
					<a href="#" class="nav-top-item">
						Quản Lý Bình Luận
					</a>
					<ul>
					
					</ul>
				</li>				
			    
				
			</ul>			
		</div>	
		</div>		
</body>