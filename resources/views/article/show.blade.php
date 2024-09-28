@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <a href="articles/{{$article->id}}" data-method="delete" rel="nofollow">Удалить</a>
@endsection