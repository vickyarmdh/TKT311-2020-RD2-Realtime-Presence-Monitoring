@extends('layouts.app')

@section('content')
<div class="container" style="background-color: rgb(119, 125, 131)">
    <style type="text/css">
        .warnaBombol{
            background-color: rgb(96, 101, 107);
            color: white;
            border:none;
            border-radius: 3;
            margin-bottom: 30px;
        }
        .warnaBombol2{
            background-color:rgb(96, 101, 107);
            color: white;
            border:none;
            border-radius: 3;
            margin-bottom: 30px;
            margin-left: 30px;
        }
    </style>
    <nav class="navbar-light bg-white shadow-sm">
        <div class="container" style="background-color: rgb(119, 125, 131)">
            <button class="btn warnaBombol">Scan wajah</button>
            <button class="btn warnaBombol2">Buat/Join Room</button>
        </div>
    <div class="row justify-content-center" style="background-color: rgb(119, 125, 131)">
        <div class="col-md-8">
            <div class="card" style="background-color:rgb(96, 101, 107)">
                <div class="card-header" style="text-align: center">{{ __('Selamat') }}</div>

                <div class="card-body" style="text-align: center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Kamu berhasil Login di Aplikasi Realtime Presence Monitoring!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: rgb(119, 125, 131)">
        <img src="">
    </div>
</div>
@endsection
