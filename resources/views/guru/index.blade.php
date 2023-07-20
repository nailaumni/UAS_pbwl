@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Data Guru </h2>
<a href="{{ url('guru/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered rounded">
    <tr class="text-center">
        <th>ID</th>
        <th>NIP</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>TAMATAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->guru_id }}</td>
        <td>{{ $row->guru_nip }}</td>
        <td>{{ $row->guru_nama }}</td>
        <td>{{ $row->guru_jk }}</td>
        <td>{{ $row->guru_tamatan }}</td>
        <td><a href="{{ url('guru/edit/' .$row->guru_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('guru/' .$row->guru_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection