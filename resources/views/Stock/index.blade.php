@extends('layouts/app')

@section('title','Stock Kain')
@section('content')
   <div class="container"> 
       <div class="row">
           <div class="col"-10>
               <h1 class="mt"-3>Stock Kain </h1> 
               <p>
                <a href="{{route('stock.create')}}" class="btn btn-success">Tambah </a>
                </p>
               <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Stock</th>
                            <th scope="col">jenis Kain</th>
                            <th scope="col">Motif Kain</th>
                            <th scope="col">Panjang</th>
                            <th scope="col">Barang Masuk</th>
                            <th scope="col">Status</th>
                            <th scope="col" colspan=2>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach ($stocks as $stock)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stock->no_stock }}</td>
                        <td>{{ $stock->jenis }}</td>
                        <td>{{ $stock->motif }}</td>
                        <td>{{ $stock->panjang}}</td>
                        <td>{{ $stock->tgl_masuk }}</td>
                        <td>{{ $stock->status }}</td>
                        <td>
                            <a href="{{route('stock.edit', $stock->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td><form action="{{ route('stock.destroy', $stock->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
                       

               </table>
            </div>
       </div>
   </div>
@endsection