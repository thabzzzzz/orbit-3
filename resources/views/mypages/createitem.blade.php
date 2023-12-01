

  @extends('layouts.app')
  
  @section('content')
  
  <div class="container">
<h1 class="create-item-text">create item</h1>




<form class="create-item-form shadow" action="{{ route('client.storeitem') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div>
        <label for="iname">Name:</label>
        <input type="text"  name="iname">
    </div>
<br>
    <div>
        <label for="price">Price:</label>
        <input type="text"  name="price">
    </div>


    <br>

    <div>
        <label for="itemsite">Website:</label>
        <input type="text"  name="itemsite">
    </div>
    <br>
    <div>
        <label for="description">Description:</label>
        <input type="text"  name="description">
    </div>
    <br>
    <input type="file" name="image" ><br><br>
    <button type="submit" class="my-btn upload-btn">Upload</button>
</form>





<br>


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
<script src="{{asset('js/script.js')}}">


    </script>
  </div>
  @endsection
