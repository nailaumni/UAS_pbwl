@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Edit Data Guru </h2>
    <form action="{{ url('guru/' .$row->guru_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-2">
            <label for="" class="mb-2">Nip Guru</label>
            <input type="number" name="guru_nip" id="" class="form-control bg-body-secondary w-25" value="{{$row->guru_nip}}">
        </div>
        <div class="mb-2">
            <label for="" class="mb-2">Nama</label>
            <input type="text" name="guru_nama" id="" class="form-control bg-body-secondary w-50" value="{{$row->guru_nama}}">
        </div>
        <div class="mb-2">
            <label for="" class="mb-2">Jenis Kelamin</label>
            <input type="text" name="guru_jk" id="" class="form-control bg-body-secondary w-25" value="{{$row->guru_jk}}">
        </div>
        <div class="mb-3">
            <label for="" class="mb-2">Tamatan</label>
            <input type="text" name="guru_tamatan" id="" class="form-control bg-body-secondary w-50" value="{{$row->guru_tamatan}}">
        </div>
        <div>
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>
@endsection