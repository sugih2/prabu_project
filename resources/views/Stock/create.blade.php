@extends('layouts/app')

@section('title','Stock Kain')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br>
<div class="col-md-8 offset-md-2">
    <center><h3>Tambah</h3></center>

    <form method="POST" action="{{route('stock.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="no_stock">No Stock</label>
            <input type="text" class="form-control" name="no_stock" required>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis Kain</label>
            <input type="text" class="form-control" name="jenis" required>
        </div>
        <div class="form-group">
            <label for="motif">Motif Kain</label> <br>
            <input type="text" class="form-control" name="motif" required>
        </div>
        <div class="form-group">
            <label for="panjang">Panjang</label>
            <input type="text" class="form-control" name="panjang" required>
        </div>
        <div class="form-group">
            <label for="tgl_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tgl_masuk" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" required>
        </div>

        <center><button type="submit" class="btn btn-primary">Simpan</button></center>
    </form>
</div>
    
@stop