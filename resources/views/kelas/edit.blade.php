@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Edit Data Kelas </h2>
    <form action="{{ url('kelas/' .$row->kelas_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-2">
            <label for="" class="mb-2">Nama Mata Pelajaran</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="kelas_id_mapel">
                @foreach ($getmapel as $MapelItem)
                    <option value="{{ $MapelItem->mapel_id }}">{{ $MapelItem->mapel_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label class="mb-2" for="">Nama Kelas</label>
            <input type="text" name="kelas_nama" id="" class="form-control bg-body-secondary w-50" value="{{$row->kelas_nama}}">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jumlah Siswa</label>
            <input type="number" name="kelas_jumlah" id="" class="form-control bg-body-secondary w-25" value="{{$row->kelas_jumlah}}">
        </div>
        <div>
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>
@endsection