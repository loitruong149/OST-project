
       @extends('admin.index')
           @section('content')
               
                                     <h1>Posts</h1>
             <table class="table">
               <thead>
                 <tr>
                     <th>Id</th>
                     <th>Name_job</th>
                     <th>Admin</th>
                     <th>Jobtype</th>
                     <th>View Job</th>
                     <th>Edit</th>
                     <th>Delete</th>     
                </thead>
                <tbody>
        
                @if($posts)
    
                    @foreach($posts as $post)
    
                  <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->name}}</td>
                      <td>{{$post->user->name}}
                      <td>{{$post->jobtype? $post->jobtype->name : 'none ' }}</td>

                      <td><button type="button" class="btn btn-info "><a href="{{route('posts.show', $post->id)}}">View</a></button></td>
                      <td><button type="button" class="btn btn-secondary"><a href="{{route('posts.edit', $post->id)}}">Edit</a></button></td>
              
                      <td>{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}
            
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger float left']) !!}
                
                           {!! Form::close() !!}    </td>


                        
            </tr>
                    @endforeach
        
                    @endif
        
               </tbody>
              </table>
                </ul>

                @endsection