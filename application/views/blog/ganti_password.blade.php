@extends('layout.default')
@section('isi')
	<form action="{{ base_url() }}index.php/blog/ganti_password_do" method="post">
		<div class="form-group">
			<label for="">Password Baru</label>
			<input type="password" class="form-control" name="password" required="">
		</div>
		<input type="submit" class="btn btn-danger" value="Ganti">
	</form>
@endsection