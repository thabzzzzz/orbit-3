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


{{-- <form method="post" action="{{route('client.storeitem')}}" enctype="multipart/form-data">
    @csrf
    @method('post')

   

   

    <div>
        <label for="price">Price</label>
        <input type="text" placeholder="price" name="price">
    </div>


  

    <div>
        <label for="itemsite">itemsite</label>
        <input type="text" placeholder="itemsite" name="itemsite">
    </div>

    <div>
        <label for="description">description</label>
        <input type="text" placeholder="description" name="description">
    </div>

    <label for="avatar">Choose a profile picture:</label>

<input type="file" id="image" name="itemimage"  />

    <div>
        <input type="submit" value="upload">
    </div>
</form> --}}

<form class="w-px-500 p-3 p-md-3" action="{{ route('client.storeitem') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="iname">Name</label>
        <input type="text" placeholder="iname" name="iname">
    </div>

    <div>
        <label for="price">Price</label>
        <input type="text" placeholder="price" name="price">
    </div>


  

    <div>
        <label for="itemsite">itemsite</label>
        <input type="text" placeholder="itemsite" name="itemsite">
    </div>

    <div>
        <label for="description">description</label>
        <input type="text" placeholder="description" name="description">
    </div>
    <input type="file" name="image" ><br><br>
    <button type="submit" class="my-btn">Upload</button>
</form>





<br>


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
@include('mypages.my-footer')
  </div>
  @endsection
