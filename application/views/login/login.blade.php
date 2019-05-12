<!DOCTYPE html>
<html>
<head>
	<title>Zen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ base_url() }}aset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ base_url() }}aset/app/login.css">
	<script type="text/javascript">
		console.log('muhammadzaini.com')
	</script>
</head>
<body>
	<div class="container">
		@if($pesan == 'error')
			<div class="alert alert-danger">Maaf, username dan password salah.</div>
		@endif
		<form action="{{ base_url() }}index.php/login/masuk_do" method="post">
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group">
				<input type="submit" value="Masuk" class="btn btn-default">
			</div>
		</form>
	</div>
	<br>
	<script type="text/javascript" src="{{ base_url() }}aset/app/app.js"></script>
</body>
</html>