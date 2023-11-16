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
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
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

  @endsection
