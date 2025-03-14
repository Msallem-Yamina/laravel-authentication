@extends('layouts.app')

@section('content')
<section class="dashboard p-4 min-vh-100 position-relative z-3 bg-light">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h6 class="py-2">Welcome to Admin Dashboard!</h6>
            <p>{{ __('You are logged in as:') }} 
                <strong>{{ Auth::user()->name ?? 'Admin' }}</strong>
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger mt-3">
                    {{ __('Logout') }}
                </button>
            </form>                  
</section>

@endsection
