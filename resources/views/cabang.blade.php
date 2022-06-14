@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-1">
        <div class="col-md-10">
            <h1>Daftar Cabang Pramita Lab</h1>
            <button class="btn btn-primary py-2 px-4 mb-2" data-bs-toggle="modal" data-bs-target="#tambah_cabang" class="dropdown-item">Tambah</button>
            <x-modal id="tambah_cabang" title="Tambah Cabang" link="{{route('outlet.create')}}">
                <x-slot name="body">
                    <form id="tambah_cabang_submit" class="d-grid gap-2" action="{{route('outlet.create')}}" method="POST">@csrf
                        <div class="form-floating">
                            <input type="text" class="form-control" name="kode" id="kode" placeholder="~">
                            <label for="kode">Kode</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="~">
                            <label for="nama">Nama/Daerah</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="kota" id="kota" placeholder="~">
                            <label for="kota">Kota</label>
                        </div>
                    </form>
                </x-slot>
            </x-modal>
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($outlet as $row)
                            <tr>
                                <td>{{$row->kode_cabang}}</td>
                                <td>{{$row->nama_cabang}}</td>
                                <td>{{$row->lokasi_kota}}</td>
                            </tr>                    
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endsection
