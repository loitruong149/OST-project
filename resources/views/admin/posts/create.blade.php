@extends('admin.index')

@section('content')
    

                                <h1>Create Post</h1>

             <div class="container">
                 {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files'=>true]) !!}
        
                   <div class="form-group">
                         {!! Form::label('name', 'Name:') !!}
                         {!! Form::text('name', null, ['class'=>'form-control'])!!}
                   </div>
        
                    <div class="form-group">
                        {!! Form::label('jobtype_id', 'Jobtype:') !!}
                        {!! Form::select('jobtype_id',[''=>'Chon Nghanh Nghe'] + $jobtypes, null, ['class'=>'form-control'])!!}
                    </div>
        
                    <div class="form-group">
                        {!! Form::label('photo_id', 'Photo:') !!}
                        {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
                     </div>
        
        
                    <div class="form-group">
                        {!! Form::label('content', 'Content:') !!}
                        {!! Form::textarea('content', null, ['class'=>'form-control'])!!}
                    </div>
        
        
        
        
                     <div class="form-group">
                        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                     </div>
        
                        {!! Form::close() !!}

                   <div class="form-group">
                     @include('includes.errors')
                    </div>
        
   
                 @endsection