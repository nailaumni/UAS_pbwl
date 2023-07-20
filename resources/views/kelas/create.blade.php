@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Tambah Data Kelas </h2>
    <form action="{{ url('kelas') }}" method="post">
        @csrf 
        <div class="mb-2">
            <label class="mb-2" for="">Nama Mata Pelajaran</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="kelas_id_mapel">
                <option selected>Pilih Nama Mapel</option>
                @foreach ($rowsMapel as $MapelItem)
                    <option value="{{ $MapelItem->mapel_id }}">{{ $MapelItem->mapel_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label class="mb-2" for="">Nama Kelas</label>
            <input type="text" name="kelas_nama" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jumlah Siswa</label>
            <input type="number" name="kelas_jumlah" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div>
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection