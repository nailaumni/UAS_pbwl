@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Tambah Data Mata Pelajaran </h2>
    <form action="{{ url('mapel') }}" method="post">
        @csrf 
        <div class="mb-2">
            <label class="mb-2" for="">Nama Guru</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="mapel_id_guru">
                @foreach ($rowsGuru as $GuruItem)
                    <option value="{{ $GuruItem->guru_id }}">{{ $GuruItem->guru_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label class="mb-2" for="">Kode Mata Pelajaran</label>
            <input type="text" name="mapel_kode" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Nama Pelajaran</label>
            <input type="text" name="mapel_nama" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div>
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection