@extends('layout.default')
@section('isi')
	<div class="panel @if($data->dipublish_di_media == 'on') panel-success @else panel-default @endif">
		<div class="panel-heading">
			{{ $data->judul }}
		</div>
		<div class="panel-body bawah-mepet">
			<textarea class="markdown-input">
{{ $data->isi }}	
			</textarea>
			<div class="markdown-output"></div>
		</div>
		<div class="panel-footer">
			<small>{{ $data->waktu_posting_pertama }}<br>{{ $data->waktu_update }}</small>
		</div>
	</div>
@endsection
@section('skrip')
	<script type="text/javascript" src="{{ base_url() }}aset/vendor/marked/marked.min.js"></script>
	<script type="text/javascript">
		$('.markdown-output').html(marked($('.markdown-input').val()))
	</script>
@endsection
@section('sidebar')
	<div class="panel panel-danger">
		<div class="panel-heading">Menu Postingan</div>
		<div class="list-group">
			<a href="{{ base_url() }}index.php/blog/edit/{{ $data->id }}" class="list-group-item">Edit</a>
			<a href="{{ base_url() }}index.php/blog/hapus/{{ $data->id }}" class="list-group-item">Hapus</a>
		</div>
	</div>
@endsection