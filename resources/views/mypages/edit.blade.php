@extends('layouts.app')
@section('content')
    
    <div class="container">

    
    <h1>Edit an item</h1>
    <form method="post" action="{{route('item.update', ['item'=>$item])}}" enctype="multipart/form-data">
        @csrf
        @method('put')
      

        <div>
            <label for="iname">Name</label>
            <input type="text" placeholder="name" name="iname" value="{{$item->iname}}">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" placeholder="price" name="price" value="{{$item->price}}">
        </div>

       {{--  <div>
            <label for="itemimage">Item image</label>
            <input type="text" placeholder="itemimage" name="itemimage" value="{{$item->itemimage}}">
        </div> --}}

      

        <div>
            <label for="itemsite">Item site</label>
            <input type="text" placeholder="itemsite" name="itemsite" value="{{$item->itemsite}}">
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" placeholder="description" name="description" value="{{$item->description}}">
        </div>
        <div>
        <input type="file" name="image">
        </div>
        <div>
            <input type="submit" value="Update">
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
</div>
    @endsection