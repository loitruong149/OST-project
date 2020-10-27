@extends('layouts.app')

@section('content')
<div class="container" style="height: 650px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <div class="content">
                        <h1>Job Content</h1>
                    </div>
                    <div>
                        content
                    </div>
                    <div>
                        {{-- chua viet controller, tam thoi cho route la register --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">apply</button>
                        </form>
                    </div>
            
        </div>
    </div>
</div>
@endsection
