@extends('layout.default')
@section('isi')
	<form action="{{ base_url() }}index.php/blog/posting" method="post">
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" name="judul" required="">
		</div>
		<div class="form-group">
			<label for="">Isi</label>
			<textarea name="isi" id="" cols="30" rows="10" class="form-control" required=""></textarea>
		</div>
		<div class="form-group">
			<label>
				<input type="checkbox" name="dipublish_di_media">
				Tulisan ini sudah dipublikasikan di media
			</label>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" value="Posting">
		</div>
	</form>
@endsection