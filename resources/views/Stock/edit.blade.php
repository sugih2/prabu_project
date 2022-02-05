@extends("layouts.app")

@section("content")

<div class ="col-md-8 offset-md-2">
    <h3>Edit Pelanggan</h3>

    @if ($errors->any())
        <div class="allert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <form method="post" action="{{ route('stock.update', $stock->id) }}">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="no_stock">No-stock</label>
          <input type="text" class="form-control" name="no_stock" value="{{$stock->no_stock}}">
        </div>
        <div class="form-group">
          <label for="jenis">Jenis Kain</label>
          <input type="text" class="form-control" name="jenis" value="{{$stock->jenis}}">
        </div>
        <div class="form-group">
          <label for="motif">Motif Kain</label>
          <input type="text" class="form-control" name="motif" value="{{$stock->motif}}">
        </div>
        <div class="form-group">
            <label for="panjang">Panjang</label>
            <input type="text" class="form-control" name="panjang" value="{{$stock->panjang}}">
        </div>
        <div class="form-group">
            <label for="tgl_masuk">Tanggal Masuk</label>
            <input type="text" class="form-control" name="tgl_masuk" value="{{$stock->tgl_masuk}}">
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" class="form-control" name="status" value="{{$stock->status}}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
      </form>
    </div>
@stop