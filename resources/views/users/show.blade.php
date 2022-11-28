@extends('layouts.app')

@section('title','Detalhes do usuário '.$user->id)

@section('content')
<h1>listagem do usuário : {{$user->name}}</h1>

<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->created_at}}</li>
    <li>{{$user->email}}</li>
</ul>
<form action="{{route('users.destroy',$user->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button></form>
@endsection