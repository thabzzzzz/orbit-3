@extends('layouts.app')
@section('content')
    
    <div class="container">

   
    <h1>Create new user</h1>
    <form method="post" action="{{route('client.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="uname">Name</label>
            <input type="text" placeholder="name" name="uname">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" placeholder="email" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="text" placeholder="password" name="password">
        </div>

      

        <div>
            <label for="profilepicture">Profile picture</label>
            <input type="text" placeholder="Profile pic" name="profilepicture">
        </div>

        <div>
            <label for="location">Location</label>
            <input type="text" placeholder="location" name="location">
        </div>

        <div>
            <label for="displayname">Display name</label>
            <input type="text" placeholder="displayname" name="displayname">
        </div>

        <div>
            <input type="submit" value="upload" class="my-btn btn">
         <button></button>
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