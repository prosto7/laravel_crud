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
    <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" value="{{ old('name', isset($user) ? $user->name : null )}}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  </div>
  <div class="row mt-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="email" aria-label="email" name="email" value="{{old('email', isset($user) ? $user->email : null )}}">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

</div>
<div class="row mt-4">
<div class="col">
<button type="submit" class="btn btn-success">Create</button>
</div>
  </div>

</form>

@endsection