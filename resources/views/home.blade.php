@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @Auth
                    <x-dashboard/>
                    @endauth
                    @guest
                    <x-guest/>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
