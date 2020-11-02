@extends('admin.index')

@section('content')
    

    <h1>Users</h1>
    <table class="table">
       <thead>
         <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Role</th>
          </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)
           <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</a></td>
              <td>{{$user->email}}</td>
           </tr>

            @endforeach
          @endif
        
@endsection