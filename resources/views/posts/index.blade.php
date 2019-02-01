@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

<h1>POSTS</h1>

<h1>Create POST</h1>
{{$errors->posts}}
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="posts" method="POST">
    @csrf
    {{$errors->posts->first('title')}}
    <input type="text" name="title"><br>
    {{$errors->posts->first('body')}}
    <textarea name="body" id="" cols="30" rows="10"></textarea><br>
    <button>Save</button>
</form>
@endsection

@section('content')
    <p>This is my body </p>   
@endsection


