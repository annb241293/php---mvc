<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dang ky</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div style="color: red">
			<?php if(isset($_GET['msg'])): ?>
			<?php echo e($_GET['msg']); ?>

			<?php endif; ?>
		</div>
	<form action="<?php echo e(getUrl('dang-ky')); ?>" method="post" accept-charset="utf-8">
		Email: <input name="email" id="email" type="text" />
 
  Password:
  <input name="password" id="password" type="password" />
 
  <input type="submit" value="Submit" />
	</form>
	<hr>
	<a href="<?php echo e(getUrl('dang-nhap')); ?>" title="">Dang nhap</a>
</body>
</html><?php /**PATH E:\xampp\htdocs\php-training\lab\views/dangky.blade.php ENDPATH**/ ?>