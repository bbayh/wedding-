
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Galeri</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> datagaleri
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
			<form action="{{route('datagaleri.update',$datagaleri->id)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$datagaleri->nama}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover" class="form-control" required="" value="{{$datagaleri->cover}}"></input>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection