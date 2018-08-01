@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/login.css') }}">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('etudiant._form')
                    @include('etudiant._table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
