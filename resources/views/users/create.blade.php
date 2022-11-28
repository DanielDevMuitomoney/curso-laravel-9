@extends('layouts.app')

@section('title','New User')

@section('content')

<h1>New User</h1>

@if($errors->any())
    <ul class="erros">
        @foreach ($errors->all() as $error)
            <li class="error">{{$error}}</li>
        @endforeach
    </ul>

@endif

<form action="{{route('users.store')}}" method="post">
@csrf
<input type="text" name="name" placeholder="name" value="{{old('name')}}">
<input type="text" name="email" placeholder="email" value="{{old('email')}}">
<input type="text" name="password" placeholder="passowrd">

<button type="submit">Enviar</button>

</form>


@endsection