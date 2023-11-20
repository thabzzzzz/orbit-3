@extends('layouts.app')

@section('content')
    
<div class="container">
    <h1>Clients</h1>
    <div><a href="{{route('client.create')}}">Register new user</a></div>
    <div>
        <table class="table">
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
        <hr class="style-two">
       
        <div><a href="{{route('client.createitem')}}">Create new item</a> <span><strong>Total: {{$itemsprice}}</strong></span></div>
        <div class="row">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->iname}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->itemimage}}</td>
                    <td>{{$item->description}}</td>
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
                <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="uploads/{{$item->itemimage}}" class="card-img-top" alt="product image">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->iname}}</h5>
                      <p class="card-text">{{$item->description}}</p>
                      <a href="{{$item->itemsite}}" class="btn btn-primary" target="_blank">Site</a><span  class="card-price">R {{$item->price}}</span>
                      
                      <div>
                        <a href="{{route('item.edit',['item'=>$item])}}"><button>Edit</button></a> 
                        <span> <form method="post" action="{{route('item.destroy',['item'=>$item])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete">
                           </form></span>
                      </div>
                    </div>
                  </div>
                </div>

            @endforeach
           
        </table>
        </div>

    </div>
</div>
    @endsection