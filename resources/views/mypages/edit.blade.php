@extends('layouts.app')
@section('content')
    
    <div class="container">

    
    <h1 class="create-item-text">edit an item</h1>
    <form method="post" action="{{route('item.update', ['item'=>$item])}}" enctype="multipart/form-data" class="create-item-form shadow">
        @csrf
        @method('put')
      

        <div>
            <label for="iname">Name: </label>
            <input type="text" placeholder="name" name="iname" value="{{$item->iname}}">
        </div>
        <br>
        <div>
            <label for="price">Price: </label>
            <input type="text" placeholder="price" name="price" value="{{$item->price}}">
        </div>

     
        <br>
      

        <div>
            <label for="itemsite">Item site: </label>
            <input type="text" placeholder="itemsite" name="itemsite" value="{{$item->itemsite}}" >
        </div>
        <br>
        <div>
            <label for="description">Description: </label>
            <input type="text" placeholder="description" name="description" value="{{$item->description}}">
        </div>
        <br>
        <div>
        <input type="file" name="image">
        </div><br><br>
        <div>
            <button type="submit" class="my-btn upload-btn">Update</button>
        </div>
    </form>

    <a href="/client "  class="back-text"><i class="bi bi-arrow-left-circle-fill back-icon"></i></a>

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
    
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>

</div>
    @endsection