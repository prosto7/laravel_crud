@extends('layout')

@section('title', isset($user) ? 'Update '. $user->name : 'Create user')

@section('content')

<a type="button" class="btn btn-info mb-3" href="{{ route('users.index')}}">Back to users list</a>

<form method="POST" 
@if(isset($user)) action="{{ route('users.update', $user) }}"
@else 
action="{{ route('users.store')
}}"
@endif 

>
@csrf

@isset($user) 
@method('PUT')
@endisset
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" value="{{isset($user) ? $user->name : null }}">
  </div>
  </div>
  <div class="row mt-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="email" aria-label="email" name="email" value="{{isset($user) ? $user->email : null }}">
  </div>

</div>
<div class="row mt-4">
<div class="col">
<button type="submit" class="btn btn-success">Create</button>
</div>
  </div>

</form>

@endsection