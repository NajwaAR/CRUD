@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>Brand Phone - {{ $data->brand_phone }}</h3>
	<h3>Model Phone - {{ $data->model_phone }}</h3>
	<h3>RAM & Storage - {{ $data->storage }}</h3>
	<h3>Harga - {{ $data->harga }}</h3>
	<h3>Branch - {{ $data->branch }}</h3>
	<h3>User - {{ $data->user }}</h3>
</div>
@endsection
