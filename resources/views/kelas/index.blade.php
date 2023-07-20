@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Data Kelas</h2>
<a href="{{ url('kelas/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID</th>
        <th>ID MAPEL</th>
        <th>NAMA</th>
        <th>JUMLAH</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->kelas_id }}</td>
        <td>{{ $row->kelas_id_mapel }}</td>
        <td>{{ $row->kelas_nama }}</td>
        <td>{{ $row->kelas_jumlah }}</td>
        <td><a href="{{ url('kelas/edit/' .$row->kelas_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('kelas/' .$row->kelas_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection