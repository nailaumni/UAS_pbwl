@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Edit Data Mata Pelajaran </h2>
    <form action="{{ url('mapel/' .$row->mapel_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-2">
            <label class="mb-2" for="">Nama Guru</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="mapel_id_guru">
                @foreach ($getguru as $GuruItem)
                    <option value="{{ $GuruItem->guru_id }}">{{ $GuruItem->guru_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label class="mb-2" for="">Kode</label>
            <input type="text" name="mapel_kode" id="" class="form-control bg-body-secondary w-25" value="{{$row->mapel_kode}}">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Nama Pelajaran</label>
            <input type="text" name="mapel_nama" id="" class="form-control bg-body-secondary w-50" value="{{$row->mapel_nama}}">
        </div>
        <div>
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>
@endsection