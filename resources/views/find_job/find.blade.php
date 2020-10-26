@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="content">
                        <h1>Phân loại job</h1>
                    </div>
                    <div>
                        <ul>
                            <li><a href="{{ url('/find_job/list_job') }}">Loại 1</a></li>
                            <li><a href="{{ url('/find_job/list_job') }}">Loại 2</a></li>
                            <li><a href="{{ url('/find_job/list_job') }}">Loại 3</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
