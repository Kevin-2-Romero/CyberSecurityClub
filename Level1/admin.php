<?php
	$name =		$_GET['uname'];
	$passwd = 	$_GET['psw'];
	$admin = 	$_GET['isAdmin'];

	if($admin == 'True' or $passwd == 'J0n4th4nTheM4st3rH4ckXor') : ?>

<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css"
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<title>Fake Admin Page</title>
<meta name="description" content="Try to get past me!"
</head>

<body>

<div class="panel" style="border: 1px solid #ccc;">
<p style="color: #b3cde0;">Congratulations! You passed</p>
</div>

</body>

</html>

<?php else : ?>
	
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css"
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<title>Fake Admin Page</title>
<meta name="description" content="Try to get past me!"
</head>

<body>

<div class="panel" style="border: 1px solid #ccc;">
<p style="color: #b3cde0;">ACCESS DENIED! You need to be an admin to access this page.</p>
</div>

</body>

</html>
<?php endif; ?>
