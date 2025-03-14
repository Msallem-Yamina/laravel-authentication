@extends('layouts.app')

@section('content')
<section class="dashboard">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <p>{{ __('You are logged in as:') }} 
                <strong>{{ Auth::user()->name ?? 'Guest' }}</strong>
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger mt-2">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </div>                   
</section>
@endsection
