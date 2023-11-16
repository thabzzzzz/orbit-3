<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orbit</title>
</head>
<body>
    <h1>Clients</h1>
    <div><a href="{{route('client.create')}}">Register new user</a></div>
    <div>
        <table border="1">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Location</th>
            <th>Display name</th>
            
            
        </tr>

        
            @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->uname}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->location}}</td>
            </tr>
            @endforeach
        
        </table>
        <hr>
        <br>
        <div><a href="{{route('client.createitem')}}">Create new item</a></div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->iname}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->itemimage}}</td>

                    <td>
                        <a href="{{route('item.edit',['item'=>$item])}}">Edit</a>
                    </td>

                    <td>
                       <form method="post" action="{{route('item.destroy',['item'=>$item])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                       </form>
                    </td>

                </tr>    
            @endforeach
           
        </table>

    </div>
</body>
</html>