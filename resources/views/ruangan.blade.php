@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-1">
        <div class="col-md-10">
            <h1>Daftar Cabang Pramita Lab</h1>
            <button class="btn btn-primary py-2 px-4 mb-2" data-bs-toggle="modal" data-bs-target="#tambah_ruangan" class="dropdown-item">Tambah</button>
            <x-modal id="tambah_ruangan" title="Tambah Ruangan" link="{{route('ruangan.create')}}">
                <x-slot name="body">
                    <form id="tambah_ruangan_submit" class="d-grid gap-2" action="{{route('ruangan.create')}}" method="POST">@csrf
                        <x-input type="text" class="form-control" name="kode"/>
                        <x-input type="text" class="form-control" name="nama"/>
                        <x-input type="text" class="form-control" name="kota"/>
                    </form>
                </x-slot>
            </x-modal>
            <x-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kota</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($ruangan as $row)
                    <tr>
                        <td>{{$row->kode_cabang}}</td>
                        <td>{{$row->nama_cabang}}</td>
                        <td>{{$row->lokasi_kota}}</td>
                    </tr>                    
                    @endforeach
                </x-slot>
            </x-datatable>
        </div>
    </div>
</div>

@endsection
