@extends('layout.default')
@section('isi')
	@foreach($data as $data)
		<a href="{{ base_url() }}index.php/blog/detail/{{ $data->id }}" class="list-postingan">
			<div class="panel @if($data->dipublish_di_media == 'on') panel-success @else panel-default @endif">
				<div class="panel-heading">{{ $data->judul }}</div>
				<div class="panel-body">
					<div class="truncate">
						{{ $data->isi }}
					</div>
				</div>
			</div>
		</a>
	@endforeach
	{!! $halaman !!}
@endsection