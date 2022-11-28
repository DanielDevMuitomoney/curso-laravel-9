@extends('layouts.app')

@section('title','Edit User')

@section('content')

<h1>Edit User {{$user->name}}</h1>

@if($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $error)
            <li class="error">{{$error}}</li>
        @endforeach
    </ul>

@endif

<form action="{{route('users.update', $user->id)}}" method="post">
@method('PUT')
@csrf
<input type="text" name="name" placeholder="name" value="{{$user->name}}">
<input type="text" name="email" placeholder="email" value="{{$user->email}}">
<input type="password" name="password" placeholder="passowrd" >

<button type="submit">Enviar</button>

</form>


@endsection