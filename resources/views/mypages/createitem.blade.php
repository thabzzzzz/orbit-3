<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orbit</title>
  
</head>
<body>

  @extends('layouts.app')
  
  @section('content')
  
  <div class="container">
<h1>Create item</h1>
<form method="post" action="{{route('client.storeitem')}}">
    @csrf
    @method('post')

    <div>
        <label for="client">client</label>
        <input type="text" placeholder="client" name="client">
    </div>

    <div>
        <label for="iname">Name</label>
        <input type="text" placeholder="iname" name="iname">
    </div>

    <div>
        <label for="price">Price</label>
        <input type="text" placeholder="price" name="price">
    </div>

    <div>
        <label for="itemimage">Item image</label>
        <input type="text" placeholder="itemimage" name="itemimage">
    </div>

  

    <div>
        <label for="itemsite">itemsite</label>
        <input type="text" placeholder="itemsite" name="itemsite">
    </div>

    <div>
        <label for="description">description</label>
        <input type="text" placeholder="description" name="description">
    </div>

    

    <div>
        <input type="submit" value="upload">
    </div>
</form>
<br>
<p>teeeeeest</p>

<a href="/client"><p>Back to home</p></a>

@if(session()->has('message'))
<div class="alert alert-success">
    <br/>
    {{ session()->get('message') }}

@endif

@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
    @endforeach
</ul>
@endif
</div>
  </div>
  @endsection
