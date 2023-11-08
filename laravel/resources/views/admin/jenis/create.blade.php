@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h3 align="center">Form Input Jenis Produk</h3>
<br>
<form  method="$_POST" action="{{url('admin/jenis_produk/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="text" class="col-3 col-form-label">Nama Jenis Produk</label>
        <div class="col-6">
            <input id="text" name="nama" placeholder="Masukan jenis produk" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-3 col-6">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection