@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Brand Phone</label>
		<div class="col-md-8">
			<input type="text" name="brand_phone" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Model Phone</label>
		<div class="col-md-8">
			<input type="text" name="model_phone" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">RAM & Storage</label>
		<div class="col-md-8">
			<input type="text" name="storage" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Harga</label>
		<div class="col-md-8">
			<input type="text" name="harga" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Branch</label>
		<div class="col-md-8">
			<input type="text" name="branch" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">User</label>
		<div class="col-md-8">
			<input type="text" name="user" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Gambar</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



