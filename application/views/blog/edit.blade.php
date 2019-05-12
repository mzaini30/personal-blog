@extends('layout.default')
@section('isi')
	<form action="{{ base_url() }}index.php/blog/edit_do/{{ $data->id }}" method="post">
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" class="form-control" value="{{ $data->judul }}" name="judul" required="">
		</div>
		<div class="form-group">
			<label for="">Isi</label>
			<textarea name="isi" id="" cols="30" rows="10" class="form-control" required="">{{ $data->isi }}</textarea>
		</div>
		<div class="form-group">
			<label>
				<input type="checkbox" @if($data->dipublish_di_media == 'on') checked @endif name="dipublish_di_media">
				Tulisan ini sudah dipublikasikan di media
			</label>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-default" value="Perbarui">
		</div>
	</form>
@endsection