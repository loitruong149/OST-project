@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="content">
                    <div class="links">
                        <a href="{{ url('/find_job/find') }}">Find Job</a>
                        <a href="{{ url('/find_engineer/find') }}">Find Engineer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
