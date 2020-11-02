
@extends('admin.index')

@section('content')
    

              <h1>Edit Post</h1>

              
           <div class="col-sm-3">

            <img src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="" class="img-responsive">
             
            </div>

              <div class="container">
                {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files'=>true]) !!}
        
                   <div class="form-group">
                         {!! Form::label('name', 'Name:') !!}
                         {!! Form::text('name', null, ['class'=>'form-control'])!!}
                   </div>
        
                    <div class="form-group">
                        {!! Form::label('jobtype_id', 'Jobtype:') !!}
                        {!! Form::select('jobtype_id', $jobtypes, null, ['class'=>'form-control'])!!}
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
                        {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-xs-6' ]) !!}
                     </div>
        
                     {!! Form::close() !!}


                     
                   <div class="form-group">
                   @include('includes.errors')
                 </div>
        
              </div>
              @endsection    
        

         