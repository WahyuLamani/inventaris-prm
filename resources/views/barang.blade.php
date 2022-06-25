@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <x-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Nama barang</th>
                        <th>Cabang</th>
                        <th>harga</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Nomor seri</th>
                        <th>tahun</th>
                        <th>vendor</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($barang as $row)
                    <tr>
                        <td>{{$row->nama_barang}}</td>
                        <td>{{$row->cabang_id}}</td>
                        <td>{{$row->harga}}</td>
                        <td>{{$row->merk}}</td>
                        <td>{{$row->type}}</td>
                        <td>{{$row->nomor_seri}}</td>
                        <td>{{$row->tahun}}</td>
                        <td>{{$row->vendor}}</td>
                        <td>{{$row->created_at->format('d M, Y')}}</td>
                        <td><x-dropdown 
                            value="data1,data2,data3"
                            
                            /></td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-datatable>
        </div>
    </div>
</div>
@endsection
