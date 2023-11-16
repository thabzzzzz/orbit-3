<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orbit</title>
</head>
<body>
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
</body>
</html>