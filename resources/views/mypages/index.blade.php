@extends('layouts.app')

@section('content')
    
<div class="container">
    <h1 class="content-heading">Your wishlist</h1>
    
    <div>
      
       
        <div> <span><strong>Balance: R{{$itemsprice}}</strong></span></div>
        <a href="{{route('client.createitem')}}">Create new item</a>
        <div class="row">
        
            @foreach($items as $item)
            
                <div class="col-4">
                <div class="card rounded-0 mx-auto" style="width: 18rem;">
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