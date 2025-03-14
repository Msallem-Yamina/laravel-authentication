@extends('layouts.app')

@section('content')
    <div class="position-relative z-3 d-flex flex-column justify-content-center align-items-center min-vh-100 bg-light">
        <h1 class="p-4">Unauthorized Access</h1>
        <p>You do not have permission to access this page.</p>
        <a class="btn btn-primary mt-4" href="{{ url('/') }}">Go to Home</a>
    </div>
@section('content')

