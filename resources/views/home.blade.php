@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kain</div>

                <div class="card-body">
                    <h1> Data Pegawai </h1>
                </div>
                <table border="1">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach($pegawai as $p)
                    <tr>
                        <td> {{ $p->pegawai_nama }} </td>
                        <td> {{ $p->pegawai_jabatan }} </td>
                        <td> {{ $p->pegawai_umur }} </td>
                        <td> {{ $p->pegawai_alamat }} </td>
                        <td>
                            <a href="/pegawai/edit/{{ $p->pegawai_id}}">Edit</a>
                            <a href="/pegawai/hapus/{{ $p->pegawai_id}}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
