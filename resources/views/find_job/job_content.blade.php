@extends('layouts.app')

@section('content')
<div class="container" style="height: 650px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <div class="content">
                        <h1>Job Content</h1>
                    </div>
                    <div>
                        Easily generate Lorem Ipsum placeholder text in any number of characters, words sentences or paragraphs. Learn about the origins of the passage and its
                        Easily generate Lorem Ipsum placeholder text in any number of characters, words sentences or paragraphs. Learn about the origins of the passage and its
                        Easily generate Lorem Ipsum placeholder text in any number of characters, words sentences or paragraphs. Learn about the origins of the passage and its
                        Easily generate Lorem Ipsum placeholder text in any number of characters, words sentences or paragraphs. Learn about the origins of the passage and its
                    </div>
                    <div>
                        {{-- chua viet controller, tam thoi cho route la register --}}
                        <form method="POST" action="{{ route('apply') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">apply</button>
                        </form>
                    </div>
            
        </div>
    </div>
</div>
@endsection
