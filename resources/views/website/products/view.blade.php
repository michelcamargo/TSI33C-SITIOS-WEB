@extends('layouts.default')

@section('view-content')

    <h2>Produto</h2>

    <form method="post">
        @csrf
        <input type="text" name="name" value="{{$product->name}}">
        <input type="text" name="genre" value="{{$product->genre}}">
        <input type="text" name="year" value="{{$product->year}}">
        <input type="text" name="director" value="{{$product->director}}">
        <button type="submit">Atualizar</button>
    </form>
@endsection
