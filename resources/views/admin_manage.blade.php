@extends('layouts.manage')
@section('nav')
<div class="container">
    <div class="row justify-content-md-right">
    <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        <form id="logout-form" style="display: none;" action="{{ route('logout') }}" method="POST">
            <button type="submit" class="btn btn-primary">
                @csrf
            </button>
        </form>
    </div>
    </div>
</div>
    
@endsection

@section('content')
    <div class="container" style="height: 650px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Trang quan tri amin</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
