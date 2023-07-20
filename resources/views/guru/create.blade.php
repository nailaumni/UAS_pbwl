@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Tambah Data Guru </h2>
    <form action="{{ url('guru') }}" method="post">
        @csrf 
        <div class="mb-2">
            <label for="" class="mb-2">Nip Guru</label>
            <input  type="number" name="guru_nip" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div class="mb-2">
            <label for="" class="mb-2">Nama Guru</label>
            <input type="text" name="guru_nama" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div class="mb-2">
            <label for="" class="mb-2">Jenis Kelamin</label>
            <input type="text" name="guru_jk" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div class="mb-3">
            <label for="" class="mb-2">Tamatan</label>
            <input type="text" name="guru_tamatan" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div>
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection