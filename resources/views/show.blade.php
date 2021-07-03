@extends('layout')

@section('title', 'User '.$user->name)

@section('content')
<a type="button" class="btn btn-info mb-3" href="{{ route('users.index')}}">Back to users list</a>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> <strong> ID : </strong>{{$user->id}}</li>
    <li class="list-group-item"><strong>NAME :  </strong>{{$user->name}}</li>
    <li class="list-group-item"><strong>EMAIL : </strong>{{$user->email}}</li>
    <li class="list-group-item"><strong>CREATED : </strong>{{$user->created_at->format('d/m/y h:i:s')}}</li>
    <li class="list-group-item"><strong>UPDATED : </strong>{{$user->updated_at->format('d/m/y h:i:s')}}</li>
  </ul>
</div>
<a type="button" class="btn btn-warning mt-3" href="{{ route('users.edit', $user) }}">Edit</a>
@endsection